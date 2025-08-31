@extends('admin.maindesign')

@section('viewProduct')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>  
@endif
<div class="container-fluid">
    <h2>View Products</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Description</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Category</th>
                <th>Image</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->product_title }}</td>
                <td>{{ $product->product_description }}</td>
                <td>{{ $product->product_quntity }}</td>
                <td>{{ $product->product_price }}</td>
                <td>{{ $product->product_category }}</td>
                <td><img src="/uploads/products/{{ $product->product_image }}" alt="" style="width: 100px; height: 100px;"></td>
                <td>{{ $product->created_at }}</td>
                <td>{{ $product->updated_at }}</td>
                <td><a href="{{ route('admin.deleteProduct' ,$product->id ) }}" onclick="return confirm('Are U Sure ')" class="btn btn-danger">Delete</a></td>
                <td><a href="{{ route('admin.editProduct' , $product->id) }}" class="btn btn-primary">Edit</a></td>
            </tr>
            @endforeach
            {{ $products->links() }}
        </tbody>
    </table>

</div>

@endsection