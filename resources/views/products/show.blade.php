@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            {{ $product->product_name }}
        </div>
        <div class="card-body">
            <p><strong>Description:</strong> {{ $product->description }}</p>
            <p><strong>Category:</strong> {{ $product->product_category }}</p>
            <p><strong>QR:</strong> {{ $product->QR }}</p>
        </div>
    </div>
@endsection