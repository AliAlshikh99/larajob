<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Job;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users=[
            [
            'name'=>'Ali',
            'email'=>'Ali@test.test ',
            'password'=>Hash::make('123456'),
            ],
            [
            'name'=>'sami',
            'email'=>'sami@test.test ',
            'password'=>Hash::make('123456'),
            ],
            
            ];
         
    foreach ($users as  $user) {
        User::create($user);
    }

        // \App\Models\Job::factory(100)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
