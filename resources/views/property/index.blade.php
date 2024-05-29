@extends('components.layout')
@section('content')
    <section class="p-8 text-center  lg:p-20" style="background-image: url('{{ asset('/images/white_villa.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <h1 class="mb-2 text-2xl font-bold text-white lg:text-5xl">
            Properties

        </h1>
        <div class="text-white">
            <span class="text-blue-800">Home -</span> Properties List
        </div>
    </section>
    <!-- property search section -->
    <div class="m-4 lg:m-0">
        <div class="p-8 bg-white lg:flex lg:items-center lg:justify-center">
            <form class="space-y-4 lg:space-y-0 lg:flex lg:space-x-4 lg:flex-nowrap">
                <div class="">
                    <select class="w-full py-2.5 px-8 bg-white border border-gray-400 rounded outline-none focus:ring-2">
                        <option>Type</option>
                        <option>Apartment</option>
                        <option>Apartment</option>
                        <option>House</option>
                        <option>Villa</option>
                        <option>Hotel</option>
                    </select>

                </div>
                <div>
                    <input type="text" class="w-full p-2 border border-gray-400 rounded outline-none focus:ring-2"
                        Placeholder="Location" />
                </div>
                <div>
                    <input type="number" class="w-full p-2 border border-gray-400 rounded outline-none focus:ring-2"
                        placeholder="min" />
                </div>
                <div>
                    <input type="number" class="w-full p-2 border border-gray-400 rounded outline-none focus:ring-2"
                        placeholder="max" />
                </div>
                <div>
                    <button class="px-8 py-2 text-blue-100 bg-gray-600 rounded">
                        Search</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Alle Woningen -->
    <section class="px-4 py-4  flex flex-column justify-center">

        @foreach ($properties as $property)
            
            {{-- woning info en kader --}}
            <div class=" space-y-2 lg:gap-4 flex  flex-column justify-center items-center flex-wrap ">

                <div class="p-4 mt-6 bg-gray-200 rounded-lg sm:flex sm:flex-column w-full sm:w-auto">
                    <img class="rounded-sm w-full h-72 sm:w-64 sm:h-auto mr-3"
                        src="https://images.unsplash.com/photo-1601760562234-9814eea6663a?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cmVhbGVzdGF0ZXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                        alt="property">

                    {{--  woning met info --}}
                    {{-- <div class="flex flex-column"> --}}

                    {{-- woningnaam en prijs --}}
                    <div class=" mt- sm:mt-auto sm:px-6 sm:py-1">
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



        {{-- <div class="container flex justify-center mx-auto mt-8">
                    <ul class="flex">
                        <li><button
                                class="h-10 px-5 text-gray-600 bg-white border border-r-0 border-gray-600 hover:bg-gray-100">Prev</button>
                        </li>
                        <li><button
                                class="h-10 px-5 text-gray-600 bg-white border border-r-0 border-gray-600 ">1</button>
                        </li>
                        <li><button
                                class="h-10 px-5 text-gray-600 bg-white border border-r-0 border-gray-600 hover:bg-gray-100">2</button>
                        </li>
                        <li><button
                                class="h-10 px-5 text-white bg-gray-600 border border-r-0 border-gray-600 ">3</button>
                        </li>
                        <li><button
                                class="h-10 px-5 text-gray-600 bg-white border border-gray-600 hover:bg-gray-100">Next</button>
                        </li>
                    </ul>
                </div> --}}
    </section>
@endsection
