<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clients;

class clientAuthController extends Controller
{
    /**
     * Register a new client
     * 
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request){
        $client = Clients::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'phone' => $request->phone,
            'commune' => $request->commune,
            'password' => bcrypt($request->password),
        ]);

        $token = auth()->login($client);

        return $this->respondWithToken($token);
    }

    /**
     * Get a JWT via given credentials.
     * 
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request){

        $credentials = $request->only(['phone', 'password']);

        if (!$token = auth()->attempt($credentials)) {
            return response()->json(
                [
                    'error' => 'Unauthorized'
                ], 401);
        }
        return $this->respondWithToken($token);
    }

    /**
     * Get the token array structure.
     * 
     * @param string $token
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token){
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60000
        ]);
    }

    /**
     * get currente user
     * 
     * @param Request $request
     */
    public function getAuthUser(Request $request){
        return response()->json(auth()->user());
    }

    /**
     * logout user
     */
    public function logout(){
        auth()->logout();
        return response()->json(['message' => 'Déconnexion réussie!'], 200);
    }
}
