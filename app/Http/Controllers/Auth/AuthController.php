<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class AuthController extends Controller
{
    // public function __construct()
    // {
    //     return Inertia::render('Auth/Login');
    // }
    public function index()
    {
        return Inertia::render('Auth/Login');
    }
    public function login()
    {
        if (!Auth::check()) {
            return Inertia::render('Auth/Login');
        }
    }
    public function dashboard()
    {
        return Inertia::render('Dashboard');
    }
    public function logout()
    {
        Auth::logout();
        return to_route('login');
    }
}
