<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

use App\Http\Requests\ProductRequest;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products= Product::paginate(5);
        return view("products.index",compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view("products.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)

    {
        Product::create($request->all());
        return redirect()->route('products.index')
        ->with('info','Le a bien été cree');

    }
 


    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view("products.edit",compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->all());
        return redirect()->route('products.index')
                            ->with('info','le produit a été modifier ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return back()->with('info','Le produit a bien été supprimé dans la base de donneés');

    }
}
