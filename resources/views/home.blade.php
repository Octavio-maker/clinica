<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica Dental Sonrisa Sana | Tu mejor sonrisa</title>
    <!-- Tailwind CSS CDN para diseño rápido y moderno -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 text-slate-800 antialiased">

    <!-- Header / Navbar -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <span class="text-2xl font-bold text-teal-600">🦷 Clínica Sonrisa Sana</span>
            </div>
            <nav class="hidden md:flex space-x-6 font-medium text-slate-600">
                <a href="#servicios" class="hover:text-teal-600 transition">Servicios</a>
                <a href="#beneficios" class="hover:text-teal-600 transition">¿Por qué elegirnos?</a>
                <a href="#contacto" class="hover:text-teal-600 transition">Contacto</a>
            </nav>
            <div>
                <a href="#contacto" class="bg-teal-600 text-white px-5 py-2.5 rounded-xl font-medium shadow-md hover:bg-teal-700 transition">Agendar Cita</a>
            </div>
        </div>
    </header>

    <!-- Hero Section (Conversión) -->
    <section class="bg-gradient-to-br from-teal-500 to-cyan-700 text-white py-20 px-4">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div>
                <span class="bg-teal-400 text-teal-950 font-semibold px-3 py-1 rounded-full text-sm">Cuidado dental profesional</span>
                <h1 class="text-4xl md:text-5xl font-extrabold mt-4 leading-tight">La sonrisa que mereces, al alcance de tus manos.</h1>
                <p class="mt-4 text-teal-100 text-lg">Tecnología de punta y un trato humano y cálido para cuidar la salud bucal de toda tu familia.</p>
                <div class="mt-8 flex space-x-4">
                    <a href="#contacto" class="bg-white text-teal-700 px-6 py-3 rounded-xl font-bold shadow-lg hover:bg-slate-100 transition">¡Agenda por WhatsApp!</a>
                    <a href="#servicios" class="border border-white text-white px-6 py-3 rounded-xl font-medium hover:bg-white/10 transition">Ver Servicios</a>
                </div>
            </div>
            <div class="bg-white/10 p-6 rounded-3xl backdrop-blur-md border border-white/20 shadow-2xl">
                <h3 class="text-2xl font-bold mb-4">¿Listo para visitarnos?</h3>
                <p class="text-sm text-teal-100 mb-6">Contáctanos directamente o déjanos tus datos para coordinar tu cita ideal.</p>
                
                <form action="{{ route('appointments.store') }}" method="POST" class="space-y-4">
                    @csrf
                    <input type="text" name="name" placeholder="Tu Nombre Completo" class="w-full px-4 py-3 rounded-xl text-slate-800 bg-white focus:outline-none focus:ring-2 focus:ring-teal-300" required>
                    <input type="tel" name="phone" placeholder="Número de Teléfono / WhatsApp" class="w-full px-4 py-3 rounded-xl text-slate-800 bg-white focus:outline-none focus:ring-2 focus:ring-teal-300" required>
                    <select name="service_id" class="w-full px-4 py-3 rounded-xl text-slate-800 bg-white focus:outline-none focus:ring-2 focus:ring-teal-300" required>
                        <option value="">Selecciona un servicio</option>
                        <option value="1">Limpieza Dental</option>
                        <option value="2">Blanqueamiento</option>
                        <option value="3">Ortodoncia</option>
                    </select>
                    <button type="submit" class="w-full bg-teal-800 hover:bg-teal-900 text-white font-bold py-3 rounded-xl transition shadow-md">Solicitar Información</button>
                </form>

            </div>
        </div>
    </section>

    <!-- Sección de Servicios -->
    <section id="servicios" class="py-20 max-w-7xl mx-auto px-4">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="text-3xl font-bold text-slate-900">Nuestros Tratamientos Destacados</h2>
            <p class="text-slate-600 mt-2">Ofrecemos soluciones integrales y personalizadas para cada miembro de la familia.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 hover:shadow-md transition">
                <div class="text-4xl mb-4">✨</div>
                <h3 class="text-xl font-bold text-slate-800">Limpieza y Profilaxis</h3>
                <p class="text-slate-600 mt-2">Remoción profunda de sarro, pulido y prevención de enfermedades periodontales.</p>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 hover:shadow-md transition">
                <div class="text-4xl mb-4">💎</div>
                <h3 class="text-xl font-bold text-slate-800">Blanqueamiento Dental</h3>
                <p class="text-slate-600 mt-2">Aclara varios tonos el color de tus dientes de forma segura y duradera.</p>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 hover:shadow-md transition">
                <div class="text-4xl mb-4">😁</div>
                <h3 class="text-xl font-bold text-slate-800">Ortodoncia</h3>
                <p class="text-slate-600 mt-2">Alineación estética y funcional para una sonrisa perfectamente equilibrada.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-400 py-12 text-center">
        <p>&copy; 2026 Clínica Dental Sonrisa Sana. Todos los derechos reservados.</p>
        <p class="text-sm mt-2 text-slate-500">¿Eres la dentista? <a href="{{ route('login') }}" class="text-teal-400 underline">Acceso al sistema</a></p>
    </footer>

</body>
</html>