<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from harnishdesign.net/demo/html/scott/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Dec 2022 12:28:34 GMT -->
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="images/favicon.png" rel="icon" />
<title>Scott - NFT Minting and Collections</title>
<meta name="description" content="Scott is responsive nft minting and collection landing page bootstrap 5 html template.">
<meta name="author" content="harnishdesign.net">


<!-- Web Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
<!-- script -->
<!-- TODO: Step 1: Include Fortmatic SDK Script -->
<script src="https://cdn.jsdelivr.net/npm/fortmatic@latest/dist/fortmatic.js"></script>
<!-- End Step 1 -->
@vite('resources/js/app.js')

<!-- Script CDN Links -->
<script src="https://cdn.jsdelivr.net/npm/@walletconnect/web3-provider@1.7.1/dist/umd/index.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/web3@latest/dist/web3.min.js"></script>
<!-- Script CDN Links -->

<!-- Stylesheet
============================== -->
<!-- Bootstrap -->
<link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css" />
<!-- Font Awesome Icon -->
<link rel="stylesheet" type="text/css" href="/vendor/font-awesome/css/all.min.css" />
<!-- Owl Carousel -->
<link rel="stylesheet" type="text/css" href="/vendor/owl.carousel/assets/owl.carousel.min.css" />
<!-- Template Stylesheet -->
<link rel="stylesheet" type="text/css" href="/css/stylesheet.css" />
<!-- Colors Css -->
<link id="color-switcher" type="text/css" rel="stylesheet" href="#" />
<style>
  .alert{
    position: fixed;
    top: 95px;
    right: 10px;
    z-index: 9999;
  }
</style>
<script>
  setTimeout(()=>{
    jQuery('.alert').hide();
  },3000);
</script>
</head>

<body data-bs-spy="scroll" data-bs-target="#header-nav" data-bs-smooth-scroll="true" data-bs-offset="0" class="hero-bg" style="background-image:url('images/bg.png');">

<!-- Preloader -->
<div class="preloader preloader-dark">
  <div class="lds-ellipsis">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>
</div>

<!-- Preloader End --> 
@if (Session::has('message'))
  
  @php
 

    $msg=Session::get('message');
    //print_r(Session::get('message'));
  @endphp
  @if($msg['status']=="success")
  <div class="text-white alert alert-success">{{ $msg['msg'] }}</div>

  @elseif($msg['status']=="warning")
  <div class="alert alert-warning">{{ $msg['msg'] }}</div>

  @else
  <div class="alert alert-danger">{{ $msg['msg'] }}</div>

  @endif
