<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use App\Models\User;
use Illuminate\Http\Request;

class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            "title" => "Liste des entreprises",
            "liste_entreprises" => Entreprise::all()
        ];
        return view("entreprises.index")->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            "users" => User::all()
        ];
        return view('entreprises.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'pays' => 'required|string|max:255',
            'ville' => 'required|string|max:255',
            'quartier' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
        ]);


        Entreprise::create([
            'nom' => $request->input('nom'),
            'pays' => $request->input('pays'),
            'ville' => $request->input('ville'),
            'quartier' => $request -> input('quartier'),
            'adresse' => $request->input('adresse'),
            'user_id' => $request->input('user_id')
        ]);

        return redirect()->route('entreprises.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Entreprise $entreprise)
    {
        return view('entreprises.show', compact('entreprise'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Entreprise $entreprise)
    {
        $users = User::all();
        return view('entreprises.edit', compact('entreprise','users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Entreprise $entreprise)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'pays' => 'required|string|max:255',
            'ville' => 'required|string|max:255',
            'quartier' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
        ]);


        $entreprise->update([
            'nom' => $request->input('nom'),
            'pays' => $request->input('pays'),
            'ville' => $request->input('ville'),
            'quartier' => $request -> input('quartier'),
            'adresse' => $request->input('adresse'),
            'user_id' => $request->input('user_id')
        ]);

        return redirect()->route('entreprises.index')->with('ok');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Entreprise $entreprise)
    {
        $entreprise->delete();
        return redirect()->route("entreprises.index");
    }
}
