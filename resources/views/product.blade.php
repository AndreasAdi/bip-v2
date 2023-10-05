<x-main>
    <x-navbar-solid />
    <main class="p-2 py-8 md:px-32">

        <div class="mt-5">
            <div class="relative w-full h-48 overflow-hidden rounded-lg shadow-xl md:h-80">
                <img alt="Company Profile" class="absolute inset-0 object-cover w-full h-full"
                    src="{{ asset('images/company-profile.jpg') }}">
                <div class="absolute inset-0 bg-gradient-to-tr from-bip-blue-500 to-bip-orange-500/90"></div>
                <div class="relative flex flex-col items-center justify-center h-full gap-2 p-2 text-center">
                    <div class="text-4xl font-bold text-white">{{ $category }}</div>
                    <div class="w-1/4 h-2 bg-white rounded-md"></div>
                </div>
            </div>
            <div class="flex w-full mt-5 ">
                <a href="{{ $pdf }}" download="{{ 'Katalog' . $category }}"
                    class="inline-flex px-6 py-3 ml-auto font-bold text-white rounded-full bg-gradient-to-tr from-bip-orange-400 to-bip-orange-500 hover:bg-gradient-to-brhover:from-bip-orange-400 hover:to-bip-orange-300">
                    <svg class="w-6 h-6 pr-2 text-white dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z" />
                        <path
                            d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z" />
                    </svg>
                    Download Katalog
                </a>
            </div>
            <div class="grid grid-cols-1 gap-10 mt-5 md:grid-cols-2 lg:grid-cols-4">
                @foreach ($subCategories as $item)
                    <div class="relative w-full overflow-hidden rounded-lg shadow-xl h-80 hover:shadow-2xl">
                        <img alt="about-us" class="absolute inset-0 object-cover w-full h-full"
                            src="{{ asset('storage/' . $item->image) }}">
                        <div class="absolute inset-0 bg-gray-800 bg-opacity-70 "></div>
                        <div class="relative p-4 ">
                            <div class="flex items-center justify-center h-80">
                                <div class="flex flex-col items-center justify-center space-y-2">
                                    <div class="text-xl font-bold text-center text-white">{{ $item->name }}</div>
                                    <div class="w-1/3 h-2 bg-white rounded-md"></div>
                                    <div class="flex">
                                        <a href="{{ '/' . $code . '/list/' . $item->id }}"
                                            class="px-2 py-2 mt-4 text-white border-2 border-white rounded-lg cursor-pointer hover:bg-gradient-to-tr from-bip-orange-400 to-bip-orange-500">
                                            Lihat Produk</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
    <x-footer />
</x-main>
