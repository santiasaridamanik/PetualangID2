<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Kelola Destinasi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-gray-900">Kelola Destinasi</h1>
        </div>
    </header>

    <!-- Main Content -->
    <main class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Tombol Tambah -->
                    <div class="mb-4">
                        <a href="{{ route('destinations.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Tambah Destinasi Baru
                        </a>
                    </div>

                    <!-- Alert Success -->
                    @if(session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Tabel Destinasi -->
                    <div class="overflow-x-auto">
                        <table class="min-w-full table-auto">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="px-4 py-2 text-left">Nama</th>
                                    <th class="px-4 py-2 text-left">Kategori</th>
                                    <th class="px-4 py-2 text-left">Lokasi</th>
                                    <th class="px-4 py-2 text-left">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($destinations as $destination)
                                    <tr class="border-t">
                                        <td class="px-4 py-2">{{ $destination->name }}</td>
                                        <td class="px-4 py-2 capitalize">{{ $destination->category }}</td>
                                        <td class="px-4 py-2">{{ $destination->location }}</td>
                                        <td class="px-4 py-2 flex space-x-2">
                                            <a href="{{ route('destinations.show', $destination->id) }}" class="text-blue-600 hover:underline">Lihat</a>
                                            <a href="{{ route('destinations.edit', $destination->id) }}" class="text-green-600 hover:underline">Edit</a>
                                            <form action="{{ route('destinations.destroy', $destination->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus destinasi ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="px-4 py-2 text-center text-gray-500">Data destinasi tidak ditemukan.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Tombol Kembali -->
                    <div class="mt-6">
                        <a href="/dashboard" class="inline-block bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                            Kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
