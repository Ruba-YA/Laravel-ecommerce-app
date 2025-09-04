<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-light">

<div class="container my-5">
  <!-- Product Details -->
  <div class="card shadow-lg p-4 mb-5">
    <div class="row g-4">
      <div class="col-md-5 text-center">
        <img src="/uploads/products/{{ $product->product_image }}" 
             class="img-fluid rounded" 
             alt="{{ $product->product_title }}">
      </div>
      <div class="col-md-7">
        <h2 class="mb-3">{{ $product->product_title }}</h2>
        <p class="text-muted">{{ $product->product_description }}</p>
        <p class="h5 text-success">Price: ${{ $product->product_price }}</p>
        <p><strong>Quantity:</strong> {{ $product->product_quntity }}</p>
        <p><strong>Category:</strong> {{ $product->product_category }}</p>

        <form action="{{ route('addToCart' , $product->id) }}" method="POST">
          @csrf
          <button type="submit" class="btn btn-primary btn-lg mt-3">
            Add to Cart
          </button>
        </form>
      </div>
    </div>
  </div>

  <!-- Customer Reviews -->
  <div class="card shadow-sm p-4">
    <h3 class="mb-4">Customer Reviews</h3>

    <div class="mb-3 p-3 border rounded bg-white">
      <strong>Ahmed</strong>
      <p class="mb-1">Great product, very useful!</p>
      <small class="text-warning">⭐ 5/5</small>
    </div>

    <div class="mb-3 p-3 border rounded bg-white">
      <strong>Sara</strong>
      <p class="mb-1">Good quality, but delivery was a bit late.</p>
      <small class="text-warning">⭐ 4/5</small>
    </div>

    <!-- Add Review Form -->
    <div class="mt-4">
      <h4>Leave a Review</h4>
      <form>
        <div class="mb-3">
          <textarea class="form-control" rows="3" placeholder="Write your review..."></textarea>
        </div>
        <div class="mb-3">
          <select class="form-select">
            <option>⭐ 5</option>
            <option>⭐ 4</option>
            <option>⭐ 3</option>
            <option>⭐ 2</option>
            <option>⭐ 1</option>
          </select>
        </div>
        <button type="submit" class="btn btn-success">Submit Review</button>
      </form>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
