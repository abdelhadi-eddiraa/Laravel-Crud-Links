<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            
            'nom'=>'Man',
            'description'=>'just for man'
        ]);


        DB::table('categories')->insert([
           
            'nom'=>'Woman',
            'description'=>'just for Woman'
        ]);
    }
}
