<?php

namespace App\Http\Controllers;

use App\Models\Famille;
use App\Models\SousFamille;
use Illuminate\Http\Request;

class SousFamilleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sousfamilles = SousFamille::with('familles')->simplePaginate(4);
        $familles = Famille::get();
        return view('Backend.Sousfamilles.index', compact('familles','sousfamilles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        SousFamille::create($request->all());
        
        return redirect()->route('BackSousFamille.index')->with('success','Sous Famille added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(SousFamille $sousFamille)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SousFamille $sousFamille)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SousFamille $sousFamille)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sousfamille=SousFamille::findOrfail($id);
        $sousfamille->delete();

        return redirect()->route('BackSousFamille.index')->with('success','Sous Famille deleted successfully.');
    }
}
