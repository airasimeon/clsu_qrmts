@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Product</h1>

        <form method="POST" action="{{ route('products.update', $product->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="product_name">Product Name:</label>
                <input type="text" name="product_name" class="form-control" value="{{ $product->product_name }}">
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" class="form-control">{{ $product->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="product_category">Product Category:</label>
                <input type="text" name="product_category" class="form-control" value="{{ $product->product_category }}">
            </div>

            <div class="form-group">
                <label for="storage">Storage:</label>
                <input type="text" name="storage" class="form-control" value="{{ $product->storage }}">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection