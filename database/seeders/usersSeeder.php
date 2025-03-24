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
                'password'  => bcrypt('password'),
                'permision'=> 1,
                'photo_url'=> 'https://sibu.info-proffer.com/storage/images/yW1YTpnivFdQ5kmAua3CY0izLCSiDLlOWGUGWO8H.jpg',
            ],
            [
                'name' => '高橋勇作',
                'kana' =>'タカハシユウサク',
                'email'     => 'test2@test.com',
                'password'  => bcrypt('password'),
                'permision'=> 2,
                'photo_url'=> 'https://sibu.info-proffer.com/storage/images/Tbazf6CsykWxKyERqeQqVS9oszNtO2Gas4lgkWpp.jpg',
            ],
            [
                'name' => '山田智',
                'kana' => 'ヤマダサトシ',
                'email'     => 'test3@test.com',
                'password'  => bcrypt('password'),
                'permision'=> 2,
                'photo_url'=> 'https://sibu.info-proffer.com/storage/images/FZB6ffa6kXais7K5znlEe66CTOdkaXXYIjyNAz3l.jpg',
            ],
            [
                'name' => '高谷沙也加',
                'kana' => 'タカヤサヤカ',
                'email'     => 'test4@test.com',
                'password'  => bcrypt('password'),
                'permision'=> 2,
                'photo_url'=> 'https://sibu.info-proffer.com/storage/images/Ac5TGpjZVDafJxwQTsgXoycxDTmqykg4a3BJDgYC.jpg',
            ],
            [
                'name' => '諸積登子',
                'kana' => 'モロズミノリコ',
                'email'     => 'test5@test.com',
                'password'  => bcrypt('password'),
                'permision'=> 2,
                'photo_url'=> 'https://sibu.info-proffer.com/storage/images/Ol5jftmReU9jrLZOc3Iy8kUeKAR3G2ZGznP2v8Nq.jpg',
            ],
        ]);
    }
}
