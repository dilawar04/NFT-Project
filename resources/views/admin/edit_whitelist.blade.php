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
    <?php

        // echo "<pre>";
        // print_r($users);
        // echo "</pre>";
        // exit;    
         ?> 
               
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Edit whitelist</h4>
            <div class="table-responsive">
              <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="">
                @csrf
                <div class="col-md-8 d-flex">
                  <div class="form-group w-50">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{$users->name}}">
                  </div>

                  <div class="form-group w-50 px-2">
                    <label for="exampleInputEmail1">E-mail</label>
                    <input type="text" id="email" name="email" class="form-control" value="{{$users->email}}">
                  </div>
                </div>

                <div class="col-md-8 d-flex">
                  <div class="form-group w-50 ">
                    <label for="exampleInputEmail1">Account Title</label>
                    <input type="text" id="account_title" name="account_title" class="form-control" value="{{$users->account_title}}">
                  </div>

                  <div class="form-group w-50 px-2">
                    <label for="exampleInputEmail1">Account Address</label>
                    <input type="text" id="account_address" name="account_address" class="form-control" value="{{$users->account_address}}" >
                  </div>
                </div>

                <div class="col-md-8 d-flex">
                  <div class="form-group w-50">
                    <label for="exampleInputEmail1">Task Id</label>
                    <input type="text" id="task_id" name="task_id" class="form-control" value="{{$users->task_id}}" >
                  </div>

                  <div class="form-group w-50 px-2">
                    <label for="exampleInputEmail1">Status</label>
                    <select class="form-control" name="status">
                        <option value="0" {{ $users->status == 0 ? 'selected' : '' }}>Disable</option>
                        <option value="1" {{ $users->status == 1 ? 'selected' : '' }}>Enable</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-8 d-flex">
                  <div class="form-group w-50">
                    <label for="exampleInputEmail1">Account Type</label>
                    <input type="text" id="name" name="account_type" class="form-control" value="{{$users->account_type}}">
                  </div>

                  <div class="form-group w-50 px-2">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" id="title" name="title" class="form-control" value="{{$users->title}}">
                  </div>
                </div>

                <div class="col-md-8 d-flex">
                  <div class="form-group w-50">
                    <label for="exampleInputEmail1">Score</label>
                    <input type="number" id="score" name="score" class="form-control" value="{{$users->score}}">
                  </div>

                  <div class="form-group w-50 px-2">
                   <label for="exampleInputEmail1">White List Users</label>
                    <select class="form-control" name="is_whitelisted" >
                        <option value="0" {{ $users->is_whitelisted == 0 ? 'selected' : '' }}>Disable</option>
                        <option value="1" {{ $users->is_whitelisted == 1 ? 'selected' : '' }}>Enable</option>
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