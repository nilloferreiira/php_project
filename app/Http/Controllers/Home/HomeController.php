<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        if (auth()->check()) {
            $user = auth()->user();

            return  view('components.home', ['user' => $user]);
        }

        return redirect()->route('login');
    }
}
