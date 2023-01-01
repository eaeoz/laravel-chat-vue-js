<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChatRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chat_rooms')->insert([
            'name' => 'General'
        ]);
        DB::table('chat_rooms')->insert([
            'name' => 'Technology'
        ]);
        DB::table('chat_rooms')->insert([
            'name' => 'Linux and Open Source'
        ]);
        DB::table('chat_rooms')->insert([
            'name' => 'Phones, Tablets, and other Handheld Devices'
        ]);
        DB::table('chat_rooms')->insert([
            'name' => 'General Electricals'
        ]);
        DB::table('chat_rooms')->insert([
            'name' => 'Computer Safety and Cyber Security'
        ]);
        DB::table('chat_rooms')->insert([
            'name' => 'Viruses, Spyware and Malware'
        ]);
        DB::table('chat_rooms')->insert([
            'name' => 'Careers and Education'
        ]);
        DB::table('chat_rooms')->insert([
            'name' => 'Communications | E-Mail, Messaging & Social Media'
        ]);
        DB::table('chat_rooms')->insert([
            'name' => 'Hardware Repairs and Troubleshooting'
        ]);
        DB::table('chat_rooms')->insert([
            'name' => 'System Upgrades'
        ]);
        DB::table('chat_rooms')->insert([
            'name' => 'Web Programming'
        ]);
        DB::table('chat_rooms')->insert([
            'name' => 'Computer Networking and Internet Hardware'
        ]);
        DB::table('chat_rooms')->insert([
            'name' => 'Classifieds: Buy | Sell | Trade'
        ]);
        DB::table('chat_rooms')->insert([
            'name' => 'System Upgrades'
        ]);
        DB::table('chat_rooms')->insert([
            'name' => '1s and 0s | Programming Languages'
        ]);
        DB::table('chat_rooms')->insert([
            'name' => 'LifeStyle'
        ]);
        DB::table('chat_rooms')->insert([
            'name' => 'Off Topic Discussion'
        ]);
    }
}
