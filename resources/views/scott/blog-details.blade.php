<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from harnishdesign.net/demo/html/scott/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Dec 2022 12:29:21 GMT -->
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="images/favicon.png" rel="icon" />
<title>Scott - NFT Minting and Collection Landing Page HTML5 Template</title>
<meta name="description" content="Scott is responsive nft minting and collection landing page bootstrap 5 html template.">
<meta name="author" content="harnishdesign.net">

<!-- Web Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

<!-- Stylesheet
============================== -->
<!-- Bootstrap -->
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css" />
<!-- Font Awesome Icon -->
<link rel="stylesheet" type="text/css" href="vendor/font-awesome/css/all.min.css" />
<!-- Owl Carousel -->
<link rel="stylesheet" type="text/css" href="vendor/owl.carousel/assets/owl.carousel.min.css" />
<!-- Template Stylesheet -->
<link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
<!-- Colors Css -->
<link id="color-switcher" type="text/css" rel="stylesheet" href="#" />
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
          <a class="logo" href="index.html" title="Scott"> <img src="images/logo.png" alt="Scott"/> </a> 
          <!-- Logo End --> 
        </div>
        <div class="col col-lg-10 navbar-accordion">
          <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#header-nav"><span></span><span></span><span></span></button>
          <div id="header-nav" class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link" href="index.html#home">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="index.html#about">About</a></li>
              <li class="nav-item"><a class="nav-link" href="index.html#roadmap">Roadmap</a></li>
              <li class="nav-item"><a class="nav-link" href="index.html#collections">Collections</a></li>
              <li class="nav-item"><a class="nav-link" href="index.html#team">Team</a></li>
              <li class="nav-item"><a class="nav-link" href="index.html#faq">FAQ</a></li>
              <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle active" href="#">Pages</a>
                <ul class="dropdown-menu">
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Home Pages</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="index.html">Home 01</a></li>
                      <li><a class="dropdown-item" href="index-2.html">Home 02</a></li>
					  <li><a class="dropdown-item" href="index-3.html">Home 03</a></li>
					  </ul>
                  </li>
                  <li><a class="dropdown-item" href="mint.html">Mint Page</a></li>
                  <li><a class="dropdown-item" href="collections.html">Collections</a></li>
                  <li><a class="dropdown-item" href="coming-soon.html">Comming Soon</a></li>
                  <li><a class="dropdown-item" href="404.html">404</a></li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Blog</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="blog.html">Blog Grid</a></li>
                      <li><a class="dropdown-item" href="blog-list.html">Blog List</a></li>
                      <li><a class="dropdown-item" href="blog-details.html">Blog Details</a></li>
                    </ul>
                  </li>
                  <li><a class="dropdown-item" href="contact-us.html">Contact Us</a></li>
                </ul>
              </li>
              <li class="align-items-center h-auto mt-2 mt-lg-0 ms-lg-2"><a class="btn btn-primary rounded-pill d-inline-block" data-bs-toggle="offcanvas" href="#offcanvas" role="button" aria-controls="offcanvas"><span class="me-1"><i class="fas fa-wallet"></i></span> Connect</a></li>
              <li class="align-items-center h-auto mt-2 mt-lg-0 ms-lg-3"><a class="btn btn-light rounded-pill d-inline-block" href="#"><span class="me-1"><i class="fab fa-discord"></i></span> Discord</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- Navbar End --> 
  </header>
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
        <h2 class="text-24 text-white-50 opacity-1 text-uppercase fw-600 w-100 mb-0">Articles</h2>
        <p class="text-9 text-white fw-600 position-absolute w-100 align-self-center lh-base mb-0">Blog Single<span class="heading-separator-line border-bottom border-3 border-primary d-block mx-auto"></span> </p>
      </div>
    </div>
    <!-- Page Heading end-->
    
    <div class="container">
      <div class="row g-5"> 
        <!-- Middle Panel
        ============================================= -->
        <div class="col-lg-8 col-xl-9">
          <div class="blog-post blog-post-dark border border-secondary border-opacity-75 shadow rounded-4 p-4">
            <h2 class="title-blog text-white text-7">Sell your crypto collectibles without paying gas!</h2>
            <ul class="meta-blog mb-4">
              <li><i class="fas fa-calendar-alt"></i> April 24, 2021</li>
              <li><a href="#"><i class="fas fa-user"></i> Admin</a></li>
              <li><a href="#comments"><i class="fas fa-comments"></i> 03</a></li>
            </ul>
            <a class="d-flex mb-4" href="https://harnishdesign.net/"><img class="img-fluid rounded-4" src="images/blog/post-2-850x400.jpg" alt=""></a>
            <div>
              <p>Some quick example text to build on the card title and make up the bulk of the card's content. Ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore. Ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <p>Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus. Nullam ac nisi non eros gravida venenatis. Ut euismod, turpis sollicitudin lobortis pellentesque, libero massa dapibus dui eu. Ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui.</p>
              <figure>
                <blockquote class="blockquote border-secondary">
                  <p>Ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus.</p>
                  <figcaption class="blockquote-footer text-white-50"> Ipsum dolor sit </figcaption>
                </blockquote>
              </figure>
              <p>Ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus. Nullam ac nisi non eros gravida venenatis. Ut euismod, turpis sollicitudin lobortis pellentesque, dapibus dui, eu. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus. Nullam ac nisi non eros gravida venenatis. Ut euismod, turpis sollicitudin lobortis pellentesque, libero massa dapibus dui eu.</p>
              <div class="row g-4 mb-3">
                <div class="col-lg-6"><img class="img-fluid rounded-4" src="images/blog/post-1.jpg" alt=""></div>
                <div class="col-lg-6"><img class="img-fluid rounded-4" src="images/blog/post-4.jpg" alt=""></div>
              </div>
              <p>Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus. Nullam ac nisi non eros gravida venenatis. Ut euismod, turpis sollicitudin lobortis pellentesque, libero massa dapibus dui eu. Ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui.</p>
              <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Ut euismod, turpis sollicitudin lobortis pellentesque, libero massa dapibus dui eu. Ipsum dolor sit amet, consectetuer adipiscing elit. </p>
            </div>
            <hr class="my-4">
            
            <!-- Tags & Share Social
            ================================= -->
            <div class="row g-3">
              <div class="col-lg-7 col-xl-8">
                <div class="tags tags-dark text-center text-lg-start"> <a href="#">Nft</a> <a href="#">Art</a> <a href="#">Crypto</a> <a href="#">2022</a> <a href="#">Marketing</a> </div>
              </div>
              <div class="col-lg-5 col-xl-4">
                <div class="d-flex flex-column">
                  <ul class="social-icons social-icons-colored justify-content-center justify-content-lg-end">
                    <li class="social-icons-facebook"><a data-bs-toggle="tooltip" href="http://www.facebook.com/" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="social-icons-twitter"><a data-bs-toggle="tooltip" href="http://www.twitter.com/" target="_blank" aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
                    <li class="social-icons-google"><a data-bs-toggle="tooltip" href="http://www.google.com/" target="_blank" aria-label="Google"><i class="fab fa-google"></i></a></li>
                    <li class="social-icons-linkedin"><a data-bs-toggle="tooltip" href="http://www.linkedin.com/" target="_blank" aria-label="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                    <li class="social-icons-instagram"><a data-bs-toggle="tooltip" href="http://www.instagram.com/" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <hr class="my-4">
            <!-- Author
			================================= -->
            <div class="hero-wrap p-4">
              <div class="hero-mask rounded-4 opacity-3 bg-dark"></div>
              <div class="hero-content">
                <div class="row g-0 text-center text-sm-start">
                  <div class="col-12 col-sm-auto me-4 mb-2 mb-sm-0"> <img class="rounded" src="images/blog/author.jpg" alt=""> </div>
                  <div class="col-12 col-sm">
                    <h4 class="title-blog text-5 mb-2"><a href="#">John Smith</a></h4>
                    <p class="mb-2">Some quick example text to build on the card title and make up the bulk of the card's content to orem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore. Ipsum dolor sit amet, consectetur adipiscing incididunt.</p>
                    <div class="d-flex flex-column">
                      <ul class="social-icons social-icons-dark justify-content-center justify-content-sm-start ms-n2">
                        <li class="social-icons-twitter"><a data-bs-toggle="tooltip" href="http://www.twitter.com/" target="_blank" aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
                        <li class="social-icons-facebook"><a data-bs-toggle="tooltip" href="http://www.facebook.com/" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="social-icons-linkedin"><a data-bs-toggle="tooltip" href="http://www.linkedin.com/" target="_blank" aria-label="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <hr class="my-4">
            <!-- Related Posts
            ================================= -->
            <h5 class="text-white mb-4 mt-2">Related Posts</h5>
            <div class="side-post side-post-dark">
              <div class="row g-3">
                <div class="col-12 col-md-6">
                  <div class="item-post">
                    <div class="img-thumb"><a href="https://harnishdesign.net/"><img class="img-fluid rounded" src="images/blog/post-1.jpg" title="" alt=""></a></div>
                    <div class="caption"> <a href="https://harnishdesign.net/">Bid on your favorite Crypto Collectibles!</a>
                      <p class="date-post">April 24, 2022</p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="item-post">
                    <div class="img-thumb"><a href="https://harnishdesign.net/"><img class="img-fluid rounded" src="images/blog/post-2.jpg" title="" alt=""></a></div>
                    <div class="caption"> <a href="https://harnishdesign.net/">Sell your crypto collectibles without paying gas!</a>
                      <p class="date-post">April 24, 2021</p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="item-post">
                    <div class="img-thumb"><a href="https://harnishdesign.net/"><img class="img-fluid rounded" src="images/blog/post-3.jpg" title="" alt=""></a></div>
                    <div class="caption"> <a href="https://harnishdesign.net/">Etheremon adventure land is tradeable on Metovo</a>
                      <p class="date-post">April 24, 2021</p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="item-post">
                    <div class="img-thumb"><a href="https://harnishdesign.net/"><img class="img-fluid rounded" src="images/blog/post-4.jpg" title="" alt=""></a></div>
                    <div class="caption"> <a href="https://harnishdesign.net/">Buy and sell crypto collectibles with Metovo</a>
                      <p class="date-post">April 24, 2021</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <hr class="my-4">
            
            <!-- Comments
			================================= -->
            <h5 id="comments" class="text-white mb-4">Comments (03)</h5>
            <div class="post-comment post-comment-dark">
              <ul>
                <li>
                  <div class="row">
                    <div class="col-auto pe-2"> <img class="rounded" alt="" src="images/blog/user-3.jpg"> </div>
                    <div class="col">
                      <h6> <a class="float-end text-2 btn-link" href="#"><span class="me-1"><i class="fas fa-reply-all"></i></span>Reply</a> Ruby Clinton <span class="text-white-50 text-2 fw-400 d-block d-sm-inline-block mt-2 mt-sm-0"><em>- April 15, 2021</em></span> </h6>
                      <p class="mb-0">Some quick example text to build on the card title and make up the bulk of the card's content to orem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore. Ipsum dolor sit amet, consectetur adipiscing incididunt.</p>
                    </div>
                  </div>
                  <ul>
                    <li>
                      <div class="row">
                        <div class="col-auto pe-2"> <img class="rounded" alt="" src="images/blog/user-1.jpg"> </div>
                        <div class="col">
                          <h6> <a class="float-end text-2 btn-link" href="#"><span class="me-1"><i class="fas fa-reply-all"></i></span>Reply</a> James Maxwell <span class="text-white-50 text-2 fw-400 d-block d-sm-inline-block mt-2 mt-sm-0"><em>- April 18, 2021</em></span> </h6>
                          <p class="mb-0">Some quick example text to build on the card title and make up the bulk of the card's content to orem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore.</p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                <li>
                  <div class="row">
                    <div class="col-auto pe-2"> <img class="rounded" alt="" src="images/blog/user-2.jpg"> </div>
                    <div class="col">
                      <h6> <a class="float-end text-2 btn-link" href="#"><span class="me-1"><i class="fas fa-reply-all"></i></span>Reply</a> Neil Patel <span class="text-white-50 text-2 fw-400 d-block d-sm-inline-block mt-2 mt-sm-0"><em>- March 22, 2021</em></span> </h6>
                      <p class="mb-0">Some quick example text to build on the card title and make up the bulk of the card's content to orem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore. Ipsum dolor sit amet, consectetur adipiscing incididunt.</p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <hr class="my-4">
            <!-- Write a Comment
			================================= -->
            <h5 class="text-white mb-4 mt-2">Write a Comment</h5>
            <form class="form-dark" method="post">
              <div class="row g-4">
                <div class="col-12 col-md-4">
                  <label for="yourName" class="form-label">Name</label>
                  <input type="text" class="form-control" id="yourName" required aria-describedby="yourName" placeholder="Your Name">
                </div>
                <div class="col-12 col-md-4">
                  <label for="yourEmail" class="form-label">Email</label>
                  <input type="email" class="form-control" id="yourEmail" required aria-describedby="yourName" placeholder="Your Email">
                </div>
                <div class="col-12 col-md-4">
                  <label for="yourWebsite" class="form-label">Website</label>
                  <input type="text" class="form-control" id="yourWebsite" aria-describedby="yourName" placeholder="Your Website">
                </div>
                <div class="col-12">
                  <label for="yourComment" class="form-label">Your Comment</label>
                  <textarea class="form-control" rows="4" id="yourComment" required placeholder="Your Comment"></textarea>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary rounded-pill">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- Middle Panel End --> 
        
        <!-- Right Sidebar
        ============================================= -->
        <aside class="col-lg-4 col-xl-3"> 
          
          <!-- Categories
		  =============================== -->
          <div class="shadow-sm rounded mb-4">
            <h4 class="text-5 text-white fw-400">Categories</h4>
            <hr class="border-secondary opacity-75">
            <ul class="list-item list-item-dark">
              <li><a href="#">Industry Tips<span>(24)</span></a></li>
              <li><a href="#">Sales & Marketing<span>(14)</span></a></li>
              <li><a href="#">Enterprise Hub<span>(6)</span></a></li>
              <li><a href="#">Guides<span>(8)</span></a></li>
              <li><a href="#">Finance & Management<span>(4)</span></a></li>
              <li><a href="#">Safety & Security<span>(10)</span></a></li>
              <li><a href="#">Announcements<span>(9)</span></a></li>
            </ul>
          </div>
          
          <!-- Recent Posts
		  =============================== -->
          <div class="shadow-sm rounded mb-4">
            <h4 class="text-5 text-white fw-400">Recent Posts</h4>
            <hr class="border-secondary opacity-75">
            <div class="side-post side-post-dark">
              <div class="item-post">
                <div class="img-thumb"><a href="https://harnishdesign.net/"><img class="img-fluid rounded" src="images/blog/post-2.jpg" title="" alt=""></a></div>
                <div class="caption"> <a href="https://harnishdesign.net/">Sell your crypto collectibles without..</a>
                  <p class="date-post">April 24, 2021</p>
                </div>
              </div>
              <div class="item-post">
                <div class="img-thumb"><a href="https://harnishdesign.net/"><img class="img-fluid rounded" src="images/blog/post-1.jpg" title="" alt=""></a></div>
                <div class="caption"> <a href="https://harnishdesign.net/">Bid on your favorite Crypto Collectibles...</a>
                  <p class="date-post">April 24, 2021</p>
                </div>
              </div>
              <div class="item-post">
                <div class="img-thumb"><a href="https://harnishdesign.net/"><img class="img-fluid rounded" src="images/blog/post-3.jpg" title="" alt=""></a></div>
                <div class="caption"> <a href="https://harnishdesign.net/">Etheremon adventure land is tradeable on...</a>
                  <p class="date-post">April 24, 2021</p>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Popular Tags
          =============================== -->
          <div class="shadow-sm rounded mb-4">
            <h4 class="text-5 text-white fw-400">Popular Tags</h4>
            <hr class="border-secondary opacity-75">
            <div class="tags tags-dark"> <a href="#">Art</a> <a href="#">Crypto</a> <a href="#">Tokens</a> <a href="#">Nft</a> <a href="#">Ethereum</a> <a href="#">Enterprise</a> <a href="#">Marketing</a> <a href="#">2022</a></div>
          </div>
        </aside>
        <!-- Right Sidebar End --> 
        
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

<!-- JavaScript --> 
<script src="vendor/jquery/jquery.min.js"></script> 
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
<!-- Owl Carousel --> 
<script src="vendor/owl.carousel/owl.carousel.min.js"></script> 
<!-- Style Switcher --> 
<script src="js/switcher.min.js"></script> 
<!-- Custom Script --> 
<script src="js/theme.js"></script>
</body>

<!-- Mirrored from harnishdesign.net/demo/html/scott/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Dec 2022 12:29:23 GMT -->
</html>