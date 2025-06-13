<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin PETUALANGID</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
        }
        
        .animate-pulse {
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
        
        @keyframes pulse {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: .5;
            }
        }
        
        .hover-lift {
            transition: all 0.3s ease;
        }
        
        .hover-lift:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        }
        
        .card-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .card-hover:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            min-width: 200px;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            z-index: 1;
            border-radius: 12px;
            border: 1px solid #e5e7eb;
            right: 0;
            top: 100%;
            margin-top: 8px;
        }

        .dropdown:hover .dropdown-content {
            display: block;
            animation: slideDown 0.3s ease-out;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .dropdown-content a {
            color: #374151;
            padding: 12px 16px;
            text-decoration: none;
            display: flex;
            align-items: center;
            transition: all 0.2s ease;
        }

        .dropdown-content a:hover {
            background-color: #f3f4f6;
        }

        .dropdown-content a:first-child {
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
        }

        .dropdown-content a:last-child {
            border-bottom-left-radius: 12px;
            border-bottom-right-radius: 12px;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 min-h-screen">
    <!-- Header -->
    <header class="bg-white shadow-lg border-b-4 border-emerald-500">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-6">
                <h1 class="font-bold text-3xl leading-tight">
                    <span class="bg-gradient-to-r from-emerald-700 via-green-600 to-teal-600 bg-clip-text text-transparent">
                        Dashboard Admin PETUALANGID
                    </span>
                    <span class="text-2xl ml-2">🏔️✨</span>
                </h1>
                <div class="flex items-center space-x-4">
                    <div class="text-sm text-gray-600 bg-green-50 px-4 py-2 rounded-full font-medium">
                        {{ \Carbon\Carbon::now()->format('l, d F Y') }}
                    </div>
                    <div class="w-3 h-3 bg-green-400 rounded-full animate-pulse"></div>
                    
                    <!-- User Profile Dropdown -->
                    <div class="dropdown">
                        <button class="flex items-center space-x-3 bg-gradient-to-r from-emerald-50 to-green-50 hover:from-emerald-100 hover:to-green-100 px-4 py-2 rounded-2xl border border-emerald-200 transition-all duration-300 hover:shadow-lg">
                            <div class="w-10 h-10 bg-gradient-to-br from-emerald-500 to-green-600 rounded-full flex items-center justify-center shadow-lg">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <div class="text-left hidden sm:block">
                                <p class="text-sm font-semibold text-gray-900">{{ Auth::user()->name ?? 'Admin' }}</p>
                                <p class="text-xs text-gray-600">Administrator</p>
                            </div>
                            <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="dropdown-content">
                            <a href="{{ route('profile.edit') }}" class="group">
                                <svg class="w-4 h-4 mr-3 text-emerald-600 group-hover:text-emerald-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                <div>
                                    <p class="font-semibold">Profil Saya</p>
                                    <p class="text-xs text-gray-500">Edit informasi akun</p>
                                </div>
                            </a>
                            <a href="{{ route('destinations.index') }}" class="group">
                                <svg class="w-4 h-4 mr-3 text-green-600 group-hover:text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                </svg>
                                <div>
                                    <p class="font-semibold">Kelola Destinasi</p>
                                    <p class="text-xs text-gray-500">Manage semua destinasi</p>
                                </div>
                            </a>
                            <div class="border-t border-gray-200 my-1"></div>
                            <form method="POST" action="{{ route('logout') }}" class="block">
                                @csrf
                                <button type="submit" class="w-full text-left group hover:bg-red-50 transition-colors">
                                    <svg class="w-4 h-4 mr-3 text-red-600 group-hover:text-red-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                    </svg>
                                    <div>
                                        <p class="font-semibold text-red-600 group-hover:text-red-700">Keluar</p>
                                        <p class="text-xs text-red-500">Logout dari sistem</p>
                                    </div>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <!-- Enhanced Welcome Card -->
            <div class="bg-gradient-to-br from-emerald-600 via-green-600 to-teal-700 overflow-hidden shadow-2xl sm:rounded-2xl mb-8 relative hover-lift">
                <div class="absolute inset-0 bg-black opacity-10"></div>
                <div class="absolute top-0 right-0 w-32 h-32 bg-green-400 rounded-full opacity-20 -mr-16 -mt-16"></div>
                <div class="absolute bottom-0 left-0 w-20 h-20 bg-teal-400 rounded-full opacity-20 -ml-10 -mb-10"></div>
                <div class="relative p-8 text-white">
                    <div class="flex items-start justify-between">
                        <div>
                            <h3 class="text-3xl font-bold mb-3 flex items-center greeting-text">
                                Selamat Datang, {{ Auth::user()->name ?? 'Admin' }}! 
                                <span class="ml-2 text-yellow-300 text-2xl">👋</span>
                            </h3>
                            <p class="text-green-100 text-lg leading-relaxed mb-4">
                                Kelola destinasi petualangan dan jelajahi keindahan Indonesia bersama 
                                <span class="font-bold text-yellow-300 bg-green-800 px-2 py-1 rounded">PETUALANGID</span>. 
                                Mari wujudkan pengalaman wisata yang tak terlupakan! 
                            </p>
                            <div class="flex items-center space-x-4 text-green-200">
                                <span class="flex items-center">
                                    <span class="w-2 h-2 bg-green-300 rounded-full mr-2 animate-pulse"></span>
                                    Status: Online
                                </span>
                                <span class="flex items-center">
                                    <span class="w-2 h-2 bg-yellow-300 rounded-full mr-2"></span>
                                    Level: Administrator
                                </span>
                            </div>
                        </div>
                        <div class="text-6xl opacity-50">🌟</div>
                    </div>
                </div>
            </div>

            <!-- Enhanced Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <!-- Total Destinasi -->
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-2xl border-l-4 border-emerald-500 card-hover">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <div class="w-14 h-14 bg-gradient-to-br from-emerald-100 to-green-200 rounded-2xl flex items-center justify-center shadow-lg">
                                    <svg class="w-8 h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-5 flex-1">
                                <p class="text-sm font-medium text-gray-600">Total Destinasi</p>
                                <p class="text-3xl font-bold text-gray-900">{{ $totalDestinations ?? 0 }}</p>
                                <div class="flex items-center mt-1">
                                    <span class="text-sm text-emerald-600 font-semibold bg-emerald-100 px-2 py-1 rounded-full">
                                        ↗ +{{ $newDestinationsThisMonth ?? 0 }} bulan ini
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Status Admin -->
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-2xl border-l-4 border-green-600 card-hover">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <div class="w-14 h-14 bg-gradient-to-br from-green-100 to-emerald-200 rounded-2xl flex items-center justify-center shadow-lg">
                                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.031 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-5 flex-1">
                                <p class="text-sm font-medium text-gray-600">Status Akun</p>
                                <p class="text-3xl font-bold text-gray-900">Admin</p>
                                <div class="flex items-center mt-1">
                                    <span class="flex items-center text-sm text-green-600 font-semibold bg-green-100 px-2 py-1 rounded-full">
                                        <span class="w-2 h-2 bg-green-400 rounded-full mr-2 animate-pulse"></span>
                                        Aktif & Terverifikasi
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bergabung -->
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-2xl border-l-4 border-teal-500 card-hover">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <div class="w-14 h-14 bg-gradient-to-br from-teal-100 to-green-200 rounded-2xl flex items-center justify-center shadow-lg">
                                    <svg class="w-8 h-8 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-5 flex-1">
                                <p class="text-sm font-medium text-gray-600">Bergabung Sejak</p>
                                <p class="text-2xl font-bold text-gray-900">{{ Auth::user()->created_at ? Auth::user()->created_at->format('M Y') : 'Jan 2024' }}</p>
                                <div class="flex items-center mt-1">
                                    <span class="text-sm text-teal-600 font-semibold bg-teal-100 px-2 py-1 rounded-full">
                                        🎉 {{ Auth::user()->created_at ? Auth::user()->created_at->diffForHumans() : '5 bulan yang lalu' }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Aktivitas -->
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-2xl border-l-4 border-green-500 card-hover">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <div class="w-14 h-14 bg-gradient-to-br from-green-100 to-teal-200 rounded-2xl flex items-center justify-center shadow-lg">
                                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-5 flex-1">
                                <p class="text-sm font-medium text-gray-600">Aktivitas Hari Ini</p>
                                <p class="text-3xl font-bold text-gray-900">{{ $todayActivities ?? 0 }}</p>
                                <div class="flex items-center mt-1">
                                    <span class="text-sm text-green-600 font-semibold bg-green-100 px-2 py-1 rounded-full">
                                        ⚡ Terakhir: {{ $lastActivity ?? '5 menit lalu' }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Enhanced Quick Actions -->
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-2xl mb-8 hover-lift">
                <div class="p-8">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-gradient-to-br from-emerald-500 to-green-600 rounded-2xl flex items-center justify-center mr-4">
                            <span class="text-2xl">⚡</span>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900">Aksi Cepat</h3>
                            <p class="text-gray-600">Kelola semua fitur dengan mudah</p>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        
                        <!-- Kelola Destinasi -->
                        <a href="{{ route('destinations.index') }}" class="group relative overflow-hidden bg-gradient-to-br from-emerald-50 to-green-100 p-6 rounded-2xl hover:from-emerald-100 hover:to-green-200 transition-all duration-300 hover:shadow-xl transform hover:-translate-y-2 cursor-pointer">
                            <div class="absolute top-0 right-0 w-20 h-20 bg-emerald-200 rounded-full opacity-20 -mr-10 -mt-10 group-hover:scale-110 transition-transform"></div>
                            <div class="relative">
                                <div class="w-16 h-16 bg-gradient-to-br from-emerald-500 to-green-600 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform shadow-lg">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                    </svg>
                                </div>
                                <h4 class="text-lg font-bold text-gray-900 mb-2">Kelola Destinasi</h4>
                                <p class="text-sm text-gray-600 mb-3">Lihat, edit, dan hapus semua destinasi wisata</p>
                                <div class="flex items-center text-emerald-600 font-semibold text-sm">
                                    Buka Panel
                                    <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </div>
                            </div>
                        </a>

                        <!-- Tambah Destinasi -->
                        <a href="{{ route('destinations.create') }}" class="group relative overflow-hidden bg-gradient-to-br from-green-50 to-teal-100 p-6 rounded-2xl hover:from-green-100 hover:to-teal-200 transition-all duration-300 hover:shadow-xl transform hover:-translate-y-2 cursor-pointer">
                            <div class="absolute top-0 right-0 w-20 h-20 bg-green-200 rounded-full opacity-20 -mr-10 -mt-10 group-hover:scale-110 transition-transform"></div>
                            <div class="relative">
                                <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-teal-600 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform shadow-lg">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                    </svg>
                                </div>
                                <h4 class="text-lg font-bold text-gray-900 mb-2">Tambah Destinasi</h4>
                                <p class="text-sm text-gray-600 mb-3">Buat destinasi wisata baru dengan mudah</p>
                                <div class="flex items-center text-green-600 font-semibold text-sm">
                                    Buat Baru
                                    <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </div>
                            </div>
                        </a>

                        <!-- Profil Saya -->
                        <a href="{{ route('profile.edit') }}" class="group relative overflow-hidden bg-gradient-to-br from-teal-50 to-emerald-100 p-6 rounded-2xl hover:from-teal-100 hover:to-emerald-200 transition-all duration-300 hover:shadow-xl transform hover:-translate-y-2 cursor-pointer">
                            <div class="absolute top-0 right-0 w-20 h-20 bg-teal-200 rounded-full opacity-20 -mr-10 -mt-10 group-hover:scale-110 transition-transform"></div>
                            <div class="relative">
                                <div class="w-16 h-16 bg-gradient-to-br from-teal-500 to-emerald-600 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform shadow-lg">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                </div>
                                <h4 class="text-lg font-bold text-gray-900 mb-2">Profil Saya</h4>
                                <p class="text-sm text-gray-600 mb-3">Edit informasi dan pengaturan akun</p>
                                <div class="flex items-center text-teal-600 font-semibold text-sm">
                                    Edit Profil
                                    <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </div>
                            </div>
                        </a>

                        <!-- Lihat Website -->
                        <a href="{{ route('home') }}" target="_blank" class="group relative overflow-hidden bg-gradient-to-br from-green-50 to-emerald-100 p-6 rounded-2xl hover:from-green-100 hover:to-emerald-200 transition-all duration-300 hover:shadow-xl transform hover:-translate-y-2 cursor-pointer">
                            <div class="absolute top-0 right-0 w-20 h-20 bg-green-200 rounded-full opacity-20 -mr-10 -mt-10 group-hover:scale-110 transition-transform"></div>
                            <div class="relative">
                                <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform shadow-lg">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m9-9v9"></path>
                                    </svg>
                                </div>
                                <h4 class="text-lg font-bold text-gray-900 mb-2">Lihat Website</h4>
                                <p class="text-sm text-gray-600 mb-3">Kunjungi halaman utama PETUALANGID</p>
                                <div class="flex items-center text-green-600 font-semibold text-sm">
                                    Buka Website
                                    <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-2M7 7h10v10M17 7l-10 10"></path>
                                    </svg>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
            </div>

            <!-- Enhanced Recent Activity -->
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-2xl mb-8 hover-lift">
                <div class="p-8">
                    <div class="flex items-center justify-between mb-6">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-2xl flex items-center justify-center mr-4">
                                <span class="text-2xl">📊</span>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900">Aktivitas Terbaru</h3>
                                <p class="text-gray-600">Pantau semua perubahan sistem</p>
                            </div>
                        </div>
                        <div class="text-sm text-gray-500 bg-gray-100 px-3 py-1 rounded-full">
                            Last updated: {{ now()->format('H:i') }}
                        </div>
                    </div>
                    
                    <div class="space-y-4">
                        <!-- Activity Item 1 -->
                        <div class="flex items-start space-x-4 p-4 bg-gradient-to-r from-green-50 to-emerald-50 rounded-xl border-l-4 border-green-500 hover:shadow-md transition-all duration-200">
                            <div class="w-10 h-10 bg-green-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="font-semibold text-gray-900">Destinasi baru ditambahkan</p>
                                <p class="text-sm text-gray-600">Gunung Bromo - Jawa Timur berhasil ditambahkan ke sistem</p>
                                <p class="text-xs text-gray-500 mt-2">2 jam yang lalu</p>
                            </div>
                            <div class="w-2 h-2 bg-green-400 rounded-full animate-pulse flex-shrink-0 mt-2"></div>
                        </div>

                        <!-- Activity Item 2 -->
                        <div class="flex items-start space-x-4 p-4 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl border-l-4 border-blue-500 hover:shadow-md transition-all duration-200">
                            <div class="w-10 h-10 bg-blue-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="font-semibold text-gray-900">Profil diperbarui</p>
                                <p class="text-sm text-gray-600">Informasi kontak dan foto profil berhasil diubah</p>
                                <p class="text-xs text-gray-500 mt-2">5 jam yang lalu</p>
                            </div>
                            <div class="w-2 h-2 bg-blue-400 rounded-full flex-shrink-0 mt-2"></div>
                        </div>

                        <!-- Activity Item 3 -->
                        <div class="flex items-start space-x-4 p-4 bg-gradient-to-r from-purple-50 to-pink-50 rounded-xl border-l-4 border-purple-500 hover:shadow-md transition-all duration-200">
                            <div class="w-10 h-10 bg-purple-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="font-semibold text-gray-900">Login berhasil</p>
                                <p class="text-sm text-gray-600">Admin berhasil masuk ke sistem dashboard</p>
                                <p class="text-xs text-gray-500 mt-2">1 hari yang lalu</p>
                            </div>
                            <div class="w-2 h-2 bg-purple-400 rounded-full flex-shrink-0 mt-2"></div>
                        </div>
                    </div>

                    <div class="mt-6 text-center">
                        <button class="bg-gradient-to-r from-gray-100 to-gray-200 hover:from-gray-200 hover:to-gray-300 text-gray-700 font-semibold py-3 px-6 rounded-xl transition-all duration-300 hover:shadow-lg">
                            Lihat Semua Aktivitas
                            <svg class="w-4 h-4 ml-2 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Enhanced System Status -->
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-2xl hover-lift">
                <div class="p-8">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center mr-4">
                            <span class="text-2xl">⚙️</span>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900">Status Sistem</h3>
                            <p class="text-gray-600">Pemantauan kesehatan sistem real-time</p>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <!-- Server Status -->
                        <div class="bg-gradient-to-br from-green-50 to-emerald-100 p-6 rounded-2xl border border-green-200">
                            <div class="flex items-center justify-between mb-4">
                                <h4 class="font-bold text-gray-900">Server</h4>
                                <div class="flex items-center">
                                    <div class="w-3 h-3 bg-green-400 rounded-full animate-pulse mr-2"></div>
                                    <span class="text-sm font-semibold text-green-600">Online</span>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <div class="flex justify-between text-sm">
                                    <span class="text-gray-600">CPU Usage</span>
                                    <span class="font-semibold text-gray-900">23%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-green-500 h-2 rounded-full w-1/4 transition-all duration-500"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Database Status -->
                        <div class="bg-gradient-to-br from-blue-50 to-indigo-100 p-6 rounded-2xl border border-blue-200">
                            <div class="flex items-center justify-between mb-4">
                                <h4 class="font-bold text-gray-900">Database</h4>
                                <div class="flex items-center">
                                    <div class="w-3 h-3 bg-blue-400 rounded-full animate-pulse mr-2"></div>
                                    <span class="text-sm font-semibold text-blue-600">Aktif</span>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <div class="flex justify-between text-sm">
                                    <span class="text-gray-600">Storage</span>
                                    <span class="font-semibold text-gray-900">67%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-blue-500 h-2 rounded-full w-2/3 transition-all duration-500"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Backup Status -->
                        <div class="bg-gradient-to-br from-purple-50 to-pink-100 p-6 rounded-2xl border border-purple-200">
                            <div class="flex items-center justify-between mb-4">
                                <h4 class="font-bold text-gray-900">Backup</h4>
                                <div class="flex items-center">
                                    <div class="w-3 h-3 bg-purple-400 rounded-full animate-pulse mr-2"></div>
                                    <span class="text-sm font-semibold text-purple-600">Terjadwal</span>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <div class="flex justify-between text-sm">
                                    <span class="text-gray-600">Last Backup</span>
                                    <span class="font-semibold text-gray-900">2h ago</span>
                                </div>
                                <div class="text-xs text-gray-500">
                                    Next: {{ now()->addHours(6)->format('H:i') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Enhanced Footer -->
    <footer class="bg-gradient-to-r from-emerald-800 via-green-700 to-teal-800 text-white py-12 mt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Brand Section -->
                <div class="text-center md:text-left">
                    <h3 class="text-2xl font-bold mb-4 flex items-center justify-center md:justify-start">
                        <span class="mr-2">🏔️</span>
                        PETUALANGID
                    </h3>
                    <p class="text-green-100 leading-relaxed">
                        Platform terpercaya untuk mengelola dan menjelajahi destinasi wisata petualangan terbaik di Indonesia.
                    </p>
                </div>

                <!-- Quick Links -->
                <div class="text-center">
                    <h4 class="text-lg font-semibold mb-4 text-green-200">Dashboard Admin</h4>
                    <div class="space-y-2">
                        <p class="text-green-100 text-sm">✨ Kelola dengan mudah</p>
                        <p class="text-green-100 text-sm">🚀 Performa optimal</p>
                        <p class="text-green-100 text-sm">🔒 Keamanan terjamin</p>
                    </div>
                </div>

                <!-- System Info -->
                <div class="text-center md:text-right">
                    <h4 class="text-lg font-semibold mb-4 text-green-200">Sistem</h4>
                    <div class="space-y-2 text-sm text-green-100">
                        <p>Version: 2.1.0</p>
                        <p>Build: {{ date('Y.m.d') }}</p>
                        <p class="flex items-center justify-center md:justify-end">
                            <span class="w-2 h-2 bg-green-400 rounded-full mr-2 animate-pulse"></span>
                            Status: Operational
                        </p>
                    </div>
                </div>
            </div>

            <div class="border-t border-green-600 mt-8 pt-8 text-center">
                <p class="text-green-200 text-sm">
                    © {{ date('Y') }} PETUALANGID. Dibuat dengan ❤️ untuk petualangan Indonesia.
                </p>
            </div>
        </div>
    </footer>

    <script>
        // Greeting based on time
        function updateGreeting() {
            const now = new Date();
            const hour = now.getHours();
            const greetingElement = document.querySelector('.greeting-text');
            
            if (greetingElement) {
                let greeting = '';
                let emoji = '';
                
                if (hour >= 5 && hour < 12) {
                    greeting = 'Selamat Pagi';
                    emoji = '🌅';
                } else if (hour >= 12 && hour < 15) {
                    greeting = 'Selamat Siang';
                    emoji = '☀️';
                } else if (hour >= 15 && hour < 18) {
                    greeting = 'Selamat Sore';
                    emoji = '🌤️';
                } else {
                    greeting = 'Selamat Malam';
                    emoji = '🌙';
                }
                
                const userName = greetingElement.textContent.split(',')[1] || ' Admin!';
                greetingElement.innerHTML = `${greeting},${userName} <span class="ml-2 text-yellow-300 text-2xl">${emoji}</span>`;
            }
        }

        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            updateGreeting();
            
            // Update time every minute
            setInterval(updateGreeting, 60000);
        });

        // Add smooth scroll behavior
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Add loading states for buttons
        document.querySelectorAll('a, button').forEach(element => {
            element.addEventListener('click', function() {
                if (!this.classList.contains('no-loading')) {
                    const originalText = this.innerHTML;
                    this.innerHTML = '<svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white inline" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>Loading...';
                    setTimeout(() => {
                        this.innerHTML = originalText;
                    }, 1500);
                }
            });
        });
    </script>
</body>
</html>