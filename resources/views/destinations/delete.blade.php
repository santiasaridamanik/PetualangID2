<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Konfirmasi Hapus Destinasi</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen flex flex-col justify-center items-center">

    <div class="bg-white p-8 rounded shadow-md max-w-md text-center">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">
            Konfirmasi Hapus Destinasi
        </h2>

        <p class="mb-6 text-gray-700">Apakah kamu yakin ingin menghapus destinasi berikut?</p>

        <div class="mb-6 text-left">
            <p><strong>Nama:</strong> {{ $destination->name }}</p>
            <p><strong>Kategori:</strong> {{ $destination->category }}</p>
            <p><strong>Lokasi:</strong> {{ $destination->location }}</p>
        </div>

        <form action="{{ route('destinations.destroy', $destination->id) }}" method="POST">
            @csrf
            @method('DELETE')

            <div class="flex justify-center space-x-4">
                <button type="submit" 
                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                    Ya, Hapus
                </button>

                <a href="{{ route('destinations.index') }}" 
                    class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Batal
                </a>
            </div>
        </form>
    </div>

</body>
</html>
