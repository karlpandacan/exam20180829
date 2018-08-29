<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products.index', ['products' => Product::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $count = Product::where('code', $request->code)->count();
        if ($count == 0) {
            $product = new Product();
            $product->code = $request->code;
            $product->price = $request->price;
            $product->name = $request->name;
            $product->quantity = $request->quantity;
            $product->size = $request->size;
            $path = config('file.image.root_path');
            if ($request->hasFile('upload_image')) {
                if (!file_exists($path)) {
                     mkdir($path, 0775, true);
                }
                $file = $request->file('upload_image');
                $filename = $path . date('YmdHisu') . $file->getClientOriginalName();
                move_uploaded_file($file, $filename);
                $product->image = $filename;
            }
            $request->session()->flash('flash_message', 'Product Successfully Added!');
            $product->save();
        } else {
            $request->session()->flash('flash_message', 'Code Already in Use!');
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.edit', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $count = Product::where('code', $request->code)->where('id', '!=', $product->id)->count();
        if ($count == 0) {
           $path = config('file.image.root_path');
           if ($request->hasFile('upload_image')) {
               $file = $request->file('upload_image');
               $filename = $path . date('YmdHisu') . $file->getClientOriginalName();
               move_uploaded_file($file, $filename);
               $product->image = $filename;
           }
            $product->update($request->all());
        } else {
            $request->session()->flash('flash_message', 'Code Already in Use!');
        }
        return view('products.edit', ['product' => $product]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->back()->with('flash_message', 'Record Deleted');
    }

    public function exam3()
    {
        return view('products.exam3', ['products' => Product::all()]);
    }
}
