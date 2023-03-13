 <!-- script -->
<!-- TODO: Step 1: Include Fortmatic SDK Script -->
<script src="https://cdn.jsdelivr.net/npm/fortmatic@latest/dist/fortmatic.js"></script>
<!-- End Step 1 -->
@vite('resources/js/app.js')

<!-- Script CDN Links -->
<script src="https://cdn.jsdelivr.net/npm/@walletconnect/web3-provider@1.7.1/dist/umd/index.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/web3@latest/dist/web3.min.js"></script>
<!-- Script CDN Links -->
 <!-- Content
  ======================== -->

  <div id="content" role="main">
  @if($data['exists'])
    @php
      extract($data);
      
    @endphp
    <div class="section p-0">
      <div class="container pt-5">
        <div class="row g-5"> 
          <!-- Item Image -->
          <div class="col-lg-6 text-center"> <img  class="img-fluid rounded-5 b1" src="images/collections/item-1-big.jpg" alt=""> </div>
          <!-- Item Image end --> 
          
          <!-- Item Details -->
          <div class="col-lg-6 text-center text-lg-start c1">
            <h1 class="t1" class="text-light text-5 mb-4" >Potocnik #312</h1>
            <h2 class="t1" class="text-10 text-white fw-600 mb-4">Public Mint is <span class="t1" class="bg-success rounded-4 px-3">Live</span></h2>
            
            <!-- Public Mint end in -->
            <div class="row gx-3 align-items-center mb-3">
              <div class="t1" class="col-12 col-lg-auto text-light"> Mint end in: </div>
              <div class="col-12 col-lg-auto">
                <div class="t1" class="countdown2 d-inline-block text-white text-7 fw-600" data-countdown-end="{{$raw->ends_in}}"></div>
              </div>
            </div>
            <p class="t1" class="text-white fw-500 mb-1"><span class="t1" class="text-light fw-normal">Whitelist:</span> Soldout <span class="d-inline-flex text-success bg-white rounded-circle"><i class="fas fa-check-circle"></i></span></p>
            <p class="t1" class="t1" class="text-white fw-500"><span class="t1" class="text-light fw-normal">Presale:</span> Soldout <span class="d-inline-flex text-success bg-white rounded-circle"><i class="fas fa-check-circle"></i></span></p>
            <p class="t1" class="border border-primary border-opacity-50 rounded-pill d-inline-block px-3 text-uppercase text-light">{{$raw->max_number_allow}} Max Per Wallet</p>
            
            <!-- Price -->
            <div class="row justify-content-center justify-content-lg-start mb-4">
              <div class="col-auto col-lg-4">
                <p class="t1" class="text-light mb-0">Price:</p>
                <div class="t1" class="text-7 text-white fw-600">{{$raw->price}} ETH</div>
              </div>
              <div class="col-auto col-lg-4">
                <p class="t1" class="text-light mb-0">Remaining:</p>
                <div class="t1" class="text-7 text-white fw-600">{{$raw->remaing}}/{{$raw->total}}</div>
              </div>
            </div>
            
            <!-- Quantity -->
            <div class="t4" class="row g-2 align-items-center justify-content-center justify-content-lg-start">
              <br><div class="t1" class="col-12 bg-dark col-sm-auto text-light"> Quantity: </div>
              <div class="col-auto col-sm-4">
                <div class="input-group form-dark">
                  <button class="t3 cart-qty-minus" type="button">-</button>
                  <input type="text" data-ride="spinner" id="hotels-rooms1" data-max="{{$raw->max_number_allow}}" class="form-control text-center bg-trnsparent rounded-4 qty" value="1" data-min="1" >
                  <button class="t3 cart-qty-plus" type="button">+</button>
                </div>
              </div>
            </div>
            
            <!-- Button -->
            @if (Session::has('login_nonce'))
            <div class="d-grid"> <a class="btn btn-primary btn-lg rounded-pill" href="#">Mint Now</a> </div>
            @else
            <!-- data-bs-toggle="modal" data-bs-target="#connect-wallet-modal" -->
            <div class="t2" class="d-grid"> <a class="btn btn-light metamask-collapse" data-bs-toggle="modal" data-bs-target="#connect-wallet-modal" href="javascript:void(0)"><span class="me-1"><i class="fas fa-wallet"></i></span>Connect Wallet</a> </div>
            @endif
            
          </div>
        </div>
      </div>
    </div>
  @else
    <p>Not Found</p>
  @endif  
    
    
  </div>
 <!-- JavaScript --> 
<script src="/vendor/jquery/jquery.min.js"></script> 
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
<!-- Owl Carousel --> 
<script src="/vendor/owl.carousel/owl.carousel.min.js"></script> 
<!-- Parallax Mouse Move --> 
<script src="/vendor/parallax/parallax.min.js"></script> 
<script src="/vendor/jquery-countdown/jquery.countdown.min.js"></script> 
<!-- Style Switcher --> 
<script src="/js/switcher.min.js"></script> 
<!-- Custom Script --> 
<!-- <script src="/js/jquery.countdown.min.js"></script>    -->

<script src="/js/theme.js"></script>
  <!-- Content end --> 
<script>
   $(".metamask-collapse").click(function(){
    $("#metamask-collapse-show").toggle();
    console.log("clicked");
  });
  var incrementPlus;
var incrementMinus;

var buttonPlus  = $(".cart-qty-plus");
var buttonMinus = $(".cart-qty-minus");

var incrementPlus = buttonPlus.click(function() {
  
	var $n = $(".qty");
	var $max = $n.data('max');
  
  if($n.val() < $max){
    $n.val(Number($n.val())+1 );
  }
	
});

var incrementMinus = buttonMinus.click(function() {
  
  
  var $n = $(".qty");
	var amount = Number($n.val());
	if (amount > 0) {
		$n.val(amount-1);
	}
});
</script>
<style>
 
  /* .modal-body .t1
  {
    margin-left: 54px!important;
font-size:12px!important; color:white!important


  } */
 
  
  .modal-body .col-auto 
{
  height:50px!important;
 

}
.modal-body .btn {
    margin-bottom: -52px!important;
    margin-left: 200px!important;
    
}
.modal-body #content 
{
  width:!important;
}

.modal-body .text-center{
  margin-bottom:0px !important;
}
.modal-body text-center
{
  margin-bottom:500px!important;
}
.input-group.form-dark {
    margin-left: 120px;
    margin-top: -17px;
}
.modal-body .t3 {
    height: 25px!important;
    background-color: black!important;
    color: white!important;
    margin-right: 1px;}

    
    .modal-body .b1 {
    margin-top: -42px; 
}
.col-lg-6.text-center.text-lg-start.c1 {
    margin-top: 8px;
}
/* .modal-header.top1 {
    color: white;
    font-size: 17px;
}
h5.modal-title.text-light.top1 {
    font-size: 14px;
} */
.modal-content.bg-dark.m1 {
    height: 520px;
    width: 700px;
}
input#hotels-rooms1 {
    margin-top: -16px;
}
.t4 {
    height: 68px;
    margin-top: -30px;
    margin-left: 0px;
}
img.img-fluid.rounded-5.b1 {
    height: 376px;
}
.t2 {
    margin-left: -10px;

}
input#hotels-rooms1 {
    padding: inherit;
    margin: auto;
    margin-right: 10px;
    margin-left: 10px;
}
.modal-body .t1 {
    margin-left: -1px!important;
    font-size: 12px!important;
    color: white!important;
}
</style>