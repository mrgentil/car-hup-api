<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Mail\WelcomeEmail;
use App\Models\Role;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(15);

        return response()->json($users, 200);
    }



    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $user->load('roles','subscriptions'); // Chargement des relations de rôles et souscriptions

        return response()->json($user, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'phone' => 'nullable',
            'address' => 'nullable',
            'name' => 'nullable',
            'first_name' => 'nullable',
            'email' => 'nullable|email|unique:users,email,' . $user->id,
            'role_id' => 'nullable|exists:roles,id',
            'subscription_id' => 'nullable|exists:subscriptions,id',
            'avatar' => 'image|max:2048', // Validation pour les fichiers image (2 Mo maximum)
        ]);

        $data = $request->all();

        // Mise à jour du rôle
        $role = Role::findOrFail($request->input('role_id'));
        $user->roles()->sync([$role->id]);

        // Mise à jour du Subscription
        $subscription = Subscription::findOrFail($request->input('subscription_id'));
        $user->subscriptions()->sync([$subscription->id]);

        // Mise à jour de l'image de profil
        if ($request->hasFile('avatar')) {
            // Supprime l'ancienne image de profil si elle existe
            if ($user->avatar) {
                Storage::delete($user->avatar);
            }

            $data['avatar'] = $request->file('avatar')->store('avatar');
        }

        $user->update($data);
        return response()->json([
            "data" => [
                "error" => true,
                'status' => 200,
                'message' => 'User Updated Successfully',
            ]
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        return response()->json([
            "data" => [
                "error" => true,
                'status' => 200,
                'message' => 'User Deleted Successfully',
            ]
        ]);
    }
}
