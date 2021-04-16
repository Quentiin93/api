<?php

namespace Database\Seeders;

use App\Models\Customers;
use App\Models\Users;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        Users::create([
            'id' => '684e6fa4-27b3-479b-b48c-ead0af45d2c9',
            'username' => 'Monique',
            'email' => 'monique@gmail.com',
            'password' => '$2y$10$PdwvT7ukuuYFfro7AZgoHe2XyZ9LIyzbi6kaNxSjNpxLTprQytrDi', //123456
        ]);  
    }
}
