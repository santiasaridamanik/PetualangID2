<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Detail Destinasi</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

    <header class="bg-white shadow p-4">
        <h2 class="text-xl font-semibold text-gray-800">
            Detail Destinasi
        </h2>
    </header>

    <main class="flex-grow py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <!-- Gambar Destinasi -->
                    <div class="mb-6">
                        <img src="{{ $destination->image_url }}" alt="{{ $destination->name }}" 
                             class="w-full h-64 object-cover rounded-lg shadow-md">
                    </div>

                    <!-- Nama Destinasi -->
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Nama Destinasi</label>
                        <div class="bg-gray-50 border rounded w-full py-2 px-3 text-gray-700">
                            {{ $destination->name }}
                        </div>
                    </div>

                    <!-- Kategori -->
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Kategori</label>
                        <div class="bg-gray-50 border rounded w-full py-2 px-3 text-gray-700">
                            <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full font-semibold uppercase tracking-wide">
                                {{ ucwords($destination->category) }}
                            </span>
                        </div>
                    </div>

                    <!-- Lokasi -->
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Lokasi</label>
                        <div class="bg-gray-50 border rounded w-full py-2 px-3 text-gray-700">
                            {{ $destination->location }}
                        </div>
                    </div>

                    <!-- Deskripsi -->
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Deskripsi</label>
                        <div class="bg-gray-50 border rounded w-full py-2 px-3 text-gray-700 leading-relaxed">
                            {{ $destination->description }}
                        </div>
                    </div>

                    <!-- Informasi Tambahan -->
                    <div class="mb-6 border-t pt-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm text-gray-600">
                            <div>
                                <span class="font-semibold">Dibuat pada:</span> 
                                {{ $destination->created_at->format('d F Y, H:i') }}
                            </div>
                            <div>
                                <span class="font-semibold">Terakhir diperbarui:</span> 
                                {{ $destination->updated_at->format('d F Y, H:i') }}
                            </div>
                        </div>
                    </div>

                    <!-- Tombol Aksi -->
                    <div class="flex items-center justify-between">
                        <div class="flex space-x-2">
                            <a href="{{ route('destinations.edit', $destination->id) }}" 
                                class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Edit
                            </a>
                            <form action="{{ route('destinations.destroy', $destination->id) }}" method="POST" 
                                  onsubmit="return confirm('Apakah Anda yakin ingin menghapus destinasi ini?')" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                    Hapus
                                </button>
                            </form>
                        </div>
                        <a href="{{ route('destinations.index') }}" 
                            class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>
</html>