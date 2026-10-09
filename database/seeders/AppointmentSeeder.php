<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Appointment;
use Carbon\Carbon;

class AppointmentSeeder extends Seeder
{
    public function run(): void
    {
        Appointment::create([
            'patient_id' => 1,
            'service_id' => 1, // Limpieza
            'appointment_date' => Carbon::now()->addDays(1)->setTime(10, 0, 0),
            'status' => 'Confirmada',
            'notes' => 'Paciente prefiere la mañana.'
        ]);

        Appointment::create([
            'patient_id' => 2,
            'service_id' => 2, // Blanqueamiento
            'appointment_date' => Carbon::now()->addDays(2)->setTime(16, 30, 0),
            'status' => 'Pendiente',
            'notes' => 'Primera vez en la clínica.'
        ]);
    }
}