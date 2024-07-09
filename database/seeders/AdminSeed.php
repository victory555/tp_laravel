<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insertOrIgnore([
            'name' => 'Admin',
            'email' => 'tpsalaire_admin@gmail.com',
            'password' => Hash::make('azerty')
        ]);
    }
}
