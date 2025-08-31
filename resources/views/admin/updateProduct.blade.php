@extends('admin.maindesign')

@section('updateProduct')
<base href="/public">
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>

@endif
<div class="container-fluid">
    <h2>Add Product</h2>
    <form  method="POST" action="{{ route('admin.postaddProduct') }}" enctype="multipart/form-data">
        @csrf
      <input  type="text" name="product_title" id="" placeholder="Enter Product Name" value="{{ $product->product_title }}">
      <br>
      <br>
<textarea name="product_description" id="" placeholder="Enter Product Description" cols="30" rows="5">
 {{ $product->product_description }}
</textarea>
  <br>
      <br>
      <input value="{{ $product->product_quntity }}" type="number" name="product_quntity" id="" placeholder="Enter Product Quantity">
  <br>
      <br>
      <input type="number" name="product_price" id="" placeholder="Enter Product Price" value="{{ $product->product_price }}">
        <br>
      <br>
      <input type="file" name="product_image" id="">
      <img src="/uploads/products/{{ $product->product_image }}" alt="">
<select name="product_category" id="">
    <option value="" selected disabled >Select Category</option>
    @foreach($categories as $category)
    <option value="{{ $category->category }}">{{ $category->category }}</option>
    @endforeach
</select>
  <br>
      <br>
      <input class="btn btn-primary" type="submit" value="Add Product">

@endsection
