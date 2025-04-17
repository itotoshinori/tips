<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => '佐藤剛',
                'kana' =>'サトウツヨシ',
                'email'     => 'test@test.com',
                'password'  => bcrypt('star2323'),
                'permision'=> 1,
                'photo_url'=> 'https://sibu.info-proffer.com/storage/images/yW1YTpnivFdQ5kmAua3CY0izLCSiDLlOWGUGWO8H.jpg',
            ],
            [
                'name' => '高橋勇作',
                'kana' =>'タカハシユウサク',
                'email'     => 'test2@test.com',
                'password'  => bcrypt('password'),
                'permision'=> 2,
                'photo_url'=> 'https://sibu.info-proffer.com/storage/images/KdzcT7BSW8BwZHLvhXNCEIqAvgtisk24ppK18Ac5.png',
            ],
            [
                'name' => '山田智',
                'kana' => 'ヤマダサトシ',
                'email'     => 'test3@test.com',
                'password'  => bcrypt('password'),
                'permision'=> 2,
                'photo_url'=> 'https://sibu.info-proffer.com/storage/images/zLdpijzmsvTnHqc6diorFbN5b9LZVI7z0FIoLhix.png',
            ],
            [
                'name' => '高谷沙也加',
                'kana' => 'タカヤサヤカ',
                'email'     => 'test4@test.com',
                'password'  => bcrypt('password'),
                'permision'=> 2,
                'photo_url'=> 'https://sibu.info-proffer.com/storage/images/kJErRdcnfeFTzoxYaQeNjQpRqD6Z410OjRQfz9wS.png',
            ],
            [
                'name' => '諸積登子',
                'kana' => 'モロズミノリコ',
                'email'     => 'test5@test.com',
                'password'  => bcrypt('password'),
                'permision'=> 2,
                'photo_url'=> 'https://sibu.info-proffer.com/storage/images/JYWXGM5rSU1l4F2Wd0IdxNsARuGvoiJoS73ZtoJB.png',
            ],
        ]);
    }
}
