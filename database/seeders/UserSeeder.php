<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
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
        $users = [];

        $icons = [
            'icon1.png',
            'icon2.png',
            'icon3.png',
            'icon4.png',
            'icon5.png',
            'icon6.png',
            'icon7.png',
        ];

        for ($i=1; $i < 8; $i++) {
            $users[] = [
                'username' => "テスト{$i}",
                'email' => "test_{$i}@atlas.jp",
                'password' => Hash::make('AtlasSNS1234'),
                'icon_image' => Arr::random($icons)
            ];
        }

        DB::table('users')->insert($users);
    }
}
