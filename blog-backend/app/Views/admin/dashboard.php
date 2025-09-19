<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            sans: ['Inter', 'sans-serif']
          }
        }
      }
    };
  </script>
  <script>
    window.FontAwesomeConfig = {
      autoReplaceSvg: 'nest'
    };
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <style>
    ::-webkit-scrollbar {
      display: none;
    }

    body {
      font-family: 'Inter', sans-serif;
    }

    .gradient-bg {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }

    .card-hover {
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .card-hover:hover {
      transform: translateY(-8px);
    }

    .glass-effect {
      backdrop-filter: blur(20px);
      background: rgba(255, 255, 255, 0.95);
    }

    .text-gradient {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .shadow-luxury {
      box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    }

    .btn-premium {
      background: linear-gradient(135deg, #ff6b6b 0%, #ee5a24 100%);
    }
  </style>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap">
  <style>
    .highlighted-section {
      outline: 2px solid #3F20FB;
      background-color: rgba(63, 32, 251, 0.1);
    }

    .edit-button {
      position: absolute;
      z-index: 1000;
    }

    ::-webkit-scrollbar {
      display: none;
    }

    html,
    body {
      -ms-overflow-style: none;
      scrollbar-width: none;
    }
  </style>
</head>

<body class="bg-slate-50">

  <nav id="top-nav" class="gradient-bg text-white px-6 py-4 shadow-lg">
    <div class="max-w-7xl mx-auto flex items-center justify-between">
      <div class="flex items-center space-x-6">
        <button class="text-white hover:text-purple-200 transition-colors">
          <i class="fa-solid fa-bars text-lg"></i>
        </button>
        <div class="flex items-center space-x-3">
          <i class="fa-solid fa-sparkles text-yellow-300"></i>
          <span class="font-medium">Fall Promo | Save up to $1200/year</span>
        </div>
      </div>
      <div class="flex items-center space-x-4">
        <button
          class="btn-premium text-white px-6 py-2 rounded-full text-sm font-semibold hover:shadow-lg transition-all transform hover:scale-105">
          View Offer
        </button>

        <!-- Logout -->
        <form action="<?= base_url('/logout') ?>" method="get">
          <button type="submit"
            class="px-6 py-2 mt-4 rounded-full bg-red-500 text-white text-sm font-semibold hover:bg-red-600 transition-all transform hover:scale-105">
            Logout
          </button>
        </form>
      </div>

    </div>
  </nav>

  <header id="header" class="glass-effect border-b border-white/20 px-6 py-5 shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto flex items-center justify-between">
      <div class="flex items-center space-x-8">
        <div class="flex items-center space-x-4">
          <div class="w-12 h-12 gradient-bg rounded-xl flex items-center justify-center text-white shadow-lg">
            <span class="text-xl font-bold">B</span>
          </div>
          <span class="text-2xl font-bold text-gradient">BlogSpace</span>
        </div>
        <nav class="text-slate-600 flex items-center space-x-2 text-sm font-medium">
          <span class="hover:text-slate-900 transition-colors cursor-pointer">Home</span>
          <i class="fa-solid fa-chevron-right text-xs text-slate-400"></i>
          <span class="text-slate-900 font-semibold">Blog</span>
        </nav>
      </div>
      <div class="flex items-center space-x-4">
        <button class="w-10 h-10 bg-slate-100 hover:bg-slate-200 rounded-xl flex items-center justify-center transition-colors group" onclick="addPost()">
          <i class="fa-solid fa-plus text-slate-600 group-hover:text-slate-800"></i>
        </button>
        <button class="w-10 h-10 bg-slate-100 hover:bg-slate-200 rounded-xl flex items-center justify-center transition-colors group">
          <i class="fa-solid fa-search text-slate-600 group-hover:text-slate-800"></i>
        </button>
        <button class="w-10 h-10 bg-slate-100 hover:bg-slate-200 rounded-xl flex items-center justify-center transition-colors group relative">
          <i class="fa-solid fa-bell text-slate-600 group-hover:text-slate-800"></i>
          <span class="absolute -top-1 -right-1 w-3 h-3 bg-red-500 rounded-full"></span>
        </button>
        <div class="flex items-center space-x-3 pl-4 border-l border-slate-200">
          <img src="https://storage.googleapis.com/uxpilot-auth.appspot.com/avatars/avatar-2.jpg" alt="User Avatar" class="w-10 h-10 rounded-xl object-cover ring-2 ring-purple-100">
          <span class="font-semibold text-slate-800"><?= esc($username) ?></span>
        </div>
      </div>
    </div>
  </header>

  <main id="main-content" class="bg-gradient-to-br from-slate-50 via-white to-purple-50">
    <div class="max-w-7xl mx-auto px-6 py-16">
      <div id="hero-section" class="text-center mb-20">
        <div class="inline-flex items-center space-x-2 bg-purple-100 text-purple-800 px-4 py-2 rounded-full text-sm font-medium mb-8">
          <i class="fa-solid fa-newspaper"></i>
          <span>Latest Insights</span>
        </div>
        <h1 class="text-6xl font-bold text-slate-900 mb-8 leading-tight">
          Our <span class="text-gradient">Blog</span>
        </h1>
        <p class="text-xl text-slate-600 max-w-4xl mx-auto leading-relaxed font-light">
          Discover insights, tips, and stories from our team. Stay updated with the latest trends in technology, design, and innovation that shape the digital world.
        </p>
      </div>

      <div id="blog-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 mb-20">
        <?php if (!empty($posts)): ?>
          <?php foreach ($posts as $post): ?>
            <article class="bg-white rounded-2xl shadow-luxury overflow-hidden card-hover group">
              <div class="relative overflow-hidden">
                <img class="w-full h-56 object-cover"
                  src="<?= base_url('uploads/' . $post['image']) ?>"
                  alt="<?= esc($post['title']) ?>">
                <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                <div class="absolute top-4 left-4">
                  <span class="bg-purple-600 text-white px-3 py-1 rounded-full text-xs font-semibold">
                    <?= esc($post['category_name']) ?>
                  </span>
                </div>
              </div>
              <div class="p-8">
                <h3 class="text-2xl font-bold text-slate-900 mb-4 group-hover:text-purple-600 transition-colors flex items-center justify-between">
                  <span><?= esc($post['title']) ?></span>
                  <span class="flex space-x-2">

                    <!-- Botón Editar -->
                    <a href="<?= base_url('admin/posts/edit/' . $post['id']) ?>"
                      class="px-3 py-1 text-xs rounded-lg bg-blue-500 text-white hover:bg-blue-600 transition">
                      <i class="fa-solid fa-pen"></i> Editar
                    </a>

                    <!-- Botón Eliminar -->
                    <button type="button"
                      onclick="openDeleteModal(<?= $post['id'] ?>, '<?= esc(addslashes($post['title'])) ?>')"
                      class="px-3 py-1 text-xs rounded-lg bg-red-500 text-white hover:bg-red-600 transition">
                      <i class="fa-solid fa-trash"></i> Eliminar
                    </button>

                  </span>
                </h3>
                <p class="text-slate-600 mb-6 leading-relaxed">
                  <?= esc($post['summary']) ?>
                </p>
                <div class="flex items-center justify-between pt-4 border-t border-slate-100">
                  <div class="flex items-center space-x-3">
                    <span class="text-sm font-semibold text-slate-900">Autor</span>
                    <p class="text-xs text-slate-500">
                      <?= date('F j, Y', strtotime($post['created_at'])) ?>
                    </p>
                  </div>
                  <div class="flex items-center space-x-4 text-sm text-slate-500">
                    <span class="flex items-center space-x-1">
                      <i class="fa-solid fa-clock"></i>
                      <span>5 min read</span>
                    </span>
                  </div>
                </div>
              </div>
            </article>
          <?php endforeach; ?>
        <?php else: ?>
          <p class="text-slate-500 text-center col-span-full">No hay posts publicados aún.</p>
        <?php endif; ?>
      </div>


      <div id="pagination" class="flex items-center justify-center space-x-3">
        <button class="px-4 py-3 text-slate-400 bg-white border border-slate-200 rounded-xl hover:bg-slate-50 disabled:opacity-50 shadow-sm" disabled="">
          <i class="fa-solid fa-chevron-left"></i>
        </button>

        <button class="px-5 py-3 text-white gradient-bg border-0 rounded-xl shadow-lg font-semibold">
          1
        </button>

        <button class="px-5 py-3 text-slate-700 bg-white border border-slate-200 rounded-xl hover:bg-slate-50 hover:border-purple-200 transition-all shadow-sm font-medium">
          2
        </button>

        <button class="px-5 py-3 text-slate-700 bg-white border border-slate-200 rounded-xl hover:bg-slate-50 hover:border-purple-200 transition-all shadow-sm font-medium">
          3
        </button>

        <span class="px-3 text-slate-400 font-medium">...</span>

        <button class="px-5 py-3 text-slate-700 bg-white border border-slate-200 rounded-xl hover:bg-slate-50 hover:border-purple-200 transition-all shadow-sm font-medium">
          8
        </button>

        <button class="px-4 py-3 text-slate-700 bg-white border border-slate-200 rounded-xl hover:bg-slate-50 hover:border-purple-200 transition-all shadow-sm">
          <i class="fa-solid fa-chevron-right"></i>
        </button>
      </div>
    </div>
  </main>

  <footer id="footer" class="bg-white border-t border-slate-200 py-12">
    <div class="max-w-7xl mx-auto px-6">
      <div class="flex items-center justify-between mb-8">
        <div class="flex items-center space-x-4">
          <div class="w-12 h-12 gradient-bg rounded-xl flex items-center justify-center text-white shadow-lg">
            <span class="text-xl font-bold">B</span>
          </div>
          <span class="text-2xl font-bold text-gradient">BlogSpace</span>
        </div>
        <div class="flex items-center space-x-8 text-sm font-medium text-slate-600">
          <span class="hover:text-slate-900 cursor-pointer transition-colors">About</span>
          <span class="hover:text-slate-900 cursor-pointer transition-colors">Contact</span>
          <span class="hover:text-slate-900 cursor-pointer transition-colors">Privacy</span>
          <span class="hover:text-slate-900 cursor-pointer transition-colors">Terms</span>
        </div>
      </div>
      <div class="pt-8 border-t border-slate-200 text-center text-sm text-slate-500">
        <p>© 2025 BlogSpace. All rights reserved. Made with ❤️ for content creators worldwide.</p>
      </div>
    </div>
  </footer>

  <!-- Modal de confirmación -->
  <div id="deleteModal" class="hidden fixed inset-0 bg-black/50 flex items-center justify-center z-50">
    <div class="bg-white rounded-2xl shadow-xl p-8 w-full max-w-md">
      <h2 class="text-xl font-bold text-slate-900 mb-4">¿Eliminar post?</h2>
      <p class="text-slate-600 mb-6">
        Estás a punto de eliminar <span id="deletePostTitle" class="font-semibold text-red-600"></span>.
        Esta acción no se puede deshacer.
      </p>

      <div class="flex justify-end space-x-4">
        <button onclick="closeDeleteModal()"
          class="px-4 py-2 rounded-lg bg-slate-200 text-slate-700 hover:bg-slate-300 transition">
          Cancelar
        </button>

        <form id="deleteForm" method="POST">
          <button type="submit"
            class="px-4 py-2 rounded-lg bg-red-500 text-white hover:bg-red-600 transition">
            Sí, eliminar
          </button>
        </form>
      </div>
    </div>
  </div>


  <script src="<?= base_url('assets/js/script.js') ?>"></script>
</body>

</html>