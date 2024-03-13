<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>driver</title>
    <link rel="icon" type="image/jpeg" sizes="1000x730" href="{{asset('assets/img/1000_F_46794667_UKPE3SXOP3Q7kBKmS4FRBZ63VNx56iER.jpg?h=3d9738bd35754f0b05b2bc5525500a89')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css?h=3694ad95c291cc6a4e519b80b1762aab')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Source%20Sans%20Pro.css?h=c37ba52c18853fa3592add08e81f05d7')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/Application-Form.css?h=67e69944f8e90dfac42c7dfb24e0628e')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Banner-Heading-Image-images.css?h=4f3cfa46e40e236365345fc77963f4b8')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Login-Form-Basic-icons.css?h=3f8fe3ed61628eb4bda76aca0b3052d3')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Navbar-Centered-Links-icons.css?h=befd8a398792e305b7ffd4a176b5b585')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Tamplate-SB-Admin-on-BSS.css?h=2425d7d0d7d129ddc54a4a00aafc1930')}}">
</head>

<style>
    body{margin-top:0px;}
  .card-style1 {
      box-shadow: 0px 0px 10px 0px rgb(89 75 128 / 9%);
  }
  .border-0 {
      border: 0!important;
  }
  .card {
      position: relative;
      display: flex;
      flex-direction: column;
      min-width: 0;
      word-wrap: break-word;
      background-color: #fff;
      background-clip: border-box;
      border: 1px solid rgba(0,0,0,.125);
      border-radius: 0.25rem;
  }
  
  section {
      padding: 120px 0;
      overflow: hidden;
      background: #fff;
  }
  .mb-2-3, .my-2-3 {
      margin-bottom: 2.3rem;
  }
  
  .section-title {
      font-weight: 600;
      letter-spacing: 2px;
      text-transform: uppercase;
      margin-bottom: 10px;
      position: relative;
      display: inline-block;
  }
  .text-primary {
      color: #ceaa4d !important;
  }
  .text-secondary {
      color: #121213 !important;
  }
  .font-weight-600 {
      font-weight: 600;
  }
  .display-26 {
      font-size: 1.3rem;
  }
  
  @media screen and (min-width: 992px){
      .p-lg-7 {
          padding: 4rem;
      }
  }
  @media screen and (min-width: 768px){
      .p-md-6 {
          padding: 3.5rem;
      }
  }
  @media screen and (min-width: 576px){
      .p-sm-2-3 {
          padding: 2.3rem;
      }
  }
  .p-1-9 {
      padding: 1.9rem;
  }
  
  .bg-secondary {
      background: #d8dbdd !important;
  }
  @media screen and (min-width: 576px){
      .pe-sm-6, .px-sm-6 {
          padding-right: 3.5rem;
      }
  }
  @media screen and (min-width: 576px){
      .ps-sm-6, .px-sm-6 {
          padding-left: 3.5rem;
      }
  }
  .pe-1-9, .px-1-9 {
      padding-right: 1.9rem;
  }
  .ps-1-9, .px-1-9 {
      padding-left: 1.9rem;
  }
  .pb-1-9, .py-1-9 {
      padding-bottom: 1.9rem;
  }
  .pt-1-9, .py-1-9 {
      padding-top: 1.9rem;
  }
  .mb-1-9, .my-1-9 {
      margin-bottom: 1.9rem;
  }
  @media (min-width: 992px){
      .d-lg-inline-block {
          display: inline-block!important;
      }
  }
  .rounded {
      border-radius: 0.25rem!important;
  }

  .col-lg-6 {
     width: 100%;
  }



  
  </style>

