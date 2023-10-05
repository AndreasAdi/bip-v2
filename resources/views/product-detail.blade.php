<x-main>
    <x-navbar-solid />
    <main class="py-8 ">
        <div class="container p-4 mx-auto">
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 md:gap-12 lg:px-12">
                <div>
                    <!-- Image Slider -->
                    <div class="swiper mySwiper2">
                        <div class="swiper-wrapper">
                            @foreach ($data->image as $item)
                                <div class="swiper-slide">
                                    <div class="overflow-hidden border rounded-lg shadow-md">
                                        <img class="object-contain w-full h-[400px] md:h-[500px] lg:h-[600px]"
                                            src="{{ asset('storage/' . $item) }}" alt="Product Image">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>

                    <!-- Thumbnail Slider -->
                    <div class="mt-4 swiper mySwiper">
                        <div class="swiper-wrapper">
                            @foreach ($data->image as $item2)
                                <div class="scale-50 swiper-slide">
                                    <div class="flex justify-center overflow-hidden bg-white border border-stone-400">
                                        <img class="object-scale-down p-2" src="{{ asset('storage/' . $item2) }}" />
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div>
                    <h1 class="text-3xl font-semibold">{{ $data->name }}</h1>
                    <div class="mt-3 mb-5">
                        {{-- <!-- Product Tags -->
                        <div class="mt-2 mb-4 space-x-2">
                            <span
                                class="bg-bip-blue-100 text-bip-blue-800 text-sm font-medium px-2.5 py-0.5 rounded">#{{ $data->getCategory->name }}</span>
                            @foreach ($data->getListSubCategoryNames() as $sub)
                                <span
                                    class="bg-green-100 text-green-800 text-sm font-medium px-2.5 py-0.5 rounded">#{{ $sub }}</span>
                            @endforeach
                        </div> --}}
                        <!-- YouTube Video -->
                        <div class="mt-5 md:h-96">
                            <div style="padding-bottom: 56.25%; position: relative;">
                                <iframe width="100%" height="100%" src="{{ $data->convertYoutube($data->youtube) }}"
                                    referrerpolicy="no-referrer-when-downgrade"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture; fullscreen"
                                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe>
                            </div>
                        </div>
                        <!-- Purchase Button -->
                        <a href="https://wa.me/6285399999538?text={{ $data->name }}"
                            class="block w-full px-4 py-2 mt-5 text-center text-white rounded-lg md:w-auto bg-gradient-to-tr from-bip-orange-400 to-bip-orange-500 hover:bg-gradient-to-brhover:from-bip-orange-400 hover:to-bip-orange-300">
                            Pesan Sekarang
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product Description -->
            <div class="flex flex-col md:px-12">
                <div>
                    <h2 class="px-4 mt-5 mb-10 text-2xl font-semibold text-center">Deskripsi Produk</h2>
                </div>
                <div class="px-4 mx-auto md:columns-2 gap-x-10">
                    <div class="mt-4 prose">
                        {!! $data->description !!}
                    </div>
                </div>
            </div>

            <!-- Similar Products -->
            <div class="px-4 mt-5 mb-10 md:px-12">
                <h2 class="text-xl font-semibold">Produk Serupa</h2>
                <div class="grid grid-cols-1 gap-6 mt-4 md:grid-cols-4 lg:grid-cols-5">
                    @foreach ($similarProduct as $item)
                        <div class="overflow-hidden bg-white border rounded-lg shadow-lg">
                            <img class="object-scale-down object-center w-full h-56 p-5 md:p-10"
                                src="{{ asset('storage/' . $item->image[0]) }}" alt="Product Image">
                            <div class="px-4 py-4">
                                <h2 class="font-semibold text-gray-800 text-md line-clamp-1">{{ $item->name }}</h2>
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
        </div>
    </main>
    <x-footer />

    <script>
        window.addEventListener("load", () => {
            var swiper = new Swiper(".mySwiper", {
                loop: true,
                spaceBetween: 10,
                slidesPerView: 4,
                freeMode: true,
                watchSlidesProgress: true,
            });
            var swiper2 = new Swiper(".mySwiper2", {
                loop: true,
                spaceBetween: 10,
                zoom: true,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                thumbs: {
                    swiper: swiper,
                },
            });
        });
    </script>
</x-main>