@endif
<!-- Document Wrapper
=============================== -->
<div id="main-wrapper"> 
  
  <!-- Header
  ============================ -->
  <header id="header" class="sticky-top-slide"> 
    <!-- Navbar -->
    <nav class="primary-menu navbar navbar-expand-lg navbar-dark bg-transparent fw-500">
      <div class="container position-relative">
        <div class="col-auto col-lg-auto"> 
          <!-- Logo --> 
          <a class="logo" href="/" title="Scott"> <img src="images/logo.png" alt="Scott"/> </a> 
          <!-- Logo End --> 
        </div>
        <div class="col col-lg-10 navbar-accordion">
          <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#header-nav"><span></span><span></span><span></span></button>
          <div id="header-nav" class="collapse navbar-collapse justify-content-end">
          <div id="header-nav" class="collapse navbar-collapse justify-content-end">
              <!-- <button type="submit" onclick="createConfiguration()">
              compiler
              </button>   -->
            <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link active" id="home" href="/">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="#about" id="home">About</a></li>
              <!-- data-bs-toggle="modal" data-bs-target="#mint_modal" -->
              <li class="nav-item"><a class="nav-link mint" id="mint" href="javascript:void(0)"   >Mint</a></li>
              <li class="nav-item"><a class="nav-link" id="home" href="/collections">Collections</a></li>
              <li class="nav-item"><a class="nav-link" id="home" href="/pre-sale">Pre Sale</a></li>
              <li class="nav-item"><a class="nav-link" id="home" href="/public-sale">Public Sale</a></li>
              <!-- <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#">Pages</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/mint" onclick="mint()">Mint Page</a></li>
                  <li><a class="dropdown-item" href="/collections">Collections</a></li>
                  <li><a class="dropdown-item" href="/coming-soon">Comming Soon</a></li>
                  <li><a class="dropdown-item" href="/404">404</a></li>
                  <li><a class="dropdown-item" href="/blog">Blog</a></li>
                  <li><a class="dropdown-item" href="/contact-us">Contact Us</a></li>
                </ul>
              </li> -->
              
              <!-- <li class="align-items-center h-auto mt-2 mt-lg-0 ms-lg-2"><a class="btn btn-primary rounded-pill d-inline-block" data-bs-toggle="offcanvas" href="#offcanvas" role="button" aria-controls="offcanvas"><span class="me-1"><i class="fas fa-wallet"></i></span> Connect</a></li> -->
              @if(Session::has('users'))
              @php
                
                $users=session()->get('users');
                $users=DB::table('users')->find($users->id);
                if($users->is_whitelisted){ 
                  @endphp
                  <li class="align-items-center h-auto mt-2 mt-lg-0 ms-lg-2 "><a class="btn btn-primary rounded-pill d-inline-block" data-bs-toggle="offcanvas" href="#offcanvaswhitelist" role="button" aria-controls="offcanvaswhitelist"><span class="me-1"><i class="fas fa-wallet"></i></span> WhiteList</a></li>
                  @php
                }else{
                  @endphp
                  <li class="align-items-center h-auto mt-2 mt-lg-0 ms-lg-2 "><a class="btn btn-primary rounded-pill d-inline-block" href="/user-logout"><!--<span class="me-1"><i class="fas fa-wallet"></i></span>--> Logout</a></li>
                  @php
                }
              @endphp
              @endif
              <li class="align-items-center h-auto mt-2 mt-lg-0 ms-lg-2 @if (Session::has('users')) d-none @endif"><a class="btn btn-primary rounded-pill d-inline-block" data-bs-toggle="modal" data-bs-target="#login_modal"><!--<span class="me-1"><i class="fas fa-wallet"></i></span>--> login</a></li>
              
                <li class="align-items-center h-auto mt-2 mt-lg-0 ms-lg-3 @if (!Session::has('login_nonce')) d-none @endif"><a class="btn btn-light rounded-pill d-inline-block" id="disconnect" href="javascript:void(0)"><!--<span class="me-1"><i class="fab fa-discord"></i></span>--> Disconnect</a></li>
                
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- Navbar End --> 
  </header>
   <!-- Connect Wallet - Offcanvas menu
