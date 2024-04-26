<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Admin\Blog;
use App\Models\Admin\CaseStudy;
use App\Models\Admin\Team;
use App\Models\Project;
use App\Models\Service;
use App\Models\servicedetail;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function redirect(){

        $user = Auth::user();

        if($user && $user->type == 'admin'){
            return redirect('/admins');
        }
         else {
        return redirect('/');
        }
    }
    public function index(){
        return view('index');
    }
    // public function index()
    // {
    //     $projects = Project::where('is_active' , 1)->get();
    //     $teams = Team::where('is_active', 1)->get();
    //     $testimonials = Testimonial::where('is_active' , 1)->get();
    //     $latestServices = servicedetail::where('is_active', 1)
    //     ->latest()
    //     ->take(4)
    //     ->get();
    //     $recentPosts = Blog::latest()->where('is_active' , 1)->take(4)->get();
    //     return view('index', compact('teams', 'testimonials' , 'recentPosts' , 'latestServices' , 'projects'));
    // }

    public function blog(Request $request){

        // $search = $request->input('search');

        // $searches = Blog::where('title', 'like', '%' . $search . '%')->where('is_active' , 1)->paginate(5);
        $blogs = Blog::where('is_active' , 1)->paginate(12);
        // $recentPosts = Blog::latest()->where('is_active' , 1)->take(4)->get();
        return view('frontend.pages.blog', compact('blogs'));
    }

    public function blog_detail(string $slug){
        $blog = Blog::where('slug' , $slug)->first();
        $recentPosts = Blog::where('slug', '!=', $blog->slug)
        ->latest()
        ->where('is_active' , 1)
        ->take(4)
        ->get();
        return view('frontend.pages.blogdetail' , compact('blog' , 'recentPosts'));
    }

    // public function aboutus(){
    //     $testimonials = Testimonial::where('is_active' , 1)->get();
    //     return view('digitox.about-us' , compact('testimonials'));
    // }

    public function casestudy(){
        $casestudies = CaseStudy::where('is_active' , 1)->paginate(12);

        return view('frontend.pages.casestudy' , compact('casestudies'));
    }

    public function casestudy_detail($slug){
        $casestudy = CaseStudy::where('slug' , $slug)->first();
        $recentCasestudies = CaseStudy::where('slug', '!=', $casestudy->slug)
        ->latest()
        ->where('is_active' , 1)
        ->take(4)
        ->get();
        return view('frontend.pages.casestudy-detail' , compact( 'casestudy', 'recentCasestudies'));
    }


    public function contact_us(){
        return view('frontend.pages.contact');
    }

    public function contact_us_mail_send(Request $request){

        try {
            Mail::to('abehaburhan600@gmail.com')->send(new ContactMail($request));
            return redirect()->back()->with('success', 'Your email sent successfully, we will contact you shortly');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'An error occurred while sending the email.');
        }


    }


}
