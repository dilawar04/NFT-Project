@extends('layout/master_index')
@section('main-content')
<div class="main-panel">
  <div class="content-wrapper">
    <!-- <div class="page-header">
      <h3 class="page-title"> Buttons </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
          <li class="breadcrumb-item active" aria-current="page">Buttons</li>
        </ol>
      </nav>
    </div> -->
  
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Edit Task</h4>
            <div class="table-responsive">
              <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="">
                @csrf
                <div class="col-md-8 d-flex">
                <div class="form-group w-50">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" id="title" name="title" class="form-control" value="{{$edit_task->title}}" required="required">
                  </div>
                  <div class="form-group w-50 px-2">
                    <label for="exampleInputEmail1">Type</label>
                    <input type="text" id="type" name="type" class="form-control" required="required" value="{{$edit_task->type}}">
                  </div>
                </div>
                <div class="col-md-8 d-flex">
                  <div class="form-group w-50 ">
                    <label for="exampleInputEmail1">Score</label>
                    <input type="number" id="score" name="score" class="form-control" required="required" value="{{$edit_task->score}}">
                  </div>
                  <div class="form-group w-50 px-2">
                    <label for="exampleInputEmail1">Status</label>
                    <select class="form-control" name="status" required="required">
                        <option value="0" {{ $edit_task->status == 0 ? 'selected' : '' }}>Disable</option>
                        <option value="1" {{ $edit_task->status == 1 ? 'selected' : '' }}>Enable</option>
                    </select>
                  </div>
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      </div>
      
    </div>
  </div>
          @endsection