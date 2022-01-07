<?php

namespace App\Http\Controllers;

use App\Http\Resources\Pokemon as ResourcesPokemon;
use App\Models\Pokemon;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new ResourcesPokemon(Pokemon::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'image' => 'required|file|mimes:png,jpg',
        ]);

        Storage::disk('public')->put('pokemon', $request->file());

        $store = new Pokemon([
            'name' => $request->input('name'),
            'image' => $request->file('image')->hashName(),
        ]);

        $store->save();

        return redirect('/pokemon');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function show(Pokemon $pokemon)
    {
        return new ResourcesPokemon($pokemon);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pokemon $pokemon)
    {
        $request->validate([
            'name' => 'required|string',
            'image' => 'required|file|mimes:png,jpg',
        ]);

        Storage::disk('public')->delete('pokemon/' . $pokemon->image);
        Storage::disk('public')->put('pokemon', $request->file());

        $pokemon->name = $request->input('name');
        $pokemon->image = $request->file('image')->hashName();
        return redirect('/pokemon');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pokemon $pokemon)
    {
        Storage::disk('public')->delete('pokemon/' . $pokemon->image);
        $pokemon->delete();
        return redirect('/pokemon');
    }
}
