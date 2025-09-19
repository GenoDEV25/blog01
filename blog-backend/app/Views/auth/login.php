<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded shadow-md w-96">
        <h1 class="text-2xl font-bold mb-6">Iniciar Sesión</h1>

        <?php if (session()->getFlashdata('error')): ?>
            <p class="text-red-500 mb-4"><?= session()->getFlashdata('error') ?></p>
        <?php endif; ?>

        <form method="post" action="/doLogin">
            <div class="mb-4">
                <label class="block mb-1">Usuario</label>
                <input type="text" name="username" class="w-full border px-3 py-2 rounded" required>
            </div>
            <div class="mb-4">
                <label class="block mb-1">Contraseña</label>
                <input type="password" name="password" class="w-full border px-3 py-2 rounded" required>
            </div>
            <button type="submit" class="w-full bg-purple-600 text-white py-2 rounded hover:bg-purple-700">
                Entrar
            </button>
        </form>
    </div>
</body>

</html>