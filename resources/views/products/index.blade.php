@extends('adminlte::page')

@section('title', 'Products')

@section('content_header')
    <h1>Products</h1>
@stop

@section('content')
	@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>QR</th>
        <th>Product Name</th>
        <th>Description</th>
        <th>Product Category</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($products as $product)
    <tr>
        <td>{{ $product->id }}</td>
        <td><img src="{{ asset('qrcodes/' . $product->id . '.png') }}" alt="QR code for {{ $product->name }}"></td>
        <td>{{ $product->product_name }}</td>
        <td>{{ $product->description }}</td>
        <td>{{ $product->product_category }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

<a class="btn btn-success" href="{{ route('products.create') }}">Create New Product</a>

							</tbody>
						</table>
					</div>
				</div>
			</div>
    </div>
@stop

@section('js')
	<script src="{{asset('js/render_datatables.js')}}" charset="utf-8"></script>
@endsection
