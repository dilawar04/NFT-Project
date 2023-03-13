  @extends('../layout/master')
  @section('main-content')

  

  <!-- Content
  ======================== -->
  <div id="content" role="main"> 
    
    <!-- Page Heading -->
    <div class="container pt-5">
      <div class="position-relative d-flex text-center my-5 py-5">
        <h2 class="text-24 text-white-50 opacity-1 text-uppercase fw-600 w-100 mb-0">Items</h2>
        <p class="text-9 text-white fw-600 position-absolute w-100 align-self-center lh-base mb-0">Public Sale <span class="heading-separator-line border-bottom border-3 border-primary d-block mx-auto"></span> </p>
      </div>
    </div>
    <!-- Page Heading end-->
    
    <div class="container">
      <div class="row g-5"> 
        <!-- Side Panel
		  ============================================= -->
        <!-- <aside class="col-lg-3">
          <div class="border border-secondary border-opacity-50 shadow rounded-4 p-3 pb-0">
            <div class="accordion accordion-dark accordion-flush arrow-end mt-n3" id="toggleAlternate">
              <div class="accordion-item">
                <div class="accordion-header" id="nftaccessory">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#toggleNFTaccessory" aria-expanded="true" aria-controls="toggleNFTaccessory">Accessory</button>
                </div>
                <div id="toggleNFTaccessory" class="accordion-collapse collapse show" aria-labelledby="nftaccessory">
                  <div class="accordion-body px-0 mt-n2">
                    <div class="form-check my-2">
                      <input class="form-check-input" type="checkbox" id="accessory1">
                      <label class="form-check-label d-flex justify-content-between align-items-center" for="accessory1">Knife <small class="opacity-8">250</small></label>
                    </div>
                    <div class="form-check my-2">
                      <input class="form-check-input" type="checkbox" id="accessory2">
                      <label class="form-check-label d-flex justify-content-between align-items-center" for="accessory2">Boo <small class="opacity-8">76</small></label>
                    </div>
                    <div class="form-check my-2">
                      <input class="form-check-input" type="checkbox" id="accessory3">
                      <label class="form-check-label d-flex justify-content-between align-items-center" for="accessory3">Red Balloon <small class="opacity-8">31</small></label>
                    </div>
                    <div class="form-check my-2">
                      <input class="form-check-input" type="checkbox" id="accessory4">
                      <label class="form-check-label d-flex justify-content-between align-items-center" for="accessory4">Like <small class="opacity-8">122</small></label>
                    </div>
                    <div class="form-check my-2">
                      <input class="form-check-input" type="checkbox" id="accessory5">
                      <label class="form-check-label d-flex justify-content-between align-items-center" for="accessory5">Witch Broom <small class="opacity-8">15</small></label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <div class="accordion-header" id="nftbackground">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#toggleNFTbackground" aria-expanded="true" aria-controls="toggleNFTbackground">Background</button>
                </div>
                <div id="toggleNFTbackground" class="accordion-collapse collapse show" aria-labelledby="nftbackground">
                  <div class="accordion-body px-0 mt-n2">
                    <div class="form-check my-2">
                      <input class="form-check-input" type="checkbox" id="background1">
                      <label class="form-check-label d-flex justify-content-between align-items-center" for="background1">Green <small class="opacity-8">250</small></label>
                    </div>
                    <div class="form-check my-2">
                      <input class="form-check-input" type="checkbox" id="background2">
                      <label class="form-check-label d-flex justify-content-between align-items-center" for="background2">Orange <small class="opacity-8">76</small></label>
                    </div>
                    <div class="form-check my-2">
                      <input class="form-check-input" type="checkbox" id="background3">
                      <label class="form-check-label d-flex justify-content-between align-items-center" for="background3">Blue <small class="opacity-8">31</small></label>
                    </div>
                    <div class="form-check my-2">
                      <input class="form-check-input" type="checkbox" id="background4">
                      <label class="form-check-label d-flex justify-content-between align-items-center" for="background4">Red <small class="opacity-8">122</small></label>
                    </div>
                    <div class="form-check my-2">
                      <input class="form-check-input" type="checkbox" id="background6">
                      <label class="form-check-label d-flex justify-content-between align-items-center" for="background6">Yellow <small class="opacity-8">15</small></label>
                    </div>
                    <div class="form-check my-2">
                      <input class="form-check-input" type="checkbox" id="background7">
                      <label class="form-check-label d-flex justify-content-between align-items-center" for="background7">Pink <small class="opacity-8">99</small></label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <div class="accordion-header" id="nftclothes">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#toggleNFTclothes" aria-expanded="true" aria-controls="toggleNFTclothes">Clothes</button>
                </div>
                <div id="toggleNFTclothes" class="accordion-collapse collapse show" aria-labelledby="nftclothes">
                  <div class="accordion-body px-0 mt-n2">
                    <div class="form-check my-2">
                      <input class="form-check-input" type="checkbox" id="clothes1">
                      <label class="form-check-label d-flex justify-content-between align-items-center" for="clothes1">Bear Tshirt <small class="opacity-8">250</small></label>
                    </div>
                    <div class="form-check my-2">
                      <input class="form-check-input" type="checkbox" id="clothes2">
                      <label class="form-check-label d-flex justify-content-between align-items-center" for="clothes2">Jacket <small class="opacity-8">76</small></label>
                    </div>
                    <div class="form-check my-2">
                      <input class="form-check-input" type="checkbox" id="clothes3">
                      <label class="form-check-label d-flex justify-content-between align-items-center" for="clothes3">Hoodie <small class="opacity-8">31</small></label>
                    </div>
                    <div class="form-check my-2">
                      <input class="form-check-input" type="checkbox" id="clothes4">
                      <label class="form-check-label d-flex justify-content-between align-items-center" for="clothes4">Red Stripes <small class="opacity-8">122</small></label>
                    </div>
                    <div class="form-check my-2">
                      <input class="form-check-input" type="checkbox" id="clothes5">
                      <label class="form-check-label d-flex justify-content-between align-items-center" for="clothes5">Rainbow Jacket <small class="opacity-8">63</small></label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <div class="accordion-header" id="nfteyes">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#toggleNFTeyes" aria-expanded="true" aria-controls="toggleNFTeyes"> Eyes </button>
                </div>
                <div id="toggleNFTeyes" class="accordion-collapse collapse show" aria-labelledby="nfteyes">
                  <div class="accordion-body px-0 mt-n2">
                    <div class="form-check my-2">
                      <input class="form-check-input" type="checkbox" id="eyes1">
                      <label class="form-check-label d-flex justify-content-between align-items-center" for="eyes1">Happy <small class="opacity-8">250</small></label>
                    </div>
                    <div class="form-check my-2">
                      <input class="form-check-input" type="checkbox" id="eyes2">
                      <label class="form-check-label d-flex justify-content-between align-items-center" for="eyes2">Closed <small class="opacity-8">76</small></label>
                    </div>
                    <div class="form-check my-2">
                      <input class="form-check-input" type="checkbox" id="eyes3">
                      <label class="form-check-label d-flex justify-content-between align-items-center" for="eyes3">Cute <small class="opacity-8">31</small></label>
                    </div>
                    <div class="form-check my-2">
                      <input class="form-check-input" type="checkbox" id="eyes4">
                      <label class="form-check-label d-flex justify-content-between align-items-center" for="eyes4">Crying <small class="opacity-8">31</small></label>
                    </div>
                    <div class="form-check my-2">
                      <input class="form-check-input" type="checkbox" id="eyes5">
                      <label class="form-check-label d-flex justify-content-between align-items-center" for="eyes5">Laughing <small class="opacity-8">31</small></label>
                    </div>
                    <div class="form-check my-2">
                      <input class="form-check-input" type="checkbox" id="eyes6">
                      <label class="form-check-label d-flex justify-content-between align-items-center" for="eyes6">Angry <small class="opacity-8">31</small></label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <div class="accordion-header" id="nftmouth">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#toggleNFTmouth" aria-expanded="false" aria-controls="toggleNFTmouth">Mouth</button>
                </div>
                <div id="toggleNFTmouth" class="accordion-collapse collapse" aria-labelledby="nftmouth">
                  <div class="accordion-body px-0 mt-n2">
                    <div class="pre-scrollable pe-2">
                      <div class="form-check my-2">
                        <input class="form-check-input" type="checkbox" id="mouth1">
                        <label class="form-check-label d-flex justify-content-between align-items-center" for="mouth1">Sad <small class="opacity-8">250</small></label>
                      </div>
                      <div class="form-check my-2">
                        <input class="form-check-input" type="checkbox" id="mouth2">
                        <label class="form-check-label d-flex justify-content-between align-items-center" for="mouth2">Smiling <small class="opacity-8">76</small></label>
                      </div>
                      <div class="form-check my-2">
                        <input class="form-check-input" type="checkbox" id="mouth3">
                        <label class="form-check-label d-flex justify-content-between align-items-center" for="mouth3">Boo <small class="opacity-8">31</small></label>
                      </div>
                      <div class="form-check my-2">
                        <input class="form-check-input" type="checkbox" id="mouth4">
                        <label class="form-check-label d-flex justify-content-between align-items-center" for="mouth4">Teeth <small class="opacity-8">122</small></label>
                      </div>
                      <div class="form-check my-2">
                        <input class="form-check-input" type="checkbox" id="mouth5">
                        <label class="form-check-label d-flex justify-content-between align-items-center" for="mouth5">Laughing <small class="opacity-8">63</small></label>
                      </div>
                      <div class="form-check my-2">
                        <input class="form-check-input" type="checkbox" id="mouth6">
                        <label class="form-check-label d-flex justify-content-between align-items-center" for="mouth6">Tongue <small class="opacity-8">15</small></label>
                      </div>
                      <div class="form-check my-2">
                        <input class="form-check-input" type="checkbox" id="mouth7">
                        <label class="form-check-label d-flex justify-content-between align-items-center" for="mouth7">Happy <small class="opacity-8">99</small></label>
                      </div>
                      <div class="form-check my-2">
                        <input class="form-check-input" type="checkbox" id="mouth8">
                        <label class="form-check-label d-flex justify-content-between align-items-center" for="mouth8">Scared <small class="opacity-8">99</small></label>
                      </div>
                      <div class="form-check my-2">
                        <input class="form-check-input" type="checkbox" id="mouth9">
                        <label class="form-check-label d-flex justify-content-between align-items-center" for="mouth9">Sharp Teeth <small class="opacity-8">99</small></label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <div class="accordion-header" id="nftskin">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#toggleNFTskin" aria-expanded="false" aria-controls="toggleNFTskin">Skin</button>
                </div>
                <div id="toggleNFTskin" class="accordion-collapse collapse" aria-labelledby="nftskin">
                  <div class="accordion-body px-0 mt-n2">
                    <div class="form-check my-2">
                      <input class="form-check-input" type="checkbox" id="skin1">
                      <label class="form-check-label d-flex justify-content-between align-items-center" for="skin1">White <small class="opacity-8">250</small></label>
                    </div>
                    <div class="form-check my-2">
                      <input class="form-check-input" type="checkbox" id="skin2">
                      <label class="form-check-label d-flex justify-content-between align-items-center" for="skin2">Red <small class="opacity-8">76</small></label>
                    </div>
                    <div class="form-check my-2">
                      <input class="form-check-input" type="checkbox" id="skin3">
                      <label class="form-check-label d-flex justify-content-between align-items-center" for="skin3">Blue <small class="opacity-8">31</small></label>
                    </div>
                    <div class="form-check my-2">
                      <input class="form-check-input" type="checkbox" id="skin4">
                      <label class="form-check-label d-flex justify-content-between align-items-center" for="skin4">Black <small class="opacity-8">31</small></label>
                    </div>
                    <div class="form-check my-2">
                      <input class="form-check-input" type="checkbox" id="skin5">
                      <label class="form-check-label d-flex justify-content-between align-items-center" for="skin5">Brown <small class="opacity-8">31</small></label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </aside> -->
        <!-- Side Panel end -->
        
        <div class="col-lg-12">
          <div class="row">
            <div class="col-10 d-flex justify-content-end text-white">
            <!-- <div class="form-group row">
              <label  class="col-sm-4 col-form-label">Sort By</label>
              <div class="col-sm-8">
                <select class="form-control form-control-sm" name="order_by">
                  <option value="rarity">Rarity</option>
                  <option value="price_asc">Price low to high </option>
                  <option value="price_desc">Price high to low </option>
                  <option value="recent">Recently Listed</option>
                  <option value="byid">ID</option>
                </select>
              </div>
            </div> -->
            </div>
          </div>
          <div class="row g-4">
            @foreach($data as $colection)
            <div class="col-sm-6 col-md-3">
              <div class="position-relative bg-dark-2 shadow rounded-4"> <img class="img-fluid d-flex rounded-4 rounded-bottom-0" src="{{$colection->image_preview_url}}" alt="">
                <div class="p-4">
                  <div class="d-flex align-items-center"> <a href="{{$colection->permalink}}" class="btn btn-outline-light btn-sm">
                    <h4 class="text-3 link-light text-truncate mb-0">{{$colection->name}}</h4>
                    
                    </a>
                    <!-- <div class="text-light text-2 d-inline-block text-nowrap ms-auto">2.84 ETH</div> -->
                  </div>
                </div>
              </div>
            </div>
            <!-- mint modal
                ================================== -->
                <div id="rarity-check-<?=$colection->id?>" class="modal fade " role="dialog" aria-hidden="true">
                  <div class="modal-dialog modal-md modal-dialog-centered" role="document">
                    <div class="modal-content bg-dark text-light">
                      <!-- <div class="modal-header">
                        <h5 class="modal-title text-light ">Mint</h5>
                        <button type="button" class="btn-close text-light" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div> -->
                      <div class="modal-body p-4" >
                        <div class="row">
                          @if(!empty($colection->is_rarity_enabled))
                          <div class="col-6">
                            <p>Rarity Rank #{{$colection->rarity_data->rank}}</p>
                            <div class="p-2">
                              <img class="img-fluid d-flex rounded-4 rounded-bottom-0" src="{{$colection->image_preview_url}}" alt="">
                            </div>
                            
                            <a href="{{$colection->permalink}}" class="btn btn-outline-light btn-sm">View On Opensea</a>
                          </div>
                          <div class="col-6">
                            <p>Rarity Score {{$colection->rarity_data->score}}</p>
                          </div>
                          @else
                          <div class="col-6">
                            <p>Not Found</p>
                            <a href="{{$colection->permalink}}" class="btn btn-outline-light btn-sm">View On Opensea</a>

                          </div>
                          @endif
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- mint modal End --> 
            @endforeach
            <!-- <div class="col-sm-6 col-md-4">
              <div class="position-relative bg-dark-2 shadow rounded-4"> <img class="img-fluid d-flex rounded-4 rounded-bottom-0" src="images/collections/item-2.jpg" alt="">
                <div class="p-4">
                  <div class="d-flex align-items-center"> <a href="https://harnishdesign.net/" class="overflow-hidden stretched-link me-2">
                    <h4 class="text-3 link-light text-truncate mb-0">Potocnik #259</h4>
                    </a>
                    <div class="text-light text-2 d-inline-block text-nowrap ms-auto">0.08 ETH</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="position-relative bg-dark-2 shadow rounded-4"> <img class="img-fluid d-flex rounded-4 rounded-bottom-0" src="images/collections/item-3.jpg" alt="">
                <div class="p-4">
                  <div class="d-flex align-items-center"> <a href="https://harnishdesign.net/" class="overflow-hidden stretched-link me-2">
                    <h4 class="text-3 link-light text-truncate mb-0">Potocnik #364</h4>
                    </a>
                    <div class="text-light text-2 d-inline-block text-nowrap ms-auto">2.06 ETH</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="position-relative bg-dark-2 shadow rounded-4"> <img class="img-fluid d-flex rounded-4 rounded-bottom-0" src="images/collections/item-4.jpg" alt="">
                <div class="p-4">
                  <div class="d-flex align-items-center"> <a href="https://harnishdesign.net/" class="overflow-hidden stretched-link me-2">
                    <h4 class="text-3 link-light text-truncate mb-0">Potocnik #208</h4>
                    </a>
                    <div class="text-light text-2 d-inline-block text-nowrap ms-auto">0.12 ETH</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="position-relative bg-dark-2 shadow rounded-4"> <img class="img-fluid d-flex rounded-4 rounded-bottom-0" src="images/collections/item-5.jpg" alt="">
                <div class="p-4">
                  <div class="d-flex align-items-center"> <a href="https://harnishdesign.net/" class="overflow-hidden stretched-link me-2">
                    <h4 class="text-3 link-light text-truncate mb-0">Potocnik #430</h4>
                    </a>
                    <div class="text-light text-2 d-inline-block text-nowrap ms-auto">1.28 ETH</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="position-relative bg-dark-2 shadow rounded-4"> <img class="img-fluid d-flex rounded-4 rounded-bottom-0" src="images/collections/item-6.jpg" alt="">
                <div class="p-4">
                  <div class="d-flex align-items-center"> <a href="https://harnishdesign.net/" class="overflow-hidden stretched-link me-2">
                    <h4 class="text-3 link-light text-truncate mb-0">Potocnik #106</h4>
                    </a>
                    <div class="text-light text-2 d-inline-block text-nowrap ms-auto">0.09 ETH</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="position-relative bg-dark-2 shadow rounded-4"> <img class="img-fluid d-flex rounded-4 rounded-bottom-0" src="images/collections/item-7.jpg" alt="">
                <div class="p-4">
                  <div class="d-flex align-items-center"> <a href="https://harnishdesign.net/" class="overflow-hidden stretched-link me-2">
                    <h4 class="text-3 link-light text-truncate mb-0">Potocnik #266</h4>
                    </a>
                    <div class="text-light text-2 d-inline-block text-nowrap ms-auto">2.16 ETH</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="position-relative bg-dark-2 shadow rounded-4"> <img class="img-fluid d-flex rounded-4 rounded-bottom-0" src="images/collections/item-8.jpg" alt="">
                <div class="p-4">
                  <div class="d-flex align-items-center"> <a href="https://harnishdesign.net/" class="overflow-hidden stretched-link me-2">
                    <h4 class="text-3 link-light text-truncate mb-0">Potocnik #345</h4>
                    </a>
                    <div class="text-light text-2 d-inline-block text-nowrap ms-auto">0.88 ETH</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="position-relative bg-dark-2 shadow rounded-4"> <img class="img-fluid d-flex rounded-4 rounded-bottom-0" src="images/collections/item-9.jpg" alt="">
                <div class="p-4">
                  <div class="d-flex align-items-center"> <a href="https://harnishdesign.net/" class="overflow-hidden stretched-link me-2">
                    <h4 class="text-3 link-light text-truncate mb-0">Potocnik #282</h4>
                    </a>
                    <div class="text-light text-2 d-inline-block text-nowrap ms-auto">2.02 ETH</div>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
          <!-- Pagination
            ============================================= -->
          <ul class="pagination pagination-lg justify-content-center mt-5 mb-0">
            <li class="page-item disabled"> <a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-left"></i></a> </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item d-flex align-content-center flex-wrap text-muted text-5 mx-1">......</li>
            <li class="page-item"><a class="page-link" href="#">15</a></li>
            <li class="page-item"> <a class="page-link" href="#"><i class="fas fa-angle-right"></i></a> </li>
          </ul>
          <!-- Paginations end --> 
          
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