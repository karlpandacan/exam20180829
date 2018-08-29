@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit New Product</div>
                <div class="card-body">
                    @if (session('flash_message'))
                        <div class="alert alert-danger" role="alert">
                          {{ session('flash_message') }}
                        </div>
                    @endif
                    <form action='{{ action('ProductController@update', $product->id) }}' method='POST'  enctype='multipart/form-data'>
                    @csrf
                    <input name="_method" type="hidden" value="PUT">
                    <div class="form-group">
                        <label for="code">Code</label>
                        <input type="text" value="{{ $product->code }}" name="code" id="code" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" value="{{ $product->name }}" name="name" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" value="{{ $product->price }}" name="price" id="price" class="form-control" step="any">
                    </div>
                    <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <input type="number" value="{{ $product->quantity }}" name="quantity" id="quantity" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="size">Size</label>
                        <input type="text" value="{{ $product->size }}" name="size" id="size" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="upload_image">Image</label>
                        <input type="file" name="upload_image" id="upload_image">
                    </div>
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
