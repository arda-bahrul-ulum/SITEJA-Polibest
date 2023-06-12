<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Information\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->nik = '1337';
        $user->email = 'admin@admin.com';
        $user->nama_lengkap = 'At Tafani Fillah';
        $user->username = 'Admin Web';
        $user->password = Hash::make('1337');
        $user->level = 'admin'; // Set level to 'admin'
        $user->save();
    }
}
