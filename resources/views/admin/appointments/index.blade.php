<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración - Citas</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 text-slate-800 font-sans antialiased">

    <!-- Header / Navbar Admin -->
    <header class="bg-slate-900 text-white shadow">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-xl font-bold flex items-center gap-2">
                <span>🦷</span> Panel de Citas Dental
            </h1>
            <a href="{{ route('home') }}" class="text-sm bg-slate-800 hover:bg-slate-700 text-slate-200 px-4 py-2 rounded-lg transition">
                Ver Sitio Público
            </a>
        </div>
    </header>

    <!-- Contenido Principal -->
    <main class="max-w-7xl mx-auto px-6 py-10">
        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="text-2xl font-bold text-slate-900">Listado de Citas Solicitadas</h2>
                <p class="text-slate-500 text-sm">Gestiona y revisa las citas ingresadas por los pacientes.</p>
            </div>
            <span class="bg-teal-100 text-teal-800 font-semibold text-xs px-3 py-1.5 rounded-full">
                Total: {{ $appointments->count() }} citas
            </span>
        </div>

        <!-- Tabla de Citas -->
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm text-slate-600">
                    <thead class="bg-slate-50 text-slate-700 uppercase font-semibold text-xs border-b border-slate-200">
                        <tr>
                            <th class="px-6 py-4">#</th>
                            <th class="px-6 py-4">Paciente</th>
                            <th class="px-6 py-4">Teléfono</th>
                            <th class="px-6 py-4">Servicio</th>
                            <th class="px-6 py-4">Fecha Solicitada</th>
                            <th class="px-6 py-4">Estado</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @forelse ($appointments as $appointment)
                            <tr class="hover:bg-slate-50/80 transition">
                                <td class="px-6 py-4 font-bold text-slate-800">#{{ $appointment->id }}</td>
                                <td class="px-6 py-4 font-medium text-slate-900">
                                    {{ $appointment->patient->name ?? 'Sin Registro' }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $appointment->patient->phone ?? 'N/A' }}
                                </td>
                                <td class="px-6 py-4">
                                    <span class="bg-slate-100 text-slate-700 px-2.5 py-1 rounded-md text-xs font-medium">
                                        {{ $appointment->service->name ?? 'Servicio #' . $appointment->service_id }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-slate-500">
                                    {{ $appointment->appointment_date ? \Carbon\Carbon::parse($appointment->appointment_date)->format('d/m/Y H:i') : $appointment->created_at->format('d/m/Y H:i') }}
                                </td>
                                <td class="px-6 py-4">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-100 text-amber-800">
                                        {{ $appointment->status ?? 'Pendiente' }}
                                    </span>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="px-6 py-12 text-center text-slate-400">
                                    No hay citas registradas todavía.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </main>

</body>
</html>