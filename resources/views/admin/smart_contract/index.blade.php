@extends('layout/master_index')
@section('main-content')
<?php 
// echo print_r($smart_contracts["exists"]);
// exit;
?>
<div class="main-panel">
  <div class="content-wrapper">
   
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title text-center">SMART CONTRACT PANEL</h3>
            <div class="table-responsive">
            <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="">
                @csrf
                  <div class="col-8 d-flex ">
                  <div class="form-check form-switch switchwork pl-0">
                  <label class="form-check-label" for="flexSwitchCheckDefault">SMART CONTRACT ENABLE/DISABLE</label>
                  <input class="form-check-input togglebox" type="checkbox" role="switch" data-id="<?=$smart_contracts->id?>" name="checkbox" value="<?php echo $smart_contracts["exists"];?>">
                </div>  
                  </div>
                  <div class="col-8 d-flex ">
                    
                      <div class="form-group px-2">
                        <label class="form-check-label">SMART CONTRACT START TIME </label>
                        <input type="datetime-local" id="birthdaytime" name="contract_time" value="">
                      </div>
                  </div>
                  <div class="col-8 d-flex  ">
                    <div class="form-group space-bt px-2">
                      <label class="form-check-label">Wallet Balance</label>
                      <div class="W-50 font-style"><?php echo $smart_contracts["wallet_balance"];?> Eth</div>
                    </div>
                  </div>

                  <div class="col-8 d-flex ">
                      
                  </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            <table class="table table-striped">
            <!-- <a class="btn btn-primary task_edit" href='/admin/smart-contract/add'>+ Add</a> -->
                <!-- <thead>
                  <tr>
                    <th>Contract Title</th>
                    <th>Smart Contract Status</th>
                    <th>Contract Time</th>
                    <th>Eth Address</th>
                    <th>Wallet Balance</th>
                    <th>Action</th>
                  </tr>
                </thead> -->
                <tbody>
               
             
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
      <script>
        jQuery('.togglebox').change(function() {
        console.log("hello");
        var id=jQuery(this).data('id');
        var data = "";
        jQuery.ajax({
        type:"GET",
        url : "/admin/smart-contract/"+id,
        data : "togglebox_value="+jQuery(this).val(),
        async: false,
        success : function(response) {
            data = response;
            return response;
        },
        // error: function() {
        //     alert('Error occured');
        // }
    });
  });
    </script>
    </div>
  </div>
          @endsection
          <style>
            .table-responsive {
             overflow-x: unset !important;
          }
          .switchwork {
              display: flex !important;
              justify-content: space-between;
              width: 60%;
          }
          select#selectbox1 {
          color: #ffffff;
        }
        .form-check.form-switch.switchwork {
    padding-left: 0;
}
label.form-check-label {
  color: white !important;
    font-size: 18px !important;
    font-weight: 500;
}
.space-bt {
    display: flex !important;
    justify-content: space-between;
    width: 100%;
}
.font-style {
    font-size: 20px;
    font-weight: 500;
}
          </style>