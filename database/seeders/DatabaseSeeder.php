<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        for($i=0; $i<10; $i++){
            DB::table('mobiles')->insert([
                'name' => Str::random(5),
                'manufacturer' => Str::random(8),
                'user_id' => random_int(9, 11),
                'created_at' => Carbon::now()
            ]);
        }

    }
}
