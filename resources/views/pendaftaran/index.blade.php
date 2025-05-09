<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Pendaftaran Event') }}
        </h2>
    </x-slot>

    <div class="py-12" x-data="{ success: {{ session('success') ? 'true' : 'false' }}, loading: false }">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    {{-- Pesan sukses --}}
                    <template x-if="success">
                        <div x-transition
                            class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                            {{ session('success') }}
                            <button @click="success = false" class="ml-2 text-sm text-green-800 underline">Tutup</button>
                        </div>
                    </template>

                    {{-- Pesan error --}}
                    @if ($errors->any())
                        <div x-data="{ show: true }" x-show="show" x-transition
                            class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                            <ul class="list-disc pl-5">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button @click="show = false" class="ml-2 text-sm text-red-800 underline">Tutup</button>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('pendaftaran.submit') }}" class="space-y-4"
                        @submit="loading = true">
                        @csrf

                        <div>
                            <label for="nama_lengkap" class="block font-medium">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" id="nama_lengkap"
                                value="{{ old('nama_lengkap') }}" required maxlength="100"
                                class="w-full border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-100 rounded px-3 py-2">
                        </div>

                        <div>
                            <label for="email" class="block font-medium">Email</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}" required
                                class="w-full border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-100 rounded px-3 py-2">
                        </div>

                        <div>
                            <label for="alasan" class="block font-medium">Alasan (opsional)</label>
                            <textarea name="alasan" id="alasan" maxlength="250"
                                class="w-full border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-100 rounded px-3 py-2">{{ old('alasan') }}</textarea>
                        </div>

                        <div>
                            <button type="submit"
                                class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 flex items-center">
                                <span x-show="!loading">Daftar</span>
                                <span x-show="loading" class="flex items-center">
                                    <svg class="animate-spin h-5 w-5 mr-2 text-white" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10"
                                            stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"></path>
                                    </svg>
                                    Loading...
                                </span>
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
