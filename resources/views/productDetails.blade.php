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
            padding: 20px;
        }
        .product-card {
            max-width: 600px;
            margin: auto;
            background: #fff;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        .product-card h2 {
            text-align: center;
            color: #333;
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
            display: block;
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
    </style>
</head>
<body>
    <div class="product-card">
        <h2>Product Details</h2>
        <h3>{{ $product->product_title }}</h3>
        <p>{{ $product->product_description }}</p>
        <p class="price">Price: ${{ $product->product_price }}</p>
        <p>Quantity: {{ $product->product_quntity }}</p>
        <p class="category">Category: {{ $product->product_category }}</p>
        <img src="/uploads/products/{{ $product->product_image }}" alt="{{ $product->product_title }}">
    </div>
</body>
</html>
