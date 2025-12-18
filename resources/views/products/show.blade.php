@extends('layout.app')

@section('main')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8 mt-4">
            <div class="card p-4">
                <p class="fs-2">Name : <b>{{ $product->name }}</b></p>
                <p  class="fs-2">Description : <b>{{ $product->description }}</b></p>
                <img src="/products/{{ $product->image }}" class="rounded" width="80%" alt="">
            </div>
        </div>
    </div>
</div>

@endsection