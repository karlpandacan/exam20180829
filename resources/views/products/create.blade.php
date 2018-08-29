@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add New Product</div>
                <div class="card-body">
                    @if (session('flash_message'))
                        <div class="alert alert-danger" role="alert">
                          {{ session('flash_message') }}
                        </div>
                    @endif
                    <form method='POST' action='{{ route('products.store') }}' enctype='multipart/form-data'>
                    @csrf
                    <div class="form-group">
                        <label for="code">Code</label>
                        <input type="text" value="" name="code" id="code" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" value="" name="name" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" value="" name="price" id="price" class="form-control" step="any">
                    </div>
                    <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <input type="number" value="" name="quantity" id="quantity" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="size">Size</label>
                        <input type="text" value="" name="size" id="size" class="form-control">
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
