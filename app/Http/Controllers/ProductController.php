<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    function index(){
       
        return view('products.index',
        ['products'=>Product::latest()->paginate(5) 
    ]);
    }

    function create(){
        return view('products.create');
    }

    function store(Request $req){

        // validate data 
        $req->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required | mimes:jpg,jpeg,png,gif | max:10000'
        ]);
        // dd($req->all());

        // upload image 
        $imageName = time().'.'.$req->image->extension();
        $req->image->move(public_path('products'), $imageName);

        // dd($imageName);
        $product = new Product;
        $product->image = $imageName;
        $product->name = $req->name; 
        $product->description = $req->description; 

        // add to databse 
        $product->save();
        return back()->withSuccess('Product Created Successfully !!!');

    }

    function edit($id){

        // dd($id);
        $product = Product::where('id',$id)->first();

        return view('products.edit',['product'=> $product]);
    }

    function update(Request $req, $id){
        // dd($req->all());

           // validate data 
        $req->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable | mimes:jpg,jpeg,png,gif | max:10000'
        ]);

        $product = Product::where('id',$id)->first();

        if(isset($req->image)){

            // upload image 
            $imageName = time().'.'.$req->image->extension();
            $req->image->move(public_path('products'), $imageName);
            $product->image = $imageName;
        }
        // dd($req->all());


        // dd($imageName);
       
        $product->name = $req->name; 
        $product->description = $req->description; 

        // add to databse 
        $product->save();
        return back()->withSuccess('Product Updated Successfully !!!');

    }

    function destroy($id){
        $product = Product::where('id',$id)->first();
        $product->delete();
        return back()->withSuccess('Product Deleted !!!');

    }

    function show($id){
        $product = Product::where('id',$id)->first();

        return view('products.show',['product'=>$product]);
    }

    
}
