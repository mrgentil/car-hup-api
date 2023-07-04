<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

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
        //dd(auth()->user()->role->name);
        setlocale(LC_TIME, 'fr_FR');
        $user = auth()->user();
        $inscriptionDate = Carbon::parse($user->created_at);
        $month = $inscriptionDate->format('F');
        $formattedDate = $inscriptionDate->format('Y');

        return view('home', compact('formattedDate', 'month'));
    }
}
