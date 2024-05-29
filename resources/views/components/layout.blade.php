<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Real Estate | Home</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
    </head>

    <body>
        <div>
            <div class="bg-gradient-to-r from-blue-200 to-blue-500" x-data="{ isOpen: false }">
                <nav class="container px-6 py-8 mx-auto md:flex md:justify-between md:items-center">
                    <div class="flex items-center justify-between">
                        <a class="text-xl font-bold text-gray-800 md:text-2xl hover:text-blue-400" href="/">Real
                            Estate </a>
                        <!-- Mobile menu button -->
                        <div @click="isOpen = !isOpen" class="flex md:hidden">
                            <button type="button"
                                class="text-gray-800 hover:text-gray-400 focus:outline-none focus:text-gray-400"
                                aria-label="toggle menu">
                                <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                                    <path fill-rule="evenodd"
                                        d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                    <div :class="isOpen ? 'flex' : 'hidden'"
                        class=" flex-col mt-8 space-y-4 md:flex md:space-y-0 md:flex-row md:items-center md:space-x-10 md:mt-0">
                        <a class="text-sm text-white hover:text-blue-800" href="index.html">Home</a>
                        <a class="text-sm text-white hover:text-blue-800" href="/properties">Properties</a>
                        <a class="text-sm text-white hover:text-blue-800" href="/properties/{slug}">Single
                            Properties</a>
                        <a class="text-sm text-white hover:text-blue-800" href="contact-us.html">Contact Us</a>
                    </div>
                </nav>
            </div>

            @yield('content')

            <footer class="px-4 pt-12 pb-12 mt-12 bg-gray-200 border-t lg:0">

                <div class="lg:flex lg:justify-evenly">
                    <div class="max-w-sm mt-6 text-center lg:mt-0">
                        <h6 class="mb-4 text-4xl font-semibold text-gray-700">Real Estate</h6>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis, tenetur. Sint, vel sit
                            molestiae velit doloribus aspernatur. Voluptate,</p>
                    </div>
                    <div class="mt-6 text-center lg:mt-0">
                        <h6 class="mb-4 font-semibold text-gray-700">Quick links</h6>
                        <ul>
                            <li> <a href="" class="block py-2 text-gray-600">Home</a> </li>
                            <li> <a href="" class="block py-2 text-gray-600">About us</a> </li>
                            <li> <a href="" class="block py-2 text-gray-600">Contact Us</a> </li>
                        </ul>
                    </div>

                </div>
            </footer>
        </div>
    </body>

</html>