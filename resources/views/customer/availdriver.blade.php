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
    <link rel="stylesheet" href="{{ asset('assets/fontawesome-free/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome-free/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome-free/css/all.min.css')}}">
</head>
<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
 

.logout-button {
  margin-left: 1200px;
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
                
                <a class="btn btn-primary btn-lg me-2" role="button" style="margin-left: 1070px" href="{{url('logout')}}">Logout&nbsp;</a>

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
                                <div class="sb-sidenav-menu-heading"><span>Main</span></div><a class="nav-link active" href="{{url ('dashboard')}}">
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
                            </div>
                            <div>

                                {{-- <div class="sb-sidenav-menu-heading"><span>edit &amp; check</span></div><a class="nav-link collapsed" href="#" aria-expanded="false" aria-controls="collapseLayouts" data-bs-toggle="collapse" data-bs-target="#collapseLayouts">
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
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small"><span>Logged In As {{ Session::get('username') }}</span></div>
                    </div>
                </div>
            </div>
            <div id="layoutSidenav_content">
                <main>
                  
                  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
                    <h1 class="display-4">Pricing of Driver</h1>
                    <p class="lead">Choose Your Suitable Driver</p>
                  </div>
                  
                  <div class="container">
                    <div class="card-deck mb-3 text-center">
                      <div class="card mb-4 shadow-sm">
                        <div class="card-header">
                          <h4 class="my-0 font-weight-normal">Private Driver</h4>
                        </div>
                        <div class="card-body">
                          <h1 class="card-title pricing-card-title">$700 BDT<small class="text-muted">/ daily</small></h1>
                          <ul class="list-unstyled mt-3 mb-4">
                            <li>Safe & reliable</li>
                            <li>Clean & tidy vehicle</li>
                            <li>Friendly & polite</li>
                            <li>Knowledgeable of routes</li>
                            <li>Punctual & efficient</li>
                          </ul>
                          <a class="btn btn-lg btn-block btn-primary" role="button" href="{{url('privatedriver')}}">Click to book&nbsp;</a>
                        </div>
                      </div>
                      <div class="card mb-4 shadow-sm">
                        <div class="card-header">
                          <h4 class="my-0 font-weight-normal">Uber Driver</h4>
                        </div>
                        <div class="card-body">
                          <h1 class="card-title pricing-card-title">$1000 BDT  <small class="text-muted">/ daily</small></h1>
                          <ul class="list-unstyled mt-3 mb-4">
                            <li>Convenient app & booking system</li>
                            <li>Real-time tracking & updates</li>
                            <li>Multiple fare options & payment</li>
                            <li>Cashless transactions</li>
                          </ul>
                          <a class="btn btn-lg btn-block btn-primary" role="button" href="{{url('uberdriver')}}">Click to book&nbsp;</a>

                        </div>
                      </div>
                      <div class="card mb-4 shadow-sm">
                        <div class="card-header">
                          <h4 class="my-0 font-weight-normal">Company Driver</h4>
                        </div>
                        <div class="card-body">
                          <h1 class="card-title pricing-card-title">$1500<small class="text-muted">/ daily</small></h1>
                          <ul class="list-unstyled mt-3 mb-4">
                            <li>Professional & business-oriented</li>
                            <li>Familiar with company needs & policies</li>
                            <li>Secure & confidential data handling</li>
                            <li>Efficient & time-conscious</li>
                          </ul>
                          <a class="btn btn-lg btn-block btn-primary" role="button" href="{{url('companydriver')}}">Click to book&nbsp;</a>
                        </div>
                      </div>
                    </div>
                  </div>

                </main>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/bs-init.js?h=ec5d4df3c798a2943b2ecbac76ebfde0"></script>
    <script src="/assets/js/Application-Form-Bootstrap-Image-Uploader.js?h=08b5f1592ae2d5f10ee07fabcdce691f"></script>
    <script src="/assets/js/Application-Form-submit-form.js?h=a4849fe3979293aae4bf12c3939c3af2"></script>
</body>

</html>
