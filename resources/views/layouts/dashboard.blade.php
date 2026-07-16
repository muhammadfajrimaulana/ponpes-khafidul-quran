<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin | Ponpes Khafidul Quran</title>
    <link rel="shortcut icon" href="{{ asset('logo.png') }}" type="image/png">

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
        .nav-active {
            background: #059669;
            color: white;
        }
    </style>
</head>

<body class="bg-gray-100 font-sans">

    <div class="flex min-h-screen">
        <aside class="w-64 bg-slate-900 text-white flex flex-col fixed h-full">
            <div class="p-6 text-center border-b border-slate-800">
                <img src="{{ asset('logo.png') }}" alt="Logo Ponpes Khafidul Quran" class="mx-auto h-16 w-16 mb-4">
                <h2 class="text-lg font-bold text-[#059669]">KHAFIDUL QUR'AN</h2>
            </div>

            <div class="flex-1 mt-6 px-4 space-y-2">
                <a href="/dashboard" class="block py-3 px-4 rounded-lg hover:bg-slate-800 transition">
                    <i class="fas fa-chart-line mr-3"></i> Dashboard
                </a>

                @if (Auth::user()->role === 'super_admin')
                    <a href="{{ route('admin.pengurus') }}"
                        class="block py-3 px-4 rounded-lg hover:bg-slate-800 transition">
                        <i class="fas fa-users-cog mr-3"></i> Data Pengurus
                    </a>
                    <a href="{{ route('admin.santri') }}"
                        class="block py-3 px-4 rounded-lg hover:bg-slate-800 transition">
                        <i class="fas fa-user-graduate mr-3"></i> Data Santri
                    </a>
                    <a href="{{ route('admin.alumni') }}"
                        class="block py-3 px-4 rounded-lg hover:bg-slate-800 transition">
                        <i class="fas fa-user-clock mr-3"></i> Data Alumni
                    </a>
                    <a href="{{ route('admin.berita') }}"
                        class="block py-3 px-4 rounded-lg hover:bg-slate-800 transition">
                        <i class="fas fa-pen-nib mr-3"></i> Berita/Kajian
                    </a>
                    <a href="{{ route('admin.galeri') }}"
                        class="block py-3 px-4 rounded-lg hover:bg-slate-800 transition">
                        <i class="fas fa-photo-video mr-3"></i> Galeri
                    </a>
                @endif

                @if (Auth::user()->role === 'pengurus')
                    <a href="{{ route('pengurus.santri') }}"
                        class="block py-3 px-4 rounded-lg hover:bg-slate-800 transition">
                        <i class="fas fa-user-graduate mr-3"></i> Data Santri
                    </a>
                    <a href="{{ route('pengurus.alumni') }}"
                        class="block py-3 px-4 rounded-lg hover:bg-slate-800 transition">
                        <i class="fas fa-user-clock mr-3"></i> Data Alumni
                    </a>
                    <a href="{{ route('pengurus.berita') }}"
                        class="block py-3 px-4 rounded-lg hover:bg-slate-800 transition">
                        <i class="fas fa-pen-nib mr-3"></i> Berita/Kajian
                    </a>
                    <a href="{{ route('pengurus.galeri') }}"
                        class="block py-3 px-4 rounded-lg hover:bg-slate-800 transition">
                        <i class="fas fa-photo-video mr-3"></i> Galeri
                    </a>
                @endif
            </div>

            <div class="p-4 border-t border-slate-800">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="w-full text-left py-2 px-4 hover:bg-red-900 rounded text-red-400">
                        <i class="fas fa-sign-out-alt mr-3"></i> Logout
                    </button>
                </form>
            </div>
        </aside>

        <div class="flex-1 ml-64">
            <nav x-data="{ open: false }" class="bg-white shadow-sm py-4 px-8 flex justify-between items-center">
                <div class="flex mr-2">
                    @yield('icon')

                    <h3 class="font-bold text-gray-700">
                        @yield('title', 'Dashboard')
                    </h3>
                </div>

                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Logout') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>

                <div class="-me-2 flex items-center sm:hidden">
                    <button @click="open = ! open"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Responsive Navigation Menu -->
                <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
                    <div class="pt-2 pb-3 space-y-1">
                        <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-responsive-nav-link>
                    </div>

                    <!-- Responsive Settings Options -->
                    <div class="pt-4 pb-1 border-t border-gray-200">
                        <div class="px-4">
                            <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                            <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                        </div>

                        <div class="mt-3 space-y-1">
                            <x-responsive-nav-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-responsive-nav-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-responsive-nav-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-responsive-nav-link>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>

            <main class="p-8">
                @yield('content')
            </main>
        </div>
    </div>
    @section('scripts')
        <script>
            function openModal(id) {
                document.getElementById(id).classList.remove('hidden');
            }

            function closeModal(id) {
                document.getElementById(id).classList.add('hidden');
            }
        </script>
    @endsection
</body>

</html>
