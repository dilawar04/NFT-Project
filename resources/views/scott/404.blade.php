  @extends('../layout/master')
  @section('main-content')
  <!-- Header End --> 
  
  <!-- Connect Wallet - Offcanvas menu
====================================== -->
  <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
    <div class="offcanvas-header">
      <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <h4 class="text-white fw-600 text-center mb-4" id="offcanvasLabel"><span class="me-1"><i class="fas fa-wallet"></i></span> Connect Wallet</h4>
      <div class="text-white-50 text-center mb-4">Choose how you want to connect. There are several wallet providers.</div>
      <div class="list-group connect-wallet"> <a href="#" class="list-group-item list-group-item-action" aria-current="true"> <img class="img-fluid d-flex me-2" src="images/wallet/metamask.png" alt=""> MetaMask <span class="badge bg-info ms-auto">Popular</span> </a> <a href="#" class="list-group-item list-group-item-action" aria-current="true"> <img class="img-fluid d-flex me-2" src="images/wallet/wallet-connect.png" alt=""> Wallet Connect </a> <a href="#" class="list-group-item list-group-item-action" aria-current="true"> <img class="img-fluid d-flex me-2" src="images/wallet/coinbase.png" alt=""> Coinbase </a> <a href="#" class="list-group-item list-group-item-action" aria-current="true"> <img class="img-fluid d-flex me-2" src="images/wallet/fortmatic.png" alt=""> Fortmatic </a> <a href="#" class="list-group-item list-group-item-action" aria-current="true"> <img class="img-fluid d-flex me-2" src="images/wallet/myetherwallet.png" alt=""> MyEtherWallet</a> </div>
    </div>
  </div>
  <!-- Connect Wallet - Offcanvas menu End --> 
  
  <!-- Content
  ======================== -->
  <div id="content" role="main">
    <div class="section min-vh-100 d-flex">
      <div class="container text-center my-auto pt-5">
        <h2 class="text-25 fw-600 text-white mb-0">404</h2>
        <h3 class="text-6 text-light mb-3">Oops! The page you requested was not found!</h3>
        <p class="text-3 text-white-50">The page you are looking for was moved, removed, renamed or might never existed.</p>
        <a href="index.html" class="btn btn-primary rounded-pill m-2">Home</a> <a href="#" class="btn btn-outline-light rounded-pill m-2">Back</a> </div>
    </div>
    
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