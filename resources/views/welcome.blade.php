<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Home - Brand</title>
  <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css?h=e03e0ab93c3f39bbde5c27d98953d31d')}}">
  <link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
  <link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="{{asset('assets/css/styles.min.css?h=8d1b0030a687aa86a9b84336aa664296')}}">

  
</head>

<style>
  .mb-0 {
    margin-bottom: 20px !important;
}


</style>

<body>
  <nav class="navbar navbar-expand bg-light navigation-clean navbar-light">
    <div class="container"><button class="navbar-toggler" data-bs-toggle="collapse"></button><!-- Start: Navbar Centered Brand -->
      <nav class="navbar navbar-expand-md bg-body py-3">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"><span class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center me-2 bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-car">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <circle cx="7" cy="17" r="2"></circle>
                <circle cx="17" cy="17" r="2"></circle>
                <path d="M5 17h-2v-6l2-5h9l4 5h1a2 2 0 0 1 2 2v4h-2m-4 0h-6m-6 -6h15m-6 0v-5"></path>
              </svg></span><span>Driver Hire</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-4"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse flex-grow-0 order-md-first" id="navcol-4">
            <ul class="navbar-nav me-auto">
              <li class="nav-item"></li>
              <li class="nav-item"></li>
            </ul>
            <div class="d-md-none my-2"><button class="btn btn-light" type="button">Button</button><button class="btn btn-primary" type="button">Button</button></div>
          </div>
          <div class="d-md-none my-2"><button class="btn btn-primary" type="button">Sign Up</button><a class="btn btn-primary" role="button" href="#">Login</a></div>
        </div>
      </nav><!-- End: Navbar Centered Brand -->
      <nav class="navbar navbar-expand-md bg-body">
        <div class="container-fluid"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link active" href="">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="{{url('login')}}">login</a></li>
              <li class="nav-item"></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </nav>
  <header class="text-center text-white masthead" style="background: url('/assets/img/bg-masthead.jpg?h=3d56ee9570bd6ab1d22f0827b18a0a99')no-repeat center center;background-size: cover;">

    <div class="overlay">
      <div class="simple-slider">
          <div class="swiper-container">
              <div class="swiper-wrapper">
                  {{-- @foreach($images as $image)
                      <div class="swiper-slide" style="background: url('{{ asset("storage/{$image->image}") }}') center center / cover no-repeat;"></div>
                  @endforeach --}}
              </div>
              <div class="swiper-pagination"></div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
          </div>
      </div>
  </div>

    </div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto position-relative">
          <h1 class="mb-5">Drivers you can count on, journeys you'll enjoy</h1>
        </div>
      </div>
    </div>
  </header>
  <section class="text-center bg-light features-icons">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
            <div class="d-flex features-icons-icon"><i class="icon-screen-desktop m-auto text-primary" data-bss-hover-animate="pulse"></i></div>
            <h3>Professional Drivers</h3>
            <p class="lead mb-0"><br>Find your perfect driver with a tap.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
            <div class="d-flex features-icons-icon"><i class="icon-layers m-auto text-primary" data-bss-hover-animate="pulse"></i></div>
            <h3>No more holding</h3>
            <p class="lead mb-0"><br>No more waiting on hold, book online effortlessly.<br><br></p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
            <div class="d-flex features-icons-icon"><i class="icon-check m-auto text-primary" data-bss-hover-animate="pulse"></i></div>
            <h3>Easy to Use</h3>
            <p class="lead mb-0"><br>Book in seconds, ride in style.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="showcase">
    <div class="container-fluid p-0">
      <div class="row g-0">
        <div class="col-lg-6 text-white order-lg-2 showcase-img" style="background-image:url(&quot;/assets/img/bg-showcase-1.jpg?h=717dfd74ae2c9ffe2373428a05a3f602&quot;);"><span></span></div>
        <div class="col-lg-6 my-auto order-lg-1 showcase-text">
          <h2>Find Drivers Instantly</h2>
          <p class="lead mb-0">No more hassling with phone calls or waiting on hold. Our user-friendly platform lets you book reliable drivers in just a few taps. Browse profiles, check availability, set preferences - all customized to your trip details. The right driver for the right ride, with minimal effort thanks to modern technology. Travel booking made easy.</p>
        </div>
      </div>
      <div class="row g-0">
        <div class="col-lg-6 text-white showcase-img" style="background-image:url(&quot;/assets/img/bg-showcase-2.jpg?h=82f59ff9dc7ce5bb277d6dfa737a6e45&quot;);"><span></span></div>
        <div class="col-lg-6 my-auto order-lg-1 showcase-text">
          <h2> Drivers You Can Trust</h2>
          <p class="lead mb-0">Finding an reliable driver shouldn't be complicated. With our service, quality and dependability come standard. Browse only highly-rated drivers with proven track records. View detailed profiles highlighting qualifications, vehicles, and past rides. </p>
        </div>
      </div>
      <div class="row g-0">
        <div class="col-lg-6 text-white order-lg-2 showcase-img" style="background-image:url(&quot;/assets/img/bg-showcase-3.jpg?h=c7ec0329b8412e48f1b91e5c6a8cc7cf&quot;);"><span></span></div>
        <div class="col-lg-6 my-auto order-lg-1 showcase-text">
          <h2>Hassle-Free Bookings</h2>
          <p class="lead mb-0">Save time and effort with our easy instant bookings. No more endless calls to dispatch or deciphering complicated scheduling systems. Our intuitive portal lets you directly book drivers with just a few clicks. Simply enter your trip details, browse available drivers and vehicles, select your preferences, and request a ride. Fast, efficient, and personalized to your needs - whether you book via phone, tablet, or desktop.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="text-center bg-light testimonials">
    <div class="container">
      <h2 class="mb-5">Our Drivers</h2>
      <div class="row">

        @foreach($driver as $d)
        <div class="col-lg-4">
          <div class="mx-auto testimonial-item mb-5 mb-lg-0"><img class="rounded-circle img-fluid mb-3" src="{{ asset('images/' . $d->imagename) }}">
            <h5>{{ $d->name }}</h5>
            <p class="font-weight-light mb-0"> Driver Type: {{ $d->drivertype }}</p>
          </div>
        </div>

        @endforeach
        {{-- <div class="col-lg-4">
          <div class="mx-auto testimonial-item mb-5 mb-lg-0"><img class="rounded-circle img-fluid mb-3" src="/assets/img/testimonials-2.jpg?h=2f7c16e307b7da2bdf38d580d9a3fed9">
            <h5>Fred S.</h5>
            <p class="font-weight-light mb-0">"Bootstrap is amazing. I've been using it to create lots of super nice landing pages."</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="mx-auto testimonial-item mb-5 mb-lg-0"><img class="rounded-circle img-fluid mb-3" src="/assets/img/testimonials-3.jpg?h=39503ac082e01a410b496ed9ce0df8e6">
            <h5>Sarah W.</h5>
            <p class="font-weight-light mb-0">"Thanks so much for making these free resources available to us!"</p>
          </div>
        </div> --}}
      </div>
    </div>
  </section>
  <section class="text-center text-white call-to-action" style="background:url(&quot;/assets/img/bg-masthead.jpg?h=3d56ee9570bd6ab1d22f0827b18a0a99&quot;) no-repeat center center;background-size:cover;">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto position-relative">
          <h2 class="mb-4"><br>Own the road, drive with us. Sign up today!&nbsp;</h2>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto position-relative">
          <form>
            <div class="row">
              <div class="col">  <a href={{ url('sign')}}><button class="btn btn-primary lg" type="button">Signup</button></a> </div>
              
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  
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
  <script src="/assets/js/script.min.js?h=55c71e47549a2211d61829c1124b3596"></script>
</body>

</html>
