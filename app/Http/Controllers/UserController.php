<?php

namespace App\Http\Controllers;

use App\Mail\AccountActivated;
use App\Mail\AccountDeactivated;
use App\Mail\UserSuspendedMail;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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

        $users = User::paginate(15);
        return view('users.index', compact('users', ));
    }

    public function updateStatus(User $user): \Illuminate\Http\RedirectResponse
    {
        $user->is_active = !$user->is_active;
        $user->save();

        // Envoyer un email de notification
        if ($user->is_active) {
            Mail::to($user->email)->send(new AccountActivated($user));
        } else {
            Mail::to($user->email)->send(new AccountDeactivated($user));
        }

        Alert::success('success', 'Le compte de l\'utilisateur a été mis à jour.');
        return redirect()->back();
    }

    public function search(Request $request): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {

        $name = $request->input('name');
        $results = User::where('name', 'LIKE', "%$name%")->get();

        return view('search', compact('results'));
    }

}
