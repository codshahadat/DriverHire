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
   body {
    background-color: #f9f9fa
}

.padding {
    padding: 3rem !important
}

.user-card-full {
    overflow: hidden;
}

.card {
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 20px 0 rgba(69,90,100,0.08);
    box-shadow: 0 1px 20px 0 rgba(69,90,100,0.08);
    border: none;
    margin-bottom: 30px;
}

.m-r-0 {
    margin-right: 0px;
}

.m-l-0 {
    margin-left: 0px;
}

.user-card-full .user-profile {
    border-radius: 5px 0 0 5px;
}

.bg-c-lite-green {
        background: -webkit-gradient(linear, left top, right top, from(#363535), to(#525050));
    background: linear-gradient(to right, #1d1c1c, #d1d0cf);
}

.user-profile {
    padding: 20px 0;
}

.card-block {
    padding: 2.25rem;
}

.m-b-25 {
    margin-bottom: 25px;
}

.img-radius {
    border-radius: 5px;
}


 
h6 {
    font-size: 14px;
}

.card .card-block p {
    line-height: 25px;
}

@media only screen and (min-width: 1400px){
p {
    font-size: 14px;
}
}

.card-block {
    padding: 1.25rem;
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0;
}

.m-b-20 {
    margin-bottom: 20px;
}

.p-b-5 {
    padding-bottom: 5px !important;
}

.card .card-block p {
    line-height: 40px;
}

.m-b-10 {
    margin-bottom: 10px;
}

.text-muted {
    color: #919aa3 !important;
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0;
}

.f-w-600 {
    font-weight: 600;
}

.m-b-20 {
    margin-bottom: 20px;
}

.m-t-40 {
    margin-top: 20px;
}

.p-b-5 {
    padding-bottom: 5px !important;
}

.m-b-10 {
    margin-bottom: 10px;
}

.m-t-40 {
    margin-top: 20px;
}

.user-card-full .social-link li {
    display: inline-block;
}

.user-card-full .social-link li a {
    font-size: 20px;
    margin: 0 10px 0 0;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.col-md-12 {
    flex: 0 0 auto;
    width: 100%;
}

.col-sm-4 {
    flex: 0 0 auto;
    width: 104.333333%;
}

.col-sm-8 {
    flex: 0 0 auto;
    width: 114.666667%;
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
           
<a class="btn btn-primary btn-lg me-2" style="margin-left: 1070px" role="button" href="{{url('logout')}}">Logout&nbsp;</a>                <ul class="navbar-nav d-flex order-3 ms-auto ms-md-0">
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

                                <div class="sb-sidenav-menu-heading"><span>User Section</span></div><a class="nav-link active" href="{{ url('bookingstatus')}}">
                                    <div class="sb-nav-link-icon"><i class="fa fa-dashboard"></i></div><span>Bookings</span>
                                </a>
                            </div>
                            <div>

                                <div class="sb-sidenav-menu-heading"><span>Edit Section</span></div><a class="nav-link active" href="{{ url('editinfo')}}">
                                    <div class="sb-nav-link-icon"><i class="fa fa-dashboard"></i></div><span>Edit Profile </span>
                                    
                                </a>
                            </div>
                            <div>

                                <div class="sb-sidenav-menu-heading"><span>Verification</span></div><a class="nav-link active" href="{{ url('verification')}}">
                                    <div class="sb-nav-link-icon"><i class="fa fa-dashboard"></i></div><span>NID & Driving license Verification</span>
                                    
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
            <div id="layoutSidenav_content" style="padding-left:2%;">
                <main>
                         
               
                    {{-- <section class="bg-light" style="margin-top: -7% ">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 mb-4 mb-sm-5">
                                    <div class="card card-style1 border-0">
                                        <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                                            <div class="row align-items-center" style=" --bs-gutter-x: -7.5rem;">
                                                <div class="col-lg-6 mb-4 mb-lg-0">
                                                  @if (session('imagename'))
        <img src="{{ asset('images/' . session('imagename')) }}" style="
        width: 300px;
        border-radius: 100%;
        margin: 40px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" alt="{{ session('username') }}">
    @else
        No picture
    @endif
    
                                                </div>
                                                <div class="col-lg-6 px-xl-10">
                                                    <div class="bg-secondary d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded">
                                                        <h3 class="h2 text-white mb-0">{{ Session::get('username')}}</h3>
                                                        <span class="text-primary">{{ Session::get('usertype')}}</span>
                                                    </div>
                                                    <ul class="list-unstyled mb-1-9" style="1.9rem">
                                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">ID:</span> {{ Session::get('userid')}}</li>
                                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Address:</span> {{ Session::get('address')}}</li>
                                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Email:</span> {{ Session::get('email')}}</li>
                                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">National Identity Number:</span> {{ Session::get('nid')}}</li>
                                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Driving License Number:</span> {{ Session::get('license')}}</li>
                                                        <li class="display-28"><span class="display-26 text-secondary me-2 font-weight-600">Document Status :</span> 
                                                            @if(session('verified') ==1)
                                                            <span class="text-success">Verified</span>
                                                                @else
                                                                <span class="text-danger">Unverified</span>
                          
                                                            @endif</li>
                                                    </ul>
                                                    <ul class="social-icon-style1 list-unstyled mb-0 ps-0">
                                                        <li><a href="#!"><i class="ti-twitter-alt"></i></a></li>
                                                        <li><a href="#!"><i class="ti-facebook"></i></a></li>
                                                        <li><a href="#!"><i class="ti-pinterest"></i></a></li>
                                                        <li><a href="#!"><i class="ti-instagram"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-4 mb-sm-5">
                                    <div>
                           
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-12 mb-4 mb-sm-5">
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>   --}}

                    
                    <div class="page-content page-container" id="page-content">
                        <div class="padding">
                            <div class="row container d-flex justify-content-center">
                    <div class="col-xl-6 col-md-12">
                                                                    <div class="card user-card-full">
                                                                        <div class="row m-l-0 m-r-0">
                                                                            <div class="col-sm-4 bg-c-lite-green user-profile">
                                                                                <div class="card-block text-center text-white">
                                                                                    <div class="m-b-25">
                                                                                        @if (session('imagename'))
        <img src="{{ asset('images/' . session('imagename')) }}" alt="{{ session('username') }}"
    class="img-radius" alt="User-Profile-Image">
    @else
    No picture
@endif
                                                                                    </div>
                                                                                    <h6 class="f-w-600">{{ Session::get('username')}}</h6>
                                                                                    <p>{{ Session::get('drivertype')}} Driver</p>
                                                                                    <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-8">
                                                                                <div class="card-block">
                                                                                    <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Driver Information</h6>
                                                                                    <div class="row">
                                                                                        <div class="col-sm-6">
                                                                                            <p class="m-b-10 f-w-600">Email</p>
                                                                                            <h6 class="text-muted f-w-400">{{ Session::get('email')}}</h6>
                                                                                        </div>
                                                                                        <div class="col-sm-6">
                                                                                            <p class="m-b-10 f-w-600">Phone</p>
                                                                                            <h6 class="text-muted f-w-400">{{ Session::get('phone')}}</h6>
                                                                                        </div>
                                                                                        <div class="col-sm-6">
                                                                                            <p class="m-b-10 f-w-600">National Identity</p>
                                                                                            <h6 class="text-muted f-w-400">{{ Session::get('nid')}}</h6>
                                                                                        </div>

                                                                                        <div class="col-sm-6">
                                                                                            <p class="m-b-10 f-w-600">Driving License</p>
                                                                                            <h6 class="text-muted f-w-400">{{ Session::get('license')}}</h6>
                                                                                        </div>

                                                                                        <div class="col-sm-6">
                                                                                            <p class="m-b-10 f-w-600">Address</p>
                                                                                            <h6 class="text-muted f-w-400">{{ Session::get('address')}}</h6>
                                                                                        </div>
                                                                                          
                                                                                        <div class="col-sm-6">
                                                                                            <p class="m-b-10 f-w-600">Document Status</p>
                                                                                            <h6 class="text-muted f-w-400">
                                                                                            @if(session('verified') ==1)
                                                                                            <span class="text-success">Verified</span>
                                                                                                @else
                                                                                                <span class="text-danger">Unverified</span>
                                                        
                                                                                            @endif</h6>

                                                                                        </div>


                                                                                        <div class="col-sm-6">
                                                                                            <p class="m-b-10 f-w-600">Experience</p>
                                                                                            <h6 class="text-muted f-w-400">{{ Session::get('experience')}}</h6>
                                                                                        </div>

                                                                                        <div class="col-sm-6">
                                                                                            <p class="m-b-10 f-w-600">Qualification</p>
                                                                                            <h6 class="text-muted f-w-400">{{ Session::get('qualification')}}</h6>
                                                                                        </div>

                                                                                    </div>
                                                                                  
                                                                                            
                                                                                        
                                                                                    <ul class="social-link list-unstyled m-t-40 m-b-10">
                                                                                        <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                                                                        <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                                                                        <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
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
