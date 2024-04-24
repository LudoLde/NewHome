<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;
use App\Http\Requests\HouseRequest;
use Illuminate\View\View;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $houses = House::all();

        return view('house.index', [
            'houses' => $houses
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
       return view('house.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HouseRequest $request)
    {
        
        $house = House::create($request->validated());
        return redirect()->route('house.index')->with('success', "Votre house a été enregistré !");
    }

    /**
     * Display the specified resource.
     */
    public function show(House $house)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(House $house): View
    {
        return view('house.edit', [
            'house' => $house
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HouseRequest $request, House $house)
    {
        if(!$house->id){
            return response(404);
        }
        $house->update($request->validated());
        return redirect()->route('house.index')->with('edit', "Votre House a été modifié !");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(House $house)
    {
        $house = House::find($house->id);

        if($house){
            $house->delete();
            return redirect()->route('house.index')->with('delete', "L'article a bien été supprimé !");
        }
        
    }
}
