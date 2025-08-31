@extends('admin.maindesign')

@section('addProduct')



@section('addCategory')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>

@endif
<div class="container-fluid">
    <h2>Add Product</h2>
    <form  method="POST" action="{{ route('admin.postaddProduct') }}" enctype="multipart/form-data">
        @csrf
      <input  type="text" name="product_title" id="" placeholder="Enter Product Name">
      <br>
      <br>
<textarea name="product_description" id="" placeholder="Enter Product Description" cols="30" rows="5">
 
</textarea>
  <br>
      <br>
      <input type="number" name="product_quntity" id="" placeholder="Enter Product Quantity">
  <br>
      <br>
      <input type="number" name="product_price" id="" placeholder="Enter Product Price">
        <br>
      <br>
      <input type="file" name="product_image" id="">
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
