@if (session('success'))
    <div style="background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; max-width: 700px; margin: 20px auto; text-align: center;">
        {{ session('success') }}
    </div>

@endif

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <style>
    
    body {
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
      margin: 0;
    }
    .product-card {
      max-width: 700px;
      margin: 40px auto;
      background: #fff;
      border-radius: 12px;
      padding: 20px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      text-align: center;
    }
    .product-card h2 {
      color: #333;
      margin-bottom: 20px;
    }
    .product-card h3 {
      margin-top: 10px;
      color: #444;
    }
    .product-card p {
      margin: 8px 0;
      font-size: 16px;
      color: #555;
    }
    .product-card img {
      max-width: 100%;
      height: auto;
      margin: 15px auto;
      border-radius: 8px;
    }
    .price {
      font-size: 18px;
      font-weight: bold;
      color: #27ae60;
    }
    .category {
      font-style: italic;
      color: #888;
    }
    .btn-add {
      display: inline-block;
      background: #ff5a5f;
      color: #fff;
      padding: 10px 20px;
      border-radius: 6px;
      text-decoration: none;
      margin-top: 15px;
      transition: background 0.2s ease;
    }
    .btn-add:hover {
      background: #e0484d;
    }
    .reviews {
      max-width: 700px;
      margin: 30px auto;
      background: #fff;
      border-radius: 12px;
      padding: 20px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    .reviews h3 {
      margin-bottom: 15px;
      color: #333;
    }
    .review {
      border-bottom: 1px solid #eee;
      padding: 10px 0;
      text-align: left;
    }
    .review:last-child {
      border-bottom: none;
    }
    .review strong {
      color: #333;
    }
    .review small {
      color: #777;
    }
    .review-form textarea,
    .review-form select {
      width: 100%;
      padding: 8px;
      margin: 8px 0;
      border-radius: 6px;
      border: 1px solid #ccc;
    }
    .review-form button {
      background: #27ae60;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      transition: background 0.2s ease;
    }
    .review-form button:hover {
      background: #1f8f4a;
    }
  </style>

</head>
<body>
 <!-- Product Details -->
  <div class="product-card">
    <h2>Product Details</h2>
    <h3>{{ $product->product_title }}</h3>
    <p>{{ $product->product_description }}</p>
    <p class="price">Price: ${{ $product->product_price }}</p>
    <p>Quantity: {{ $product->product_quntity }}</p>
    <p class="category">Category: {{ $product->product_category }}</p>
    <img src="/uploads/products/{{ $product->product_image }}" alt="{{ $product->product_title }}">
    
    <form action="{{ route('addToCart' , $product->id) }}" method="POST">
      @csrf
      <button type="submit" class="btn-add">Add to Cart</button>
    </form>
  </div>

  <!-- Customer Reviews -->
  <div class="reviews">
    <h3>Customer Reviews</h3>
    <div class="review">
      <strong>Ahmed</strong>
      <p>Great product, very useful!</p>
      <small>⭐ 5/5</small>
    </div>
    <div class="review">
      <strong>Sara</strong>
      <p>Good quality, but delivery was a bit late.</p>
      <small>⭐ 4/5</small>
    </div>

    <!-- Add Review Form -->
    <div class="review-form">
      <h4>Leave a Review</h4>
      <textarea placeholder="Write your review..."></textarea>
      <select>
        <option>⭐ 5</option>
        <option>⭐ 4</option>
        <option>⭐ 3</option>
        <option>⭐ 2</option>
        <option>⭐ 1</option>
      </select>
      <button>Submit Review</button>
    </div>
  </div>
</body>
</html>
