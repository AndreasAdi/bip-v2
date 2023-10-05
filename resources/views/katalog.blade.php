<x-main class="bg">
    <script src='//pubhtml5.com/plugin/LightBox/js/pubhtml5-light-box-api-min.js'></script>
    <style>
        .bg {
            background-color: #ffffff;
            background-image: url("data:image/svg+xml,%3Csvg width='64' height='64' viewBox='0 0 64 64' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M8 16c4.418 0 8-3.582 8-8s-3.582-8-8-8-8 3.582-8 8 3.582 8 8 8zm0-2c3.314 0 6-2.686 6-6s-2.686-6-6-6-6 2.686-6 6 2.686 6 6 6zm33.414-6l5.95-5.95L45.95.636 40 6.586 34.05.636 32.636 2.05 38.586 8l-5.95 5.95 1.414 1.414L40 9.414l5.95 5.95 1.414-1.414L41.414 8zM40 48c4.418 0 8-3.582 8-8s-3.582-8-8-8-8 3.582-8 8 3.582 8 8 8zm0-2c3.314 0 6-2.686 6-6s-2.686-6-6-6-6 2.686-6 6 2.686 6 6 6zM9.414 40l5.95-5.95-1.414-1.414L8 38.586l-5.95-5.95L.636 34.05 6.586 40l-5.95 5.95 1.414 1.414L8 41.414l5.95 5.95 1.414-1.414L9.414 40z' fill='%239C92AC' fill-opacity='0.21' fill-rule='evenodd'/%3E%3C/svg%3E");
        }
    </style>

    <x-navbar-solid />

    <main class="flex flex-col items-center justify-center h-screen bg">
        <h1 class="px-5 py-3 mb-5 text-3xl font-bold text-white bg-bip-orange-500">KATALOG DIGITAL</h1>
        <div
            class="flex flex-wrap items-center justify-center max-w-6xl gap-5 p-12 mx-auto gap-x-12 rounded-t-md drop-shadow-2xl md:flex-nowrap">
            <div data-rel='fh5-light-box-demo' data-href='https://online.pubhtml5.com/boilv/dyyd/' data-width='1200'
                data-height='700' data-title='Company Profile'
                class="w-48 transition duration-300 ease-in-out shadow-md group shadow-stone-900 drop-shadow-xl hover:-rotate-3 hover:scale-110 hover:cursor-pointer">
                <div
                    class="group-hover:bg-gradient-to-br from-bip-orange-400 to-bip-blue-500
                     transition-colors ease-in-out absolute -inset-1.5  rounded-lg blur-lg">
                </div>
                <img src="{{ asset('images/cover/1.jpg') }}" alt="Book" class="relative rounded-sm group" />
            </div>
            <div data-rel='fh5-light-box-demo' data-href='https://online.pubhtml5.com/boilv/beav' data-width='1200'
                data-height='700' data-title='Katalog Bank Equipment'
                class="w-48 transition duration-300 ease-in-out shadow-md shadow-stone-900 drop-shadow-xl hover:-rotate-3 hover:scale-110 hover:cursor-pointer">
                <img src="{{ asset('images/cover/2.jpg') }}" class="rounded-sm" alt="Book" />
            </div>
            <div data-rel='fh5-light-box-demo' data-href='https://online.pubhtml5.com/boilv/tqaj/' data-width='1200'
                data-height='700' data-title='Katalog IT Equipment'
                class="w-48 transition duration-300 ease-in-out shadow-md shadow-stone-900 drop-shadow-xl hover:-rotate-3 hover:scale-110 hover:cursor-pointer">
                <img src="{{ asset('images/cover/3.jpg') }}" class="rounded-sm" alt="Book" />
            </div>
            <div data-rel='fh5-light-box-demo' data-href='https://online.pubhtml5.com/boilv/yplp/' data-width='1200'
                data-height='700' data-title='Katalog Office Equipment'
                class="w-48 transition duration-300 ease-in-out shadow-md shadow-stone-900 drop-shadow-xl hover:-rotate-3 hover:scale-110 hover:cursor-pointer">
                <img src="{{ asset('images/cover/4.jpg') }}" class="rounded-sm" alt="Book" />
            </div>
            <div data-rel='fh5-light-box-demo' data-href='https://online.pubhtml5.com/boilv/wvdy/' data-width='1200'
                data-height='700' data-title='Katalog Medical Equipment'
                class="w-48 transition duration-300 ease-in-out shadow-md shadow-stone-900 drop-shadow-xl hover:-rotate-3 hover:scale-110 hover:cursor-pointer">
                <img src="{{ asset('images/cover/5.jpg') }}" class="rounded-sm" alt="Book" />
            </div>
        </div>
    </main>

</x-main>
