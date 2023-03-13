@extends('../layout/master')
@section('main-content')
  <!-- Header End --> 
  
 
 
  <!-- Content
  ======================== -->
  <div id="content" role="main"> 
    
    <!-- Intro
    ========================= -->
    <section id="home">
      <div class="hero-wrap">
        <div class="hero-content section pb-0 d-flex min-vh-100">
          <div class="container py-5 my-auto">
            <div class="row gy-5 g-lg-4">
              <div class="col-md-6 my-auto text-center text-md-start pt-5 pt-md-0 order-2 order-md-1">
                <h1 class="text-17 fw-600 text-white">The Scott<br class="d-none d-md-block">
                  NFT Collection</h1>
                <p class="text-4 text-light mb-4">The Scort Art studio is a private collection of NFTs unique digital collectibles. Simply dummy text of the printing and typesetting industry quidam interesset his et essent possim iriure.</p>
                <a href="javascript:void(0)" class="btn btn-primary rounded-pill mint" id="mint">Mint Now <span class="text-2 ms-2"><i class="fa fa-chevron-right"></i></span></a> </div>
              <div class="col-md-6 pb-5 pb-md-0 order-1 order-md-2"> 
                <!-- Parallax Mouse Move -->
                <div id="scene" data-relative-input="true" class="scene">
                  <div data-depth="0.6" class="ms-5 mt-md-n5"><img class="img-fluid rounded-4 shadow-lg" src="images/collections/item-3.jpg" alt=""></div>
                  <div data-depth="0.3" class="top-50 start-0 ms-n3 mt-md-5"><img class="img-fluid rounded-4 shadow-lg" src="images/collections/item-1.jpg" alt=""></div>
                  <div data-depth="0.4" class="top-50 start-50 mt-n4"><img class="img-fluid rounded-4 shadow-lg" src="images/collections/item-2.jpg" alt=""></div>
                </div>
                <!-- Parallax Mouse Move End --> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Intro end --> 
    
    <!-- Number -->
    <div class="mt-5">
      <div class="container">
        <div class="row g-4">
          <div class="col-6 col-lg-3">
            <div class="hero-wrap py-3">
              <div class="hero-mask rounded-4 opacity-7 bg-dark"></div>
              <div class="hero-content text-center py-4 px-3">
                <h4 class="text-11 text-white fw-600 mb-0">2999</h4>
                <div class="text-4 text-light">Total Items</div>
              </div>
            </div>
          </div>
          <div class="col-6 col-lg-3">
            <div class="hero-wrap py-3">
              <div class="hero-mask rounded-4 opacity-7 bg-dark"></div>
              <div class="hero-content text-center py-4 px-3">
                <h4 class="text-11 text-white fw-600 mb-0">1076</h4>
                <div class="text-4 text-light">Total Owners</div>
              </div>
            </div>
          </div>
          <div class="col-6 col-lg-3">
            <div class="hero-wrap py-3">
              <div class="hero-mask rounded-4 opacity-7 bg-dark"></div>
              <div class="hero-content text-center py-4 px-3">
                <h4 class="text-11 text-white fw-600 mb-0">0.25</h4>
                <div class="text-4 text-light">Floor Price (ETH)</div>
              </div>
            </div>
          </div>
          <div class="col-6 col-lg-3">
            <div class="hero-wrap py-3">
              <div class="hero-mask rounded-4 opacity-7 bg-dark"></div>
              <div class="hero-content text-center py-4 px-3">
                <h4 class="text-11 text-white fw-600 mb-0">445K</h4>
                <div class="text-4 text-light">Volume Traded</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Number end --> 
    
    <!-- About
    ========================== -->
    <section id="about" class="section">
      <div class="container"> 
        <!-- Heading -->
        <div class="position-relative d-flex text-center mb-5">
          <h2 class="text-24 text-white-50 opacity-1 text-uppercase fw-600 w-100 mb-0">About Us</h2>
          <p class="text-9 text-white fw-600 position-absolute w-100 align-self-center lh-base mb-0">Our Story<span class="heading-separator-line border-bottom border-3 border-primary d-block mx-auto"></span> </p>
        </div>
        <!-- Heading end-->
        
        <div class="row">
          <div class="col-lg-6 position-relative">
            <div class="about-img">
              <div class="img-1"><img class="img-fluid rounded-4 shadow-lg" src="images/collections/item-4.jpg" alt=""></div>
              <div class="img-2"><img class="img-fluid rounded-4 shadow-lg" src="images/collections/item-5.jpg" alt=""></div>
            </div>
          </div>
          <div class="col-lg-6 text-center text-lg-start">
            <h2 class="text-12 text-white fw-600 mb-3">Welcome to The Scott Art Studio.</h2>
            <p class="text-5 text-white">The Scort Art studio is a private collection of NFTs unique digital collectibles. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <p class="text-light">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <a class="btn btn-primary rounded-pill mt-2" href="#join">Join Our Discord <span class="text-2 ms-2"><i class="fa fa-chevron-right"></i></span></a> </div>
        </div>
      </div>
    </section>
    <!-- About end --> 
    
    <!-- Roadmap
    =========================== -->
    <section id="roadmap" class="section">
      <div class="container"> 
        <!-- Heading -->
        <div class="position-relative d-flex text-center mb-5">
          <h2 class="text-24 text-white-50 opacity-1 text-uppercase fw-600 w-100 mb-0">Timeline</h2>
          <p class="text-9 text-white fw-600 position-absolute w-100 align-self-center lh-base mb-0">Roadmap<span class="heading-separator-line border-bottom border-3 border-primary d-block mx-auto"></span> </p>
        </div>
        <!-- Heading end-->
        
        <div class="roadmap text-white"> 
          <!-- 1st -->
          <div class="row gy-3 mb-5">
            <div class="col-md-6">
              <div class="step-pr shadow mx-auto ms-md-auto me-md-5">
                <div class="text-14 fw-600 text-primary me-n2">0<sup class="text-8 fw-300">%</sup></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="text-center text-md-start ms-md-5">
                <p class="text-4 fw-500 d-inline-flex align-items-center mb-2">Q1 - 2022 <span class="badge bg-success fw-400 rounded-pill px-3 ms-2">Completed</span></p>
                <h2 class="text-white fw-600 mb-3">Community DAO</h2>
                <p class="text-light">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </div>
            </div>
          </div>
          
          <!-- 2nd -->
          <div class="row gy-4 mb-5">
            <div class="col-md-6 order-1 order-md-2">
              <div class="step-pr alternate shadow mx-auto me-md-auto ms-md-5">
                <div class="text-14 fw-600 text-primary me-n2">20<sup class="text-8 fw-300">%</sup></div>
              </div>
            </div>
            <div class="col-md-6 order-2 order-md-1">
              <div class="text-center text-md-end me-md-5">
                <p class="text-4 fw-500 d-inline-flex align-items-center mb-2"><span class="badge bg-success fw-400 rounded-pill px-3 me-2">Completed</span> Q2 - 2022</p>
                <h2 class="text-white fw-600 mb-3">Opening Event</h2>
                <p class="text-light">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </div>
            </div>
          </div>
          
          <!-- 3rd -->
          <div class="row gy-4 mb-5">
            <div class="col-md-6">
              <div class="step-pr shadow mx-auto ms-md-auto me-md-5">
                <div class="text-14 fw-600 text-primary me-n2">40<sup class="text-8 fw-300">%</sup></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="text-center text-md-start ms-md-5">
                <p class="text-4 fw-500 d-inline-flex align-items-center mb-2">Q3 - 2022 <span class="badge bg-success fw-400 rounded-pill px-3 ms-2">Completed</span></p>
                <h2 class="text-white fw-600 mb-3">Charity Donation</h2>
                <p class="text-light">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </div>
            </div>
          </div>
          
          <!-- 4th -->
          <div class="row gy-4 mb-5">
            <div class="col-md-6 order-1 order-md-2">
              <div class="step-pr alternate shadow mx-auto me-md-auto ms-md-5">
                <div class="text-14 fw-600 text-primary me-n2">60<sup class="text-8 fw-300">%</sup></div>
              </div>
            </div>
            <div class="col-md-6 order-2 order-md-1">
              <div class="text-center text-md-end me-md-5">
                <p class="text-4 fw-500 d-inline-flex align-items-center mb-2"><span class="badge bg-warning text-dark fw-400 rounded-pill px-3 me-2">In Progress</span> Q4 - 2022</p>
                <h2 class="text-white fw-600 mb-3">Rare Giveaways</h2>
                <p class="text-light">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </div>
            </div>
          </div>
          
          <!-- 5th -->
          <div class="row gy-4 mb-5">
            <div class="col-md-6">
              <div class="step-pr shadow mx-auto ms-md-auto me-md-5">
                <div class="text-14 fw-600 text-primary me-n2">80<sup class="text-8 fw-300">%</sup></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="text-center text-md-start ms-md-5">
                <p class="text-4 fw-500 d-inline-flex align-items-center mb-2">Q5 - 2023 <span class="badge bg-warning text-dark fw-400 rounded-pill px-3 ms-2">In Progress</span></p>
                <h2 class="text-white fw-600 mb-3">New Nfts</h2>
                <p class="text-light">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </div>
            </div>
          </div>
          
          <!-- 6th -->
          <div class="row gy-4">
            <div class="col-md-6 order-1 order-md-2">
              <div class="step-pr alternate shadow mx-auto me-md-auto ms-md-5">
                <div class="text-14 fw-600 text-primary me-n2">100<sup class="text-8 fw-300">%</sup></div>
              </div>
            </div>
            <div class="col-md-6 order-2 order-md-1">
              <div class="text-center text-md-end me-md-5">
                <p class="text-4 fw-500 d-inline-flex align-items-center mb-2"><span class="badge bg-warning text-dark fw-400 rounded-pill px-3 me-2">In Progress</span> Q6 - 2023</p>
                <h2 class="text-white fw-600 mb-3">Metaverse</h2>
                <p class="text-light">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Roadmap end --> 
    
    <!-- Collections
    ============================= -->
    <section id="collections" class="section">
      <div class="container"> 
        <!-- Heading -->
        <div class="position-relative d-flex text-center mb-5">
          <h2 class="text-24 text-white-50 opacity-1 text-uppercase fw-600 w-100 mb-0">Showcase</h2>
          <p class="text-9 text-white fw-600 position-absolute w-100 align-self-center lh-base mb-0">Our Collections<span class="heading-separator-line border-bottom border-3 border-primary d-block mx-auto"></span> </p>
        </div>
        <!-- Heading end--> 
      </div>
      
      <!-- Carousel -->
      <div class="owl-carousel owl-theme" data-loop="true" data-dots="false" data-nav="false" data-autoplay="true" data-autoplaytimeout="3000" data-smartspeed="3000" data-slidetransition="linear" data-center="true" data-margin="25" data-stagepadding="0" data-slideby="1" data-items-xs="3" data-items-sm="4" data-items-md="4" data-items-lg="5">
        <div class="item"> <img class="img-fluid rounded-4" src="images/collections/item-1.jpg" alt=""> </div>
        <div class="item"> <img class="img-fluid rounded-4" src="images/collections/item-5.jpg" alt=""> </div>
        <div class="item"> <img class="img-fluid rounded-4" src="images/collections/item-3.jpg" alt=""> </div>
        <div class="item"> <img class="img-fluid rounded-4" src="images/collections/item-6.jpg" alt=""> </div>
        <div class="item"> <img class="img-fluid rounded-4" src="images/collections/item-4.jpg" alt=""> </div>
        <div class="item"> <img class="img-fluid rounded-4" src="images/collections/item-2.jpg" alt=""> </div>
      </div>
      <!-- Carousel End --> 
      
      <!-- Carousel Reverse -->
      <div class="owl-carousel owl-theme" data-rtl="true" data-loop="true" data-dots="false" data-nav="false" data-autoplay="true" data-autoplaytimeout="3000" data-smartspeed="3000" data-slidetransition="linear" data-center="true" data-margin="25" data-stagepadding="0" data-slideby="1" data-items-xs="3" data-items-sm="4" data-items-md="4" data-items-lg="5">
        <div class="item"> <img class="img-fluid rounded-4" src="images/collections/item-7.jpg" alt=""> </div>
        <div class="item"> <img class="img-fluid rounded-4" src="images/collections/item-8.jpg" alt=""> </div>
        <div class="item"> <img class="img-fluid rounded-4" src="images/collections/item-9.jpg" alt=""> </div>
        <div class="item"> <img class="img-fluid rounded-4" src="images/collections/item-10.jpg" alt=""> </div>
        <div class="item"> <img class="img-fluid rounded-4" src="images/collections/item-11.jpg" alt=""> </div>
      </div>
      <!-- Carousel Reverse End --> 
      
      <!-- Button -->
      <div class="container text-center mt-5"> <a class="btn btn-primary rounded-pill mt-2" href="collections.html">View Collections <span class="text-2 ms-2"><i class="fa fa-chevron-right"></i></span></a> </div>
      <!-- Button End--> 
    </section>
    <!-- Collections end --> 
    
    <!-- Team
    ============================ -->
    <section id="team" class="section">
      <div class="container"> 
        <!-- Heading -->
        <div class="position-relative d-flex text-center mb-5">
          <h2 class="text-24 text-white-50 opacity-1 text-uppercase fw-600 w-100 mb-0">Leadership</h2>
          <p class="text-9 text-white fw-600 position-absolute w-100 align-self-center lh-base mb-0">Meet Our Team<span class="heading-separator-line border-bottom border-3 border-primary d-block mx-auto"></span> </p>
        </div>
        <!-- Heading end-->
        <div class="row g-4">
          <div class="col-sm-6 col-lg-3">
            <div class="team bg-dark rounded-4 d-inline-block text-center"> <img class="img-fluid rounded-4" alt="" src="images/team/leader.jpg">
              <h3 class="text-white">Neil Patel</h3>
              <p class="text-white-50">CEO &amp; Founder</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="team bg-dark rounded-4 d-inline-block text-center"> <img class="img-fluid rounded-4" alt="" src="images/team/leader-2.jpg">
              <h3 class="text-white">James Maxwell</h3>
              <p class="text-white-50">Co-Founder</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="team bg-dark rounded-4 d-inline-block text-center"> <img class="img-fluid rounded-4" alt="" src="images/team/leader-3.jpg">
              <h3 class="text-white">Ruby Clinton</h3>
              <p class="text-white-50">Chief Marketing Officer</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="team bg-dark rounded-4 d-inline-block text-center"> <img class="img-fluid rounded-4" alt="" src="images/team/leader-4.jpg">
              <h3 class="text-white">Miky Sheth</h3>
              <p class="text-white-50">General Manager</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="team bg-dark rounded-4 d-inline-block text-center"> <img class="img-fluid rounded-4" alt="" src="images/team/leader-5.jpg">
              <h3 class="text-white">Simone Olivia</h3>
              <p class="text-white-50">Developer</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="team bg-dark rounded-4 d-inline-block text-center"> <img class="img-fluid rounded-4" alt="" src="images/team/leader-6.jpg">
              <h3 class="text-white">Callum Smith</h3>
              <p class="text-white-50">Designer</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="team bg-dark rounded-4 d-inline-block text-center"> <img class="img-fluid rounded-4" alt="" src="images/team/leader-7.jpg">
              <h3 class="text-white">Kenil Paul</h3>
              <p class="text-white-50">Designer</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="team bg-dark rounded-4 d-inline-block text-center"> <img class="img-fluid rounded-4" alt="" src="images/team/leader-8.jpg">
              <h3 class="text-white">James Anderson</h3>
              <p class="text-white-50">Designer</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Team end --> 
    
    <!-- FAQ
    ============================ -->
    <section id="faq" class="section">
      <div class="container"> 
        <!-- Heading -->
        <div class="position-relative d-flex text-center mb-5">
          <h2 class="text-24 text-white-50 opacity-1 text-uppercase fw-600 w-100 mb-0">Questions</h2>
          <p class="text-9 text-white fw-600 position-absolute w-100 align-self-center lh-base mb-0">Frequently Asked Questions<span class="heading-separator-line border-bottom border-3 border-primary d-block mx-auto"></span> </p>
        </div>
        <!-- Heading end-->
        <div class="row gy-5">
          <div class="col-lg-6 order-1 order-lg-0"> 
            <!-- Accordion Start -->
            <div class="accordion accordion-flush accordion-dark" id="faqTopics">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">What is Scott NFT?</button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#faqTopics">
                  <div class="accordion-body">
                    <p class="mb-0">Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Mutat tacimates id sit. Ridens mediocritatem ius an, eu nec magna imperdiet.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">How Can I Use My NFT ?</button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#faqTopics">
                  <div class="accordion-body">
                    <p>Iisque Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                    <p class="mb-0">Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">Where can I View My NFTS ?</button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#faqTopics">
                  <div class="accordion-body">
                    <p class="mb-0">Iisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Mutat tacimates id sit. Ridens mediocritatem ius an, eu nec magna imperdiet.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">How we can buy and invest NFT ?</button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#faqTopics">
                  <div class="accordion-body">
                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFive">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">Where we can buy and sell NFts ?</button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#faqTopics">
                  <div class="accordion-body">
                    <p class="mb-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingSix">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">Where does my NFT go after I purchase ?</button>
                </h2>
                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#faqTopics">
                  <div class="accordion-body">
                    <p class="mb-0">Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Accordion End --> 
          </div>
          <div class="col-lg-6 d-flex align-items-center justify-content-center order-0 order-lg-1"> <img class="img-fluid" src="images/faq.png" title="FAQ" alt="faq"> </div>
        </div>
      </div>
    </section>
    <!-- FAQ end --> 
    
    <!-- Blog Articles
    ============================ -->
    <section id="blog" class="section">
      <div class="container"> 
        <!-- Heading -->
        <div class="position-relative d-flex text-center mb-5">
          <h2 class="text-24 text-white-50 opacity-1 text-uppercase fw-600 w-100 mb-0">Articles</h2>
          <p class="text-9 text-white fw-600 position-absolute w-100 align-self-center lh-base mb-0">Blog<span class="heading-separator-line border-bottom border-3 border-primary d-block mx-auto"></span> </p>
        </div>
        <!-- Heading end-->
        
        <div class="owl-carousel owl-theme owl-light" data-autoplay="false" data-dots="true" data-nav="true" data-loop="false" data-margin="25" data-slideby="4" data-stagepadding="5" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-lg="3">
          <div class="item">
            <div class="blog-post blog-post-dark h-100 border border-secondary border-opacity-75 shadow rounded-4 p-4"> <a class="d-flex mb-4" href="https://harnishdesign.net/"><img class="img-fluid rounded-4" src="images/blog/post-1.jpg" alt=""></a>
              <h4 class="title-blog text-5"><a href="https://harnishdesign.net/">Bid on your favorite Crypto Collectibles!</a></h4>
              <ul class="meta-blog">
                <li><i class="fas fa-calendar-alt"></i> April 24, 2022</li>
                <li><a href="#"><i class="fas fa-user"></i> Admin</a></li>
                <li><a href="#"><i class="fas fa-comments"></i> 5</a></li>
              </ul>
              <p>Some quick example text to build on the card title make up elit.....</p>
              <a href="https://harnishdesign.net/" class="btn btn-primary btn-sm rounded-pill">Read more</a> </div>
          </div>
          <div class="item">
            <div class="blog-post blog-post-dark h-100 border border-secondary border-opacity-75 shadow rounded-4 p-4"> <a class="d-flex mb-4" href="https://harnishdesign.net/"><img class="img-fluid rounded-4" src="images/blog/post-2.jpg" alt=""></a>
              <h4 class="title-blog text-5"><a href="https://harnishdesign.net/">Sell your crypto collectibles without paying gas!</a></h4>
              <ul class="meta-blog">
                <li><i class="fas fa-calendar-alt"></i> April 24, 2022</li>
                <li><a href="#"><i class="fas fa-user"></i> Admin</a></li>
                <li><a href="#"><i class="fas fa-comments"></i> 4</a></li>
              </ul>
              <p>Some quick example text to build on the card title make up elit.....</p>
              <a href="https://harnishdesign.net/" class="btn btn-primary btn-sm rounded-pill">Read more</a> </div>
          </div>
          <div class="item">
            <div class="blog-post blog-post-dark h-100 border border-secondary border-opacity-75 shadow rounded-4 p-4"> <a class="d-flex mb-4" href="https://harnishdesign.net/"><img class="img-fluid rounded-4" src="images/blog/post-3.jpg" alt=""></a>
              <h4 class="title-blog text-5"><a href="https://harnishdesign.net/">Etheremon adventure land is tradeable on Scott</a></h4>
              <ul class="meta-blog">
                <li><i class="fas fa-calendar-alt"></i> April 24, 2022</li>
                <li><a href="#"><i class="fas fa-user"></i> Admin</a></li>
                <li><a href="#"><i class="fas fa-comments"></i> 8</a></li>
              </ul>
              <p>Some quick example text to build on the card title make up elit.....</p>
              <a href="https://harnishdesign.net/" class="btn btn-primary btn-sm rounded-pill">Read more</a> </div>
          </div>
          <div class="item">
            <div class="blog-post blog-post-dark h-100 border border-secondary border-opacity-75 shadow rounded-4 p-4"> <a class="d-flex mb-4" href="https://harnishdesign.net/"><img class="img-fluid rounded-4" src="images/blog/post-4.jpg" alt=""></a>
              <h4 class="title-blog text-5"><a href="https://harnishdesign.net/">Buy crypto collectibles from Scott</a></h4>
              <ul class="meta-blog">
                <li><i class="fas fa-calendar-alt"></i> April 24, 2022</li>
                <li><a href="#"><i class="fas fa-user"></i> Admin</a></li>
                <li><a href="#"><i class="fas fa-comments"></i> 2</a></li>
              </ul>
              <p>Some quick example text to build on the card title make up elit.....</p>
              <a href="https://harnishdesign.net/" class="btn btn-primary btn-sm rounded-pill">Read more</a> </div>
          </div>
        </div>
        
        <!-- Button -->
        <div class="text-center mt-4"> <a class="btn btn-outline-light rounded-pill mt-2" href="blog.html">View all Articles <span class="text-2 ms-2"><i class="fa fa-chevron-right"></i></span></a> </div>
        <!-- Button End--> 
        
      </div>
    </section>
    <!-- Blog Articles end --> 
    
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
  
  