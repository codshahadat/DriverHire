<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Nid Verification</title>
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
    .logout{
        margin-left: 1200px;
    }
    .m-0{
        margin: 20px;
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
                <a class="btn btn-primary btn-lg me-2" style="margin-left: 1070px" role="button" href="{{url('logout')}}">Logout&nbsp;</a>

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
                                <div class="sb-sidenav-menu-heading"><span>Main</span></div><a class="nav-link active" href="{{url('dashboard')}}">
                                    <div class="sb-nav-link-icon"><i class="fa fa-dashboard"></i></div><span>Dashboard</span>
                                </a>
                            </div>
                            <div>

                                <div class="sb-sidenav-menu-heading"><span>User Section</span></div><a class="nav-link active" href="{{ url('dashboard')}}">
                                    <div class="sb-nav-link-icon"><i class="fa fa-dashboard"></i></div><span>Back to Dashboard</span>
                                </a>
                            </div>
                            <div>

                                <div class="sb-sidenav-menu-heading"><span>Edit Section</span></div><a class="nav-link active" href="{{ url('editprofile')}}">
                                    <div class="sb-nav-link-icon"><i class="fa fa-dashboard"></i></div><span>Edit Profile </span>
                                    
                                </a>
                            </div>
                            <div>
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
            <div id="layoutSidenav_content">
                <main>
                    <div class="container">
                      <div class="col-md-10">
                        <div class="col">
                            <div class="card-body" style="padding-left: 25px;padding-top: 55px;margin-left: 0px">
            
            <div ng-app="app">
              <div ng-controller="UploadController as vm">
                <div class="container">
                  <div class="page-header">
                    <h1>Submit Your Original Documents</h1>
                  </div>
            
                  <div class="alert alert-info">
                    <marquee> ***Please Upload Original Documents with Clear pictures, Forged, Unclear or blurry pictures Result in an Unverified User*** </marquee> 
                </div>


                  <form class="container" action="{{ url('verify/'.$user->id) }}" method="POST" enctype="multipart/form-data">
    
                    {{ csrf_field() }}
                   
                    <fieldset>
                        @if (session('success'))
                        <script>
                            Toastr.success("{{ session('success') }}");
                        </script>
                    @endif
                    
                    @if (session('err'))
                    <script>
                        Toastr.danger("{{ session('err') }}");
                    </script>
                @endif
            
                  <div class="form-group mb-3"><p><strong>Upload Your NID image </strong><span class="text-danger">*</span></p>

                
                    <div class="file">
                      <!-- Upload image input -->
                      <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                          <input id="image1" name="image1" required type="file" onchange="readURL(this, 'imagePath1')" class="form-control border-0">
                      </div>
                  
                      <!-- Uploaded image area -->
                      <p class="font-italic text-dark text-center">The image uploaded will be rendered inside the box below.</p>
                      <div class="image-area mt-4 text-dark">
                          {{-- Initial preview when available --}}
                          @if(Session::has('uploadedImagePath1'))
                              <img id="imagePath1" src="{{ asset(Session::get('uploadedImagePath1')) }}" alt="" class="img-fluid rounded shadow-sm mx-auto d-block" width="300">
                          @else
                              {{-- Placeholder image or leave empty --}}
                              <img id="imagePath1" src="" alt="" class="img-fluid rounded shadow-sm mx-auto d-block" width="300">
                          @endif
                      </div>
                  </div>
                  
                  <div class="form-group mb-3" style="margin-top: 30px"><p><strong>Upload Your Driving License (Drivers Only) </strong><span class="text-danger">*</span></p>
                  
                  <div class="file">
                      <!-- Upload image input -->
                      <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                          <input id="image2" name="image2" type="file" onchange="readURL(this, 'imagePath2')" class="form-control border-0">
                      </div>
                  
                      <!-- Uploaded image area -->
                      <p class="font-italic text-dark text-center">The image uploaded will be rendered inside the box below.</p>
                      <div class="image-area mt-4 text-dark">
                          {{-- Initial preview when available --}}
                          @if(Session::has('uploadedImagePath2'))
                              <img id="imagePath2" src="{{ asset(Session::get('uploadedImagePath2')) }}" alt="" class="img-fluid rounded shadow-sm mx-auto d-block" width="300">
                          @else
                              {{-- Placeholder image or leave empty --}}
                              <img id="imagePath2" src="" alt="" class="img-fluid rounded shadow-sm mx-auto d-block" width="300">
                          @endif
                      </div>
                  </div>
                 
                  <div class="justify-content-center d-flex form-group mb-3" style="margin-top: 20px">
                    <div id="submit-btn">
                        <div class="row"><button class="btn btn-primary btn-light m-0 rounded-pill px-4" type="submit" style="min-width: 500px;" action method="POST" target="hidden_iframe">Submit</button></div>
                    </div>
                </div>
            </form>
        </div>
            </form>
        </div>
        <div class="col">
            <h3 id="fail" class="text-center text-danger d-none"><br>Form not Submitted&nbsp;<a href="contact.html">Try Again</a><br><br></h3>
            <h3 id="success-1" class="text-center text-success d-none"><br>Form Submitted Successfully&nbsp;<a href="contact.html">Send Another Response</a><br><br></h3>
        </div>
    </section>
</div>
</div>
</div>
</section>

</fieldset>
</form>
                    
                </main>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/bs-init.js?h=ec5d4df3c798a2943b2ecbac76ebfde0"></script>
    <script src="/assets/js/Application-Form-Bootstrap-Image-Uploader.js?h=08b5f1592ae2d5f10ee07fabcdce691f"></script>
    <script src="/assets/js/Application-Form-submit-form.js?h=a4849fe3979293aae4bf12c3939c3af2"></script>
    <script src="{{asset('assets/js/verify.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    
</body>

</html>
