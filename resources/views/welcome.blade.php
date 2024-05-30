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
                        <a class="text-xl font-bold text-gray-800 md:text-2xl hover:text-blue-400" href="#">Real
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


            <section class="p-12 text-center  lg:p-40" style="background-image: url('{{ asset('/images/blue_house_sunset.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                <h1 class="mb-2 text-2xl font-bold text-white mt-40 sm:mt-36 lg:text-5xl">
                    Find Your Dream House</h1>

                <p class="inline-block p-1 mb-8 mt-4 text-lg text-center bg-black/75 text-white">Your journey to the perfect <span class="text-blue-400">house</span> starts here</p>

                <div class="flex items-center justify-center space-x-2">
                    <a href="/properties"
                        class="px-2 py-2 text-white bg-blue-500 transition duration-200 rounded rounded-lg lg:px-8 lg:py-3 hover:bg-white hover:text-black hover:shadow">View
                        Properties
                    </a>
                </div>
            </section>
            <!-- property search section -->
            <div class="m-4 lg:m-0">
                <div class="p-8 bg-white lg:flex lg:items-center lg:justify-center">
                    <form class="space-y-4 lg:space-y-0 lg:flex lg:space-x-4 lg:flex-nowrap">
                        <div class="">
                            <select
                                class="w-full py-2.5 px-8 bg-white border border-gray-400 rounded outline-none focus:ring-2">
                                <option>Type</option>
                                <option>Apartment</option>
                                <option>Apartment</option>
                                <option>House</option>
                                <option>Villa</option>
                                <option>Hotel</option>
                            </select>

                        </div>
                        <div>
                            <input type="text"
                                class="w-full p-2 border border-gray-400 rounded outline-none focus:ring-2"
                                Placeholder="Location" />
                        </div>
                        <div>
                            <input type="number"
                                class="w-full p-2 border border-gray-400 rounded outline-none focus:ring-2"
                                placeholder="min" />
                        </div>
                        <div>
                            <input type="number"
                                class="w-full p-2 border border-gray-400 rounded outline-none focus:ring-2"
                                placeholder="max" />
                        </div>
                        <div>
                            <button class="px-8 py-2 text-blue-100 bg-gray-600 rounded">
                                Search</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Feature Property -->
            <section class="px-4 py-4 bg-gray-200 lg:px-32 lg:py-20">
                <div class="">
                    <h1 class="text-2xl font-bold text-center text-blue-600 lg:text-4xl">Featured Property</h1>
                    <div class="flex justify-center">
                        <div class="mt-2 w-40 h-1 bg-indigo-400 rounded"></div>
                    </div>
                </div>
                {{-- woning info en kader --}}
            @foreach ($properties as $property)
                
                <div class=" space-y-2 lg:gap-4 flex  flex-column justify-center items-center flex-wrap ">

                    <div class="p-4 mt-6 bg-gray-200 rounded-lg sm:flex sm:flex-column w-full sm:w-auto">
                        <img class="rounded-sm w-full h-72 sm:w-64 sm:h-auto mr-3"
                            src="/images/{{$property->slug}}"
                            alt="property">

                        {{--  woning met info --}}
                        {{-- <div class="flex flex-column"> --}}

                        {{-- woningnaam en prijs --}}
                        <div class=" mt-2 sm:mt-auto sm:px-6 sm:py-1">
                            <h3 class="text-blue-700 text-lg font-semibold cursor-pointer">{{$property->address}}</h3>
                            <h3 class="text-lg font-medium cursor-pointer">{{$property->postal_code}} {{$property->city}}</h3>

                            <div class="mt-2">
                                <span class="text-lg font-semibold ">€ {{number_format($property->price , 0, ',', '.')}} k.k.</span>
                            </div>

                            <div class="flex justify-start gap-8 mt-3 pl-1 text-gray-700 ">

                                {{-- aantal vierkante meters woning --}}
                                <div class="flex flex-row items-center">
                                    <svg class="w-6 h-6 mr-3 text-gray-600 fill-current" width="800px" height="800px"
                                        viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                        preserveAspectRatio="xMidYMid meet">
                                        <path
                                            d="M12.55 0C5.662 0 0 5.661 0 12.55c0 6.017 4.317 11.096 10 12.286v50.428c-5.683 1.19-10 6.27-10 12.287C0 94.44 5.661 100.1 12.55 100.1c6.047 0 11.09-4.374 12.241-10.1h50.455c1.152 5.732 6.253 10.1 12.305 10.1c6.65 0 12.105-5.288 12.478-11.852a3.5 3.5 0 0 0 .07-.697a3.5 3.5 0 0 0-.07-.697C99.703 81.117 95.495 76.356 90 75.246V24.854c5.495-1.11 9.703-5.87 10.03-11.606a3.5 3.5 0 0 0 .07-.697a3.5 3.5 0 0 0-.07-.697C99.655 5.29 94.201 0 87.55 0c-6.016 0-11.096 4.317-12.286 10H24.77C23.58 4.324 18.56 0 12.55 0zm0 7c3.107 0 5.55 2.444 5.55 5.55c0 3.107-2.443 5.55-5.55 5.55C9.445 18.1 7 15.657 7 12.55C7 9.445 9.444 7 12.55 7zm75 0c3.107 0 5.55 2.444 5.55 5.55c0 3.107-2.443 5.55-5.55 5.55c-3.106 0-5.55-2.443-5.55-5.55C82 9.445 84.444 7 87.55 7zM24.218 17h51.62A12.678 12.678 0 0 0 83 24.225v51.65A12.684 12.684 0 0 0 75.875 83h-51.7A12.64 12.64 0 0 0 17 75.838V24.262A12.638 12.638 0 0 0 24.217 17zM12.55 82c3.106 0 5.549 2.444 5.549 5.55c0 3.107-2.443 5.55-5.55 5.55C9.445 93.1 7 90.657 7 87.55C7 84.445 9.444 82 12.55 82zm75 0c3.106 0 5.549 2.444 5.549 5.55c0 3.107-2.443 5.55-5.55 5.55c-3.106 0-5.55-2.443-5.55-5.55c0-3.106 2.444-5.55 5.55-5.55z"
                                            fill="#000000"></path>
                                    </svg>
                                    <p class="text-gray-900">{{$property->home_sqft}} m²</p>
                                </div>

                                {{-- aantal vierkante meters van perceel --}}
                                <div class="flex items-center">
                                    <svg class="w-6 h-6 mr-3 text-gray-600 fill-current" fill="#000000" height="800px"
                                        width="800px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 266.798 266.798"
                                        xml:space="preserve">
                                        <g>
                                            <path
                                                d="M94.675,103.299c-2.526,0-4.574,2.048-4.574,4.574v69.403c0,2.526,2.048,4.574,4.574,4.574h46.267h46.268h46.266
                                                            c2.526,0,4.573-2.048,4.573-4.574v-69.403c0-2.526-2.047-4.574-4.573-4.574c-2.526,0-4.573,2.048-4.573,4.574v64.829h-37.119
                                                            v-64.829c0-2.526-2.047-4.574-4.573-4.574h-46.268c-2.526,0-4.573,2.048-4.573,4.574v64.829h-37.12v-64.829
                                                            C99.249,105.347,97.201,103.299,94.675,103.299z M145.515,112.447h37.122v60.255h-37.122V112.447z" />
                                            <path d="M69.16,111.107l94.911-94.911l94.917,94.912c0.893,0.893,2.063,1.339,3.234,1.339s2.341-0.447,3.234-1.34
                                                            c1.786-1.786,1.786-4.682,0-6.468l-47.735-47.732V9.728c0-2.526-2.047-4.574-4.573-4.574c-2.526,0-4.573,2.048-4.573,4.574v38.033
                                                            l-41.27-41.267c-1.787-1.786-4.682-1.786-6.469,0l-98.144,98.145c-1.786,1.786-1.786,4.682,0,6.468
                                                            C64.478,112.893,67.374,112.893,69.16,111.107z" />
                                            <path d="M262.222,210.458c-2.526,0-4.573,2.048-4.573,4.574v19.024H70.5v-19.024c0-2.526-2.048-4.574-4.574-4.574
                                                            c-2.526,0-4.574,2.048-4.574,4.574v47.192c0,2.526,2.048,4.574,4.574,4.574c2.526,0,4.574-2.048,4.574-4.574v-19.021h187.149
                                                            v19.021c0,2.526,2.047,4.574,4.573,4.574c2.526,0,4.573-2.048,4.573-4.574v-47.192
                                                            C266.796,212.506,264.749,210.458,262.222,210.458z" />
                                            <path
                                                d="M51.767,9.147c2.526,0,4.574-2.048,4.574-4.574S54.293,0,51.767,0H4.575C2.049,0,0.002,2.048,0.002,4.574
                                                            s2.048,4.574,4.574,4.574h19.021v187.149H4.575c-2.526,0-4.574,2.048-4.574,4.574c0,2.526,2.048,4.574,4.574,4.574h47.192
                                                            c2.526,0,4.574-2.048,4.574-4.574c0-2.526-2.048-4.574-4.574-4.574H32.744V9.147H51.767z" />
                                        </g>
                                    </svg>
                                    <p class="text-gray-900">{{$property->plot_sqft}} m²</p>
                                </div>

                                {{-- aantal slaapkamers --}}
                                <div class="flex items-center">
                                    <svg class="w-6 h-6 mr-3 text-gray-600 fill-current" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M0 16L3 5V1a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v4l3 11v5a1 1 0 0 1-1 1v2h-1v-2H2v2H1v-2a1 1 0 0 1-1-1v-5zM19 5h1V1H4v4h1V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm0 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V6h-2v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6H3.76L1.04 16h21.92L20.24 6H19zM1 17v4h22v-4H1zM6 4v4h4V4H6zm8 0v4h4V4h-4z">
                                        </path>
                                    </svg>
                                    <p><span class=" text-gray-900">{{$property->bedrooms}}</span> </p>
                                </div>

                                {{-- aantal badkamers --}}
                                <div class="flex items-center">
                                    <svg class="w-6 h-6 mr-3 text-gray-600 fill-current" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M17.03 21H7.97a4 4 0 0 1-1.3-.22l-1.22 2.44-.9-.44 1.22-2.44a4 4 0 0 1-1.38-1.55L.5 11h7.56a4 4 0 0 1 1.78.42l2.32 1.16a4 4 0 0 0 1.78.42h9.56l-2.9 5.79a4 4 0 0 1-1.37 1.55l1.22 2.44-.9.44-1.22-2.44a4 4 0 0 1-1.3.22zM21 11h2.5a.5.5 0 1 1 0 1h-9.06a4.5 4.5 0 0 1-2-.48l-2.32-1.15A3.5 3.5 0 0 0 8.56 10H.5a.5.5 0 0 1 0-1h8.06c.7 0 1.38.16 2 .48l2.32 1.15a3.5 3.5 0 0 0 1.56.37H20V2a1 1 0 0 0-1.74-.67c.64.97.53 2.29-.32 3.14l-.35.36-3.54-3.54.35-.35a2.5 2.5 0 0 1 3.15-.32A2 2 0 0 1 21 2v9zm-5.48-9.65l2 2a1.5 1.5 0 0 0-2-2zm-10.23 17A3 3 0 0 0 7.97 20h9.06a3 3 0 0 0 2.68-1.66L21.88 14h-7.94a5 5 0 0 1-2.23-.53L9.4 12.32A3 3 0 0 0 8.06 12H2.12l3.17 6.34z">
                                        </path>
                                    </svg>
                                    <p><span class=" text-gray-900">{{$property->bathrooms}}</span></p>
                                </div>
                            </div>
                            <h3 class="text-blue-700 text-md mt-3 font-medium cursor-pointer">{{$property->seller}}</h3>
                        </div>

                    </div>

                </div>

                </div>
            @endforeach
            </section>
            <!-- footer -->
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