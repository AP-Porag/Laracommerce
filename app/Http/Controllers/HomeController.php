<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
//        $user = Auth::user();
//        if ($user->hasRole('patient')) {
//            return view('frontend.my-account');
//            //return view('layouts.app');
//        } else {
//            return view('admin.index');
//        }
        return view('admin.index');
    }
}
