<?php

namespace Database\Seeders;

use App\Models\kategori;
use App\Models\produk;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama'=>'admin',
            'email'=>'adm@ex.com',
            'password'=>bcrypt('admin'),
            'role'=>'admin'
        ]);
        User::create([
            'nama'=>'customer',
            'email'=>'customer@ex.com',
            'password'=>bcrypt('customer'),
            'role'=>'customer'
        ]);

        kategori::create([
            'nama'=>'Makanan'
        ]);
        kategori::create([
            'nama'=>'Minuman'
        ]);

        produk::create([
            'kategori_id'=>1,
            'nama'=>'Chitato',
            'harga'=>600000,
            'foto'=>'img/chitato.jpg'
        ]);
        produk::create([
            'kategori_id'=>2,
            'nama'=>'Milku',
            'harga'=>7000,
            'foto'=>'img/milku.jpg'
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
