@extends('maindesign')
@section('showCart')
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
                    <div class="detail-box
"> 
                      <h1>
                        Your Cart Items
                      </h1>
                      <p>
                        Below are the items you have added to your cart. You can review them before proceeding to checkout.
                      </p>
                      <a href="">
                        Continue Shopping
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
            </section>
            <div class="container my-5">
              <h2 class="mb-4">Shopping Cart</h2>
              @if($cartItems->isEmpty())
                  <p>Your cart is empty.</p>
              @else
                  <table class="table table-bordered">
                      <thead class="table-light">
                          <tr>
                              <th>Product</th>
                              <th>Title</th>
                              <th>Price</th>
                              <th>Quantity</th>
                              <th>Total</th>
                              <th>Remove Product</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach($cartItems as $item)
                          <tr>
                              <td><img src="/uploads/products/{{ $item->product->product_image }}" alt="{{ $item->product->product_title }}" style="width: 100px; height: auto;"></td>
                              <td>{{ $item->product->product_title }}</td>
                              <td>${{ $item->product->product_price }}</td>
                              <td>{{ $item->quantity }}</td>
                              <td>${{ $item->product->product_price * $item->quantity }}</td>
                              <td class="btn btn-danger"><a href="{{ route("removeProduct" , $item->id) }}"> Remove</a></td>
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
                  <div class="text-end">
                      <h4>Total Amount: ${{ $count }}</h4>
                      <a href="#" class="btn btn-success">Proceed to Checkout</a>
                  </div>
              @endif
            </div>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist
/umd/bootstrap.bundle.min.js"></script>

@endsection