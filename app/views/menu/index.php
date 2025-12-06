<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Menú Principal | Gestión de Costos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind compilado -->
    <link rel="stylesheet" href="/py_gestion/public/assets/css/app.css">
</head>

<body class="min-h-screen bg-slate-100 flex items-center justify-center">

    <div class="w-full max-w-3xl px-4">
        <!-- Contenedor principal -->
        <div class="bg-white shadow-xl rounded-2xl p-8 border border-slate-100">

            <!-- Encabezado -->
            <header class="mb-8">
                <p class="text-sm font-semibold tracking-wide text-blue-600 uppercase">
                    Gestión de Costos del Proyecto
                </p>
                <h1 class="mt-1 text-3xl font-bold text-slate-900">
                    Menú Principal
                </h1>
                <p class="mt-2 text-sm text-slate-600">
                    Selecciona el proceso de la Gestión de Costos que deseas gestionar.
                </p>
            </header>

            <!-- Menú en tarjetas -->
            <section class="grid gap-4 md:grid-cols-2">
                <!-- 7.1 -->
                <a href="?url=PlanificacionGestionCostos/index/1"
                    class="group block rounded-xl border border-slate-200 bg-slate-50 px-4 py-4 transition hover:border-blue-500 hover:bg-blue-50">
                    <h2 class="text-base font-semibold text-slate-900 group-hover:text-blue-700">
                        7.1 Planificar la Gestión de los Costos
                    </h2>
                    <p class="mt-1 text-sm text-slate-600">
                        Definir cómo se estimarán, presupuestarán y controlarán los costos del proyecto.
                    </p>
                </a>

                <!-- 7.2 -->
                <a href="?url=PlanificacionGestionCostos/index/2"
                    class="group block rounded-xl border border-slate-200 bg-slate-50 px-4 py-4 transition hover:border-blue-500 hover:bg-blue-50">
                    <h2 class="text-base font-semibold text-slate-900 group-hover:text-blue-700">
                        7.2 Estimar los Costos
                    </h2>
                    <p class="mt-1 text-sm text-slate-600">
                        Calcular una aproximación de los recursos monetarios necesarios para cada actividad.
                    </p>
                </a>

                <!-- 7.3 -->
                <a href="?url=PlanificacionGestionCostos/index/3"
                    class="group block rounded-xl border border-slate-200 bg-slate-50 px-4 py-4 transition hover:border-blue-500 hover:bg-blue-50">
                    <h2 class="text-base font-semibold text-slate-900 group-hover:text-blue-700">
                        7.3 Determinar el Presupuesto
                    </h2>
                    <p class="mt-1 text-sm text-slate-600">
                        Integrar los costos estimados para establecer la línea base del presupuesto.
                    </p>
                </a>

                <!-- 7.4 -->
                <a href="?url=PlanificacionGestionCostos/index/4"
                    class="group block rounded-xl border border-slate-200 bg-slate-50 px-4 py-4 transition hover:border-blue-500 hover:bg-blue-50">
                    <h2 class="text-base font-semibold text-slate-900 group-hover:text-blue-700">
                        7.4 Controlar los Costos
                    </h2>
                    <p class="mt-1 text-sm text-slate-600">
                        Monitorear el desempeño del proyecto para actualizar el presupuesto y gestionar cambios.
                    </p>
                </a>
            </section>

            <!-- Pie: acciones secundarias -->
            <footer class="mt-8 flex items-center justify-between gap-4 text-xs text-slate-500">
                <span>PMBOK – Gestión de los Costos</span>

                <a href="?url=Login/index"
                    class="inline-flex items-center gap-1 rounded-full border border-slate-300 px-3 py-1 text-xs font-medium text-slate-700 hover:border-slate-400 hover:bg-slate-50">
                    Cerrar sesión
                </a>
            </footer>
        </div>
    </div>

</body>

</html>