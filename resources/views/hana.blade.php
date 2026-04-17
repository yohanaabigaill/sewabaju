<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('styles/style_yohana.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1 class="text-red-500 text-3xl font-bold text-center">
        Ini Judul Tailwind
    </h1>

    <img src="{{ asset('images/gambar_yohana1.jpg') }}" alt="">
    <img src="{{ asset('images/gambar_yohana.jpg') }}" alt="">

    <div class="max-w-md mx-auto mt-10 bg-white p-6 rounded-lg shadow-lg text-center">
        <h2 class="text-xl font-bold mb-2">Produk</h2>
        <p class="text-gray-600 mb-4">Ini contoh card menggunakan Tailwind</p>
        <button class="bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded">
            Pesan Sekarang
        </button>
    </div>
</body>
</html>