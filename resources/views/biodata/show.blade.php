<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Biodata</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gradient-to-r from-blue-400 to-blue-600 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-lg">
        <h2 class="text-2xl font-bold text-center text-gray-700 mb-6">Biodata yang Dikirim</h2>

        <div class="overflow-hidden border border-gray-300 rounded-lg">
            <table class="w-full border-collapse">
                <tr class="bg-gray-200 text-gray-700">
                    <th class="p-3 text-left">Field</th>
                    <th class="p-3 text-left">Data</th>
                </tr>
                <tr class="border-b hover:bg-gray-100">
                    <td class="border-r p-3 font-semibold">NPM</td>
                    <td class="p-3">{{ $data['npm'] }}</td>
                </tr>
                <tr class="border-b hover:bg-gray-100">
                    <td class="border-r p-3 font-semibold">Nama</td>
                    <td class="p-3">{{ $data['nama'] }}</td>
                </tr>
                <tr class="border-b hover:bg-gray-100">
                    <td class="border-r p-3 font-semibold">Alamat</td>
                    <td class="p-3">{{ $data['alamat'] }}</td>
                </tr>
                <tr class="hover:bg-gray-100">
                    <td class="border-r p-3 font-semibold">Program Studi</td>
                    <td class="p-3">{{ $data['program_studi'] }}</td>
                </tr>
            </table>
        </div>

        <div class="text-center mt-6">
            <a href="{{ route('biodata.create') }}"
                class="bg-green-500 text-white px-6 py-3 rounded-lg shadow-md hover:bg-green-600 transition duration-300">
                Kembali
            </a>
        </div>
    </div>
</body>

</html>
