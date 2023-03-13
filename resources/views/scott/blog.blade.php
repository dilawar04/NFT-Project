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
        <h2 class="text-24 text-white-50 opacity-1 text-uppercase fw-600 w-100 mb-0">Articles</h2>
        <p class="text-9 text-white fw-600 position-absolute w-100 align-self-center lh-base mb-0">Blog<span class="heading-separator-line border-bottom border-3 border-primary d-block mx-auto"></span> </p>
      </div>
    </div>
    <!-- Page Heading end-->
    
    <div class="container">
      <div class="row g-5"> 
        <!-- Middle Panel
        ============================================= -->
        <div class="col-lg-8 col-xl-9">
          <div class="row g-4">
            <div class="col-md-6">
              <div class="blog-post blog-post-dark h-100 border border-secondary border-opacity-75 shadow rounded-4 p-4"> <a class="d-flex mb-4" href="https://harnishdesign.net/"><img class="img-fluid rounded-4" src="images/blog/post-1.jpg" alt=""></a>
                <h4 class="title-blog text-5"><a href="https://harnishdesign.net/">Bid on your favorite Crypto Collectibles!</a></h4>
                <ul class="meta-blog">
                  <li><i class="fas fa-calendar-alt"></i> April 24, 2022</li>
                  <li><a href="#"><i class="fas fa-user"></i> Admin</a></li>
                  <li><a href="#"><i class="fas fa-comments"></i> 5</a></li>
                </ul>
                <p>Some quick example text to build on the card title make up the bulk of the card's content. Ipsum dolor sit amet, consectetur adipiscing elit.....</p>
                <a href="https://harnishdesign.net/" class="btn btn-primary btn-sm rounded-pill">Read more</a> </div>
            </div>
            <div class="col-md-6">
              <div class="blog-post blog-post-dark h-100 border border-secondary border-opacity-75 shadow rounded-4 p-4"> <a class="d-flex mb-4" href="https://harnishdesign.net/"><img class="img-fluid rounded-4" src="images/blog/post-2.jpg" alt=""></a>
                <h4 class="title-blog text-5"><a href="https://harnishdesign.net/">Sell your crypto collectibles without paying gas!</a></h4>
                <ul class="meta-blog">
                  <li><i class="fas fa-calendar-alt"></i> April 24, 2022</li>
                  <li><a href="#"><i class="fas fa-user"></i> Admin</a></li>
                  <li><a href="#"><i class="fas fa-comments"></i> 4</a></li>
                </ul>
                <p>Some quick example text to build on the card title make up the bulk of the card's content. Ipsum dolor sit amet, consectetur adipiscing elit.....</p>
                <a href="https://harnishdesign.net/" class="btn btn-primary btn-sm rounded-pill">Read more</a> </div>
            </div>
            <div class="col-md-6">
              <div class="blog-post blog-post-dark h-100 border border-secondary border-opacity-75 shadow rounded-4 p-4"> <a class="d-flex mb-4" href="https://harnishdesign.net/"><img class="img-fluid rounded-4" src="images/blog/post-3.jpg" alt=""></a>
                <h4 class="title-blog text-5"><a href="https://harnishdesign.net/">Etheremon adventure land is tradeable on Scott</a></h4>
                <ul class="meta-blog">
                  <li><i class="fas fa-calendar-alt"></i> April 24, 2022</li>
                  <li><a href="#"><i class="fas fa-user"></i> Admin</a></li>
                  <li><a href="#"><i class="fas fa-comments"></i> 8</a></li>
                </ul>
                <p>Some quick example text to build on the card title make up the bulk of the card's content. Ipsum dolor sit amet, consectetur adipiscing elit.....</p>
                <a href="https://harnishdesign.net/" class="btn btn-primary btn-sm rounded-pill">Read more</a> </div>
            </div>
            <div class="col-md-6">
              <div class="blog-post blog-post-dark h-100 border border-secondary border-opacity-75 shadow rounded-4 p-4"> <a class="d-flex mb-4" href="https://harnishdesign.net/"><img class="img-fluid rounded-4" src="images/blog/post-4.jpg" alt=""></a>
                <h4 class="title-blog text-5"><a href="https://harnishdesign.net/">Buy crypto collectibles from Scott</a></h4>
                <ul class="meta-blog">
                  <li><i class="fas fa-calendar-alt"></i> April 24, 2022</li>
                  <li><a href="#"><i class="fas fa-user"></i> Admin</a></li>
                  <li><a href="#"><i class="fas fa-comments"></i> 2</a></li>
                </ul>
                <p>Some quick example text to build on the card title make up the bulk of the card's content. Ipsum dolor sit amet, consectetur adipiscing elit.....</p>
                <a href="https://harnishdesign.net/" class="btn btn-primary btn-sm rounded-pill">Read more</a> </div>
            </div>
          </div>
          
          <!-- Pagination
          ============================================= -->
          <ul class="pagination pagination-lg justify-content-center my-5">
            <li class="page-item disabled"> <a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-left"></i></a> </li>
            <li class="page-item active"> <a class="page-link" href="#">1</a> </li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item d-flex align-content-center flex-wrap text-muted text-5 mx-1">......</li>
            <li class="page-item"><a class="page-link" href="#">25</a></li>
            <li class="page-item"> <a class="page-link" href="#"><i class="fas fa-angle-right"></i></a> </li>
          </ul>
          <!-- Paginations end --> 
          
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
  
  @endsection