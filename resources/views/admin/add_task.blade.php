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
            <h4 class="card-title">Add Task</h4>
            <div class="table-responsive">
            <table>
            <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('/admin/add_task')}}">
       @csrf
       <div class="col-8 d-flex  ">
       <div class="form-group w-50 px-2">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" id="title" name="title" class="form-control" required="">
        </div>
        <div class="form-group w-50 px-2">
          <label for="exampleInputEmail1">Type</label>
          <input type="text" id="type" name="type" class="form-control" required="">
        </div>
       </div>
       <div class="col-8 d-flex ">
       <div class="form-group w-50 px-2">
          <label for="exampleInputEmail1">Score</label>
          <input type="number" id="score" name="score" class="form-control" required="">
        </div>
        <div class="form-group w-50 px-2">
          <label for="exampleInputEmail1">Status</label>
          <select class="form-control" name="status" required="">
         <option value="0">Disable</option>
         <option value="1">Enable</option>
         </select>
        </div>
       </div>
       
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
              </table>
            </div>
          </div>
        </div>
      </div>
      </div>
      
    </div>
  </div>
          @endsection