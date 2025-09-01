<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="front_end/images/favicon.png" type="image/x-icon">

  <title>
    Giftos
  </title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="front_end/css/bootstrap.css" />

  <!-- Custom styles for this template -->
  <link href="front_end/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="front_end/css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.html">
          <span>
            Giftos
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  ">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shop.html">
                Shop
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="why.html">
                Why Us
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="testimonial.html">
                Testimonial
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact Us</a>
            </li>
          </ul>
          <div class="user_option">
         @if (Auth::check())
            <a href="{{ route('dashboard') }}">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span>
                Dashboard
              </span>
            </a>
       
@else
          <a href="{{ route('login') }}">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span>
                Login
              </span>
            </a>

                 <a href="{{ route('register') }}">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span>
                Sign Up 
              </span>
            </a>
              @endif
            <a href="">
              <i class="fa fa-shopping-bag" aria-hidden="true"></i>
            </a>
            <form class="form-inline ">
              <button class="btn nav_search-btn" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>
          </div>
        </div>
      </nav>
    </header>
    <!-- end header section -->
    <!-- slider section -->

    <section class="slider_section">
      <div class="slider_container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box"> 
                      <h1>
                        Welcome To Our <br>
                        Gift Shop
                      </h1>
                      <p>
                        Sequi perspiciatis nulla reiciendis, rem, tenetur impedit, eveniet non necessitatibus error distinctio mollitia suscipit. Nostrum fugit doloribus consequatur distinctio esse, possimus maiores aliquid repellat beatae cum, perspiciatis enim, accusantium perferendis.
                      </p>
                      <a href="">
                        Contact Us
                      </a>
                    </div>
                  </div>
                  <div class="col-md-5 ">
                    <div class="img-box">
                      <img style="width:600px" src="front_end/images/image3.jpeg" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
          
        </div>
      </div>
    </section>

    <!-- end slider section -->
  </div>
  <!-- end hero area -->

  <!-- shop section -->

  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          All Products
        </h2>
      </div>
<!-- shop section -->
<section class="shop_section layout_padding">
  <div class="container">
  

    <div class="product-grid">
      @foreach ($products as $product)
        <div class="product-card">
          <img src="uploads/products/{{ $product->product_image }}" alt="{{ $product->product_title }}">
          <h3>{{ $product->product_title }}</h3>
          <p>{{ Str::limit($product->product_description, 50) }}</p>
          <p class="price">Price: ${{ $product->product_price }}</p>
          <p>Quantity: {{ $product->product_quntity }}</p>
          <p class="category">Category: {{ $product->product_category }}</p>
          <a href="{{ route('product.details', $product->id) }}" class="btn-view">View Details</a>
        </div>
      @endforeach
    </div>
  </div>
</section>
<!-- end shop section -->

<style>
  .product-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 20px;
    margin-top: 30px;
  }
  .product-card {
    background: #fff;
    border-radius: 12px;
    padding: 15px;
    text-align: center;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    transition: transform 0.2s ease;
  }
  .product-card:hover {
    transform: translateY(-5px);
  }
  .product-card img {
    max-width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 8px;
    margin-bottom: 10px;
  }
  .product-card h3 {
    font-size: 18px;
    color: #333;
    margin-bottom: 8px;
  }
  .product-card p {
    font-size: 14px;
    color: #555;
    margin: 5px 0;
  }
  .product-card .price {
    color: #27ae60;
    font-weight: bold;
  }
  .product-card .category {
    font-style: italic;
    color: #888;
  }
  .product-card .btn-view {
    display: inline-block;
    margin-top: 10px;
    padding: 8px 15px;
    background: #ff5a5f;
    color: #fff;
    text-decoration: none;
    border-radius: 6px;
    transition: background 0.2s ease;
  }
  .product-card .btn-view:hover {
    background: #e0484d;
  }
</style>

  
    </div>
  </section>

  <!-- end shop section -->







  <!-- contact section -->



  <br><br><br>

  <!-- end contact section -->

   

  



    <footer class=" footer_section">
      <div class="container">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://html.design/">Web Tech Knowledge</a>
        </p>
      </div>
    </footer>
    <!-- footer section -->

  </section>

  <!-- end info section -->


  <script src="front_end/js/jquery-3.4.1.min.js"></script>
  <script src="front_end/js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="front_end/js/custom.js"></script>

</body>

</html>



