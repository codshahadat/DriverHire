<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>driver</title>
    <link rel="icon" type="image/jpeg" sizes="1000x730" href="/assets/img/1000_F_46794667_UKPE3SXOP3Q7kBKmS4FRBZ63VNx56iER.jpg?h=3d9738bd35754f0b05b2bc5525500a89">
    <link rel="stylesheet" href="  {{ asset('assets/bootstrap/css/bootstrap.min.css?h=3694ad95c291cc6a4e519b80b1762aab')}}">
    <link rel="stylesheet" href="  {{ asset('assets/css/Source%20Sans%20Pro.css?h=c37ba52c18853fa3592add08e81f05d7')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="  {{ asset('assets/css/Application-Form.css?h=67e69944f8e90dfac42c7dfb24e0628e')}}">
    <link rel="stylesheet" href="  {{ asset('assets/css/Banner-Heading-Image-images.css?h=4f3cfa46e40e236365345fc77963f4b8')}}">
    <link rel="stylesheet" href="  {{ asset('assets/css/Login-Form-Basic-icons.css?h=3f8fe3ed61628eb4bda76aca0b3052d3')}}">
    <link rel="stylesheet" href="  {{ asset('assets/css/Navbar-Centered-Links-icons.css?h=befd8a398792e305b7ffd4a176b5b585')}}">
    <link rel="stylesheet" href="  {{ asset('assets/css/Tamplate-SB-Admin-on-BSS.css?h=2425d7d0d7d129ddc54a4a00aafc1930')}}">

</head>

