@extends('admin.layouts.master')

@section('content')
<div class="page-content">
    <div class="container">

    <div class="clearfix"></div>
    <div class="content sm-gutter">

      <div class="page-title">
        <h3>Edit Case Study</h3>
        <div class="pull-right">
          <a href="{{ route('case_study.index') }}" class="btn btn-success" type="submit">Back</a>
        </div>
      </div>
    </div>

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="grid simple form-grid">
            <div class="grid-title">
                <h4>Edit <span class="semi-bold"> case study</span></h4>

            </div>
            <div class="grid-body no-border">
              <form action="{{ route('case_study.update' , $case_study->id) }}" method="POST" enctype="multipart/form-data"  autocomplete="off">
                @csrf
                @method('PUT')
                <div class="form-group">
                  <label class="form-label">Title</label>
                  <input class="form-control" id="form1Amount" name="title" type="text" value="{{ $case_study->title }}">
                </div>
                <div class="form-group">
                    <label class="form-label">Image</label>
                    <input class="form-control" id="form1Amount" name="images[]" type="file" multiple>

                    @foreach($case_study->images as $imageName)
                    <div>{{ $imageName }}</div>
                    @endforeach
                </div>
                <div class="form-group">
                  <label class="form-label">Description</label>
                  <textarea class="form-control" name="description" id="description" cols="30" rows="6">{{ $case_study->description }}</textarea>
                </div>

                <div class="form-group">
                    <label class="form-label">Detail Description</label>
                    <textarea class="form-control" name="detail_description" id="description" cols="30" rows="6">{{ $case_study->detail_description }}</textarea>
                  </div>
                <div class="form-group">
                    <div class="checkbox checkbox check-success 	">
                        <input type="checkbox" name="is_active" value="1" {{ $case_study->is_active == 1 ? 'checked' : '' }} id="chkTerms">
                        <label for="chkTerms">Active </label>
                      </div>
                </div>
                <div class="form-actions">
                  <div class="pull-right">
                    <button class="btn btn-success btn-cons" type="submit"><i class="icon-ok"></i>Update</button>
                    <button class="btn btn-white btn-cons" type="button">Cancel</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>
</div>
@endsection

