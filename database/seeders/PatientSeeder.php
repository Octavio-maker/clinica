<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Patient;

class PatientSeeder extends Seeder
{
    public function run(): void
    {
        $patients = [
            ['name' => 'Carlos Ramírez', 'email' => 'carlos@example.com', 'phone' => '5512345678'],
            ['name' => 'Sofía Hernández', 'email' => 'sofia@example.com', 'phone' => '5587654321'],
            ['name' => 'Miguel Ángel Torres', 'email' => 'miguel@example.com', 'phone' => '5598765432'],
        ];

        foreach ($patients as $patient) {
            Patient::create($patient);
        }
    }
}