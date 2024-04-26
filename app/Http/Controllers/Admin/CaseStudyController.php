<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\CaseStudy;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CaseStudyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $case_studies = CaseStudy::all();
        return view('admin.case_study.index' , compact('case_studies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.case_study.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $images = [];

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $imageName = time() . '_' . $image->getClientOriginalName();
                    $image->move('admin/assets/img/uploads', $imageName); // Store in the public disk under the 'admin/assets/img/uploads' directory

                    // $images[] = 'admin/assets/img/uploads/' . $imageName;
                    $images[] = $imageName;
                }
            }
            // dd($request->file('images'));

            $case_study = CaseStudy::create([
                'title' => $request->title,
                'slug' => Str::slug($request->title, '-'),
                'description' => $request->description,
                'detail_description' => $request->detail_description,
                'images' => $images,
                'is_active' => boolval($request->input('is_active')),
            ]);

            Session::flash('success', 'Data created successful.');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            Session::flash('error', 'An error occurred.');
        }


        // dd($images);

        return redirect()->route('case_study.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $case_study = CaseStudy::where('id' , $id)->first();
       return view('admin.case_study.edit' , compact('case_study'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $case_study = CaseStudy::where('id' , $id)->first();

            $images = [];

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $imageName = time() . '_' . $image->getClientOriginalName();
                    $image->move('admin/assets/img/uploads', $imageName); // Store in the public disk under the 'admin/assets/img/uploads' directory

                    // $images[] = 'admin/assets/img/uploads/' . $imageName;
                    $images[] = $imageName;
                }
                $case_study->images = $images;
            } else {
                // If no new images are uploaded, retain the previous images
                $images = $case_study->images;
                $case_study->images = $images;
            }

               $case_study->title = $request->title;
               $case_study->slug = Str::slug($request->title , '-');
               $case_study->description = $request->description;
               $case_study->detail_description = $request->input('detail_description');
            //    $case_study->images = $images;
               $case_study->is_active = $request->has('is_active') ? 1 : 0;

               $case_study->save();
            Session::flash('success', 'Data updated successfully.');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            Session::flash('error', 'An error occurred.');
        }


           return redirect()->route('case_study.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $case_study = CaseStudy::where('id' , $id)->first();
            $case_study->delete();
            Session::flash('success', 'Record deleted successfully.');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            Session::flash('error', 'An error occurred while creating the record.');
        }
       return redirect()->back();
    }
}
