<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Patient;

class AppointmentController extends Controller
{
    // Mostrar el panel de administración con las citas
    public function index()
    {
        $appointments = Appointment::with(['patient', 'service'])->get();
        return view('admin.appointments.index', compact('appointments'));
    }

    // Guardar la cita enviada desde el formulario público de la página principal
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:50',
            'service_id' => 'required|integer',
        ]);

        // 1. Buscar o registrar al paciente
        $patient = Patient::firstOrCreate(
            ['phone' => $request->phone],
            [
                'name' => $request->name,
                'email' => $request->phone . '@sin-correo.com'
            ]
        );

        // 2. Crear la cita asignando la fecha actual por defecto
        Appointment::create([
            'patient_id' => $patient->id,
            'service_id' => $request->service_id,
            'appointment_date' => now(), // Asigna fecha y hora actual
            'status' => 'Pendiente',
        ]);

        return back()->with('success', '¡Cita solicitada con éxito! Nos pondremos en contacto contigo.');
    }
}