<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::where('name', 'Super Admin')->first();
        $subscription = Subscription::where('name', 'Gold')->first();
        $user = User::create([
            'name' => 'Super Admin',
            'first_name' => 'Super Admin',
            'address' => 'Chez Biso',
            'subscription_id' => $subscription->id,
            'phone' => '+243812380589',
            'email' => 'root@gmail.com',
            'password' => Hash::make('root'),
            'role_id' => $role->id,

        ]);


        $user->roles()->attach($role);
        $user->subscriptions()->attach($subscription);
    }
}