<body>
    <div>
        <nav class="navbar navbar-expand bg-dark sb-topnav navbar-dark">
            <div class="container-fluid"><button class="btn btn-link btn-sm link-light order-md-1" id="sidebarToggle" type="button"></button><a class="navbar-brand" href="#"><img src="/assets/img/desk.jpg?h=53c7137c123a8fb1f0c16dad9657a1b9" style="width: 28px;margin-right: 10px;border-width: 3px;border-style: solid;border-radius: 10px;">&nbsp;DriverHire</a>
                <div class="btn-toolbar">
                    <div class="btn-group" role="group"></div>
                </div>
                <form class="d-none d-md-inline-block order-2 ms-auto me-0 me-md-3 my-2 my-md-0">
                    <div class="input-group">
                        <div class="input-group-append"></div>
                    </div>
                </form>
                <div class="logout-button">
                    <a class="btn btn-primary btn-lg me-2" role="button" style="margin-left: 1070px" href="{{url('logout')}}">Logout&nbsp;</a>                </div>
                <ul class="navbar-nav d-flex order-3 ms-auto ms-md-0">
                    <li class="nav-item d-flex d-sm-flex d-md-none justify-content-center align-items-center justify-content-sm-center" style="margin-right: 7px;">
                        <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fa fa-search" style="font-size: 25px;margin-right: 0px;"></i> </a>
                            <div class="dropdown-menu"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <div id="sidenavAccordion" class="sb-sidenav accordion sb-sidenav-dark">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div>
                                <div class="sb-sidenav-menu-heading"><span>Main</span></div><a class="nav-link active" href="#">
                                    <div class="sb-nav-link-icon"><i class="fa fa-dashboard"></i></div><span>Dashboard</span>
                                </a>
                            </div>
                            <div>

                                <div class="sb-sidenav-menu-heading"><span>User Section</span></div><a class="nav-link active" href="{{ url('availabledriver')}}">
                                    <div class="sb-nav-link-icon"><i class="fa fa-dashboard"></i></div><span>List of available Driver</span>
                                </a>
                            </div>
                            <div>

                                <div class="sb-sidenav-menu-heading"><span>Booking Section</span></div><a class="nav-link active" href="{{ url('showbooking')}}">
                                    <div class="sb-nav-link-icon"><i class="fa fa-dashboard"></i></div><span>Show Booking </span>
                                    
                                </a>

                                <div class="sb-sidenav-menu-heading"><span>Verification</span></div><a class="nav-link active" href="{{ url('verified')}}">
                                    <div class="sb-nav-link-icon"><i class="fa fa-dashboard"></i></div><span>Upload NID </span>
                                    
                                </a>
                                    {{-- 
                                                                    <div class="sb-sidenav-menu-heading"><span>edit &amp; check</span></div><a class="nav-link collapsed" href="#" aria-expanded="false" aria-controls="collapseLayouts" data-bs-toggle="collapse" data-bs-target="#collapseLayouts">
                                                                        <div class="sb-nav-link-icon"><i class="fa fa-dashboard"></i></div><span>Customer</span>
                                                                        <div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                                                                    </a>
                                                                    <div id="collapseLayouts" class="collapse" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                                                        <div class="sb-sidenav-menu-nested nav"><a class="nav-link" href="#">Menu Accordion</a><a class="nav-link" href="#">Menu Accordion</a></div>
                                                                    </div>
                                                                </div>
                                                                <div><a class="nav-link collapsed" href="#" aria-expanded="false" aria-controls="collapse2" data-bs-toggle="collapse" data-bs-target="#collapse2">
                                                                        <div class="sb-nav-link-icon"><i class="fa fa-dashboard"></i></div><span>Driver</span>
                                                                        <div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                                                                    </a><a class="nav-link collapsed" href="#" aria-expanded="false" aria-controls="collapse2" data-bs-toggle="collapse" data-bs-target="#collapse2">
                                                                        <div class="sb-nav-link-icon"><i class="fa fa-dashboard"></i></div><span>Order</span>
                                                                        <div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                                                                    </a>
                                                                    <div id="collapse2" class="collapse" aria-labelledby="heading2" data-bs-parent="#sidenavAccordion">
                                                                        <div id="sidenavAccordionPages" class="sb-sidenav-menu-nested nav accordion"><a class="nav-link collapsed" href="#" aria-expanded="false" aria-controls="pagesCollapseAuth" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth"><span>Menu Item</span>
                                                                                <div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                                                                            </a>
                                                                            <div id="pagesCollapseAuth" class="collapse" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                                                                <div class="sb-sidenav-menu-nested nav"><a class="nav-link" href="#">Menu Item</a><a class="nav-link" href="#">Menu Item</a><a class="nav-link" href="#">Menu Item</a></div>
                                                                            </div> --}}
                                                                        {{-- </div> --}}
                                                                    {{-- </div> --}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="sb-sidenav-footer">
                                                            <div class="small"><span>Logged In As {{ Session::get('username') }}</span></div>
                                                        </div>
                                                    </div>
                                                </div>
             <div id="layoutSidenav_content" style="padding-left:2%;">
                <main>

                    
                         
                  <section class="bg-light" style="margin-top: -7% ">

                    <div class="container h-200">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                          <div class="col col-lg-6 mb-4 mb-lg-0">
                            <div class="card mb-3" style="border-radius: .5rem;">
                              <div class="row g-0">
                                <div class="bg-secondary d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded">
                                    <h3 class="h2 text-black mb-0">{{ Session::get('username')}}</h3>
                                    <span class="text-alert">{{ Session::get('usertype')}}</span>
                                </div>
                                <div class="col-md-4 gradient-custom text-center text-white" style="border-top-left-radius: 5rem; border-bottom-left-radius: .5rem; width: 100%">
                                    @if (session('imagename'))
                                    <img src="{{ asset('images/' . session('imagename')) }}" alt="{{ session('username') }}" width="300">
                                @else
                                    No picture
                                @endif
                          
                                </div>
                                <div class="col-md-8" style="width: 110%">
                                  <div class="card-body p-4">
                                    <h6>Information</h6>
                                    <hr class="mt-0 mb-4">
                                    <div class="row pt-1">
                                      <div class="col-6 mb-3">
                                        <h6>USER ID</h6>
                                        <p class="text-muted">{{ Session::get('userid')}}</p>
                                      </div>
                                      <div class="col-6 mb-3">
                                        <h6>Email</h6>
                                        <p class="text-muted">{{ Session::get('email')}}</p>
                                      </div>
                                    </div>
                                    <div class="row pt-1">
                                      <div class="col-6 mb-3">
                                        <h6>Address</h6>
                                        <p class="text-muted">{{ Session::get('address')}}</p>
                                      </div>
                                      <div class="col-6 mb-3">
                                        <h6>National Identity Number</h6>
                                        <p class="text-muted">{{ Session::get('nid')}}</p>
                                      </div>

                                      <div class="col-6 mb-3">
                                        <h6>Phone</h6>
                                        <p class="text-muted">{{ Session::get('phone')}}</p>
                                      </div>
                                    </div>
                                 
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    

                 
                </section>           </main>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/bs-init.js?h=ec5d4df3c798a2943b2ecbac76ebfde0"></script>
    <script src="/assets/js/Application-Form-Bootstrap-Image-Uploader.js?h=08b5f1592ae2d5f10ee07fabcdce691f"></script>
    <script src="/assets/js/Application-Form-submit-form.js?h=a4849fe3979293aae4bf12c3939c3af2"></script>
</body>

</html>
