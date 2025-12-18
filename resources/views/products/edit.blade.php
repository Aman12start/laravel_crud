@extends('layout.app')

@section('main')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card mt-3 p-3"> 
                <h1>Product Edit : {{ $product->name }}</h1>
                <form action="/products/{{ $product->id }}/update" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group" >
                        <label for="" class="fs-2">Name</label>
                        <input type="text" name="name" value="{{ old('name' , $product->name) }}" class="form-control">
                       <!-- adding validation display  -->
                        @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name',) }}</span>
                        
                        @endif
                    </div>
                    <div class="form-group" >
                        <label for="" class="fs-2">Description</label>
                     <textarea name="description" class="form-control" rows="5" id="">{{ old('description',$product->description) }}</textarea>
                    </div>
                     @if ($errors->has('description'))
                        <span class="text-danger">{{ $errors->first('description') }}</span>
                        
                        @endif

                    <div class="form-group fs-2">
                        <label for="">Image</label>
                        <input type="file" name="image"  class="form-control fs-2">
                        @if ($errors->has('image'))
                           <span class="text-danger">{{ $errors->first('image') }}</span>
                           
                           @endif
                    </div>

                    <button type="submit" class="btn btn-dark fs-2">Update</button>
            </form>
        </div>
    </div>
 </div>
</div>
    
@endsection