<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Customers;

class CustomersSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        Customers::create([
            'id' => 'f43563d0-45e2-4207-a567-4ab94f97c685',
            'username' => 'Hardik',
            'first_name' => 'Franck',
            'last_name' => 'Berthe',
            'email' => 'hardik@gmail.com',
            'adress' => '48 rue du château',
            'city' => 'Amiens',
            'phone_number' => '0625847485'
        ]);
    }
}
