<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;
use App\Http\Requests\HouseRequest;

class ApiController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(HouseRequest $request)
    {
       $house = House::create($request->validated());

       return response()->json('Création effectuée', 200);
    }

    /**
     * Display a list of resources.
     */
    public function show(House $house)
    {
        $houses = House::all();

        return response()->json($houses);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HouseRequest $request, House $house)
    {
        $house = House::find($house->id);
        $house->update($request->validated());

        return response()->json('Modification effectuée', 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(House $house)
    {
        $house = House::find($house->id);
        $house->delete();

        return response()->json('Suppression done', 200);
    }
}
