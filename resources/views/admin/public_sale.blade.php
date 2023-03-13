@extends('layout/master_index')
@section('main-content')
<div class="main-panel">
  <div class="content-wrapper">
   
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Public Sale</h4>
            <div class="table-responsive">
            <table class="table table-striped">
            <a class="btn btn-primary task_edit" href='/admin/add-public-sale'>+ Add</a>
                <thead>
                  <tr>
                    <th>Price</th>
                    <th>Max Number Allow</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>remaing</th>
                    <th>white List</th>
                    <th>End in</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($pub_sale as $pub_sales)
                <?php 
                // echo "<pre>";
                // print_r($pub_sales);
                // echo "</pre>";
                // exit;
               ?>
                  <tr>
                    <td>{{$pub_sales->price}}</td>

                    <td>{{$pub_sales->max_number_allow}}</td>

                    <td>{{$pub_sales->total}}</td>

                    <td>@if ($pub_sales->status == 1) Enable @else Disable  @endif</td>

                    <td>{{$pub_sales->remaing}}</td>

                    <td>
                    <select class="form-control selectbox1" name="allow_whitelist" id="selectbox1" data-id="<?=$pub_sales->id?>">
                        <option value="0" {{ $pub_sales->allow_whitelist == 0 ? 'selected' : '' }}>Disable</option>
                        <option value="1" {{ $pub_sales->allow_whitelist == 1 ? 'selected' : '' }}>Enable</option>
                    </select>
                    </td>

                    <td>{{$pub_sales->ends_in}}</td>

                    <td>
                        <div class="task-action-button">
                            <a href="/admin/edit_public_sale/{{$pub_sales->id}}" class="btn btn-primary task_edit btn-sm">Edit<i class="remove mdi mdi-pencil m-0 ps-1"></i></a>
                            <a href="/admin/delete_public_sale/{{$pub_sales->id}}" class="btn btn-warning task_delete btn-sm" >Delete<i class="remove mdi mdi-delete m-0 ps-1"></i></a>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
      <script>
        jQuery('.selectbox1').change(function() {
          console.log("hello");
          var id=jQuery(this).data('id');
          var data = "";
         jQuery.ajax({
        type:"GET",
        url : "/admin/public-sale/"+id,
        data : "selectbox1_selectedvalue="+jQuery(this).val(),
        async: false,
        success : function(response) {
            data = response;
            return response;
        },
        error: function() {
            alert('Error occured');
        }
    });
});
      </script>

          @endsection
      

          <style>
        select#selectbox1 {
          color: #ffffff;}
      </style>