====================================== -->
 <!-- WhiteList -->
 <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvaswhitelist" aria-labelledby="offcanvasLabel">
    <div class="offcanvas-header">
      <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <h4 class="text-white fw-600 text-center mb-4" id="offcanvasLabel"><span class="me-1"><i class="fas fa-wallet"></i></span> Connect Wallet</h4>
      <div class="text-white-50 text-center mb-4">Insert your wallet address/connect your wallet</div>
        <div class="list-group connect-wallet">
          <div class="mt-3">
            <p id="twitter-collapse"><button class="btn text-white">Twitter</button></p>
            <div id="twitter-collapse-show">
              <div class="d-flex">
            <img class="img-fluid d-flex me-2" src="images/wallet/twitter.png" alt=""><a class="btn btn-round text-white icon icon--twitter bg__social--twitter" href="/twitter-auth">Connect to twitter</a>
            </div>
            <div class="d-flex">
            <img class="img-fluid d-flex me-2" src="images/wallet/twimgpng.png" alt=""> <a class="btn btn-round text-white" href="/twitter-follow">Follow us</a>
            </div>
             
              <div class="d-flex">
            <img class="img-fluid d-flex me-2" src="images/wallet/twitter.png" alt=""> <button class="btn btn-round text-white"   data-bs-toggle="modal" data-bs-target="#tweets">Tweet a tweet</button>
            </div>
            <div class="d-flex">
            <img class="img-fluid d-flex me-2" src="images/wallet/retweet.png" alt="">  <a class="btn btn-round text-white" href="https://twitter.com/AmrrAdelSalem">Retweet a tweet</a>
            </div>
            </div>
          </div>
          <div class="mt-3">
            <p id="discord-collapse"><button class="btn text-white">DisCord</button></p>
            <p id="discord-collapse-show">
              <a class="btn btn-round text-white" href="{{ url('/connect-discord') }}">Connect to discord</a>
              <a class="btn btn-round text-white" href="{{ url('/join-discord') }}">Follow our Server on Discord</a>
            </p>
            <!-- <p id="discord-collapse-show"><button class="btn btn-round text-white">Follow our Server on Discord</p> -->
          </div>
          <div class="mt-3">

            <p id="metamask-collapse" class="metamask-collapse"><button class="btn text-white"><span class="me-1"><i class="fas fa-wallet"></i></span>Connect Wallet</button></p>
            <!-- <p id="metamask-collapse-show"><button class="btn btn-round text-white">The user enters his wallet address directly</p> -->
            <!-- <p id="metamask-collapse-show"><button class="btn btn-round text-white">User enters his email to be notified</p> -->
              <div class="list-group connect-wallet" id="metamask-collapse-show">
            <a href="#" class="list-group-item list-group-item-action metamask_login" id="metamask_login" data-signature-url="{{ route('metamask.signature') }}" data-authenticate-url="{{ route('metamask.authenticate') }}" data-redirect-url="{{ route('metamask-mask-has-login') }}" aria-current="true">
            <img class="img-fluid d-flex me-2" src="images/wallet/metamask.png" alt=""> MetaMask 
            <span class="badge bg-info ms-auto">Popular</span> </a> 
            <a href="#" class="list-group-item list-group-item-action" aria-current="true" onclick="connectWC()"> 
              <img class="img-fluid d-flex me-2" src="images/wallet/wallet-connect.png" alt="" > Wallet Connect </a> 
            <a href="#" class="list-group-item list-group-item-action" aria-current="true"> 
              <img class="img-fluid d-flex me-2" src="images/wallet/coinbase.png" alt=""> Coinbase </a> 
            <a href="#" class="list-group-item list-group-item-action fortmatic" id="fortmatic" data-redirect-url="{{ route('formatic.auth') }}" aria-current="true"> 
              <img class="img-fluid d-flex me-2" src="images/wallet/fortmatic.png" alt=""> Fortmatic </a>
            <a href="#" class="list-group-item list-group-item-action" aria-current="true"> 
              <img class="img-fluid d-flex me-2" src="images/wallet/myetherwallet.png" alt=""> MyEtherWallet</a>
          </div>
          
            
            
          </div>
          <div class="mt-3">
            <a href="/enter-rafale" class="btn text-white">Enter whiteList Rafale</a>
            <!-- <p id="userclick-collapse-show"><button class="btn btn-round text-white">enter whiteList rafale</p> -->
          </div>
          <div class="mt-3 @if (!Session::has('users')) d-none @endif">
            <a href="/user-logout" class="btn text-white">Logout</a>
          </div>
            <ul class="social-icons social-icons-dark social-icons-lg justify-content-center mt-4">
              <li class="social-icons-discord"><a data-bs-toggle="tooltip" href="http://www.discord.com/" target="_blank" title="Discord"><i class="fab fa-discord"></i></a></li>
              <li class="social-icons-facebook"><a data-bs-toggle="tooltip" href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
              <li class="social-icons-twitter"><a data-bs-toggle="tooltip" href="https://twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
            </ul>
        </div>
    </div>
    
  </div>
  
  <!-- End WhiteList -->
  <!-- Connect Wallet - Offcanvas menu End --> 
  @yield('main-content')
  
  <!-- Footer
  ============================== -->
  <footer id="footer" class="section footer-dark my-4">
    <div class="container"> 
      <!-- Social Icon -->
      <ul class="social-icons social-icons-dark social-icons-lg justify-content-center mb-4">
        <li class="social-icons-discord"><a data-bs-toggle="tooltip" href="http://www.discord.com/" target="_blank" title="Discord"><i class="fab fa-discord"></i></a></li>
        <li class="social-icons-facebook"><a data-bs-toggle="tooltip" href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
        <li class="social-icons-twitter"><a data-bs-toggle="tooltip" href="https://twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
        <li class="social-icons-instagram"><a data-bs-toggle="tooltip" href="http://www.dribbble.com/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
        <li class="social-icons-telegram"><a data-bs-toggle="tooltip" href="http://www.telegram.com/" target="_blank" title="Telegram"><i class="fab fa-telegram-plane"></i></a></li>
      </ul>
      <!-- Copyright Text -->
      <p class="text-center mb-4">Copyright © 2022 <a href="#" class="fw-500">Scott</a>. All Rights Reserved.</p>
      <!-- Other Links -->
      <ul class="nav nav-sm justify-content-center">
        <li class="nav-item"> <a class="nav-link" data-bs-toggle="modal" data-bs-target="#security" href="#">Security</a></li>
        <li class="nav-item"> <a class="nav-link" data-bs-toggle="modal" data-bs-target="#terms" href="#">Terms</a></li>
        <li class="nav-item"> <a class="nav-link" data-bs-toggle="modal" data-bs-target="#privacy" href="#">Privacy</a></li>
      </ul>
    </div>
  </footer>
  <!-- Footer end --> 
  
