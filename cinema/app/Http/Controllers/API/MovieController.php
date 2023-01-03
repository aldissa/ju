<?php

namespace App\Http\Controllers\API;

use App\Models\Movie;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function showMovies(Request $request)
    {
        $token = $request->token;

        if (!empty($token)) {
            $user = User::where('remember_token', $token)->first();
            
            if ($user) {
                $movies = Movie::where([])->get();

                return response()->json($movies);
            } else {
                return response()->json([
                    'message' => 'anda tidak bisa akses ini!'
                ]);
            }

            $movies = Movie::with('genre')->get();
           
            return response()->json($movies, 200);
        } else {
            return response()->json([
                'message' => 'token tidak boleh kosong!'
            ]);
        }
    }
}
