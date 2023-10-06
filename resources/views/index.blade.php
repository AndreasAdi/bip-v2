<x-main>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <x-navbar>

    </x-navbar>

    <style>
        .mask {
            overflow: hidden;
            -webkit-mask: linear-gradient(90deg,
                    transparent,
                    white 20%,
                    white 80%,
                    transparent);
            mask: linear-gradient(90deg, transparent, white 20%, white 80%, transparent);
        }
    </style>


    <!--LOADER-->
    <div class="fixed top-0 bottom-0 left-0 right-0 z-50 h-screen text-3xl text-black align-middle transition-opacity duration-700 ease-in-out bg-bip-blue-950"
        id="loading">
        <div class="flex flex-col items-center justify-center w-full h-full">
            <div class="flex justify-center">
                <img src="{{ asset('images/logobip.webp') }}" alt="" class="mb-3 w-36">
            </div>
            <div class="flex items-center justify-center">
                <svg aria-hidden="true"
                    class="w-8 h-8 mr-2 text-gray-200 animate-spin fill-bip-orange-600 dark:text-gray-600"
                    viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                        fill="currentColor" stroke="currentColor" stroke-width="2" />
                    <path
                        d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                        fill="currentFill" stroke="currentFill" stroke-width="2" />
                </svg>

            </div>
        </div>
    </div>
    <!--END LOADER-->

    <!--SLIDER-->
    <div style="--swiper-navigation-color: #fe4711; --swiper-pagination-color: #fff;"
        class="h-[70vh] swiper mySwiper md:h-screen">
        <div class="swiper-wrapper">
            @foreach ($slides as $item)
                <div class="swiper-slide">
                    <div class="h-full duration-700 ease-in-out" data-carousel-item>

                        <div class="relative flex flex-row items-center justify-center h-full px-12 lg:px-32">
                            <div class="absolute top-0 bottom-0 left-0 right-0 z-20 p-0 m-0 opacity-70 bg-bip-blue-950">
                            </div>

                            <img src="{{ asset('storage/' . $item->bg_image) }}" alt=""
                                class="absolute top-0 bottom-0 left-0 right-0 object-cover w-full h-full blur-sm">
                            <div class="relative items-center gap-6 md:flex lg:grid lg:grid-cols-2">
                                <div class="z-30">
                                    <h1
                                        class="w-full mt-32 text-xl font-bold text-center text-white uppercase drop-shadow-xl md:mt-16 lg:mt-5 lg:text-left lg:text-5xl">
                                        {{ $item->title }}</h1>
                                    <div class="hidden mt-5 md:flex">
                                        <p class="text-base text-white">
                                            {{ $item->description }}
                                        </p>
                                    </div>
                                </div>
                                <div class="z-30">
                                    <img alt="carousel-1"
                                        class="mt-5 mb-32 h-fit w-full align-middle md:w-[40rem] md:mb-8 lg:mt-0"
                                        src="{{ asset('storage/' . $item->image) }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
    <!--END SLIDER-->

    <!--SECTION 1-->
    <div class="grid grid-cols-1 gap-6 px-5 py-10 bg-white md:grid-cols-2 md:gap-12 lg:p-32" id="section1">
        <div data-aos="fade-up-right">
            <div class="text-xl font-bold uppercase text-bip-blue-900">Tentang Bismacindo</div>
            <div class="mt-3 text-3xl font-extrabold text-black capitalize">20 Tahun Pengalaman Dalam Bidang Banking
                Equipment
            </div>
            <div class="w-1/6 h-2 mt-2 mb-5 rounded-md bg-gradient-to-tr from-bip-blue-800 to-bip-blue-900">
            </div>
            <p class="text-justify">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem dolorum a, molestias maiores quam
                ipsum in
                eaque quia explicabo ex, esse ab, mollitia dolores magni fugit commodi voluptate ducimus tempora
                adipisci
                labore nesciunt porro laboriosam. Adipisci soluta necessitatibus suscipit fuga distinctio dolorem vel
                possimus, ratione delectus. Minus repudiandae repellat hic?
            </p>
        </div>

        <div data-aos="fade-up">
            <img loading="lazy" src="{{ asset('images/section2.jpeg') }}" alt=""
                class="bg-cover rounded-lg shadow-lg">
        </div>
    </div>
    <!--END SECTION 1-->

    <!--SECTION 2-->
    <div class="px-5 py-20 bg-bip-blue-950 lg:px-32" id="section2">
        <div data-aos="fade-up">
            <div class="flex flex-col items-center justify-center mb-10 space-y-2">
                <div class="text-xl font-bold uppercase text-bip-orange-400">Produk & Layanan Kami</div>
                <div class="w-full text-3xl font-bold text-center text-white capitalize">Kami siap untuk memenuhi
                    kebutuhan anda
                </div>
                <div class="w-1/5 h-2 rounded-lg bg-gradient-to-tr from-bip-orange-400 to-bip-orange-600"></div>
            </div>

            <div class="flex flex-wrap justify-center gap-4">
                <div
                    class="relative max-w-xs overflow-hidden bg-white rounded-lg shadow-lg group dark:border-gray-700 dark:bg-gray-800">

                    <img class="rounded-lg" src="{{ asset('images/banking.webp') }}" alt="" />

                    <a href="/banking" wire:navigate
                        class="absolute inset-0 z-10 transition-opacity duration-300 bg-black opacity-70 from-bip-blue-500 to-bip-orange-500 hover:bg-gradient-to-tr hover:opacity-90">
                        <div class="flex items-center justify-center h-full">
                            <h5 class="text-2xl font-bold text-white">Banking Equipment</h5>
                        </div>
                    </a>
                </div>
                <div
                    class="relative max-w-xs overflow-hidden bg-white rounded-lg shadow-lg group dark:border-gray-700 dark:bg-gray-800">

                    <img class="rounded-lg" src="{{ asset('images/it.webp') }}" alt="" loading="lazy" />

                    <a href="/it" wire:navigate
                        class="absolute inset-0 z-10 transition-opacity duration-300 bg-black opacity-70 from-bip-blue-500 to-bip-orange-500 hover:bg-gradient-to-tr hover:opacity-90">
                        <div class="flex items-center justify-center h-full">
                            <h5 class="text-2xl font-bold text-white">IT Product</h5>
                        </div>
                    </a>
                </div>
                <div
                    class="relative max-w-xs overflow-hidden bg-white rounded-lg shadow-lg group dark:border-gray-700 dark:bg-gray-800">

                    <img class="rounded-lg" src="{{ asset('images/office.webp') }}" alt="" loading="lazy" />

                    <a href="/office" wire:navigate
                        class="absolute inset-0 z-10 transition-opacity duration-300 bg-black opacity-70 from-bip-blue-500 to-bip-orange-500 hover:bg-gradient-to-tr hover:opacity-90">
                        <div class="flex items-center justify-center h-full">
                            <h5 class="text-2xl font-bold text-white">Office</h5>
                        </div>
                    </a>
                </div>
                <div
                    class="relative max-w-xs overflow-hidden bg-white rounded-lg shadow-lg group dark:border-gray-700 dark:bg-gray-800">

                    <img class="rounded-lg" src="{{ asset('images/machine.webp') }}" alt="" loading="lazy" />

                    <a href="/machine" wire:navigate
                        class="absolute inset-0 z-10 transition-opacity duration-300 bg-black opacity-70 from-bip-blue-500 to-bip-orange-500 hover:bg-gradient-to-tr hover:opacity-90">
                        <div class="flex items-center justify-center h-full">
                            <h5 class="text-2xl font-bold text-white">Machine Tool</h5>
                        </div>
                    </a>
                </div>
                <div
                    class="relative max-w-xs overflow-hidden bg-white rounded-lg shadow-lg group dark:border-gray-700 dark:bg-gray-800">

                    <img class="rounded-lg" src="{{ asset('images/certification.webp') }}" alt=""
                        loading="lazy" />

                    <a href="/certification" wire:navigate
                        class="absolute inset-0 z-10 transition-opacity duration-300 bg-black opacity-70 from-bip-blue-500 to-bip-orange-500 hover:bg-gradient-to-tr hover:opacity-90">
                        <div class="flex items-center justify-center h-full">
                            <h5 class="text-2xl font-bold text-white">Certification</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--END SECTION 2-->

    <!--SECTION 3-->
    <div class="flex flex-col items-center justify-center px-5 py-20" id="section3">
        <div data-aos="fade-up">
            <div class="flex flex-col items-center justify-center mb-10 space-y-2">
                <div class="text-xl font-bold uppercase text-bip-blue-950">Client Kami</div>
                <div class="w-full text-3xl font-bold text-center capitalize">Kami bekerja dengan perusahaan yang luar
                    biasa
                </div>
                <div class="w-1/5 h-2 rounded-lg bg-bip-blue-950"></div>
            </div>
        </div>
        <div class="flex flex-wrap items-center justify-center max-w-6xl gap-5 place-content-center place-items-center"
            data-aos="fade-up">
            <img class="object-scale-down w-32 h-16 p-3 border shadow-md md:p-5 md:h-24"
                src="{{ asset('images/logo/bri.webp') }}" alt="bri">
            <img class="object-scale-down w-32 h-16 p-3 border shadow-md md:p-5 md:h-24 "
                src="{{ asset('images/logo/btn2.webp') }}" alt="btn">
            <img class="object-scale-down w-32 h-16 p-3 border shadow-md md:p-5 md:h-24 "
                src="{{ asset('images/logo/bni.webp') }}" alt="bri">
            <img class="object-scale-down w-32 h-16 p-3 border shadow-md md:p-5 md:h-24 "
                src="{{ asset('images/logo/mega.webp') }}" alt="mega">
            <img class="object-scale-down w-32 h-16 p-3 border shadow-md md:p-5 md:h-24 "
                src="{{ asset('images/logo/permata.webp') }}" alt="bri">
            <img class="object-scale-down w-32 h-16 p-3 border shadow-md md:p-5 md:h-24 "
                src="{{ asset('images/logo/uob.webp') }}" alt="uob">
            <img class="object-scale-down w-32 h-16 p-3 border shadow-md md:p-5 md:h-24 "
                src="{{ asset('images/logo/qnb.webp') }}" alt="qnb">
            <img class="object-scale-down w-32 h-16 p-3 border shadow-md md:p-5 md:h-24 "
                src="{{ asset('images/logo/bca.webp') }}" alt="bca">
            <img class="object-scale-down w-32 h-16 p-3 border shadow-md md:p-5 md:h-24 "
                src="{{ asset('images/logo/bankdki.webp') }}" alt="bank dki">
            <img class="object-scale-down w-32 h-16 p-3 border shadow-md md:p-5 md:h-24"
                src="{{ asset('images/logo/kominfo.webp') }}" alt="kominfo">
            <img class="object-scale-down w-32 h-16 p-3 border shadow-md md:p-5 md:h-24 "
                src="{{ asset('images/logo/trans7.webp') }}" alt="trans7">
            <img class="object-scale-down w-32 h-16 p-3 border shadow-md md:p-5 md:h-24 "
                src="{{ asset('images/logo/transtv.webp') }}" alt="transtv">
            <img class="object-scale-down w-32 h-16 p-3 border shadow-md md:p-5 md:h-24 "
                src="{{ asset('images/logo/telkom.webp') }}" alt="telkom">
            <img class="object-scale-down w-32 h-16 p-3 border shadow-md md:p-5 md:h-24 "
                src="{{ asset('images/logo/kpu.webp') }}" alt=" kpu">
            <img class="object-scale-down w-32 h-16 p-3 border shadow-md md:p-5 md:h-24 "
                src="{{ asset('images/logo/bankbengkulu.png') }}" alt=" bank bengkulu">
            <img class="object-scale-down w-32 h-16 p-3 border shadow-md md:p-5 md:h-24 "
                src="{{ asset('images/logo/bankbanten.png') }}" alt=" bank banten">
            <img class="object-scale-down w-32 h-16 p-3 border shadow-md md:p-5 md:h-24 "
                src="{{ asset('images/logo/bankjateng.png') }}" alt=" bank jateng">
            <img class="object-scale-down w-32 h-16 p-3 border shadow-md md:p-5 md:h-24 "
                src="{{ asset('images/logo/ecatalogue.png') }}" alt="ecatalogue">
            <img class="object-scale-down w-32 h-16 p-3 border shadow-md md:p-5 md:h-24 "
                src="{{ asset('images/logo/brin.png') }}" alt="brin">
            <img class="object-scale-down w-32 h-16 p-3 border shadow-md md:p-5 md:h-24 "
                src="{{ asset('images/logo/bi.png') }}" alt="bi">
            <img class="object-scale-down w-32 h-16 p-3 border shadow-md md:p-5 md:h-24 "
                src="{{ asset('images/logo/polri.png') }}" alt="polri">
            <img class="object-scale-down w-32 h-16 p-3 border shadow-md md:p-5 md:h-24 "
                src="{{ asset('images/logo/bssn.png') }}" alt="bssn">
            <img class="object-scale-down w-32 h-16 p-3 border shadow-md md:p-5 md:h-24 "
                src="{{ asset('images/logo/pins.png') }}" alt="pins">
        </div>
    </div>
    <!--END SECTION 3-->

    <!--SECTION 4-->
    <div class="grid grid-cols-1 gap-6 px-5 py-10 bg-bip-blue-950 md:grid-cols-2 md:gap-12 lg:p-32" id="section4">
        <div data-aos="fade-up-right">
            <div class="mb-10 space-y-2">
                <div class="text-xl font-bold uppercase text-bip-orange-400">Hubungi Kami</div>
                <div class="w-full text-3xl font-bold text-white capitalize">Mari Bekerja Sama Dengan Kami
                </div>
                <div class="w-1/5 h-2 rounded-lg bg-gradient-to-tr from-bip-orange-400 to-bip-orange-600"></div>
            </div>
            <div>
                <div class="mt-5 mb-6 text-lg text-white">Apakah anda tertarik jika berbisnis dengan
                    kami atau membutuhkan Banking Equipment, IT Product atau Office Equipment untuk perusahaan atau
                    organisasi anda? jangan ragu untuk menghubungi kami
                </div>
                <a class="px-8 py-3 text-white rounded-full bg-gradient-to-tr from-bip-orange-400 to-bip-orange-500 hover:from-bip-orange-400 hover:to-bip-orange-300 hover:bg-gradient-to-br hover:text-white"
                    href="/contact" wire:navigate>Hubungi kami</a>
            </div>

        </div>
        <div data-aos="fade-up">
            <img src="{{ asset('images/section4.jpg') }}" alt="" class="bg-cover rounded-lg shadow-lg">

        </div>
    </div>
    <!--END SECTION 4-->

    <!--SECTION 5-->
    <div class="px-5 py-20">
        <div data-aos="fade-up">
            <div class="flex flex-col items-center justify-center mb-10 space-y-2">
                <div class="text-xl font-bold uppercase text-bip-blue-950">Partner Kami</div>
                <div class="w-full text-3xl font-bold text-center capitalize">Kami bekerja dengan perusahaan yang luar
                    biasa
                </div>
                <div class="w-1/5 h-2 rounded-lg bg-bip-blue-950"></div>
            </div>
        </div>

        <div class="flex my-12 marquee3k mask" data-aos="fade-up">
            <div class="flex gap-x-5">

                <div class="flex gap-4 transition-all ease-in-out">
                    <img loading="lazy" src="{{ asset('images/logo/hp.webp') }}" alt="Partner"
                        class="h-20 p-5 bg-white border rounded-lg shadow-md">
                    <img loading="lazy" src="{{ asset('images/logo/lenovo.webp') }}" alt="Partner"
                        class="h-20 p-5 bg-white border rounded-lg shadow-md">
                    <img loading="lazy" src="{{ asset('images/logo/dell.webp') }}" alt="Partner"
                        class="h-20 p-5 bg-white border rounded-lg shadow-md">
                    <img loading="lazy" src="{{ asset('images/logo/brother.webp') }}" alt="Partner"
                        class="h-20 p-5 bg-white border rounded-lg shadow-md">
                    <img loading="lazy" src="{{ asset('images/logo/benq.webp') }}" alt="Partner"
                        class="h-20 p-5 bg-white border rounded-lg shadow-md">
                    <img loading="lazy" src="{{ asset('images/logo/zyrex.webp') }}" alt="Partner"
                        class="h-20 p-5 bg-white border rounded-lg shadow-md">
                    <img loading="lazy" src="{{ asset('images/logo/asus.webp') }}" alt="Partner"
                        class="h-20 p-5 bg-white border rounded-lg shadow-md">
                    <img loading="lazy" src="{{ asset('images/logo/axioo.webp') }}" alt="Partner"
                        class="h-20 p-5 bg-white border rounded-lg shadow-md">
                    <img loading="lazy" src="{{ asset('images/logo/grgbanking.webp') }}" alt="Partner"
                        class="h-20 p-5 bg-white border rounded-lg shadow-md">
                </div>
            </div>
        </div>
        <div class="flex my-12 marquee3k mask" data-aos="fade-up" data-reverse="true">
            <div class="flex">

                <div class="flex gap-4 mx-10 transition-all ease-in-out">
                    <img loading="lazy" src="{{ asset('images/logo/dynabook.webp') }}" alt="Partner"
                        class="h-20 p-5 bg-white border rounded-lg shadow-md">
                    <img loading="lazy" src="{{ asset('images/logo/tplink.webp') }}" alt="Partner"
                        class="h-20 p-5 bg-white border rounded-lg shadow-md">
                    <img loading="lazy" src="{{ asset('images/logo/cisco.webp') }}" alt="Partner"
                        class="h-20 p-5 bg-white border rounded-lg shadow-md">
                    <img loading="lazy" src="{{ asset('images/logo/kaspersky.webp') }}" alt="Partner"
                        class="h-20 p-5 bg-white border rounded-lg shadow-md">
                    <img loading="lazy" src="{{ asset('images/logo/chubbsafes.webp') }}" alt="Partner"
                        class="h-20 p-5 bg-white border rounded-lg shadow-md">
                    <img loading="lazy" src="{{ asset('images/logo/lionsafe.webp') }}" alt="Partner"
                        class="h-20 p-5 bg-white border rounded-lg shadow-md">
                    <img loading="lazy" src="{{ asset('images/logo/aws.webp') }}" alt="Partner"
                        class="h-20 p-5 bg-white border rounded-lg shadow-md">
                    <img loading="lazy" src="{{ asset('images/logo/microsoft.webp') }}" alt="Partner"
                        class="h-20 p-5 bg-white border rounded-lg shadow-md">
                    <img loading="lazy" src="{{ asset('images/logo/adobe.webp') }}" alt="Partner"
                        class="h-20 p-5 bg-white border rounded-lg shadow-md">
                </div>
            </div>
        </div>
    </div>
    <!--END SECTION 5-->

    <!--FOOTER-->
    <x-footer />
    <!--END FOOTER-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="{{ asset('marquee3k.js') }}"></script>
    <script>
        const navbar = document.querySelector(".navbar");
        const loading = document.querySelector("#loading");

        Marquee3k.init({
            selector: 'marquee3k',
        });
        AOS.init();
        window.addEventListener("DOMContentLoaded", () => {
            //set timeout for loader
            setTimeout(() => {
                loading.classList.add("opacity-0");
                setTimeout(() => {
                    loading.classList.add("hidden");
                }, 1000);
            }, 1000);



            if (window.screen.width < 768) {
                navbar.classList.add("bg-white");
                navbar.classList.remove("bg-transparent");
                navbar.classList.remove("text-white");
                navbar.classList.add("text-base-900");
                return;
            }
            new Swiper(".mySwiper", {
                slidesPerView: 1,
                spaceBetween: 0,
                loop: true,
                effect: "fade",
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
            });


        })

        window.addEventListener("scroll", () => {
            if (window.pageYOffset > 0 || window.screen.width < 768) {
                navbar.classList.add("bg-white");
                navbar.classList.remove("bg-transparent");
                navbar.classList.remove("text-white");
                navbar.classList.add("text-base-900");
                navbar.classList.add("shadow-lg");

            } else if (window.pageYOffset === 0 && window.innerWidth > 768) {
                navbar.classList.add("bg-transparent");
                navbar.classList.remove("bg-white");
                navbar.classList.remove("text-base-900");
                navbar.classList.add("text-white")
                navbar.classList.remove("shadow-lg");
            }
        });
    </script>
</x-main>
