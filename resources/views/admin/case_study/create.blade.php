@extends('admin.layouts.master')

@section('content')
    <div class="page-content">
        <div class="container">
            <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            {{-- <div id="portlet-config" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>Widget Settings</h3>
      </div>
      <div class="modal-body"> Widget settings form goes here </div>
    </div> --}}
            <div class="clearfix"></div>
            <div class="content sm-gutter">

                <div class="page-title">
                    <h3>Create Case Study</h3>
                    <div class="pull-right">
                        <a href="{{ route('case_study.index') }}" class="btn btn-success" type="submit">Back</a>
                    </div>
                </div>
                <!-- BEGIN DASHBOARD TILES -->
                {{-- <div class="row">
        <div class="col-md-4 col-vlg-3 col-sm-6">
          <div class="tiles green m-b-10">
            <div class="tiles-body">
              <div class="controller">
                <a href="javascript:;" class="reload"></a>
                <a href="javascript:;" class="remove"></a>
              </div>
              <div class="tiles-title text-black">OVERALL SALES </div>
              <div class="widget-stats">
                <div class="wrapper transparent">
                  <span class="item-title">Overall Visits</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">0</span>
                </div>
              </div>
              <div class="widget-stats">
                <div class="wrapper transparent">
                  <span class="item-title">Today's</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">0</span>
                </div>
              </div>
              <div class="widget-stats ">
                <div class="wrapper last">
                  <span class="item-title">Monthly</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">0</span>
                </div>
              </div>
              <div class="progress transparent progress-small no-radius m-t-20" style="width:90%">
                <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="64.8%"></div>
              </div>
              <div class="description"> <span class="text-white mini-description ">4% higher <span class="blend">than last month</span></span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-vlg-3 col-sm-6">
          <div class="tiles blue m-b-10">
            <div class="tiles-body">
              <div class="controller">
                <a href="javascript:;" class="reload"></a>
                <a href="javascript:;" class="remove"></a>
              </div>
              <div class="tiles-title text-black">OVERALL VISITS </div>
              <div class="widget-stats">
                <div class="wrapper transparent">
                  <span class="item-title">Overall Visits</span> <span class="item-count animate-number semi-bold" data-value="15489" data- animation-duration="700">0</span>
                </div>
              </div>
              <div class="widget-stats">
                <div class="wrapper transparent">
                  <span class="item-title">Today's</span> <span class="item-count animate-number semi-bold" data-value="551" data-animation-duration="700">0</span>
                </div>
              </div>
              <div class="widget-stats ">
                <div class="wrapper last">
                  <span class="item-title">Monthly</span> <span class="item-count animate-number semi-bold" data-value="1450" data-animation-duration="700">0</span>
                </div>
              </div>
              <div class="progress transparent progress-small no-radius m-t-20" style="width:90%">
                <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="54%"></div>
              </div>
              <div class="description"> <span class="text-white mini-description ">4% higher <span class="blend">than last month</span></span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-vlg-3 col-sm-6">
          <div class="tiles purple m-b-10">
            <div class="tiles-body">
              <div class="controller">
                <a href="javascript:;" class="reload"></a>
                <a href="javascript:;" class="remove"></a>
              </div>
              <div class="tiles-title text-black">SERVER LOAD </div>
              <div class="widget-stats">
                <div class="wrapper transparent">
                  <span class="item-title">Overall Load</span> <span class="item-count animate-number semi-bold" data-value="5695" data-animation-duration="700">0</span>
                </div>
              </div>
              <div class="widget-stats">
                <div class="wrapper transparent">
                  <span class="item-title">Today's</span> <span class="item-count animate-number semi-bold" data-value="568" data-animation-duration="700">0</span>
                </div>
              </div>
              <div class="widget-stats ">
                <div class="wrapper last">
                  <span class="item-title">Monthly</span> <span class="item-count animate-number semi-bold" data-value="12459" data-animation-duration="700">0</span>
                </div>
              </div>
              <div class="progress transparent progress-small no-radius m-t-20" style="width:90%">
                <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="90%"></div>
              </div>
              <div class="description"> <span class="text-white mini-description ">4% higher <span class="blend">than last month</span></span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-vlg-3 visible-xlg visible-sm col-sm-6">
          <div class="tiles red m-b-10">
            <div class="tiles-body">
              <div class="controller">
                <a href="javascript:;" class="reload"></a>
                <a href="javascript:;" class="remove"></a>
              </div>
              <div class="tiles-title text-black">OVERALL SALES </div>
              <div class="widget-stats">
                <div class="wrapper transparent">
                  <span class="item-title">Overall Sales</span> <span class="item-count animate-number semi-bold" data-value="5669" data-animation-duration="700">0</span>
                </div>
              </div>
              <div class="widget-stats">
                <div class="wrapper transparent">
                  <span class="item-title">Today's</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">0</span>
                </div>
              </div>
              <div class="widget-stats ">
                <div class="wrapper last">
                  <span class="item-title">Monthly</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">0</span>
                </div>
              </div>
              <div class="progress transparent progress-small no-radius m-t-20" style="width:90%">
                <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="64.8%"></div>
              </div>
              <div class="description"> <span class="text-white mini-description ">4% higher <span class="blend">than last month</span></span>
              </div>
            </div>
          </div>
        </div>
      </div> --}}
            </div>

            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="grid simple form-grid">
                        <div class="grid-title">
                            <h4>Add <span class="semi-bold"> new case study</span></h4>

                        </div>
                        <div class="grid-body no-border">
                            <form action="{{ route('case_study.store') }}" method="POST" enctype="multipart/form-data"
                                autocomplete="off">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label">Title</label>
                                    <input class="form-control" id="form1Amount" name="title" type="text"
                                        placeholder="Please enter the title" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Image</label>
                                    <input class="form-control" id="form1Amount" name="images[]" type="file" multiple>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" name="description" id="description" cols="30" rows="6"
                                        placeholder="Please enter the description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Detail Description</label>
                                    <textarea class="form-control" name="detail_description" id="description" cols="30" rows="6"
                                        placeholder="Please enter the detail description">

                                        <h6 class="alt-font fw-500 text-dark-gray ls-minus-05px mb-15px">Success is the result of perfection and hard work</h6>
                                        <p class="mb-5">Lorem ipsum dolor sit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                                        <h6 class="alt-font fw-500 text-dark-gray ls-minus-05px mb-15px">It is better to fail in originality than to succeed in imitation</h6>
                                        <p>Lorem ipsum dolor sit sed do eiusmod tempor incididunt ut labore enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>

                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <div class="checkbox checkbox check-success 	">
                                        <input type="checkbox" name="is_active" value="1" id="chkTerms">
                                        <label for="chkTerms">Active </label>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="pull-right">
                                        <button class="btn btn-success btn-cons" type="submit"><i class="icon-ok"></i>
                                            Save</button>
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