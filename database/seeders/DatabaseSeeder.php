<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // https://laravel.com/docs/10.x/seeding
        // php artisan migrate:fresh --seed
        // Query Builder
        // Insert
        DB::table('users')->insert([
            'name' => 'franky',
            'email' =>'super@gmail.com' ,
            'password' => Hash::make('123456'),
            'role' => 'super',

        ]);
        // DB::table('users')->insert([
        //     'name' => 'udi',
        //     'email' =>'yud@gmail.com' ,
        //     'password' => Hash::make('123456'),
        //     'role' => 'speaker',

        // ]);
        // DB::table('speakers')->insert([
        //     'note' => 'sdaa',
        //     'status' =>'aktif' ,
        //     'user_id' => 2,
            

        // ]);

    }
}
