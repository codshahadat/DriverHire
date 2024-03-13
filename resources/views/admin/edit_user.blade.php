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

    <style>
        body {
          font-family: 'Arial', sans-serif;
          margin: 0;
          padding: 0;
          box-sizing: border-box;
        }
    
        .container {
          max-width: 600px; /* Set a maximum width for the form */
          margin: 0 auto; /* Center the form horizontally */
          padding: 20px; /* Add some padding to the form */
        }
    
        /* Add additional styling as needed */
    
        /* Example: Style form elements */
        label {
          display: block;
          margin-bottom: 20px;
        }
    
        input,
        select,
        textarea {
          width: 100%;
          padding: 8px;
          margin-bottom: 16px;
          box-sizing: border-box;
        }
    
        button {
          background-color: #4CAF50;
          color: white;
          padding: 10px 15px;
          border: none;
          border-radius: 4px;
          cursor: pointer;
        }
    
        button:hover {
          background-color: #45a049;
        }
      </style>
</head>

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
                </form><a class="btn btn-primary btn-lg me-2" role="button" style="margin-left: 1070px" href="{{url('logout')}}">Logout&nbsp;</a>
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
                                    <div class="sb-nav-link-icon"><i class="fa fa-dashboard"></i></div><span>Return to Main Page</span>
                            </div>
                            <div>

                                <div class="sb-sidenav-menu-heading"><span>User Section</span></div><a class="nav-link active" href="{{ url('user/{status}')}}">
                                    <div class="sb-nav-link-icon"><i class="fa fa-dashboard"></i></div><span>Update User - {{ $user->name }}</span>
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
                   

                                <div class="row d-flex justify-content-center">
                <div class="col">
                    <form class="container" action="{{ url('update-user/'.$user->id) }}" method="POST" enctype="multipart/form-data">

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
                    <section>
                        <div class="container">
                            <input type="hidden" name="user_id" value="{{ $user->id }}">


                            <form id="application-form">
                                <div class="form-group mb-3">
                                    <div class="row">
                                        <div class="col">
                                            <p><strong>Name</strong>&nbsp;<span class="text-danger">*</span></p><input class="form-control" type="text" required="" name="name" value="{{ $user->name }}"id="name" placeholder="Ex. John">
                                        </div>
                                        <div class="col">
                                            <p><strong>NID Number</strong><span class="text-danger">*</span></p><input class="form-control" type="number" required="" name="nid" value="{{ $user->nid }}" id="nid" placeholder="Ex. 12345678">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-3">

                                    <div class="row">
                                        <div class="col-xl-6" style="width: 558px;">
                                            <p><strong>Date Of Birth</strong>&nbsp;<span class="text-danger">*</span></p><input class="form-control" type="date" required="" name="dob" value="{{ $user->dob }}" id="dob">
                                        </div>

                                        <div class="col">
                                            <p><strong>Driver Type</strong><span class="text-danger">*</span>
                                                <select id="drivertype" value="{{$user->drivertype}}" class="form-select" aria-label="Default select example" name="drivertype" style="padding-top: 6px;margin-top: 15px;padding-left: 16px;margin-left: -8px;padding-right: 0px;margin-right: 18px;">
                                                    <option value="Private">Private Driver</option>
                                                    <option value="Uber">Uber Driver</option>
                                                    <option value="Company">Company Driver</option>
                                                </select>
                                        </div>

                                        <div class="col">
                                            <p><strong>User Type</strong><span class="text-danger">*</span>
                                                <select id="drivertype" value="{{$user->usertype}}" class="form-select" aria-label="Default select example" name="usertype" style="padding-top: 6px;margin-top: 15px;padding-left: 16px;margin-left: -8px;padding-right: 0px;margin-right: 18px;">
                                                    <option value="admin">admin</option>
                                                    <option value="customer">customer</option>
                                                    <option value="driver">driver</option>
                                                </select>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group mb-3">
                                    <p><strong>Email&nbsp;</strong><span class="text-danger">*</span></p><input class="form-control" value="{{ $user->email}}" type="email" name="email" id="email" placeholder="user@domain.com">
                                </div>

                                <div class="form-group mb-3">
                                    <p><strong>User Type&nbsp;</strong><span class="text-danger">*</span></p><input class="form-control" value="{{ $user->usertype}}" type="text" name="text" id="text" >
                                </div>

                                <div class="form-group mb-3">
                                    <p><strong>Password</strong><span class="text-danger">*</span></p>
                                    <input class="form-control" value="{{$user->password}}" type="password" name="password" id="password" placeholder="a-Z, 1-9, !@#$%^&*()" oninput="validatePassword()">
                                    <p><strong>Confirm Password</strong><span class="text-danger">*</span></p>
                                    <input class="form-control" name="password_confirm" value="{{$user->password}}" id="password_confirm" type="password" placeholder="a-Z, 1-9, !@#$%^&*()" oninput="validatePassword()">
                                    <span id="password-strength" ></span>
                                </div>

                                <div class="form-group mb-3">
                                    <p><strong>Driving License Number</strong><span class="text-danger">*</span></p><input class="form-control" type="number" name="license" value="{{ $user->license}}" id="license" placeholder="Ex.12345678">
                                </div>
                                <div class="form-group mb-3">
                                    <p><strong>Phone Number</strong><span class="text-danger">*</span></p><input class="form-control" type="number" value="{{ $user->phone}}" required="" name="phone" id="phone" placeholder="Ex. +12345678">
                                </div>
                                <div class="form-group mb-3">
                                    <p><strong>Address&nbsp;</strong><span class="text-danger">*</span></p><input class="form-control" type="text" required="" name="address" id="address" value="{{ $user->address}}" placeholder="Ex. Room No-361, 33/1, 3rd Floor">
                                </div>

                                <div class="form-group mb-3">
                                    <div class="row">
                                        <div class="col">
                                            <p><strong>Qualification</strong></p><input class="form-control" type="text"  name="qualification" value="{{ $user->qualification}}"id="qualification" placeholder="Ex. Driver at XYZ.company for X years">
                                        </div>
                                        <div class="col">
                                            <p><strong>Experience</strong></p><input class="form-control" type="text" value="{{ $user->experience}}" name="experience" id="experience" placeholder="Ex. Driver at XYZ.company for X years">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-3"><p><strong>Your Picture </strong><span class="text-danger">*</span></p>
{{-- <div class="file">
            <!-- Upload image input-->
            <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm ">
                <input id="image" name="image" type="file" onchange="readURL(this);" class="form-control border-0">
                <label  id="image" for="upload" name="image" class="font-weight-light text-muted">Choose file</label>
            </div>

            <!-- Uploaded image area-->
            <p class="font-italic text-dark text-center">The image uploaded will be rendered inside the box below.</p>
            <div class="image-area mt-4 text-dark"><img id="imagePath" src="/images/{{ Session::get('imagePath') }}" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"  width=200></div>
<div class="col d-none">
    <p><strong>URL</strong><span class="text-danger">*</span></p>
    <input id="urllink" name="url" type="url" class="form-control" readonly/>
</div>
</div></div> --}}


