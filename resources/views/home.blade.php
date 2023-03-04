@extends('layouts.app')

@section('content')
    <!-- slider start -->
    <section class="header-slider position-relative">
      <img src="image/home-bg.jpg" class="header-slider-image" alt="">
      <div class="header-slider-content text-center">
        <h1 class="display-5 text-success fw-bold mb-4">HAND PICKED BOOK <br> TO YOUR DOOR.</h1>
        <p class="fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil <br class="d-md-inline-block d-none"> ullam at harum distinctio culpa odit!</p>
        <a href="" class="btn btn-success rounded-pill px-5">Shop Now</a>
      </div>
    </section>
    <!-- slider finish -->

    <!-- slider down icons start -->
    <section class="container my-5">

      <div class="row g-3 text-center">
        <div class="col-lg-3 col-6">
          <div class="d-flex flex-column align-items-center gap-3">
            <i class="fa-solid fa-truck-fast text-success fs-1 me-3"></i>
            <div class="d-flex flex-column">
              <h5 class="h5 text-light-gray mb-0">Free Shipping</h5>
              <span style="font-size: 17.5px;" class="text-gray">Order Over $100</span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <div class="d-flex flex-column align-items-center gap-3">
            <i class="fa-solid fa-lock text-success fs-1 me-3"></i>
            <div class="d-flex flex-column">
              <h5 class="h5 text-light-gray mb-0">Secure Payment</h5>
              <span style="font-size: 17.5px;" class="text-gray">100 Secure Payment</span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <div class="d-flex flex-column align-items-center gap-3">
            <i class="fa-solid fa-rotate-right text-success fs-1 me-3"></i>
            <div class="d-flex flex-column">
              <h5 class="h5 text-light-gray mb-0">Easy Returns</h5>
              <span style="font-size: 17.5px;" class="text-gray">10 Day Returns</span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <div class="d-flex flex-column align-items-center gap-3">
            <i class="fa-solid fa-headset text-success fs-1 me-3"></i>
            <div class="d-flex flex-column">
              <h5 class="h5 text-light-gray mb-0">24/7 Support</h5>
              <span style="font-size: 17.5px;" class="text-gray">Call Us Anytime</span>
            </div>
          </div>
        </div>
      </div>



    </section>
    <!-- slider down icons start -->

    <!-- featured books start -->
    <section class="container my-5">
      <h1 class="h1 text-center text-decoration-underline mb-4">Featured Books</h1>

      <div class="row">

        <div class="col-lg-3">
          <div class="card border-0">
            <img src="image/darknet.jpg" alt="" class="img-fluid">
            <div class="card-body">
              <h1 class="h4">Book 1</h1>
              <div class="d-flex flex-wrap align-items-center justify-content-start gap-3 mb-3">
                <span class="fs-4 fw-bold">$15.99</span>
                <span class="fs-5 text-decoration-line-through text-gray">$20.99</span>
              </div>
              <button class="btn btn-outline-success">Add To Cart</button>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- featured books finish -->

    <!-- subscribe form start -->
    <section class="home-subscribe my-5">
      <div class="d-flex align-items-center justify-content-center h-100">
        <div class="text-center">
          <h1 class="h2 mb-4">Subscribe For Latest Updates</h1>
          <input type="text" class="form-control my-3 border-success" placeholder="Enter your email">
          <button class="btn btn-success">Subscribe</button>
        </div>
      </div>
    </section>
    <!-- subscribe form finish -->

    <!-- about start -->
    <section class="container my-5">
      <div class="row d-flex align-items-center g-3 text-lg-start text-center">
        <div class="col-lg-6">
          <img src="image/about-img.jpg" alt="" class="img-fluid rounded">
        </div>

        <div class="col-lg-6 h-100">
            <h1 class="h1 mb-3">ABOUT US</h1>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora incidunt autem doloribus reiciendis inventore natus voluptatibus laboriosam quod.</p>
            <button class="btn btn-secondary">Read More</button>
        </div>
      </div>
    </section>
    <!-- about finish -->

    <!-- comments start -->
    <section class="comments container my-5">
      <h1 class="h1 text-center text-decoration-underline mb-4">Client's Reviews</h1>
      <div class="row">

        <div class="col-lg-4 col-md-6 col-12 mx-auto mb-3">
          <div class="card">
            <div class="card-body text-center">
              <img width="80" src="image/pic-1.png" alt="" class="img-fluid rounded-circle mb-3">
              <h1 class="h4">John Deo</h1>
              <p class="fs-16">Lorem ipsum dolor sit amet consectetur, adipisicing elit. At quis perferendis impedit eos! Distinctio assumenda debitis modi? Nostrum labore magni rem amet!</p>
              <div class="d-flex gap-2 justify-content-center text-success">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fa-solid fa-star-half-stroke"></i>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-12 mx-auto mb-3">
          <div class="card">
            <div class="card-body text-center">
              <img width="80" src="image/pic-2.png" alt="" class="img-fluid rounded-circle mb-3">
              <h1 class="h4">John Deo</h1>
              <p class="fs-16">Lorem ipsum dolor sit amet consectetur, adipisicing elit. At quis perferendis impedit eos! Distinctio assumenda debitis modi? Nostrum labore magni rem amet!</p>
              <div class="d-flex gap-2 justify-content-center text-success">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fa-solid fa-star-half-stroke"></i>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-12 mx-auto mb-3">
          <div class="card">
            <div class="card-body text-center">
              <img width="80" src="image/pic-3.png" alt="" class="img-fluid rounded-circle mb-3">
              <h1 class="h4">John Deo</h1>
              <p class="fs-16">Lorem ipsum dolor sit amet consectetur, adipisicing elit. At quis perferendis impedit eos! Distinctio assumenda debitis modi? Nostrum labore magni rem amet!</p>
              <div class="d-flex gap-2 justify-content-center text-success">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fa-solid fa-star-half-stroke"></i>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- comments finish -->

    <!-- blogs start -->
    <section class="home-blogs container my-5">
      <h1 class="h1 text-center text-decoration-underline mb-4">Our Blogs</h1>

      <div class="row">

        <div class="col-lg-4 col-md-6 col-12 mx-auto mb-3">
          <div class="card">
            <img height="210" src="image/blog-1.jpg" alt="" class="card-img-top">
            <div class="card-body">
              <h1 class="h4">Blog Title Goes Here</h1>
              <p class="fs-16">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet natus obcaecati et?</p>
              <button class="btn btn-success">Read More</button>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-12 mx-auto mb-3">
          <div class="card">
            <img height="210" src="image/blog-2.jpeg" alt="" class="card-img-top">
            <div class="card-body">
              <h1 class="h4">Blog Title Goes Here</h1>
              <p class="fs-16">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet natus obcaecati et?</p>
              <button class="btn btn-success">Read More</button>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-12 mx-auto mb-3">
          <div class="card">
            <img height="210" src="image/blog-3.png" alt="" class="card-img-top">
            <div class="card-body">
              <h1 class="h4">Blog Title Goes Here</h1>
              <p class="fs-16">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet natus obcaecati et?</p>
              <button class="btn btn-success">Read More</button>
            </div>
          </div>
        </div>


      </div>
    </section>
    <!-- blogs finish -->
@endsection
