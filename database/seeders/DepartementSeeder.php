<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DepartementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0;$i<50;$i++){
            DB::table('tb_departement')->insert([
                'nom' => Str::random(10),
                'image' => Str::random(10).'.png'
            ]);
        }

    }
}