</div>
<!-- Document Wrapper end --> 

<!-- Back to Top
============================== --> 
<a id="back-to-top" data-bs-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a> 

<!-- Security Modal
================================== -->
<div id="security" class="modal fade" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Security</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-4">
        <p>Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
        <ul class="lh-lg">
          <li>Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</li>
          <li>Quidam lisque persius interesset his et, Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</li>
          <li>In quot quidam persequeris vim, ad mea essent possim iriure. Quidam lisque persius interesset his et.</li>
          <li>Quidam lisque persius interesset his et, Lisque persius interesset his et.</li>
          <li>Interesset his et, Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</li>
          <li>Persius interesset his et, Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</li>
          <li>Quot quidam persequeris vim Quidam lisque persius interesset his et, Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- Security Modal End --> 

<!-- Terms Modal
================================== -->
<div id="terms" class="modal fade" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Terms</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-4">
        <p>Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
        <h3 class="mb-3 mt-4 mt-4">Terms of Use</h3>
        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Simply dummy text of the printing and typesetting industry.</p>
        <h5 class="text-4 mt-4">Part I – Information Scott collects and controls</h5>
        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        <h5 class="text-4 mt-4">Part II – Information that Scott processes on your behalf</h5>
        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        <h5 class="text-4 mt-4">Part III – General</h5>
        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      </div>
    </div>
  </div>
</div>
<!-- Terms Modal End --> 



<!-- Privacy Modal
================================== -->
<div id="privacy" class="modal fade" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Privacy Policy</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-4">
        <p>Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
        <ul class="lh-lg">
          <li>Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</li>
          <li>Quidam lisque persius interesset his et, Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</li>
          <li>In quot quidam persequeris vim, ad mea essent possim iriure. Quidam lisque persius interesset his et.</li>
          <li>Quidam lisque persius interesset his et, Lisque persius interesset his et.</li>
          <li>Interesset his et, Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</li>
          <li>Persius interesset his et, Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</li>
          <li>Quot quidam persequeris vim Quidam lisque persius interesset his et, Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- Privacy Modal End --> 

<!-- Styles Switcher -->
<div id="styles-switcher" class="left">
  <h2 class="text-4">Color Switcher</h2>
  <hr>
  <ul class="mb-0">
    <li class="orange active" data-bs-toggle="tooltip" title="Orange" data-path=""></li>
    <li class="yellow" data-bs-toggle="tooltip" title="Yellow" data-path="css/color-yellow.css"></li>
    <li class="indigo" data-bs-toggle="tooltip" title="Indigo" data-path="css/color-indigo.css"></li>
    <li class="blue" data-bs-toggle="tooltip" title="Blue" data-path="css/color-blue.css"></li>
    <li class="purple" data-bs-toggle="tooltip" title="Purple" data-path="css/color-purple.css"></li>
    <li class="cyan" data-bs-toggle="tooltip" title="Cyan" data-path="css/color-cyan.css"></li>
    <li class="red" data-bs-toggle="tooltip" title="Red" data-path="css/color-red.css"></li>
    <li class="pink" data-bs-toggle="tooltip" title="Pink" data-path="css/color-pink.css"></li>
    <li class="green" data-bs-toggle="tooltip" title="Green" data-path="css/color-green.css"></li>
    <li class="teal" data-bs-toggle="tooltip" title="Teal" data-path="css/color-teal.css"></li>
  </ul>
  <button class="btn switcher-toggle border-0"><i class="fas fa-cog"></i></button>
</div>
<!-- Styles Switcher End --> 


<!-- mint modal
================================== -->
<div id="mint_modal" class="modal fade " role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content bg-dark">
      <div class="modal-header">
        <h5 class="modal-title text-light ">Mint</h5><small>(pre-sale)</small>
        <button type="button" class="btn-close text-light" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-4" id="model-content">
        
      </div>
    </div>
  </div>
</div>
<!-- mint modal End --> 

