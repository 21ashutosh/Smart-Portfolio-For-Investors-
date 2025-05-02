<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function register()
    {
        return view('register');
    }

    public function registerSubmit(Request $request)
    {
        // Simulate success (No database storage)
        return redirect()->route('dashboard')->with('success', 'User Registered Successfully (Simulated)');
    }

    public function login()
    {
        return view('login');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function marketTrends()
    {
        return view('market-trends');
    }

    public function portfolio()
    {
        return view('portfolio');
    }

    public function aiRecommendation()
    {
        return view('ai-recommendations');
    }
}
