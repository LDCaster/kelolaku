<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed Kategori Game
        DB::table('kategori_game')->insert([
            ['nama_kategori' => 'Blox Fruit', 'deskripsi' => 'Game Blox Fruit', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kategori' => 'Grow a Garden', 'deskripsi' => 'Game Grow a Garden', 'created_at' => now(), 'updated_at' => now()],
        ]);

        // Seed Akun Roblox
        DB::table('akun_roblox')->insert([
            'nama_akun' => 'Player123',
            'email' => 'player123@example.com',
            'password_hash' => Hash::make('secret123'),
            'catatan' => 'Akun utama',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seed Item Game
        DB::table('item_game')->insert([
            'kategori_game_id' => 1, // Blox Fruit
            'nama_item' => 'Light Fruit',
            'tipe_item' => 'Buah',
            'deskripsi' => 'Buah Light',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
