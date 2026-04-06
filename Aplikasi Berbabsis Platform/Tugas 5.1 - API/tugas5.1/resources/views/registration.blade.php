<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white p-10">

    <div class="max-w-xl">
        <h1 class="text-4xl font-semibold mb-10 text-gray-800">Registration</h1>

        <form action="/register" method="POST" class="space-y-6">
            @csrf
            
            <div class="flex items-center">
                <label class="w-24 text-xl text-gray-700">Email</label>
                <input type="email" name="email" required
                    class="w-80 p-2 border border-gray-300 rounded-md shadow-sm outline-none focus:border-blue-500">
            </div>

            <div class="flex items-center">
                <label class="w-24 text-xl text-gray-700">Nama</label>
                <input type="text" name="nama" required
                    class="w-80 p-2 border border-gray-300 rounded-md shadow-sm outline-none focus:border-blue-500">
            </div>

            <div class="flex items-center">
                <label class="w-24 text-xl text-gray-700">Password</label>
                <input type="password" name="password" required
                    class="w-80 p-2 border border-gray-300 rounded-md shadow-sm outline-none focus:border-blue-500">
            </div>

            <div class="flex items-center gap-10 mt-8">
                <button type="submit" 
                    class="bg-[#198754] text-white px-8 py-2 rounded-md text-lg hover:bg-green-800 transition">
                    Register
                </button>
                <a href="/login" class="text-blue-600 text-lg hover:underline decoration-1 underline-offset-4">
                    Sudah punya akun? Login
                </a>
            </div>

            @if(session('success'))
                <p class="text-gray-600 mt-4 italic font-medium">Registrasi berhasil</p>
            @endif
        </form>
    </div>

</body>
</html>