<body>
    <section class="position-relative py-4 py-xl-5">
        <nav class="navbar navbar-expand-md bg-body-secondary py-3" style="margin-top: -49px;margin-bottom: -25px;">
            <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"><span class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center me-2 bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bezier">
                            <path fill-rule="evenodd" d="M0 10.5A1.5 1.5 0 0 1 1.5 9h1A1.5 1.5 0 0 1 4 10.5v1A1.5 1.5 0 0 1 2.5 13h-1A1.5 1.5 0 0 1 0 11.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm10.5.5A1.5 1.5 0 0 1 13.5 9h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM6 4.5A1.5 1.5 0 0 1 7.5 3h1A1.5 1.5 0 0 1 10 4.5v1A1.5 1.5 0 0 1 8.5 7h-1A1.5 1.5 0 0 1 6 5.5v-1zM7.5 4a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z"></path>
                            <path d="M6 4.5H1.866a1 1 0 1 0 0 1h2.668A6.517 6.517 0 0 0 1.814 9H2.5c.123 0 .244.015.358.043a5.517 5.517 0 0 1 3.185-3.185A1.503 1.503 0 0 1 6 5.5v-1zm3.957 1.358A1.5 1.5 0 0 0 10 5.5v-1h4.134a1 1 0 1 1 0 1h-2.668a6.517 6.517 0 0 1 2.72 3.5H13.5c-.123 0-.243.015-.358.043a5.517 5.517 0 0 0-3.185-3.185z"></path>
                        </svg></span><span>Driver Hiring System</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-3"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-3">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"><a class="nav-link active" href="{{ url('/')}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('') }}">Signup</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">About us</a></li>
                    </ul><a href={{ url('login')}}><button class="btn btn-primary" type="button">Login</button></a> 
                </div>
            </div>
        </nav>
        <div class="container" style="padding-left: 0px;padding-right: 20px;">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2 style="padding-bottom: 0px;"><br>User Registration&nbsp;<br><br></h2>
                    <p class="lead w-lg-50"></p>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col">

                    <form class="container" action="{{ url('store-customer') }}" method="POST" enctype="multipart/form-data">
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

                    <section>
                        <div class="container">
                            <form id="application-form">
                                <div class="form-group mb-3">
                                    <div class="row">
                                        <div class="col">
                                            <p><strong>Name</strong>&nbsp;<span class="text-danger">*</span></p><input class="form-control" type="text" required="" name="name" id="name" placeholder="Ex. John">
                                        </div>
                                        <div class="col">
                                            <p><strong>NID Number</strong><span class="text-danger">*</span></p><input class="form-control" type="number" required="" name="nid" id="nid" placeholder="Ex. 12345678">
                                        </div>
                                        <div class="col">
                                            <p><strong>Phone Number</strong><span class="text-danger">*</span></p><input class="form-control" type="number" required="" name="phone" id="phone" placeholder="Ex. +12345678">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="row">
                                        <div class="col-xl-6" style="width: 558px;">
                                            <p><strong>Date Of Birth</strong>&nbsp;<span class="text-danger">*</span></p><input class="form-control" type="date" required="" name="dob" id="dob">
                                        </div>
                                        <div class="col">
                                            <div class="form-group mb-3">
                                                <p><strong>Email&nbsp;</strong><span class="text-danger">*</span></p><input class="form-control" type="email" name="email" id="email" placeholder="user@domain.com">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <p><strong>Address&nbsp;</strong><span class="text-danger">*</span></p><input class="form-control" type="text" required="" name="address" id="address" placeholder="Ex. Room No-361, 33/1, 3rd Floor">
                                </div>

                                <div class="form-group mb-3">
                                    <p><strong>Password</strong><span class="text-danger">*</span></p>
                                    <input class="form-control" type="password" name="password" id="password" placeholder="a-Z, 1-9, !@#$%^&*()" oninput="validatePassword()">
                                    <p><strong>Confirm Password</strong><span class="text-danger">*</span></p>
                                    <input class="form-control" name="password_confirm" id="password_confirm" type="password" placeholder="a-Z, 1-9, !@#$%^&*()" oninput="validatePassword()">
                                    <span id="password-strength" ></span>
                                </div>
                            </div>
                        </div>
                                <div class="form-group mb-3"><p><strong>Your Picture </strong><span class="text-danger">*</span></p>
{{-- <div class="file">
            <!-- Upload image input-->
            <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm ">
                <input id="image" name="image" type="file" onchange="readURL(this);" class="form-control border-0">
                <label  id="upload-label" for="upload" name="image" class="font-weight-light text-muted">Choose file</label>
                <div class="input-group-append">
                    <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Choose file</small></label>
                </div>
            

            <!-- Uploaded image area-->
            <p class="font-italic text-dark text-center">The image uploaded will be rendered inside the box below.</p>
            <div class="image-area mt-4 text-dark"><img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"  width=200> </div> </div> </div>--}}



            <div class="file">
                <!-- Upload image input -->
                <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                    <input id="image" name="image" type="file" onchange="readURL(this);" class="form-control border-0">
                </div>
            
 <!-- Uploaded image area -->
 <p class="font-italic text-dark text-center">The image uploaded will be rendered inside the box below.</p>
 <div class="image-area mt-4 text-dark">
     {{-- Initial preview when available --}}
     @if(Session::has('uploadedImagePath'))
         <img id="imagePath" src="{{ asset(Session::get('uploadedImagePath')) }}" alt="" class="img-fluid rounded shadow-sm mx-auto d-block" width="300">
     @else
         {{-- Placeholder image or leave empty --}}
         <img id="imagePath" src="" alt="" class="img-fluid rounded shadow-sm mx-auto d-block" width="300">
     @endif
 </div>
</div>

<script>
 function readURL(input) {
     if (input.files && input.files[0]) {
         var reader = new FileReader();

         reader.onload = function (e) {
             // Update the src attribute of the image with the data URL
             document.getElementById('imagePath').src = e.target.result;
         };

         reader.readAsDataURL(input.files[0]);
     }
 }
</script>

            
<div class="col d-none">
    <p><strong>URL</strong><span class="text-danger">*</span></p>
    <input id="urllink" name="url" type="url" class="form-control" readonly/>
</div>
</div></div>
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
<footer class="bg-light footer">
    <div class="container">
      <div class="row"><!-- Start: Footer Multi Column -->
        <footer>
          <div class="container py-4 py-lg-5">
            <div class="row justify-content-center"><!-- Start: Services -->
              <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column item">
                <h3 class="fs-6">Services</h3>
                <ul class="list-unstyled">
                  <li>Driver Job</li>
                  <li>Driver Hiring</li>
                  <li>Online Services</li>
                </ul>
              </div><!-- End: Services --><!-- Start: About -->
              <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column item">
                <h3 class="fs-6">About</h3>
                <ul class="list-unstyled">
                  <li>Smart Driver Company</li>
                  <li>Address: Bayzid Bostami, Chittagong</li>
                  <li>House No: 413/A</li>
                </ul>
              </div><!-- End: About --><!-- Start: Careers -->
              <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column item">
                <h3 class="fs-6">Careers</h3>
                <ul class="list-unstyled">
                  <li>Job openings</li>
                  <li>Employee success</li>
                  <li>Benefits</li>
                </ul>
              </div><!-- End: Careers --><!-- Start: Social Icons -->
              <div class="col-lg-3 text-center text-lg-start d-flex flex-column align-items-center order-first align-items-lg-start order-lg-last item social">
                <div class="fw-bold d-flex align-items-center mb-2"><span class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-car">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <circle cx="7" cy="17" r="2"></circle>
                      <circle cx="17" cy="17" r="2"></circle>
                      <path d="M5 17h-2v-6l2-5h9l4 5h1a2 2 0 0 1 2 2v4h-2m-4 0h-6m-6 -6h15m-6 0v-5"></path>
                    </svg></span><span>Driver Hire</span></div>
                <p class="text-muted copyright">Smart and Professional Driver For hire!!</p>
              </div><!-- End: Social Icons -->
            </div>
            <hr>
            <div class="d-flex justify-content-between align-items-center pt-3">
              <p class="text-muted mb-0">Copyright Final Project © 2023 PUC</p>
              <ul class="list-inline mb-0">
                <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-facebook">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                  </svg></li>
                <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-twitter">
                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                  </svg></li>
                <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                  </svg></li>
              </ul>
            </div>
          </div>
        </footer><!-- End: Footer Multi Column -->
      </div>
    </div>
  </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/bs-init.js?h=ec5d4df3c798a2943b2ecbac76ebfde0"></script>
    <script src="/assets/js/Application-Form-Bootstrap-Image-Uploader.js?h=08b5f1592ae2d5f10ee07fabcdce691f"></script>
    <script src="/assets/js/Application-Form-submit-form.js?h=a4849fe3979293aae4bf12c3939c3af2"></script>
    <script src="{{asset('assets/js/upload.js')}}"></script>
    <script src="{{asset('assets/js/password.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</body>

</html>
