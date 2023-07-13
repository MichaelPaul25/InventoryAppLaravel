<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $email = 'simbolonmichael@gmail.com';
        $findAdmin = User::where('email', $email)->first();
        if ($findAdmin) {
            $findAdmin->delete();
        }
        $passHash = Hash::make('Batammas123');
        User::create([
            'name' => 'Admin Batammas',
            'email' => $email,
            'password' => $passHash,
            'role_type' => 3, //3 As admin
            'flag_active' => true,
            'email_verified_at' => now(),
        ]);
    }
}
