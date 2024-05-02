<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = array(
			array(
                'full_name' => 'System Administrator',
                'email' => 'admin@test.com',
                'password' => Hash::make('password'),
                'classification_id' => 1,
                'status' => 1,
                'email_verified_at' => Carbon::now('Asia/Manila')
            ),
		);

		DB::table('tbl_users')->insert($users);
    }
}
