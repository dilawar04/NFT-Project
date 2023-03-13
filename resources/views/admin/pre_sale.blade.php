@extends('layout/master_index')
@section('main-content')
<div class="main-panel">
  <div class="content-wrapper">
   
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Pre Sale</h4>
            <div class="table-responsive">
            <table class="table table-striped">
            <a class="btn btn-primary task_edit" href='/admin/add-pre-sale'>+ Add</a>
                <thead>
                  <tr>
                    <th>Price</th>
                    <th>Max Number Allow</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>remaing</th>
                    <th>End in</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($pre_sale as $pre_sales)
                <?php 
                // echo "<pre>";
                // print_r($pre_sales);
                // echo "</pre>";
                // exit;
               ?>
                  <tr>
                    <td>{{$pre_sales->price}}</td>

                    <td>{{$pre_sales->max_number_allow}}</td>

                    <td>{{$pre_sales->total}}</td>

                    <td>@if ($pre_sales->status == 1) Enable @else Disable  @endif</td>

                    <td>{{$pre_sales->remaing}}</td>

                    <td>{{$pre_sales->ends_in}}</td>

                    <td>
                        <div class="task-action-button">
                            <a href="/admin/edit_pre_sale/{{$pre_sales->id}}" class="btn btn-primary task_edit btn-sm">Edit<i class="remove mdi mdi-pencil m-0 ps-1"></i></a>
                            <a href="/admin/delete_sale/{{$pre_sales->id}}" class="btn btn-warning task_delete btn-sm" >Delete<i class="remove mdi mdi-delete m-0 ps-1"></i></a>
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