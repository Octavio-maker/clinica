<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;


class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            ['name' => 'Limpieza Dental (Profilaxis)', 'description' => 'Eliminación profunda de sarro y placa bacteriana.', 'price' => 500.00, 'duration_minutes' => 45],
            ['name' => 'Blanqueamiento Dental', 'description' => 'Tratamiento estético para devolver el brillo y blancura a tus dientes.', 'price' => 2500.00, 'duration_minutes' => 60],
            ['name' => 'Ortodoncia (Brackets)', 'description' => 'Corrección de la alineación dental y problemas de mordida.', 'price' => 800.00, 'duration_minutes' => 30],
            ['name' => 'Resina / Empaste Estético', 'description' => 'Restauración de piezas dentales afectadas por caries.', 'price' => 600.00, 'duration_minutes' => 40],
            ['name' => 'Extracción Dental Simple', 'description' => 'Extracción segura y sin dolor de piezas dañadas.', 'price' => 700.00, 'duration_minutes' => 45],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}