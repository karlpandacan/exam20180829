@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Products</div>
                <div class="card-body">
                    @if (session('flash_message'))
                        <div class="alert alert-danger" role="alert">
                          {{ session('flash_message') }}
                        </div>
                    @endif
                    <table class="col-md-12" >
                        <thead>
                            <tr>
                                <th class="col-md-1">
                                    &nbsp;
                                </th>
                                <th class="col-md-2">
                                    Code
                                </th>
                                <th class="col-md-3">
                                    Name
                                </th>
                                <th class="col-md-3">
                                    Price
                                </th>
                                <th class="col-md-3">

                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            @if (!empty($products))
                                @foreach ($products as $product)
                                    <tr>
                                        <td>
                                            <div class="col-md-1">
                                                <form action="{{ action('ProductController@destroy', $product->id) }}" method="post">
                                                  @csrf
                                                  <input name="_method" type="hidden" value="DELETE">
                                                  <button class="btn btn-danger" type="submit">Delete</button>
                                                </form>
                                            </div>
                                            <div class="col-md-1">
                                                <a class="btn btn-success" href="{{ action('ProductController@edit', $product->id) }}">Edit</a>
                                            </div>
                                        </td>
                                        <td>{{ $product->code }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td><img src="{{ $product->image }}" style="max-height:100%; max-width:100%;"></td>
                                    </tr>
                                    <tr colspan="3">
                                        <td><br/></td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
