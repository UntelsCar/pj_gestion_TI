<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión | PMBOK Manager</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind compilado -->
    <link rel="stylesheet" href="/py_gestion/public/assets/css/app.css">
</head>
<body class="min-h-screen bg-slate-100 flex items-center justify-center">

    <div class="w-full max-w-md px-4">
        <!-- Tarjeta principal -->
        <div class="bg-white shadow-xl rounded-2xl p-8 border border-slate-100">
            <!-- Encabezado -->
            <header class="mb-6 text-center">
                <div class="mx-auto mb-3 flex h-12 w-12 items-center justify-center rounded-full bg-blue-600 text-white text-xl font-bold">
                    PM
                </div>
                <h1 class="text-2xl font-semibold text-slate-900">
                    Iniciar Sesión
                </h1>
                <p class="mt-1 text-sm text-slate-500">
                    Accede al sistema de Gestión de Costos del Proyecto.
                </p>
            </header>

            <!-- Mensaje de error -->
            <?php if (!empty($error)): ?>
                <div class="mb-4 rounded-lg border-l-4 border-red-500 bg-red-50 px-4 py-3 text-sm text-red-700">
                    <?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?>
                </div>
            <?php endif; ?>

            <!-- Formulario -->
            <form method="POST" action="/py_gestion/public/login/autenticar" class="space-y-4">
                <div>
                    <label for="correo" class="block text-sm font-medium text-slate-700 mb-1">
                        Correo institucional
                    </label>
                    <input
                        type="text"
                        id="correo"
                        name="correo"
                        required
                        autocomplete="email"
                        class="block w-full rounded-lg border border-slate-300 px-3 py-2 text-sm text-slate-900 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="usuario@ejemplo.com"
                    >
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-slate-700 mb-1">
                        Contraseña
                    </label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        required
                        autocomplete="current-password"
                        class="block w-full rounded-lg border border-slate-300 px-3 py-2 text-sm text-slate-900 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Introduce tu contraseña"
                    >
                </div>

                <button
                    type="submit"
                    class="mt-2 inline-flex w-full items-center justify-center rounded-lg bg-blue-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-1"
                >
                    Ingresar
                </button>
            </form>

            <!-- Pie -->
            <footer class="mt-6 text-center text-xs text-slate-400">
                PMBOK Manager · Gestión de Costos del Proyecto
            </footer>
        </div>
    </div>

</body>
</html>
