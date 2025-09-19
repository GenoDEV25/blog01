<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Nuevo Post | BlogSpace</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-slate-50 via-white to-purple-50 min-h-screen flex flex-col">

    <!-- Header -->
    <header class="glass-effect border-b border-white/20 px-6 py-5 shadow-sm sticky top-0 z-50 bg-white">
        <div class="max-w-5xl mx-auto flex items-center justify-between">
            <h1 class="text-2xl font-bold text-gradient">Crear nuevo Post</h1>
            <a href="/admin/dashboard" class="text-slate-600 hover:text-purple-600 transition-colors text-sm font-medium">
                ← Volver al Dashboard
            </a>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-1 flex items-center justify-center px-6 py-12">
        <div class="w-full max-w-3xl bg-white rounded-2xl shadow-xl p-10">
            <form action="/admin/savePost" method="POST" enctype="multipart/form-data" class="space-y-6">

                <!-- ID (solo lectura) -->
                <div>
                    <label class="block text-sm font-medium text-slate-700">ID</label>
                    <input type="text" name="id" readonly placeholder="Auto generado"
                        class="mt-2 w-full rounded-lg border border-slate-300 px-4 py-2 text-slate-700 bg-slate-100 cursor-not-allowed">
                </div>

                <!-- Title -->
                <div>
                    <label class="block text-sm font-medium text-slate-700">Título</label>
                    <input type="text" name="title" required
                        class="mt-2 w-full rounded-lg border border-slate-300 px-4 py-2 text-slate-700 focus:ring-2 focus:ring-purple-500">
                    <?php if (session()->getFlashdata('errors')['title'] ?? false): ?>
                        <p class="text-red-600 text-sm mt-1"><?= session()->getFlashdata('errors')['title'] ?></p>
                    <?php endif; ?>
                </div>

                <!-- Created At (hidden, hoy) -->
                <input type="hidden" name="created_at" value="<?= date('Y-m-d H:i:s') ?>">

                <!-- Image (file upload) -->
                <div>
                    <label class="block text-sm font-medium text-slate-700">Imagen</label>
                    <input type="file" name="image" accept="image/*" required
                        class="mt-2 w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-purple-100 file:text-purple-700 hover:file:bg-purple-200">
                    <?php if (session()->getFlashdata('errors')['image'] ?? false): ?>
                        <p class="text-red-600 text-sm mt-1"><?= session()->getFlashdata('errors')['image'] ?></p>
                    <?php endif; ?>
                </div>

                <!-- Summary -->
                <div>
                    <label class="block text-sm font-medium text-slate-700">Resumen</label>
                    <textarea name="summary" rows="4" required
                        class="mt-2 w-full rounded-lg border border-slate-300 px-4 py-2 text-slate-700 focus:ring-2 focus:ring-purple-500"></textarea>
                    <?php if (session()->getFlashdata('errors')['summary'] ?? false): ?>
                        <p class="text-red-600 text-sm mt-1"><?= session()->getFlashdata('errors')['summary'] ?></p>
                    <?php endif; ?>
                </div>

                <!-- Category -->
                <div>
                    <label class="block text-sm font-medium text-slate-700">Categoría</label>
                    <select name="category_id" required
                        class="mt-2 w-full rounded-lg border border-slate-300 px-4 py-2 text-slate-700 focus:ring-2 focus:ring-purple-500">
                        <option value="" selected disabled>Seleccione una categoría</option>
                        <option value=1>Technology</option>
                        <option value=2>Design</option>
                        <option value=3>UX</option>
                        <option value=4>Mobile</option>
                        <option value=5>Backend</option>
                        <option value=6>Performance</option>
                    </select>
                    <?php if (session()->getFlashdata('errors')['category_id'] ?? false): ?>
                        <p class="text-red-600 text-sm mt-1"><?= session()->getFlashdata('errors')['category_id'] ?></p>
                    <?php endif; ?>
                </div>

                <!-- Botones -->
                <div class="flex justify-end space-x-4 pt-6 border-t border-slate-200">
                    <a href="/admin/dashboard" class="px-6 py-2 rounded-lg bg-slate-200 text-slate-700 hover:bg-slate-300 transition">
                        Cancelar
                    </a>
                    <button type="submit"
                        class="px-6 py-2 rounded-lg bg-gradient-to-r from-purple-600 to-indigo-600 text-white font-semibold shadow-md hover:scale-105 transition">
                        Guardar Post
                    </button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>