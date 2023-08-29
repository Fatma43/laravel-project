<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=Product::get();
        return view('product/index',['products'=>$products]);
    }

    public function home()
    {
        $products=Product::get();
        return view('home',['products'=>$products]);
    }

    /**
     * Store a newly created resource in storage.
     */
    function store(Request $request)
    {
        // $validated=$request->validate([
        //     'product_name'=>'required',
        //     'product_price'=>'required',
        //     'product_availability'=>'required',
        //     'categry_id'=>'required',
        //     'user_id'=>'required',

        // ]);
         product::create($request->all());
         return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     */
    function show($id)
    {
        $product=Product::find($id);
        return view('product.show',compact('product'));
    }




    /**
     * Update the specified resource in storage.
     */
    function update($id)
    {
       $product=Product::find($id);
       return view('product/update',compact('product'));
    }

    function edit($id,Request $request)
    {
    $product=product::find($id);
    $product->update($request->all());
    return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        Product::where('id',$id)->delete();
        return redirect()->route('index');
    }

    function create()
    {
        return view('product/create');
    }
}
