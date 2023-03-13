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
            <h4 class="card-title">Task</h4>
            <div class="table-responsive">
            <table class="table table-striped">
            <a class="btn btn-primary task_edit" href='/admin/add_task'>+ Add</a>
                <thead>
                  <tr>
                    <th>Title</th>
                    <th>Type</th>
                    <th>Score</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($task as $tasks)
               
                  <tr>
                    <td>{{$tasks->title}}</td>

                    <td>{{$tasks->type}}</td>

                    <td>{{$tasks->score}}</td>

                    <td>@if ($tasks->status == 1) Enable @else Disable  @endif</td>

                    <td>
                        <div class="task-action-button">
                            <a href="/admin/edit_task/{{$tasks->id}}" class="btn btn-primary task_edit btn-sm">Edit<i class="remove mdi mdi-pencil m-0 ps-1"></i></a>
                            <a href="/admin/delete_task/{{$tasks->id}}" class="btn btn-warning task_delete btn-sm" >Delete<i class="remove mdi mdi-delete m-0 ps-1"></i></a>
                        </div>
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
  </div>
          @endsection