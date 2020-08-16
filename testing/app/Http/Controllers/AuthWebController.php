<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AuthWebController extends Controller
{
    public function login(Request $request)
    {
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password, 'id_role' => 4])) {
            return redirect()->route('dashboard-radio');
        } elseif (Auth::attempt(['username' => $request->username, 'password' => $request->password, 'id_role' => 3])) {
            return redirect()->route('dashboard');
        } elseif (Auth::attempt(['username' => $request->username, 'password' => $request->password, 'id_role' => 2])) {
            return redirect()->route('dashboard-validator');
        } elseif (Auth::attempt(['username' => $request->username, 'password' => $request->password, 'id_role' => 1])) {
            return redirect()->route('dashboard-admin');
        } else {
            return redirect('/');
        }
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors()->toJson());
        }

        $user = User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
        ]);

        $token = JWTAuth::fromUser($user);

        return redirect()->route('dashboard')->cookie('token', $token)->cookie('user', $user);
    }

    public function getAuthenticatedUser()
    {
        try {

            if (!$user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['user_not_found'], 404);
            }
        } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {

            return redirect()->back()->withError(['token_expired' => $e->getStatusCode()]);
        } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {

            return redirect()->back()->withError(['token_invalid' => $e->getStatusCode()]);
        } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {

            return redirect()->back()->withError(['token_absent' => $e->getStatusCode()]);
        }

        return redirect()->route('dashboard')->cookie('user', $user);
    }

    public function logout()
    {
        // Cookie::queue(Cookie::forget('token'));
        // return redirect()->route('login');
        Auth::logout();
        return redirect()->route('login');
    }
}
