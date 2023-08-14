<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RsvpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('rsvp')->insert([
            'name' => 'Julian DeLeon',
            'guestCount' => 2,
            'additional_guests' => 'Jazmin Ramirez',
            'address' => '',
            'greeting' => 'We are excited for the dream team to join us!'
        ]);
    }
}
