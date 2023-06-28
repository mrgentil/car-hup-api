<?php

namespace Database\Seeders;

use App\Models\Subscription;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subscription::insert([
            ['name' => 'Basic', 'duration' => '3 mois','price' => '50','advantage' => 'Publicité des vos services pendant 3 mois'],
            ['name' => 'Diamond', 'duration' => '6 mois','price' => '100','advantage' => 'Publicité des vos services pendant 6 mois'],
            ['name' => 'Gold', 'duration' => '1 année','price' => '150','advantage' => 'Publicité des vos services pendant une année'],
        ]);



    }
}
