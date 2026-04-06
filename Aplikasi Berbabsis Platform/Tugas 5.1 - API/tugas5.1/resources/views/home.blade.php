<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white p-10">

    <div class="max-w-2xl pt-10">
        <h1 class="text-4xl font-semibold text-gray-800 mb-6">
            Selamat datang, {{ Auth::user()->name }}
        </h1>

        <a href="/logout" 
            class="inline-block bg-blue-600 text-white px-6 py-2 rounded-md text-lg font-medium hover:bg-blue-700 transition shadow-md">
            Logout
        </a>
    </div>

    <div class="mt-10 text-gray-600 italic">
        Jika tombol logout di-klik maka keluar dari autentikasi dan kembali ke halaman login
    </div>

</body>
</html>