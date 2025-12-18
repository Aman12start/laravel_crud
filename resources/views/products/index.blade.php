@extends('layout.app')

@section('main')


    <!-- button -->
    <div class="container">
        <div class="text-right">
            <a href="/products/create" class="btn btn-dark fs-2">New Products</a>
        </div>
    </div>
<div class="col-sm-9 mt-2 fs-2">
    <table class="table table-hover ">
        <thead>
            <tr>
                <th>S.no</th>
                <th>Name</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            
            <tr>
                <td>{{$loop->index +1}}</td>
                <td><a href="products/{{ $product->id }}/show" class="text-dark">{{$product->name}}</a></td>
                <td>
                    <img src="products/{{ $product->image }}" class="rounded-circle" width="30px" height="30px">
                </td>
                <td>
                    <a href="products/{{ $product->id }}/edit" class="btn btn-dark btn-small">Edit</a>
                    <!-- <a href="products/{{ $product->id }}/delete" class="btn btn-danger btn-small">Delete</a> -->
                    <!-- <a href="products/{{ $product->id }}/delete" class="btn btn-danger btn-small">Delete</a> -->
                    <form action="products/{{ $product->id }}/delete" class="d-inline" method="POST">
                        @csrf
                        @method('Delete')

                        <button class="submit" class="btn btn-danger btn-small">Delete</button>

                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
    
    {{ $products->links() }}
    </div>

@endsection