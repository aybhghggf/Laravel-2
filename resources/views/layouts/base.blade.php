<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <!-- Navbar -->
  <nav class="bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-16">
        <!-- Left: Logo -->
        <div class="flex items-center">
          <a href="{{ route('index.home') }}" class="text-white font-bold text-xl">MonSite</a>
        </div>
        <!-- Center: Navigation Links -->
        <div class="hidden md:flex flex-1 justify-center">
          <div class="flex items-baseline space-x-4">
            <a href="{{ route('index.home') }}" class="text-white px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-700">Accueil</a>
            <a href="{{ route('info.info') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Mes Informations</a>
            <a href="{{ route('T.profiles') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Tous Les Profiles</a>
          </div>
        </div>
        <!-- Right: Auth Buttons -->
        <div class="hidden md:flex items-center space-x-2">
          @auth
            <form method="POST" action="{{ route('Logout') }}">
              @csrf
              <button type="submit" class="bg-red-600 text-white px-3 py-2 rounded-md text-sm font-medium hover:bg-red-700">Se déconnecter</button>
            </form>
          @else
            <a href="{{ route('Login.show') }}" class="bg-blue-600 text-white px-3 py-2 rounded-md text-sm font-medium hover:bg-blue-700">Se connecter</a>
          @endauth
        </div>
        <!-- Mobile menu button -->
        <div class="md:hidden">
          <button type="button" class="bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
            <span class="sr-only">Open main menu</span>
            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </nav>

  @yield('home')
  @yield('information')
  @yield('profile')
  @yield('Profiles')
  @yield('MonProfile')
  @yield('Login')
  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-3 mt-5" style="margin-top: auto;">
    <div class="container">
      <p class="mb-0">&copy; 2025 MonSite. Tous droits réservés.</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
