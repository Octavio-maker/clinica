<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
    
        User::create([
            'name' => 'Dra. Sonrisa Perfecta',
            'email' => 'dentista@clinica.com',
            'password' => Hash::make('password123'),
        ]);

        $this->call([
            ServiceSeeder::class,
            PatientSeeder::class,
            AppointmentSeeder::class,
        ]);
    }
}