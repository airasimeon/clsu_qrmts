@extends('adminlte::page')

@section('title', 'Product List')

@section('content_header')
    <h1>Products</h1>
    <div class="card">
        <div class="card-header">
            {{ $product->product_name }}
        </div>
        <div class="card-body">
            <p><strong>Description:</strong> {{ $product->description }}</p>
            <p><strong>Category:</strong> {{ $product->product_category }}</p>
            <p><strong>QR:</strong> <img src="{{ asset('qrcodes/' . $product->id . '.png') }}" alt="QR code for {{ $product->name }}"></p>
        </div>
    </div>
@endsection