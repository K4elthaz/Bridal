<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WebsiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $website = array(
			array(
                'address' => '941 Rizal Blvd. Pooc Sta.Rosa Laguna',
                'contact_number' => '+63 917 336 4743',
                'email' => 'shechellebridalshop@gmail.com',
                'facebook' => 'https://www.facebook.com/shechelle13?mibextid=ZbWKwL',
                'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3866.1742778872876!2d121.10788230000001!3d14.301304599999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d84b636a0789%3A0xfe82ea53729efc05!2s931%20Rizal%20Blvd%2C%20Santa%20Rosa%2C%20Laguna!5e0!3m2!1sen!2sph!4v1702467096380!5m2!1sen!2sph',
            ),
		);

		DB::table('tbl_website')->insert($website);
    }
}
