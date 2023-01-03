<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request) 
    {
        $validator = Validator::make($request->all(), [
               'username'=> 'required|string',
               'password'=> 'required|min:6' 
        
        ]   );

        if ($validator->fails()) {
            return response()->json([
                'message'=> $validator->errors(),
            ], 401);
        }

        $credentials = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        $auth = Auth::attempt($credentials);

        if($auth) {
            Auth::user()->update([
                'remember_token' => bcrypt($request->username),
            ]);

            return response()->json([
                'message' => 'Login Berhasil',
                'username' => Auth::user()->username,
                'token' => Auth::user()->remember_token
            ]);
        } else {
            return response()->json([
                'message' => 'username atau password salah!'
            ], 401);
        }
    }

    public function logout(Request $request)
    {
        $token = $request->token;

        if (!empty($token)) {
            $user = User::where('remember_token', $token)->first();

            if ($user) {
                Auth::logout();

                $user->update([
                    'remember_token' => null
                ]);

                return response()->json([
                    'message' => 'logout berhasil!'
                ], 200);
            } else {
                return response()->json([
                    'message' => 'user tidak ada!'
                ]);
            }
        } else {
            return response()->json([
                'message' => 'token tidak boleh kosong!'
            ]);
        }

    }
}
