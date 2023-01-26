<!-- Header -->
<header>
    <nav class="bg-white px-2 sm:px-4 py-2.5 dark:bg-gray-900 fixed w-full z-20 top-0 left-0">
        <div class="container flex flex-wrap items-center justify-between mx-auto max-w-7xl">
            <a href="{{ byRouteName('index') }}" class="flex items-center">
                <img src="img/logo.jpg" class="max-xl:1280px ml-8" alt="Logomarca Unix Bank" />
            </a>
            <div class="flex md:order-2">
                <button type="button"
                    class="text-white italic bg-bgButtom hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 h-fit font-medium rounded-xl text-md px-5 py-0.5 text-center mr-3 md:mr-">Abra
                    sua <br> <span class="text-blueBright">Unix</span>conta</button>
                <button type="button"
                    class="text-white italic bg-bgButtom hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 h-fit font-medium rounded-xl text-md px-5 py-0.5 text-center mr-3 md:mr-">Acesse
                    sua <br> <span class="text-blueBright">Unix</span>conta</button>
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a
                            href="{{ byRouteName('quem-somos') }}"
                            class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-blue-700 md:hover:bg-transparent hover:text-white"
                            aria-current="page">Unixbank</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-blue-700 md:hover:bg-transparent hover:text-white">Unixconta</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-blue-700 md:hover:bg-transparent hover:text-white">Unixinvesti</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-blue-700 md:hover:bg-transparent hover:text-white">Unixcredi
                            Pessoa Física</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-blue-700 md:hover:bg-transparent hover:text-white">Unixcredi
                            Pessoa Jurídica</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-blue-700 md:hover:bg-transparent hover:text-white">Unixcard</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-blue-700 md:hover:bg-transparent hover:text-white">Parceiros
                            e Vantagens</a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
    <div class="hidden md:flex md:items-center md:justify-between md:max-w-7xl mt-20 mx-auto">
        <a
            href="{{ byRouteName('quem-somos') }}"
            class="text-white bg-bgButtom hover:bg-blue-800 italic focus:ring-4 focus:outline-none focus:ring-blue-300 h-12 font-medium rounded-xl text-md px-5 text-center mx-3"><span
                class="text-blueBright">Unix</span>bank
        </a>
        <button type="button"
            class="text-white bg-bgButtom hover:bg-blue-800 italic focus:ring-4 focus:outline-none focus:ring-blue-300 h-12 font-medium rounded-xl text-md px-5 text-center mx-3"><span
                class="text-blueBright">Unix</span>conta
        </button>
        <button type="button"
            class="text-white bg-bgButtom hover:bg-blue-800 italic focus:ring-4 focus:outline-none focus:ring-blue-300 h-12 font-medium rounded-xl text-md px-5 text-center mx-3"><span
                class="text-blueBright">Unix</span>investi
        </button>
        <button type="button"
            class="text-white bg-bgButtom hover:bg-blue-800 italic focus:ring-4 focus:outline-none focus:ring-blue-300 h-12 font-medium rounded-xl text-md px-5 text-center mx-3"><span
                class="text-blueBright">Unix</span>credi<br> Pessoa Física
        </button>
        <button type="button"
            class="text-white bg-bgButtom hover:bg-blue-800 italic focus:ring-4 focus:outline-none focus:ring-blue-300 h-12 font-medium rounded-xl text-md px-5 text-center mx-3"><span
                class="text-blueBright">Unix</span>credi<br> Pessoa Jurídica
        </button>
        <button type="button"
            class="text-white bg-bgButtom hover:bg-blue-800 italic focus:ring-4 focus:outline-none focus:ring-blue-300 h-12 font-medium rounded-xl text-md px-5 text-center mx-3"><span
                class="text-blueBright">Unix</span>card
        </button>
        <button type="button"
            class="text-white bg-bgButtom hover:bg-blue-800 italic focus:ring-4 focus:outline-none focus:ring-blue-300 h-12 font-medium rounded-xl text-md px-5 text-center mx-3">Parceiros
            e<br>Vantagens
        </button>
    </div>

</header>
<!-- /Header -->
