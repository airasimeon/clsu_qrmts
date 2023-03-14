@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add Product</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('products.store') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('product_name') ? ' has-error' : '' }}">
                                <label for="product_name" class="col-md-4 control-label">Product Name</label>

                                <div class="col-md-6">
                                    <input id="product_name" type="text" class="form-control" name="product_name" value="{{ old('product_name') }}" required autofocus>

                                    @if ($errors->has('product_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('product_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                <label for="description" class="col-md-4 control-label">Description</label>

                                <div class="col-md-6">
                                    <textarea id="description" class="form-control" name="description" required>{{ old('description') }}</textarea>

                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('product_category') ? ' has-error' : '' }}">
                                <label for="product_category" class="col-md-4 control-label">Product Category</label>

                                <div class="col-md-6">
                                    <input id="product_category" type="text" class="form-control" name="product_category" value="{{ old('product_category') }}" required>

                                    @if ($errors->has('product_category'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('product_category') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Add Product
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection