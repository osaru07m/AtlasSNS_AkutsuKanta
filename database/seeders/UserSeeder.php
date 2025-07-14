<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        DB::table('users')->insert([
            [
                'username' => 'テスト1',
                'email' => 'test_1@example.com',
                'password' => Hash::make('AtlasSNS1234')
            ],
            [
                'username' => 'テスト2',
                'email' => 'test_2@example.com',
                'password' => Hash::make('AtlasSNS1234')
            ],
            [
                'username' => 'テスト3',
                'email' => 'test_3@example.com',
                'password' => Hash::make('AtlasSNS1234')
            ],
            [
                'username' => 'テスト4',
                'email' => 'test_4@example.com',
                'password' => Hash::make('AtlasSNS1234')
            ],
            [
                'username' => 'テスト5',
                'email' => 'test_5@example.com',
                'password' => Hash::make('AtlasSNS1234')
            ],
        ]);
    }
}