<!-- login modal
================================== -->
<div id="login_modal" class="modal fade " role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content bg-dark">
      <div class="modal-header">
        <h5 class="modal-title text-light ">{{ __('Login') }}</h5>
        <button type="button" class="btn-close btn-light" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-4" >
      <div class="card bg-dark">
                <!-- <div class="card-header"></div> -->

                <div class="card-body">
                    <form method="POST" action="/user-login">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                
                                    <a class="btn btn-link" data-bs-toggle="modal" data-bs-target="#register">
                                        {{ __('Register') }}
                                    </a>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
      </div>
    </div>
  </div>
</div>
<!-- login modal End --> 

<!-- register modal
================================== -->
<div id="register" class="modal fade " role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content bg-dark">
      <div class="modal-header">
        <h5 class="modal-title text-light ">{{ __('Register') }}</h5>
        <button type="button" class="btn-close btn-light" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-4" >
      <div class="card bg-dark">
                <!-- <div class="card-header"></div> -->

                <div class="card-body">
                    <form method="POST" action="/user-register">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>
  </div>
</div>
</div>
<!-- register modal End --> 

<!-- twitter modal
================================== -->
 <!-- Modal -->
 <div id="tweets" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Tweets</h4>
          <button type="button"  class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
        </div>
        <form action="/tweets" enctype="multipart/form-data" method="post">
          @csrf
          <div class="modal-body">
            <div class="form-group">
              <!-- <input class="form-control" placeholder="Content" /> -->
              <textarea name="text" id="" cols="30" rows="5"></textarea>
            </div>
            <div class="form-group">
              <input class="form-control" type="file" name="img-file" />
            </div>
            <!-- <div class="form-group">
              <button class="btn btn-info" v-on:click="editTweet(selectedTweet)">Edit Tweet</button>
            </div> -->
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-info" >Tweets</button>
            <button type="button" class="btn btn-default" data-dismiss="modal" data-bs-dismiss="modal" aria-label="Close">Close</button>
          </div>
        </form>
      </div>
    </div>
 </div>



<!-- twitter modal End --> 

<!-- connect wallet  -->
<div id="connect-wallet-modal" class="modal fade " role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered" role="document">
    <div class="modal-content bg-dark">
      <div class="modal-header">
        <h5 class="modal-title text-light ">Connect Wallet</h5>
        <button type="button" class="btn-close text-light" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-4">
        <a href="#" class="list-group-item list-group-item-action d-flex metamask_login" id="metamask_login_modal" data-signature-url="{{ route('metamask.signature') }}" data-authenticate-url="{{ route('metamask.authenticate') }}" data-redirect-url="{{ route('metamask-mask-has-login') }}" aria-current="true">
            <img class="img-fluid d-flex me-2" src="images/wallet/metamask.png" alt=""> MetaMask 
            <span class="badge bg-info ms-auto">Popular</span> </a> 
            <a href="#" class="list-group-item list-group-item-action d-flex" aria-current="true" onclick="connectWC()"> 
              <img class="img-fluid d-flex me-2" src="images/wallet/wallet-connect.png" alt="" > Wallet Connect </a> 
            <a href="#" class="list-group-item list-group-item-action d-flex" aria-current="true"> 
              <img class="img-fluid d-flex me-2" src="images/wallet/coinbase.png" alt=""> Coinbase </a> 
            <a href="#" class="list-group-item list-group-item-action d-flex fortmatic" id="fortmatic_modal" aria-current="true"> 
              <img class="img-fluid d-flex me-2" src="images/wallet/fortmatic.png" alt=""> Fortmatic </a>
            <a href="#" class="list-group-item list-group-item-action d-flex" aria-current="true"> 
              <img class="img-fluid d-flex me-2" src="images/wallet/myetherwallet.png" alt=""> MyEtherWallet</a>
      </div>
    </div>
  </div>
</div>
<!-- connect wallet end -->
<!-- JavaScript --> 
<script src="/vendor/jquery/jquery.min.js"></script> 
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
<!-- Owl Carousel --> 
<script src="/vendor/owl.carousel/owl.carousel.min.js"></script> 
<!-- Parallax Mouse Move --> 
<script src="/vendor/parallax/parallax.min.js"></script> 
<script src="/vendor/jquery-countdown/jquery.countdown.min.js"></script> 

<!-- Style Switcher --> 
<!-- <script src="/js/jquery.countdown.min.js"></script>  -->
<script src="/js/switcher.min.js"></script> 
<!-- Custom Script --> 
<script src="/js/theme.js"></script>

