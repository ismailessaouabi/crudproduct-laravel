<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
     // Afficher tous les produits
     public function index()
     {
         $products = Product::all();
         return view('products.index', compact('products'));
     }
 
     // Afficher le formulaire de création
     public function create()
     {
         return view('products.create');
     }
 
     // Enregistrer un nouveau produit
     public function store(Request $request)
     {
         $request->validate([
             'name' => 'required',
             'price' => 'required|numeric|min:0',
             'stock' => 'required|integer|min:0',
         ]);
 
         Product::create($request->all());
         return redirect()->route('products.index')
             ->with('success', 'Produit créé avec succès.');
     }
 
     // Afficher un produit spécifique
     public function show(Product $product)
     {
         return view('products.show', compact('product'));
     }
 
     // Afficher le formulaire d'édition
     public function edit(Product $product)
     {
         return view('products.edit', compact('product'));
     }
 
     // Mettre à jour un produit
     public function update(Request $request, Product $product)
     {
         $request->validate([
             'name' => 'required',
             'price' => 'required|numeric|min:0',
             'stock' => 'required|integer|min:0',
         ]);
 
         $product->update($request->all());
         return redirect()->route('products.index')
             ->with('success', 'Produit mis à jour avec succès');
     }
 
     // Supprimer un produit
     public function destroy(Product $product)
     {
         $product->delete();
         return redirect()->route('products.index')
             ->with('success', 'Produit supprimé avec succès');
     }
}
