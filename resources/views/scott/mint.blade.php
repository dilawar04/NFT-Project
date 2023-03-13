  @extends('../layout/master')
  @section('main-content')
  <!-- Header End --> 
  
 
  
  <!-- Content
  ======================== -->
  
  <div id="content" role="main">
   
    @if($data['exists'])
    @php
      extract($data);
      
    @endphp
    <div class="section mt-5 pb-0">
      <div class="container pt-5">
        <div class="row g-5"> 
          <!-- Item Image -->
          <div class="col-lg-6 text-center"> <img class="img-fluid rounded-5" src="images/collections/item-1-big.jpg" alt=""> </div>
          <!-- Item Image end --> 
          
          <!-- Item Details -->
          <div class="col-lg-6 text-center text-lg-start">
            <h1 class="text-light text-5 mb-4">Potocnik #312</h1>
            <h2 class="text-10 text-white fw-600 mb-4">Public Mint is <span class="bg-success rounded-4 px-3">Live</span></h2>
            
            <!-- Public Mint end in -->
            <div class="row gx-3 align-items-center mb-3">
              <div class="col-12 col-lg-auto text-light"> Mint end in: </div>
              <div class="col-12 col-lg-auto">
                <div class="countdown d-inline-block text-white text-7 fw-600" data-countdown-end="{{$raw->ends_in}}"></div>
              </div>
            </div>
            <p class="text-white fw-500 mb-1"><span class="text-light fw-normal">Whitelist:</span> Soldout <span class="d-inline-flex text-success bg-white rounded-circle"><i class="fas fa-check-circle"></i></span></p>
            <p class="text-white fw-500"><span class="text-light fw-normal">Presale:</span> Soldout <span class="d-inline-flex text-success bg-white rounded-circle"><i class="fas fa-check-circle"></i></span></p>
            <p class="border border-secondary border-opacity-50 rounded-pill d-inline-block px-3 text-uppercase text-light">{{$raw->max_number_allow}} Max Per Wallet</p>
            
            <!-- Price -->
            <div class="row justify-content-center justify-content-lg-start mb-4">
              <div class="col-auto col-lg-4">
                <p class="text-light mb-0">Price:</p>
                <div class="text-7 text-white fw-600">{{$raw->price}} ETH</div>
              </div>
              <div class="col-auto col-lg-4">
                <p class="text-light mb-0">Remaining:</p>
                <div class="text-7 text-white fw-600">{{$raw->remaing}}/{{$raw->total}}</div>
              </div>
            </div>
            
            <!-- Quantity -->
            <div class="row g-2 align-items-center justify-content-center justify-content-lg-start mb-4">
              <div class="col-12 col-sm-auto text-light"> Quantity: </div>
              <div class="col-auto col-sm-4">
                <div class="input-group form-dark">
                  <button type="button" class="input-group-text bg-transparent border-0 text-light  text-5 cart-qty-minus" >-</button>
                  <input type="text" data-ride="spinner" id="hotels-rooms1" class="form-control text-center bg-trnsparent rounded-4 qty" value="1" data-min="1" >
                  <button type="button" class="input-group-text bg-transparent border-0 text-light text-5 cart-qty-plus" >+</button>
                </div>
              </div>
            </div>
            
            <!-- Button -->
            @if (Session::has('login_nonce'))
            <div class="d-grid"> <a class="btn btn-primary btn-lg rounded-pill" href="#">Mint Now</a> </div>
            @else
            <div class="d-grid"> <a class="btn btn-primary btn-lg rounded-pill" data-bs-toggle="modal" data-bs-target="#connect-wallet-modal" href="javascript:void(0)">Connect</a> </div>
            @endif
          </div>
        </div>
      </div>
    </div>
  @else
    <p>Not Found</p>
  @endif  
    <!-- Join
    ============================== -->
    <section id="join" class="section pb-0">
      <div class="container"> 
        <!-- Heading -->
        <div class="position-relative d-flex text-center">
          <h2 class="text-24 text-white-50 opacity-1 text-uppercase fw-600 w-100 lh-1 mb-0 mb-n1">don’t miss</h2>
        </div>
        <!-- Heading end-->
        
        <div class="bg-primary text-center shadow-lg rounded-4 p-5 mt-n3">
          <div class="text-15 text-white lh-1 mb-2"><i class="fab fa-discord"></i></div>
          <h3 class="text-11 text-white fw-600 mb-3">Join Our Community</h3>
          <a class="btn btn-light rounded-pill" href="#">Join Discord</a> </div>
      </div>
    </section>
    <!-- Join end --> 
    
  </div>
  <!-- Content end --> 
  
  @endsection