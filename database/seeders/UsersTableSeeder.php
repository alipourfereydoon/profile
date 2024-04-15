<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use illuminate\Support\str;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i <20 ; $i++) {
            DB::table('articles')->insert([
                'name'=>str::random(5),
                'email'=>str::random(5),
                'password'=>str::random(5),


            ]);
        }
    }
}
