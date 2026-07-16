<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin | Ponpes Khafidul Quran</title>
    <link rel="shortcut icon" href="{{ asset('logo.png') }}" type="image/png">

    <script src="https://cdn.tailwindcss.com"></script>

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

            <nav class="flex-1 mt-6 px-4 space-y-2">
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
            </nav>

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
            <header class="bg-white shadow-sm py-4 px-8 flex justify-between items-center">
                <h3 class="font-bold text-gray-700">Dashboard Admin</h3>
                <span class="text-sm text-gray-500 font-medium italic">Login sebagai: {{ Auth::user()->name }}</span>
            </header>

            <main class="p-8">
                @yield('content')
            </main>
        </div>
    </div>
</body>

</html>
