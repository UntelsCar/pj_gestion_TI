<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    <style>
        body { font-family: Arial; display: flex; justify-content: center; align-items: center; height: 100vh; }
        form { border: 1px solid #ccc; padding: 20px; border-radius: 8px; width: 300px; }
        input { display: block; width: 100%; padding: 8px; margin-bottom: 10px; }
        button { width: 100%; padding: 10px; background: #007BFF; color: white; border: none; border-radius: 5px; }
        .error { color: red; text-align: center; }
    </style>
</head>
<body>

<form method="POST" action="/py_gestion/public/login/autenticar">
    <h2>Iniciar Sesión</h2>

    <?php if (!empty($error)): ?>
        <p class="error"><?= $error ?></p>
    <?php endif; ?>

    <input type="text" name="correo" placeholder="Correo" required>
    <input type="password" name="password" placeholder="Contraseña" required>
    <button type="submit">Ingresar</button>
</form>

</body>
</html>
