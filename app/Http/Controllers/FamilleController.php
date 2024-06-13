<?php

namespace App\Http\Controllers;

use App\Models\Famille;
use Illuminate\Http\Request;

class FamilleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $familles = Famille::simplePaginate(4);
        return view('Backend.Familles.index', compact('familles'));
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
        Famille::create($request->all());
        
        return redirect()->route('BackFamille.index')->with('success','Famille added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Famille $famille)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Famille $famille)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Famille $famille)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $famille=Famille::findOrfail($id);
        $famille->delete();

        return redirect()->route('BackFamille.index')->with('success','Famille deleted successfully.');
    }
}
