<?php

namespace App\Http\Controllers;

use App\Http\Resources\rdvResource;
use App\Rdv;
use Illuminate\Http\Request;

class rdvController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api')->except(['index', 'show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return rdvResource::collection(Rdv::with('feedback')->paginate(2));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rdv = Rdv::create([
            'client_id' => auth()->user()->id,
            'commune' => $request->commune,
            'agence' => $request->agence,
            'date_rdv' => $request->date_rdv,
            'periode' => $request->periode,
            'description' => $request->description,
            'numero_ticket' => $request->numero_ticket,
        ]);

        return new rdvResource($rdv);
    }

    /**
     * Display the specified resource.
     *
     * @param  Rdv $rdv
     * @return \Illuminate\Http\Response
     */
    public function show(Rdv $rdv)
    {
        return new rdvResource($rdv);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Rdv  $rdv
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rdv $rdv)
    {
        // vérifier si l'utilisateur actuellement authentifié est le propriétaire du rdv
        if($request->user()->id !== $rdv->client_id){
            return response()->json([
                'error' => 'Vous ne pouvez éditer que vos propres rendez-vous.'
            ], 403);
        }
        $rdv->update($request->only([
                'commune', 
                'agence', 
                'date_rdv', 
                'periode', 
                'description'
            ])
        );

        return new rdvResource($rdv);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Rdv $rdv
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rdv $rdv)
    {
        $rdv->delete();

        return response()->json(null, 204);
    }
}