<!-- Custom Script Will be Here  -->
<script>
  function mint() {
  document.getElementById("home").href = "/";
  console.log('hello');
}
$(document).ready(function(){
  $("#twitter-collapse-show").hide();
  $("#discord-collapse-show").hide();
  $("#metamask-collapse-show").hide();
  $("#userclick-collapse-show").hide();

  $("#twitter-collapse").click(function(){
    $("#twitter-collapse-show").toggle();
  });
  $("#discord-collapse").click(function(){
    $("#discord-collapse-show").toggle();
  });
  $(".metamask-collapse").click(function(){
    $("#metamask-collapse-show").toggle();
  });
  $("#userclick-collapse").click(function(){
    $("#userclick-collapse-show").toggle();
  });

  var incrementPlus;
var incrementMinus;

var buttonPlus  = $(".cart-qty-plus");
var buttonMinus = $(".cart-qty-minus");

var incrementPlus = buttonPlus.click(function() {
  
	var $n = $(".qty");
  console.log($n,"qty");
	$n.val(Number($n.val())+1 );
});

var incrementMinus = buttonMinus.click(function() {
  
  
  var $n = $(".qty");
	var amount = Number($n.val());
	if (amount > 0) {
		$n.val(amount-1);
	}
});

$('.mint').click(function(){
  $.ajax({
    url:'/mint-model',
    type:'GET',
    success:function(data){
      // console.log(data,'data');
      $('#model-content').html(data);
      $('#mint_modal').modal('show');
    },
  });
});
$('[name="order_by"]').change(function(){
  console.log("clicked order by");
  var orderBy=$(this).val();
  window.location="/collections/filter/"+orderBy;
});
});


  </script>
  <script type="text/javascript">
    var account;

    // https://docs.walletconnect.com/quick-start/dapps/web3-provider
    var provider = new WalletConnectProvider.default({
      rpc: {
        1: "https://cloudflare-eth.com/", // https://ethereumnodes.com/
        137: "https://polygon-rpc.com/", // https://docs.polygon.technology/docs/develop/network-details/network/
        // ...

      },
      // bridge: 'https://bridge.walletconnect.org',
    });

    var connectWC = async () => {
      await provider.enable();

      //  Create Web3 instance
      const web3 = new Web3(provider);
      window.w3 = web3

      var accounts  = await web3.eth.getAccounts(); // get all connected accounts
      account = accounts[0]; // get the primary account
    }


    var sign = async (msg) => {
      if (w3) {
        return await w3.eth.personal.sign(msg, account)
      } else {
        return false
      }
    }

    var contract = async (abi, address) => {
      if (w3) {
        return new w3.eth.Contract(abi, address)
      } else {
        return false
      }
    }

    var disconnect = async () => {
      // Close provider session
      await provider.disconnect()
    }


    var address = "0x49D675A6f5194C8CD9e659c1E3427aBf2bfE4a89"
    var abi = [{"inputs":[],"name":"count","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"increment","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"nonpayable","type":"function"}]

    
  </script>
  <script src="lib/solc-js-compile/compile.js"></script>
</body>
<style>
.modal-body .text-10{
   font:20px !important;
 
}
.modal-body .text-center
{
margin-bottom: 50px;!important;
}
.modal-body .image-fluid 
{
  height: 300px!important;
  width: 200px;

}
.modal-body .text-light
{
 font-size:20px!important; margin-bottom:20px!important;
}
.modal-dialog #content
{
  /* width:100% !important; */
}
.modal-body .btn
{
 margin-bottom:30px!important; margin-left:10px!important;
}

.modal-body .countdown2
{
margin-bottom:10px!important; 
}
.modal-body .text-10
{
  font-size:30px!important;
}
.modal-body .col-12
{
  font-size:20px!important; margin-bottom:20px!important;
}
.modal-body .border
{
  margin-right:50px!important;
}
.modal-body #hotel-rooms1 
{
padding-top:100px!important;
}
img.img-fluid.d-flex.me-2 {
    width: 15%;
}
a.btn.btn-round.text-white {
    box-shadow: unset !important;
}
button.btn.btn-round.text-white {
    box-shadow: unset !important;
}
.btn:active{
  border-color: unset;
  border: none;
}
.btn-check:focus+.btn, .btn:focus {
  border-color:none;
}
    </style>
<!-- Mirrored from harnishdesign.net/demo/html/scott/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Dec 2022 12:29:01 GMT -->
</html>