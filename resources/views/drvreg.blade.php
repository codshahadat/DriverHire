<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Driver Registration</title>
    <link rel="icon" type="image/jpeg" sizes="1000x730" href="/assets/img/1000_F_46794667_UKPE3SXOP3Q7kBKmS4FRBZ63VNx56iER.jpg?h=3d9738bd35754f0b05b2bc5525500a89">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css?h=3694ad95c291cc6a4e519b80b1762aab')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/Source%20Sans%20Pro.css?h=c37ba52c18853fa3592add08e81f05d7')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/Application-Form.css?h=67e69944f8e90dfac42c7dfb24e0628e')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/Banner-Heading-Image-images.css?h=4f3cfa46e40e236365345fc77963f4b8')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/Login-Form-Basic-icons.css?h=3f8fe3ed61628eb4bda76aca0b3052d3')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/Navbar-Centered-Links-icons.css?h=befd8a398792e305b7ffd4a176b5b585')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/Tamplate-SB-Admin-on-BSS.css?h=2425d7d0d7d129ddc54a4a00aafc1930')}}">
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
                        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Driver</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">About us</a></li>
                    </ul>
                    <a href={{ url('login')}}><button class="btn btn-primary" type="button">Login</button></a> 
                </div>
            </div>
        </nav>
        <div class="container" style="padding-left: 0px;padding-right: 20px;">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2 style="padding-bottom: 0px;"><br>Driver Registration&nbsp;<br><br></h2>
                    <p class="lead w-lg-50"></p>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col">
                    <form class="container" action="{{ url('store-register') }}" method="POST">
                        {{ csrf_field() }}
                       
                        <fieldset>
                                @if(Session::has('err'))
                                <div class="alert alert-danger">
                                    {{ Session::get('err') }}
                                </div>
                                @endif
                                @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                                @endif
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
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="row">
                                        <div class="col-xl-6" style="width: 558px;">
                                            <p><strong>Date Of Birth</strong>&nbsp;<span class="text-danger">*</span></p><input class="form-control" type="date" required="" name="dob" id="dob">
                                        </div>
                                        <div class="col">
                                            <p><strong>Driver Type</strong><span class="text-danger">*</span>
                                                <select id="drivertype"  class="form-select" aria-label="Default select example" name="drivertype" style="padding-top: 6px;margin-top: 15px;padding-left: 16px;margin-left: -8px;padding-right: 0px;margin-right: 18px;">
                                                    <option value>Private Driver</option>
                                                    <option value>Uber Driver</option>
                                                    <option value>On-Demand Driver</option>
                                                    <option value> Company Driver</option>
                                                </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <p><strong>Email&nbsp;</strong><span class="text-danger">*</span></p><input class="form-control" type="email" name="email" id="email" placeholder="user@domain.com">
                                    <p><strong>Password</strong><span class="text-danger">*</span></p><input class="form-control" type="password" name="password" id="password" placeholder="a-Z, 1-9 , !@#$%^&amp;*()">
                                    <p><strong>Confirm Password</strong><span class="text-danger">*</span></p><input class="form-control" name="password_confirm" id="password_confirm" type="password_confirm" placeholder="a-Z, 1-9 , !@#$%^&amp;*()">
                                </div>
                                <div class="form-group mb-3">
                                    <p><strong>Driving License Number</strong><span class="text-danger">*</span></p><input class="form-control" type="number" name="license" id="license" placeholder="Ex.12345678">
                                </div>
                                <div class="form-group mb-3">
                                    <p><strong>Address&nbsp;</strong><span class="text-danger">*</span></p><input class="form-control" type="text" required="" name="address" id="address" placeholder="Ex. Room No-361, 33/1, 3rd Floor">
                                </div>
                                <div class="form-group mb-3">
                                    <div class="row">
                                        <div class="col">
                                            <p><strong>Qualification</strong></p><input class="form-control" type="text" required="" name="qualification" id="qualification" placeholder="Ex. Driver at XYZ.company for X years">
                                        </div>
                                        <div class="col">
                                            <p><strong>Experience</strong></p><input class="form-control" type="text" required="" name="experience" id="experience" placeholder="Ex. Driver at XYZ.company for X years">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-3"><p><strong>Your Picture </strong><span class="text-danger">*</span></p>
<div class="file">
            <!-- Upload image input-->
            <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm ">
                <input id="image" name="image" type="file" onchange="readURL(this);" class="form-control border-0">
                <label  id="upload-label" for="upload" name="image" class="font-weight-light text-muted">Choose file</label>
                <div class="input-group-append">
                    <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Choose file</small></label>
                </div>
            </div>

            <!-- Uploaded image area-->
            <p class="font-italic text-dark text-center">The image uploaded will be rendered inside the box below.</p>
            <div class="image-area mt-4 text-dark"><img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"  width=200></div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/bs-init.js?h=ec5d4df3c798a2943b2ecbac76ebfde0"></script>
    <script src="/assets/js/Application-Form-Bootstrap-Image-Uploader.js?h=08b5f1592ae2d5f10ee07fabcdce691f"></script>
    <script src="/assets/js/Application-Form-submit-form.js?h=a4849fe3979293aae4bf12c3939c3af2"></script>
</body>

</html>
