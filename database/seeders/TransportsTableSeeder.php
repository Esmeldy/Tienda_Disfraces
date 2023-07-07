<?php

namespace Database\Seeders;

use App\Models\Transport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class TransportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $transport1 = new Transport();
        $transport1->name = 'SEUR';
        $transport1->address = 'calle de la luciérnaga 19, Madrid';
        $transport1->email = 'info@seur.es';
        $transport1->phone = '913632523';
        $transport1->save();
    }
}
