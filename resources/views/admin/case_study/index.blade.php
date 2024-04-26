@extends('admin.layouts.master')

@section('content')
<div class="page-content">
    <div class="container">

    <div class="clearfix"></div>
    <div class="content sm-gutter">
        <x-alert />
        <div class="pull-right">
            <a href="{{ route('case_study.create') }}" class="btn btn-success btn-cons" type="submit"><i class="icon-ok"></i>Create Case Study</a>
        </div>
    </div>

            <div class="grid-body no-border">
                <div class="row-fluid">
                    <div class="span12">
                      <div class="grid simple ">
                        <div class="grid-title">
                          <h4>All <span class="semi-bold">Case Studies</span></h4>

                        </div>
                        <div class="grid-body ">
                          <table class="table" id="example3">
                            <thead>
                              <tr>
                                <th>Images</th>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Description</th>
                                <th>Detailed Description</th>
                                <th>Active</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($case_studies as $case_study)
                                <tr class="gradeA">
                                    {{-- @if(isset($blog->images[0]))
                                    <td><img style="height: 50px; width: 50px" src="{{ asset('admin/assets/img/uploads/' . $blog->images[0]) }}" alt="Team Member Image"></td>
                                    @endif --}}
                                    <td>
                                        @if(isset($case_study->images) && count($case_study->images) > 0)
                                        @foreach($case_study->images as $image)
                                            <img style="height: 50px; width: 50px" src="{{ asset('admin/assets/img/uploads/' . $image) }}">
                                        @endforeach
                                        @else "No Image"
                                        @endif
                                    </td>

                                  <td>{{ $case_study->title }}</td>
                                  <td>{{ $case_study->slug }}</td>
                                  <td>{{ $case_study->description }}</td>
                                  <td>{{ $case_study->detail_description }}</td>
                                  <td>{{ $case_study->is_active == 1 ? 'Active' : 'Inactive' }}</td>
                                  <td class="center">
                                    <a href="{{ route('case_study.edit' , $case_study->id) }}" class="btn btn-primary">Edit</a>

                                    <form action="{{ route('case_study.destroy' , $case_study->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?')" >Delete</button>

                                    </form>


                                  </td>
                                </tr>

                                @endforeach
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>

      </div>
</div>
@endsection

