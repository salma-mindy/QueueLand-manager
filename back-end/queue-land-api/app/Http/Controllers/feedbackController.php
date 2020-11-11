<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rdv;
use App\Feedback;
use App\Http\Resources\feedbackResource;

class feedbackController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Rdv $rdv)
    {
        $feedback = Feedback::firstOrCreate(
            [
                'client_id' => auth()->user()->id,
                'rdv_id' => $rdv->id,
            ],
            [
                'note' => $request->note,
                'avis' => $request->avis,
            ]
        );
        return new feedbackResource($feedback);
    }
    
}
