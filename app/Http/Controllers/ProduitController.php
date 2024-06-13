<?php

namespace App\Http\Controllers;

use App\Models\Marque;
use App\Models\Produit;
use App\Models\SousFamille;
use App\Models\Unite;
use Illuminate\Http\Request;


class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produits = Produit::all();
        return view('Backend.Produits.index',compact("produits"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sousfamilles = SousFamille::all();
        $marques = Marque::all();
        $unites = Unite::all();
        return view('Backend.Produits.create',compact("sousfamilles","marques","unites"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Produit::create($request->all());
        return redirect()->route('BackProduit.index')->with('success','Produit added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $produit = Produit::findOrFail($id);
        $items = Produit::all();
        return view('Frontend.detailProduit', compact('produit','items'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produit = Produit::findOrFail($id);
        $sousfamilles = SousFamille::all();
        $marques = Marque::all();
        $unites = Unite::all();
        return view('Backend.Produits.edit',compact("produit","sousfamilles","marques","unites"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $produit = Produit::findOrFail($id);
        $produit->update($request->all());
        return redirect()->route('BackProduit.index')->with('success','Produit updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produit=Produit::findOrfail($id);
        $produit->delete();
        return redirect()->route('BackProduit.index')->with('success','Produit deleted successfully.');
    }

    public function indexlist()
    {
        $produits = Produit::paginate(12);
        return view('Frontend.listProduit',compact('produits'));
    }
}
