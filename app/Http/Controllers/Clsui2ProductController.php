<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clsui2Product;

class Clsui2ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->clsui2_product->all();
        return view('products.index', compact('products'));
    }
    
    public function create()
    {
        return view('products.create');
    }
    
    public function store(Request $request)
    {
        $this->clsui2_product->create($request->all());
        return redirect()->route('products.index')->with('success','Product created successfully!');
    }
    
    public function show($id)
    {
        $product = $this->clsui2_product->find($id);
        return view('products.show',compact('product'));
    }
    
    public function edit($id)
    {
        $product = $this->clsui2_product->find($id);
        return view('products.edit',compact('product'));
    }
    
    public function update(Request $request, $id)
    {
        $this->clsui2_product->find($id)->update($request->all());
        return redirect()->route('products.index')->with('success','Product updated successfully!');
    }
    
    public function destroy($id)
    {
        $this->clsui2_product->find($id)->delete();
        return redirect()->route('products.index')->with('success','Product deleted successfully!');
    }
    public function __construct(Clsui2Product $clsui2_product)
{
    $this->clsui2_product = $clsui2_product;
}
}
