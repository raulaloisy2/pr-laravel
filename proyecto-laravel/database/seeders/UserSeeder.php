<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $user = new User();

        $user->name="juan";
        $user->email="juan@gmail.com";
        $user->password="pass";

        $user->save();

    }
}
