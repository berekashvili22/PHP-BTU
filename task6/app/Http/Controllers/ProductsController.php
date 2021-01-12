<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::all();
        return view('index', compact('products'));
    }

    public function create()
    {
        return view('create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        auth()->user()->products()->create([
            'title' => $data['title'],
            'description' => $data['description'],
        ]);

        return redirect('/');

    }

    public function edit(Products $product)
    {
        $this->authorize('update', $product);
        return view('edit', compact('product') );
    }

    public function update(Products $product)
    {
        $this->authorize('update', $product);
        
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $product->update($data);

        return redirect("/");
    }






}
