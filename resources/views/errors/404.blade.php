<x-main>
    <div class="flex items-center justify-center min-h-screen bg-gray-900">
        <div class="p-6 overflow-hidden bg-gray-900 rounded">
            <div class="flex items-center justify-center">
                <img class="w-64 h-64 rounded-md" src="{{ asset('images/404.png') }}" alt="Broken robot">
            </div>
            <div class="px-6 py-4 text-center">
                <h1 class="mb-2 font-mono text-2xl font-bold text-white">Error 404</h1>
                <p class="font-mono text-white">
                    Halaman yang anda cari tidak ditemukan.
                </p>
                <div class="mt-10">
                    <a href="/"
                        class="px-4 py-2 font-bold text-white rounded-lg bg-bip-blue-500 hover:bg-bip-blue-600">
                        Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-main>
