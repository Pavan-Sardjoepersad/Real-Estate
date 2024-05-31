@extends('components.layout')
@section('content')
    
    <section>

        {{-- Container voor woning gegevens boven de calculator --}}
        <div class="flex flex-col mx-auto max-w-screen-lg">
            <h1 class="font-semibold text-2xl sm:text-3xl mt-8 sm:mt-4 ml-4 mb-2  text-blue-500">{{$property->address}}</h1>
            <h1 class="text-md sm:text-lg ml-4  text-gray-400">{{$property->postal_code}} <span class="text-blue-500">{{$property->city}}</span></h1>


            {{-- container voor prijs en calculator --}}
            <div class="sm:flex items-center">
                {{-- prijs van de property --}}
                <h1 class="font-semibold text-xl sm:text-xl mt-4 ml-4  text-black">€ {{number_format($property->price , 0, ',', '.')}} k.k.</h1>
                
            </div>

        {{-- container voor Monthly Expenses Calculator --}}
        <div class="max-w-lg mx-auto mt-8 bg-white p-8 rounded-lg shadow-lg">
            <h1 class="text-2xl font-bold mb-6">Maandelijkse Lasten Calculator</h1>
            <form action="{{ route('property.calculate', ['id' => $property->id]) }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="offer" class="block text-sm font-medium text-gray-700">Wat wil je bieden:</label>
                    <input type="number" name="offer" id="offer" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm p-2">
                </div>
                <div>
                    <label for="down_payment" class="block text-sm font-medium text-gray-700">Eigen inleg:</label>
                    <input type="number" name="down_payment" id="down_payment" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm p-2">
                </div>
                <div>
                    <label for="house_type" class="block text-sm font-medium text-gray-700">Type woning:</label>
                    <input type="text" name="house_type" id="house_type" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm p-2">
                </div>
                <div>
                    <label for="energy_label" class="block text-sm font-medium text-gray-700">Energielabel:</label>
                    <input type="text" name="energy_label" id="energy_label" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm p-2">
                </div>
                <div class="flex justify-center">
                    <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Bereken Maandelijkse Lasten</button>
                </div>
            </form>
            
            @if (isset($total_monthly_expenses))
                <div class="mt-6 bg-gray-50 p-4 rounded-lg shadow-inner">
                    <h2 class="text-xl font-semibold">Resultaten:</h2>
                    <p class="text-gray-700 mt-2"><strong>Hypotheek:</strong> €{{ $mortgage }}</p>
                    <p class="text-gray-700 mt-2"><strong>Rentepercentage:</strong> {{ $interest_rate }}%</p>
                    <p class="text-gray-700 mt-2"><strong>Kosten koper:</strong> €{{ $closing_costs }}</p>
                    <p class="text-gray-700 mt-2"><strong>Maandelijkse Hypotheekbetaling:</strong> €{{ $monthly_mortgage_payment }}</p>
                    <p class="text-gray-700 mt-2"><strong>Totale Maandelijkse Lasten:</strong> €{{ $total_monthly_expenses }}</p>
                </div>
            @endif
        </div>

    </section>

@endsection