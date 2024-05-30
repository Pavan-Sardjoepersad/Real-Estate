@extends('components.layout')
@section('content')

    <section>
        
        {{-- Image flex container for Property on large screens --}}
        <div class="hidden sm:flex sm:h-3/4 sm:p-4">
            <!-- Left half for the single image with padding for left and right edges -->
            <div class="w-1/2 p-2">
                <img src="{{ asset('images/house_1.jpg') }}" alt="Single Image" class="object-cover w-full h-full rounded-lg">
            </div>
    
            <!-- Right half for the four equally sized images with reduced vertical gap -->
            <div class="w-1/2 grid grid-cols-2 grid-rows-2 gap-2 p-2">
                <div class="col-span-1 row-span-1">
                    <img src="{{ asset('images/house_2.jpg') }}" alt="Image 1" class="object-cover w-full h-full rounded-lg">
                </div>
                <div class="col-span-1 row-span-1">
                    <img src="{{ asset('images/house_3.jpg') }}" alt="Image 2" class="object-cover w-full h-full rounded-lg">
                </div>
                <div class="col-span-1 row-span-1">
                    <img src="{{ asset('images/house_4.jpg') }}" alt="Image 3" class="object-cover w-full h-full rounded-lg">
                </div>
                <div class="col-span-1 row-span-1">
                    <img src="{{ asset('images/house_5.jpg') }}" alt="Image 4" class="object-cover w-full h-full rounded-lg">
                </div>

            </div>    
        </div>

        {{-- horizontal line below image on large screens --}}
        <div class="hidden sm:mx-6 sm:block">
            <hr class="sm:border-t-2 sm:border-blue-300 sm:w-full">
        </div>
        
        {{-- Image container for mobile screens --}}
        <div class="sm:hidden flex  h-3/4">
            <div class="w-full mt-8">
                <img src="/images/house_1.jpg" alt="image 1" class="object-cover w-full h-full ">
            </div>
        </div>

        {{-- horizontal line mobile screens --}}
        <div class="sm:hidden mt-4">
            <hr class="border-t border-blue-300 w-full">
        </div>


        {{-- div container met woning gegevens --}}
        <div class="flex flex-col m-auto max-w-screen-lg">
            <h1 class="font-semibold text-2xl sm:text-3xl mt-8 sm:mt-4 ml-4 mb-2  text-blue-500">{{$property->address}}</h1>
            <h1 class="text-md sm:text-lg ml-4  text-gray-400">{{$property->postal_code}} <span class="text-blue-500">{{$property->city}}</span></h1>

            {{-- div container met aantal m2 en slaapkamers --}}
            <div class="flex justify-start gap-4 mt-3 ml-4  pl-1 text-gray-700 ">

                {{-- aantal vierkante meters woning --}}
                <div class="flex flex-row items-center">
                    <svg class="w-6 h-6 mr-2 text-gray-600 fill-current" width="800px" height="800px"
                        viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                        preserveAspectRatio="xMidYMid meet">
                        <path
                            d="M12.55 0C5.662 0 0 5.661 0 12.55c0 6.017 4.317 11.096 10 12.286v50.428c-5.683 1.19-10 6.27-10 12.287C0 94.44 5.661 100.1 12.55 100.1c6.047 0 11.09-4.374 12.241-10.1h50.455c1.152 5.732 6.253 10.1 12.305 10.1c6.65 0 12.105-5.288 12.478-11.852a3.5 3.5 0 0 0 .07-.697a3.5 3.5 0 0 0-.07-.697C99.703 81.117 95.495 76.356 90 75.246V24.854c5.495-1.11 9.703-5.87 10.03-11.606a3.5 3.5 0 0 0 .07-.697a3.5 3.5 0 0 0-.07-.697C99.655 5.29 94.201 0 87.55 0c-6.016 0-11.096 4.317-12.286 10H24.77C23.58 4.324 18.56 0 12.55 0zm0 7c3.107 0 5.55 2.444 5.55 5.55c0 3.107-2.443 5.55-5.55 5.55C9.445 18.1 7 15.657 7 12.55C7 9.445 9.444 7 12.55 7zm75 0c3.107 0 5.55 2.444 5.55 5.55c0 3.107-2.443 5.55-5.55 5.55c-3.106 0-5.55-2.443-5.55-5.55C82 9.445 84.444 7 87.55 7zM24.218 17h51.62A12.678 12.678 0 0 0 83 24.225v51.65A12.684 12.684 0 0 0 75.875 83h-51.7A12.64 12.64 0 0 0 17 75.838V24.262A12.638 12.638 0 0 0 24.217 17zM12.55 82c3.106 0 5.549 2.444 5.549 5.55c0 3.107-2.443 5.55-5.55 5.55C9.445 93.1 7 90.657 7 87.55C7 84.445 9.444 82 12.55 82zm75 0c3.106 0 5.549 2.444 5.549 5.55c0 3.107-2.443 5.55-5.55 5.55c-3.106 0-5.55-2.443-5.55-5.55c0-3.106 2.444-5.55 5.55-5.55z"
                            fill="#000000"></path>
                    </svg>
                    <p class="text-gray-900 sm:font-semibold">{{$property->home_sqft}} m² <span class="font-normal hidden sm:inline">wonen</span></p>
                </div>

                {{-- aantal slaapkamers --}}
                <div class="flex items-center">
                    <svg class="w-6 h-6 mr-2 text-gray-600 fill-current" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24">
                        <path
                            d="M0 16L3 5V1a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v4l3 11v5a1 1 0 0 1-1 1v2h-1v-2H2v2H1v-2a1 1 0 0 1-1-1v-5zM19 5h1V1H4v4h1V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm0 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V6h-2v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6H3.76L1.04 16h21.92L20.24 6H19zM1 17v4h22v-4H1zM6 4v4h4V4H6zm8 0v4h4V4h-4z">
                        </path>
                    </svg>
                    <p><span class=" text-gray-900 sm:font-semibold">{{$property->bedrooms}}</span> <span class="font-normal    hidden sm:inline">slaapkamers</span> </p>
                </div>

            </div>

            {{-- container voor prijs en calculator --}}
            <div class="sm:flex items-center">
                {{-- prijs van de property --}}
                <h1 class="font-semibold text-xl sm:text-xl mt-4 ml-4  text-black">€ {{number_format($property->price , 0, ',', '.')}} k.k.</h1>
                
                {{-- svg maandlasten calculator --}}
                
                <a class="flex" href="/properties/{{$property->id}}/calculator">
                    <svg class="mt-4 ml-4" fill="#3B82F6" height="20px" width="20px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 460 460" xml:space="preserve">
                        <g id="XMLID_241_">
                            <g>
                                <path d="M369.635,0H90.365C73.595,0,60,13.595,60,30.365v399.27C60,446.405,73.595,460,90.365,460h279.27
                                    c16.77,0,30.365-13.595,30.365-30.365V30.365C400,13.595,386.405,0,369.635,0z M108.204,343.61v-43.196
                                    c0-3.451,2.797-6.248,6.248-6.248h43.196c3.451,0,6.248,2.797,6.248,6.248v43.196c0,3.451-2.797,6.248-6.248,6.248h-43.196
                                    C111.001,349.858,108.204,347.06,108.204,343.61z M108.204,256.61v-43.196c0-3.451,2.797-6.248,6.248-6.248h43.196
                                    c3.451,0,6.248,2.797,6.248,6.248v43.196c0,3.451-2.797,6.248-6.248,6.248h-43.196C111.001,262.858,108.204,260.06,108.204,256.61
                                    z M308.891,421H151.109c-11.046,0-20-8.954-20-20c0-11.046,8.954-20,20-20h157.782c11.046,0,20,8.954,20,20
                                    C328.891,412.046,319.937,421,308.891,421z M208.402,294.165h43.196c3.451,0,6.248,2.797,6.248,6.248v43.196
                                    c0,3.451-2.797,6.248-6.248,6.248h-43.196c-3.451,0-6.248-2.797-6.248-6.248v-43.196
                                    C202.154,296.963,204.951,294.165,208.402,294.165z M202.154,256.61v-43.196c0-3.451,2.797-6.248,6.248-6.248h43.196
                                    c3.451,0,6.248,2.797,6.248,6.248v43.196c0,3.451-2.797,6.248-6.248,6.248h-43.196C204.951,262.858,202.154,260.06,202.154,256.61
                                    z M345.548,349.858h-43.196c-3.451,0-6.248-2.797-6.248-6.248v-43.196c0-3.451,2.797-6.248,6.248-6.248h43.196
                                    c3.451,0,6.248,2.797,6.248,6.248v43.196h0C351.796,347.061,348.999,349.858,345.548,349.858z M345.548,262.858h-43.196
                                    c-3.451,0-6.248-2.797-6.248-6.248v-43.196c0-3.451,2.797-6.248,6.248-6.248h43.196c3.451,0,6.248,2.797,6.248,6.248v43.196h0
                                    C351.796,260.061,348.999,262.858,345.548,262.858z M354,149.637c0,11.799-9.565,21.363-21.363,21.363H127.364
                                    C115.565,171,106,161.435,106,149.637V62.363C106,50.565,115.565,41,127.364,41h205.273C344.435,41,354,50.565,354,62.363V149.637
                                    z"/>
                            </g>
                        </g>
                    </svg>
                    <h1 class="mt-4 text-blue-500 hover:text-blue-600 ml-2">Wat worden mijn maandlasten?</h1>
                </a>
    
            </div>

            {{-- scheidingslijn horizontaal mobile screens --}}
            <hr class="border-t border-gray-300 mx-4 mt-6  sm:mr-12 sm:w-1/2">

            <h1 class="font-semibold text-xl sm:text-xl mt-6 ml-4  text-black">Omschrijving</h1>
            {{-- <p>Bijzonder fraai gelegen authentieke half vrijstaande villa op loopafstand van de dorpskern, de uitvalswegen om de hoek en toch zeer rustig gelegen in de parkachtige omgeving. Deze royale woning is gebouwd omstreeks 1927 onder architectuur van Van Lindonk, die zelf lang in dit huis gewoond heeft. Kenmerkende details zoals de bordestrap, de glas-in-lood ensuite en het ovale glas-in-lood toilet raam zijn schitterend bewaard gebleven en geven dit fijne familie huis zijn sfeer. In de ruim bemeten voortuin is naast veel groen ook plek voor meerdere auto’s. Achter de voordeur komt u in de grote hal met prachtige bordestrap. Onder de trap toegang tot de kelderruimte. Vanuit de hal toegang tot de verschillende vertrekken, waaronder de studeer kamer aan de voorzijde met fijne lichtinval en uitzicht op de tuin. Er is in de studeerkamer ook een deur naar de brede woonkamer met klassieke parket vloer, schouw en haard. Ook vanuit de woonkamer een deur naar de voortuin. De achterkamer en voorkamer worden gescheiden door de ensuite met handige bergruimte. Grote achterkamer met dubbele openslaande deuren naar het terras en de achtertuin. Doorloop naar de ruime keuken met veel ramen en met inbouw apparatuur, stenen aanrechtblad en kookplaat en ruimte voor de ontbijt tafel. Er is een daklicht aanwezig en een deur naar de zij tuin en de achtertuin. Diepe, zonnige en gaaf aangelegde achtertuin en een beschut terras onder de druivenplant. De voormalige garage is omgebouwd tot een sfeervol tuinhuis en beschikt over vloer verwarming, een eigen kitchenette, douche en toilet gelegenheid en een slaapplek op de vide. Ideaal voor een au-pair, B&B of kantoor aan huis. Op de eerste verdieping van de woning is vanuit de ruime overloop toegang toegang tot de drie slaapkamers. Twee hiervan liggen aan de voorzijde en de hoofdslaapkamer met eigen balkon en grote inloopkast is aan de achterzijde gelegen. Aparte badkamer met ligbad, aparte douche, dubbele wastafel, bidet en toilet. Op de bovenste verdieping loopt de hal om de trap heen en vinden we nog eens drie slaapkamers, een aparte badkamer met wasmachine aansluiting, douche, wastafels en toilet. Vanuit de overloop is middels de Vlizo trap ook de vliering bereikbaar, ideaal voor het opslaan van spulletjes. Kortom een fantastisch gezinshuis, met een zee aan ruimte zowel in huis als in de parkachtige tuin. Wij maken met veel plezier een afspraak voor een bezichtiging met u. Bijzonderheden; - Bouwjaar 1927. - Woonoppervlak van ca. 230m², tuinhuis ca. 25m² - Zes ruime bemeten slaapkamers. - Modern cv-systeem (2017). - Tuinhuis (gastenverblijf) beschikt over een eigen Cv (2005). - Alarmsysteem met doormelding op de begane grond, eerste woonlaag en in het tuinhuis. - Ruime keuken met ontbijthoek. - Nagenoeg geheel voorzien van dubbele beglazing. - Buitenschilderwerk gedaan in 2022. - Gelegen op eigen grond, binnen beschermd stads,-dorpsgezicht. - Op loopafstand van het centrum en bushalte en scholen. - Notaris keuze aan kopende partij. - In de te sluiten koopakte zullen onder andere de ouderdomsclausule, asbest,-loodclausule en over,-ondermaatclausule worden opgenomen. Interesse in dit gave huis dan maken wij met veel plezier een afspraak met u voor een bezichtiging. Uiteraard kunt u ook uw eigen aankoop makelaar inschakelen die opkomt voor uw belangen, kijkt u voor contact gegevens van onze fijne collega makelaars op funda.nl</p> --}}

            

        </div>

    </section>

@endsection
