<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create'); // Assurez-vous que cette vue existe
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'name' => 'required|string|max:200',
            'price' => 'required|integer',
            'image' => 'nullable|string|max:100',
        ]);

        // Création d'un nouveau produit
        $product = new Products;
        $product->name = $validatedData['name'];
        $product->price = $validatedData['price'];
        $product->image = $validatedData['image']; // Ici vous pouvez également gérer le téléchargement d'images
        $product->save();

        // Redirection après la sauvegarde
        return redirect()->route('products.index')->with('success', 'Produit ajouté avec succès.');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
