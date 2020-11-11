<?php

namespace App\Http\Controllers;

use App\Communes;
use App\Http\Resources\communeResource;
use Illuminate\Http\Request;

class communeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return communeResource::collection(Communes::paginate(20));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $commune = Communes::create([
            'nom_commune' => $request->nom_commune,
            'lng' => $request->lng,
            'lat' => $request->lat,
        ]);

        return new communeResource($commune);
    }

    /**
     * Display the specified resource.
     *
     * @param  Communes  $commune
     * @return \Illuminate\Http\Response
     */
    public function show(Communes $commune)
    {
        return new communeResource($commune);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Communes  $commune
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Communes $commune)
    {
        $commune->update($request->only([
            'nom_commune', 
            'lng', 
            'lat', 
            ])
        );

        return new communeResource($commune);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Communes  $commune
     * @return \Illuminate\Http\Response
     */
    public function destroy(Communes $commune)
    {
        $commune->delete();

        return response()->json(null, 204);
    }
}
