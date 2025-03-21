<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Biodata</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gradient-to-r from-blue-400 to-blue-600 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-lg">
        <h2 class="text-2xl font-bold text-center text-gray-700 mb-6">Form Biodata</h2>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-sm">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('biodata.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="block text-gray-600 font-semibold mb-1">NPM</label>
                <input type="text" name="npm"
                    class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    placeholder="Masukkan NPM">
            </div>

            <div>
                <label class="block text-gray-600 font-semibold mb-1">Nama</label>
                <input type="text" name="nama"
                    class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    placeholder="Masukkan Nama Lengkap">
            </div>

            <div>
                <label class="block text-gray-600 font-semibold mb-1">Alamat</label>
                <textarea name="alamat"
                    class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    rows="3" placeholder="Masukkan Alamat"></textarea>
            </div>

            <div>
                <label class="block text-gray-600 font-semibold mb-1">Program Studi</label>
                <input type="text" name="program_studi"
                    class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    placeholder="Masukkan Program Studi">
            </div>

            <button type="submit"
                class="w-full bg-blue-500 text-white font-semibold py-3 rounded-lg hover:bg-blue-600 transition duration-300">Kirim</button>
        </form>
    </div>
</body>

</html>