<div class="file">
    <!-- Upload image input -->
    <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
        <input id="image" name="image" type="file" value="{{$user->imagename}}" required="" onchange="readURL(this);" class="form-control border-0">
    </div>

    <!-- Uploaded image area -->
    <p class="font-italic text-dark text-center">The image uploaded will be rendered inside the box below.</p>
    <div class="image-area mt-4 text-dark">
        {{-- Initial preview when available --}}
        @if(Session::has('uploadedImagePath'))
            <img id="imagePath" src="{{ asset(Session::get('uploadedImagePath')) }}" alt="" class="img-fluid rounded shadow-sm mx-auto d-block" width="300">
        @else
            {{-- Placeholder image or leave empty --}}
            <img id="imagePath" src="{{ asset('images/' . $user->imagename) }}" alt="" class="img-fluid rounded shadow-sm mx-auto d-block" width="300">
        @endif
    </div>
</div>







    <div class="col d-none">
        <p><strong>URL</strong><span class="text-danger">*</span></p>
        <input id="urllink" name="url" type="url" class="form-control" readonly/>
    </div>
</div>

 <div class="justify-content-center d-flex form-group mb-3">
                                    <div id="submit-btn">
                                        <div class="row"><button class="btn btn-primary btn-light m-0 rounded-pill px-4" type="submit" style="min-width: 500px;" action method="POST" target="hidden_iframe">Submit</button></div>
                                    </div>
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
</div>
         
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/bs-init.js?h=ec5d4df3c798a2943b2ecbac76ebfde0"></script>
    <script src="/assets/js/Application-Form-Bootstrap-Image-Uploader.js?h=08b5f1592ae2d5f10ee07fabcdce691f"></script>
    <script src="/assets/js/Application-Form-submit-form.js?h=a4849fe3979293aae4bf12c3939c3af2"></script>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
    
                reader.onload = function (e) {
                    // Update the src attribute of the image with the data URL
                    document.getElementById('imagePath').src = e.target.result || '{{ asset('images/' . $user->imagename) }}';
    
                };
    
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
        <script src="{{asset('assets/js/password.js')}}"></script>



</body>

</html>