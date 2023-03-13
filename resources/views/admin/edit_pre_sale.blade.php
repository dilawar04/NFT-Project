@extends('layout/master_index')
@section('main-content')
<div class="main-panel">
  <div class="content-wrapper">
  <?php 
    // echo "<pre>";
    // print_r($edit_sale);
    // echo "</pre>";
    // exit;
        ?>
  
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Edit Pre Sale</h4>
            <div class="table-responsive">
              <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="">
                @csrf
                <div class="col-8 d-flex  ">
                  <div class="form-group w-50 px-2">
                      <label for="exampleInputEmail1">Price</label>
                      <input type="number" id="price" name="price" class="form-control" value="{{$edit_sale->price}}">
                    </div>
                    <div class="form-group w-50 px-2">
                      <label for="exampleInputEmail1">Max Number Allow</label>
                      <input type="number" id="max_no_allow" name="max_no_allow" class="form-control" value="{{$edit_sale->max_number_allow}}">
                    </div>
                  </div>
                  <div class="col-8 d-flex ">
                      <div class="form-group w-50 px-2">
                        <label for="exampleInputEmail1">Total</label>
                        <input type="number" id="total" name="total" class="form-control" value="{{$edit_sale->total}}">
                      </div>
                      <div class="form-group w-50 px-2">
                        <label for="exampleInputEmail1">Status</label>
                        <select class="form-control" name="status" required="required">
                        <option value="0" {{ $edit_sale->status == 0 ? 'selected' : '' }}>Disable</option>
                        <option value="1" {{ $edit_sale->status == 1 ? 'selected' : '' }}>Enable</option>
                    </select>
                      </div>
                  </div>

                  <div class="col-8 d-flex ">
                      <div class="form-group w-50 px-2">
                        <label for="exampleInputEmail1">remaing</label>
                        <input type="number" id="remaing" name="remaing" class="form-control" value="{{$edit_sale->remaing}}">
                      </div>
                      <div class="form-group w-50 px-2">
                        <label for="exampleInputEmail1">End in</label>
                        <input type="datetime-local" id="birthdaytime" name="ends_in" value="{{$edit_sale->ends_in}}">
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
          <style>
  input#birthdaytime {
    padding-top: 13px;
    background: #2a3038;
    margin-top: 2px;
    border: none;
    width: 98%;
}
</style>