<x-main>
    <x-navbar-solid />
    <main class="p-2 py-8 md:px-32">
        <div class="mt-5">
            <div class="relative w-full h-48 overflow-hidden rounded-lg shadow-xl md:h-80">
                <img alt="Company Profile" class="absolute inset-0 object-cover w-full h-full"
                    src="/images/company-profile.jpg">
                <div class="absolute inset-0 bg-gradient-to-tr from-bip-blue-500 to-bip-orange-500/90"></div>
                <div class="relative flex flex-col items-center justify-center h-full gap-2 p-2 text-center">
                    <div class="text-4xl font-bold text-white">{{ $subCategoryName }}</div>
                    <div class="w-1/4 h-2 bg-white rounded-md"></div>
                </div>
            </div>


            <div class="grid grid-cols-1 gap-10 mt-5 md:grid-cols-2 lg:grid-cols-4">

                @foreach ($data as $item)
                    <div class="overflow-hidden bg-white border rounded-lg shadow-lg">
                        <img class="object-scale-down object-center w-full h-56 p-10"
                            src="{{ '/storage/' . $item->image[0] }}" alt="Product Image">
                        <div class="md:px-4 md:py-4">
                            <h2 class="text-lg font-semibold text-gray-800 line-clamp-1">{{ $item->name }}</h2>
                            <div class="flex items-center justify-between w-full mt-4 text-center">
                                <a href="/product/{{ $item->id }}"
                                    class="w-full px-2 py-2 mt-4 text-white rounded-lg cursor-pointer bg-gradient-to-tr from-bip-orange-500 to-bip-orange-400 hover:bg-gradient-to-brhover:from-bip-orange-400 hover:to-bip-orange-300 ">
                                    Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
        {{--        <div class="flex justify-center my-5"> --}}
        {{--            {{ $data->links() }} --}}
        {{--        </div> --}}

    </main>

    <x-footer />




</x-main>
