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
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            <form name="add-blog-post-form" id="add-blog-post-form" method="post">
       @csrf
       <div class="col-8 d-flex ">
          <div class="form-group w-100 px-2">
            <label for="contract_title">Contract Title</label>
            <input type="text" id="contract_title" name="contract_title" value="{{ old('contract_title') }}" class="form-control">
          </div>    
       </div>
       <div class="col-8 d-flex ">
          <div class="form-group w-50 px-2">
            <label for="is_smart_contract">Smart</label>
            <select class="form-control" name="is_smart_contract" value="{{ old('is_smart_contract') }}">
              <option value="0">Disable</option>
              <option value="1">Enable</option>
           </select>
          </div>
          <div class="form-group w-50 px-2">
            <label for="contract-time">Contract Time</label>
            <input type="datetime-local" id="birthdaytime" value="{{ old('contract_time') }}" name="contract_time">
          </div>          
       </div>

       <div class="col-8 d-flex ">
          <div class="form-group w-50 px-2">
            <label for="eth-address">Eth Address</label>
            <input type="text" id="eth" name="eth_address" value="{{ old('eth_address') }}" class="form-control">
          </div>
          <div class="form-group w-50 px-2">
            <label for="wallet-balance">Wallet Balance</label>
            <input type="number" id="wallet_balance" value="{{ old('wallet_balance') }}" name="wallet_balance" class="form-control">
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