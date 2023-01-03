<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Purchase;
use App\Models\User;
use Illuminate\Http\Request;

class SeatSelectionController extends Controller
{
    public function index(Request $request)
    {
        $movie_id = $request->movie_id;
        $time = $request->time;
        $token = $request->token;

        if (!empty($movie_id) && !empty($time) && !empty($token)){
            $user = User::where('remember_token', $token)->first();

            if ($user) {
                $purchase = Purchase::where([
                    ['movie_id', $movie_id],
                    ['time', $time]
                ])->with(['movie', 'ticket'])->get();

                return response()->json($purchase);
            } else {
                return response()->json([
                    'message' => 'anda tidak bisa akses ini!'
                ]);
            }

        } else {
            return response()->json([
                'message' => 'parameter wajib diisi'
            ]);
        }
    }
}
