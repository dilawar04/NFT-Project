  
  @extends('layout/master_index')
  @section('main-content')

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Black List Users </h3>
              <!-- <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Dropdowns</li>
                </ol>
              </nav> -->
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">WhiteList Table</h4>
                    <!-- <p class="card-description"> Add class <code>.table-striped</code> -->
                    <!-- </p> -->
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>user's twitter handle</th>
                            <th>user’s twitter id</th>
                            <th> User’s email </th>
                            <th> user discord account </th>
                            <th> user's score </th>
                            <th>time entered in the rafale</th>
                            <th>wallet address</th>
                           
                          </tr>
                        </thead>
                        <tbody>
                  @foreach($users as $user)
                  <tr>
                  <td>
                      {{$user->name}}
                    </td>
                    <td>
                      {{$user->email}}
                    </td>
                    <td>
                      {{$user->account_title}}
                    </td>
                    <td>
                      {{$user->account_address}}
                    </td>
                    <td>
                      {{$user->name}}
                    </td>
                    <td class="">
                    @if($user->account_type == 'twitter')  
                    {{$user->account_type}}
                    @else
                    @endif
                  </td>
                    <td>
                    @if($user->account_type == 'discord')  
                    {{$user->account_type}}
                    @else
                    @endif
                    </td>
                    <td>
                      {{$user->id}}
                    </td>
                    <td>
                      {{$user->score}}
                    </td>
                    <td>
                      {{$user->is_whitelisted}}
                    </td>
                    <td>
                      {{$user->status}}
                    </td>
                    <td>
                      {{$user->created_at}}
                    </td>
                    
                  </tr>
                @endforeach
                </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
         
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    <!-- </div> -->
    <!-- container-scroller -->
    <!-- plugins:js -->
    <!-- <script src="../../assets/vendors/js/vendor.bundle.base.js"></script> -->
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <!-- <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script> -->
    <!-- endinject -->
  <!-- </body>
</html> -->
@endsection
