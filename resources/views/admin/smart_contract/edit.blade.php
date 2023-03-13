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
                  <div class="col-8 d-flex ">
                    <div class="form-group w-100 px-2">
                      <label for="contract_title">Contract Title</label>
                      <input type="text" id="contract_title" name="contract_title" value="{{$smart_contract->contract_title}}" class="form-control">
                    </div>    
                  </div>
                  <div class="col-8 d-flex ">
                      <div class="form-group w-50 px-2">
                        <label for="smart-contract">Smart Contract</label>
                        <select class="form-control" name="is_smart_contract" required="required">
                        <option value="0" {{ $smart_contract->status == 0 ? 'selected' : '' }}>Disable</option>
                        <option value="1" {{ $smart_contract->status == 1 ? 'selected' : '' }}>Enable</option>
                        </select>
                      </div>
                      <div class="form-group w-50 px-2">
                        <label for="contract-time">Contract Time</label>
                        <input type="datetime-local" id="birthdaytime" name="contract_time" value="{{$smart_contract->contract_time}}">
                      </div>
                  </div>
                  <div class="col-8 d-flex  ">
                    <div class="form-group w-50 px-2">
                      <label for="eth-address">Eth Address</label>
                      <input type="text" id="eth_address" name="eth_address" class="form-control" value="{{$smart_contract->eth_address}}">
                    </div>
                    <div class="form-group w-50 px-2">
                      <label for="wallet-balance">Wallet Balance</label>
                      <input type="number" id="wallet_balance" name="wallet_balance" class="form-control" value="{{$smart_contract->wallet_balance}}">
                    </div>
                  </div>

                  <div class="col-8 d-flex ">
                      
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