<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subscriptions = Subscription::paginate(15);

        return response()->json($subscriptions, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'duration' => 'required',
            'price' => 'required',
            'advantage' => 'required',
        ]);

        $data = $request->all();


        $subscription = Subscription::create($data);
        $token =  $subscription->createToken($subscription->name . '_Token')->plainTextToken;
        return response()->json([
            'status' => 200,
            'name' => $subscription->name,
            'token' => $token,
            'message' => 'SUbscription Successfully'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Subscription $subscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subscription $subscription)
    {
        $request->validate([
            'name' => 'required',
            'duration' => 'required',
            'price' => 'required',
            'advantage' => 'required',
        ]);

        $data = $request->all();

        $subscription->update($data);
        return response()->json([
            "data" => [
                "error" => true,
                'status' => 200,
                'message' => 'Subscription Updated Successfully',
            ]
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subscription $subscription)
    {

    }
}
