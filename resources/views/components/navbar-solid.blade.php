<nav class="z-40 w-full bg-white shadow-lg text-base-900 navbar dark:bg-gray-900">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl p-4 mx-auto ">
        <a href="/" class="flex items-center">
            <img src="/images/logobip.webp" class="h-8 mr-3" alt="Flowbite Logo" />

            <span class="self-center text-2xl font-semibold whitespace-nowrap">
            </span>
        </a>
        <div class="flex lg:order-2">
            <button type="button"
                class="hidden px-6 py-2 mr-3 font-bold text-center text-white rounded-full bg-gradient-to-tr from-bip-orange-400 to-bip-orange-500 hover:bg-gradient-to-br hover:from-bip-orange-400 hover:to-bip-orange-300 focus:ring-4 focus:outline-none focus:ring-orange-300 text-md lg:mr-0 dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800 lg:block">
                Karir
            </button>
            <a href="https://wa.me/6285399999538"
                class="hidden px-6 py-2 ml-3 mr-3 font-bold text-center text-white rounded-full bg-gradient-to-tr from-bip-blue-500 to-bip-blue-700 hover:bg-gradient-to-br hover:from-bip-blue-400 hover:to-bip-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 text-md lg:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 lg:block">Hubungi
                Kami</a>
            <button data-collapse-toggle="navbar-dropdown" type="button"
                class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-dropdown" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>

        <div class="hidden w-full lg:block lg:w-auto" id="navbar-dropdown">
            <ul
                class="flex flex-col p-4 mt-4 font-medium border border-gray-100 rounded-lg lg:p-0 lg:flex-row lg:space-x-8 lg:mt-0 lg:border-0 dark:bg-gray-800 lg:dark:bg-gray-900 dark:border-gray-700">

                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar1"
                        class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-semibold rounded hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-bip-orange-400 lg:p-0 lg:w-auto dark:text-white lg:dark:hover:text-orange-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 lg:dark:hover:bg-transparent">
                        Perusahaan
                        <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar1"
                        class="z-50 hidden w-screen font-normal bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600 lg:w-44">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="/about"
                                    class="block w-full px-12 py-2 lg:px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white lg:w-fit">Tentang
                                    Perusahan</a>
                            </li>
                            <li>
                                <a href="/ceo-statement"
                                    class="block w-full px-12 py-2 lg:px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white lg:w-fit">CEO
                                    Statement</a>
                            </li>
                            <li>
                                <a href="/award"
                                    class="block w-full px-12 py-2 lg:px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white lg:w-fit">Penghargaan</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                        class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-semibold rounded hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-bip-orange-400 lg:p-0 lg:w-auto dark:text-white lg:dark:hover:text-orange-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 lg:dark:hover:bg-transparent">
                        Produk
                        & Layanan
                        <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar"
                        class="z-50 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="/banking"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Banking
                                    Equipment</a>
                            </li>
                            <li>
                                <a href="/it"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">IT
                                    Equipment</a>
                            </li>
                            <li>
                                <a href="/office"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Office
                                    Equipment</a>
                            </li>
                            <li>
                                <a href="/machine"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                    Machine Tools</a>
                            </li>
                            <li>
                                <a href="/certification"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                    Certification</a>
                            </li>
                        </ul>

                    </div>
                </li>
                <li>
                    <a href="/katalog"
                        class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-semibold rounded hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-bip-orange-400 lg:p-0 lg:w-auto dark:text-white lg:dark:hover:text-orange-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 lg:dark:hover:bg-transparent">Katalog</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-semibold rounded hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-bip-orange-400 lg:p-0 lg:w-auto dark:text-white lg:dark:hover:text-orange-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 lg:dark:hover:bg-transparent">Bantuan</a>
                </li>
            </ul>
            <button type="button"
                class="w-full px-6 py-2 font-bold text-center text-white rounded-full bg-gradient-to-tr from-bip-orange-400 to-bip-orange-500 hover:bg-gradient-to-br hover:from-bip-orange-400 hover:to-bip-orange-300 focus:ring-4 focus:outline-none focus:ring-orange-300 text-md lg:mr-0 dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800 lg:hidden">
                Karir
            </button>

            <button type="button"
                class="w-full px-6 py-2 mt-3 font-bold text-center text-white bg-blue-600 rounded-full hover:bg-blue-500 focus:ring-4 focus:outline-none focus:ring-blue-300 text-md lg:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 lg:hidden">
                Contact
            </button>
        </div>

    </div>

</nav>
