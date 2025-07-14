<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FollowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $follows = [];

        $userIds = range(1, 7);

        foreach ($userIds as $followerId) {
            // フォロー数
            $followCount = rand(1, 3);

            // 自分以外をランダムに選んでフォロー
            $followedIds = collect($userIds)
                ->reject(fn($id) => $id === $followerId) // 自分以外
                ->shuffle()
                ->take($followCount);

            foreach ($followedIds as $followedId) {
                $follows[] = [
                    'following_id' => $followerId,
                    'followed_id' => $followedId
                ];
            }
        }

        DB::table('follows')->insert($follows);
    }
}
