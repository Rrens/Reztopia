<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Outlets extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('outlets')->insert([
            [
                'id_user' => 1,
                'name' => 'Primarasa',
                'slug' => 'enak',
                'phone' => '08123818883',
                'address' => 'surabaya',
                'created_by' => 0,
            ],
            [
                'id_user' => 2,
                'name' => 'Rasajawa',
                'slug' => 'enak',
                'phone' => '08123818883',
                'address' => 'surabaya',
                'created_by' => 0,
            ],
        ]);
    }
}
