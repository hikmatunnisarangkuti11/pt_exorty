<?php

namespace Database\Seeders;

use App\Models\DaftarMakananMinuman;
use Illuminate\Database\Seeder;

class DaftarMakananMinumanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $makanan = new DaftarMakananMinuman();
        $makanan->fill([
            'nama' => 'mie ayam',
            'harga' => 15000
        ]);
        $makanan->save();
        $makanan = new DaftarMakananMinuman();
        $makanan->fill([
            'nama' => 'bakso',
            'harga' => 20000
        ]);
        $makanan->save();
        $makanan = new DaftarMakananMinuman();
        $makanan->fill([
            'nama' => 'soto',
            'harga' => 12000
        ]);
        $makanan->save();
    }
}
