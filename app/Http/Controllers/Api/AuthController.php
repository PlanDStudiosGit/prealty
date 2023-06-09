<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string',
                'email' => 'required|string|email|unique:users',
                'password' => 'required|string|min:6',
                'investment' => 'required|numeric'
            ]);
    
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'investment' => $request->investment,
            ]);
    
            $response = [
                'success' => true,
                'access_token' => $user->createToken('auth_token')->plainTextToken,
                'name' => $user->name,
                'email' => $user->email,
                'password' => $request->password,
                'investment' => $user->investment,
                'message' => 'User registered successfully'
            ];
    
            return response()->json($response, 201);
        } catch (\Illuminate\Validation\ValidationException $e) {
            $errors = $e->validator->errors()->all();
                $response = [
                    'success' => false,
                    'error' => $errors
                ];

            return response()->json($response, 422);
        }
    }

    

    public function login(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ]);
    
        // Check if validation fails
        if ($validator->fails()) {
            $response = [
                'success' => false,
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ];
            return response()->json($response, 422); // 422 Unprocessable Entity
        }
    
        $email = $request->email;
        $password = $request->password;
    
        // Attempt authentication with both email and email fields
        if (Auth::attempt(['email' => $email, 'password' => $password]) || Auth::attempt(['email' => $email, 'password' => $password])) {
            $user = Auth::user();
            $token = $user->createToken('auth_token')->plainTextToken;
    
            $response = [
                'success' => true,
                'token' => $token,
                'user' => $user,  
                'message' => 'User logged in successfully',
            ];
            return response()->json($response, 200);
        } else {
            $response = [
                'success' => false, 
                'message' => 'invalid user name or password',
            ];
            return response()->json($response, 400); // 400 Bad Request
        }
    }
    
}