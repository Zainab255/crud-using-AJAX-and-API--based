<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $detail['product_detail']=Products::all();
        return view('crud.products',$detail);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function add()
    {
        return view('crud.add_product');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $detail= new Products;

        $detail->product_name=$request->product_name;

        $detail->price=$request->price;

        $detail->description=$request->description;

        $detail->save();

        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Products $products)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $detail['product_detail']=Products::find($id);
        return view('crud.edit_product',$detail);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $id=$request->id;

        $detail=Products::find($id);

        $detail->product_name=$request->product_name;

        $detail->price=$request->price;

        $detail->description=$request->description;

        $detail->save();

        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $detail=Products::find($id);
        $detail->delete();
        return redirect()->route('index');

    }
}
