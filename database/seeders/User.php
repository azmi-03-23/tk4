<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 
        $users = User::factory()
                ->count(10)
                ->state(new Sequence(
                    ['level' => 'admin'],
                    ['level' => 'pembeli'],
                ))
                ->create();
        /*
        DB::table('items')->insert([
            ['nama' => 'sikat gigi',
            'jenis_barang' => 'alat kebersihan',
            'stok' => 9,
            'harga_beli' => 290,
            'harga_jual' => 300],
            ['nama' => 'sabun',
            'jenis_barang' => 'alat kebersihan',
            'stok' => 9,
            'harga_beli' => 890,
            'harga_jual' => 900],
            ['nama' => 'sampo',
            'jenis_barang' => 'alat kebersihan',
            'stok' => 9,
            'harga_beli' => 890,
            'harga_jual' => 1010],
            ['nama' => 'pasta gigi',
            'jenis_barang' => 'alat kebersihan',
            'stok' => 9,
            'harga_beli' => 390,
            'harga_jual' => 400],
        ]);
        DB::table('sales')->insert([
            'id_user' => 2,
            'id_barang' => 3,
            'qty' => 3,
            'harga_jual' => 1010,
            'total' => 3030,
            'status' => true
        ]);
        */
    }
}
