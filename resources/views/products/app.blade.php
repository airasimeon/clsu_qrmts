@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Edit Product: {{ $product->product_name }}
        </div>
        <div class="card-body">
            <form action="{{ route('products.update', $product->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="product_name">Product Name</label>
                    <input type="text" class="form-control" id="product_name" name="product_name" value="{{ $product->product_name }}">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description">{{ $product->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="product_category">Product Category</label>
                    <input type="text" class="form-control" id="product_category" name="product_category" value="{{ $product->product_category }}">
                </div>
                <div class="form-group">
                    <label for="QR">QR</label>
                    <input type="text" class="form-control" id="QR" name="QR" value="{{ $product->QR }}">
                </div>
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </form>
        </div>
    </div>
@endsection