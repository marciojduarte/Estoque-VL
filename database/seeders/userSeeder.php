<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => '123456',
            'id_setor' => '1'
        ]);
        DB::table('users')->insert([
            'name' => 'Carlos Souza',
            'email' => 'carlosp.souza@gmail.com',
            'password' => '$2y$10$to8AahLa7ImvB8sVBhYAiezTFuFcWiW.GrteH1QQob0i.PgLcFjm2',
            'id_setor' => '1'
        ]);
        DB::table('users')->insert([
            'name' => 'admin1',
            'email' => 'admin1@gmail.com',
            'password' => '123456',
            'id_setor' => '1'
        ]);
    }
}
