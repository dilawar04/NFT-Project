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
    
    <!-- Page Heading -->
    <div class="container pt-5">
      <div class="position-relative d-flex text-center my-5 py-5">
        <h2 class="text-24 text-white-50 opacity-1 text-uppercase fw-600 w-100 mb-0">Say Hello!</h2>
        <p class="text-9 text-white fw-600 position-absolute w-100 align-self-center lh-base mb-0">Contact Us<span class="heading-separator-line border-bottom border-3 border-primary d-block mx-auto"></span> </p>
      </div>
    </div>
    <!-- Page Heading end-->
    
    <div class="container">
      <div class="row g-5 mb-5">
        <div class="col-lg-6">
          <h2 class="fw-600 text-white">Say Hello !</h2>
          <p class="text-4 text-white-50 mb-5">I will get back to you in less than 24 hours.</p>
          <form id="contact-form" class="form-dark" action="https://harnishdesign.net/demo/html/scott/php/mail.php" method="post">
            <div class="row">
              <div class="col-lg-12">
                <div class="mb-4">
                  <label class="form-label text-white" for="yourName">Name</label>
                  <input id="yourName" name="name" type="text" class="form-control rounded-4" required placeholder="Your Name">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="mb-4">
                  <label class="form-label text-white" for="yourEmail">Email Address</label>
                  <input id="yourEmail" name="email" type="email" class="form-control rounded-4" required placeholder="Your Email Address">
                </div>
              </div>
            </div>
            <div class="mb-4">
              <label class="form-label text-white" for="yourMessage">Message</label>
              <textarea id="yourMessage" name="form-message" class="form-control rounded-4" rows="3" required placeholder="Your Message........"></textarea>
            </div>
            <button id="submit-btn" class="btn btn-primary rounded-pill" type="submit">Send Message</button>
          </form>
        </div>
        <div class="col-lg-6">
          <h2 class="fw-600 text-white">Get in Touch</h2>
          <p class="text-4 text-white-50 mb-5">For Customer Support and Query, Get in touch with us.</p>
          <div class="featured-box style-1">
            <div class="featured-box-icon text-primary"> <i class="fas fa-map-marker-alt"></i></div>
            <h3 class="text-white">Scott Inc.</h3>
            <p class="text-white-50">4th Floor, Plot No.22, Above Public Park<br>
              145 Murphy Canyon Rd.<br>
              Suite 100-18<br>
              San Diego CA 2028 </p>
          </div>
          <div class="featured-box style-1">
            <div class="featured-box-icon text-primary"> <i class="fas fa-phone-alt"></i> </div>
            <h3 class="text-white">Telephone</h3>
            <p class="text-white-50">(+060) 989 898 0098 , (+060) 889 888 0088</p>
          </div>
          <div class="featured-box style-1">
            <div class="featured-box-icon text-primary"> <i class="fas fa-envelope"></i> </div>
            <h3 class="text-white">Inquiries</h3>
            <p class="text-white-50">info@yourdomain.com</p>
          </div>
          <div class="featured-box style-1">
            <div class="featured-box-icon text-primary"> <i class="fas fa-share-alt"></i> </div>
            <h3 class="text-white">Social Media</h3>
            <ul class="social-icons social-icons-dark">
              <li class="social-icons-facebook"><a data-bs-toggle="tooltip" href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
              <li class="social-icons-twitter"><a data-bs-toggle="tooltip" href="https://twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
              <li class="social-icons-instagram"><a data-bs-toggle="tooltip" href="http://www.dribbble.com/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
              <li class="social-icons-linkedin"><a data-bs-toggle="tooltip" href="http://www.instagram.com/" target="_blank" title="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
              <li class="social-icons-telegram"><a data-bs-toggle="tooltip" href="http://www.telegram.com/" target="_blank" title="Telegram"><i class="fab fa-telegram-plane"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
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