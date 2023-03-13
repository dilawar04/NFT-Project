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
            <h4 class="card-title">Add Pre Sale</h4>
            <div class="table-responsive">
            <table>
            <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('/admin/store-pre-sale')}}">
       @csrf
       <div class="col-8 d-flex  ">
       <div class="form-group w-50 px-2">
          <label for="exampleInputEmail1">Price</label>
          <input type="number" id="price" name="price" class="form-control" required="">
        </div>
        <div class="form-group w-50 px-2">
          <label for="exampleInputEmail1">Max Number Allow</label>
          <input type="number" id="max_no_allow" name="max_no_allow" class="form-control" required="">
        </div>
       </div>
       <div class="col-8 d-flex ">
          <div class="form-group w-50 px-2">
            <label for="exampleInputEmail1">Total</label>
            <input type="number" id="total" name="total" class="form-control" required="">
          </div>
          <div class="form-group w-50 px-2">
            <label for="exampleInputEmail1">Status</label>
            <select class="form-control" name="status" required="">
              <option value="0">Disable</option>
              <option value="1">Enable</option>
           </select>
          </div>
       </div>

       <div class="col-8 d-flex ">
          <div class="form-group w-50 px-2">
            <label for="exampleInputEmail1">remaing</label>
            <input type="number" id="remaing" name="remaing" class="form-control" required="">
          </div>
          <div class="form-group w-50 px-2">
            <label for="exampleInputEmail1">End in</label>
            <input type="datetime-local" id="birthdaytime" name="ends_in">
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
<style>
  input#birthdaytime {
    padding-top: 13px;
    background: #2a3038;
    margin-top: 2px;
    border: none;
    width: 98%;
}
</style>