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
    <div class="d-flex flex-column min-vh-100">
      <div class="container text-center my-auto py-5">
        <div class="row mt-5 pt-4">
          <div class="col-12 mx-auto">
            <h1 class="text-13 text-white bg-sucess mb-4 fw-700">Mint Coming Soon!</h1>
          </div>
          <div class="col-auto text-white text-center mx-auto mb-4 pb-2">
            <div class="hero-wrap py-3">
              <div class="hero-mask rounded-4 opacity-3 bg-dark"></div>
              <div class="hero-content text-center px-3"> 
                <!-- Count Down -->
                <div class="countdown" data-countdown-end="2022/10/23 12:00:00"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="row flex-column g-4">
          <div class="col-md-8 col-lg-6 col-xxl-5 mx-auto">
            <h3 class="text-4 text-light mb-4">Get Notified About Presales & Whitelist.</h3>
            <!-- Subscribe Form -->
            <div class="subscribe-form">
              <form action="https://harnishdesign.net/demo/html/scott/php/subscribe.php" role="form" method="post">
                <div class="input-group">
                  <input type="email" id="subscribe-form-email" name="subscribe-form-email" class="form-control rounded-pill rounded-end-0 border-0 ps-4" required placeholder="Email address">
                  <button id="subscribe-form-submit" name="subscribe-form-submit" class="btn btn-primary rounded-pill rounded-start-0 shadow-none" type="submit">Notify Me</button>
                </div>
              </form>
			  <div class="subscribe-form-result mt-3" style="display: none;"></div>
            </div>
          </div>
          <div class="col-12"> 
            <!-- Social Icon -->
            <ul class="social-icons social-icons-dark social-icons-lg justify-content-center">
              <li class="social-icons-discord"><a data-bs-toggle="tooltip" href="http://www.discord.com/" target="_blank" title="Join Discord"><i class="fab fa-discord"></i></a></li>
              <li class="social-icons-twitter"><a data-bs-toggle="tooltip" href="https://twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
              <li class="social-icons-facebook"><a data-bs-toggle="tooltip" href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
              <li class="social-icons-instagram"><a data-bs-toggle="tooltip" href="http://www.dribbble.com/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
              <li class="social-icons-telegram"><a data-bs-toggle="tooltip" href="http://www.telegram.com/" target="_blank" title="Telegram"><i class="fab fa-telegram-plane"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="container py-2">
        <p class="text-center text-white-50 mb-0">Copyright &copy; 2022 <a href="#">Scott</a>. All Rights Reserved.</p>
      </div>
    </div>
  </div>
  <!-- Content end --> 
  @endsection