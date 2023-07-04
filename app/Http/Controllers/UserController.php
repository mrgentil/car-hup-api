<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

class UserController extends Controller
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

    public function index()
    {
        setlocale(LC_TIME, 'fr_FR');
        $user = auth()->user();
        $inscriptionDate = Carbon::parse($user->created_at);
        $month = $inscriptionDate->format('F');
        $formattedDate = $inscriptionDate->format('Y');
        $users =  User::paginate(15);
        return view('users.index',compact('users','month','formattedDate'));
    }

    public function updateStatus(User $user): \Illuminate\Http\RedirectResponse
    {
        $user->is_active = request('status');
        $user->save();
        return redirect()->back();

    }

    public function search(Request $request): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        setlocale(LC_TIME, 'fr_FR');
        $user = auth()->user();
        $inscriptionDate = Carbon::parse($user->created_at);
        $month = $inscriptionDate->format('F');
        $formattedDate = $inscriptionDate->format('Y');
        $name = $request->input('name');
        $results = User::where('name', 'LIKE', "%$name%")->get();

        return view('search', compact('results','month','formattedDate'));
    }

}
