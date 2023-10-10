<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GendersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table("genders")->insert([
            ["name"=>"Men"],
            ["name"=>"Women"],
            ["name"=>"Unisex"]
        ]);
    }
}
