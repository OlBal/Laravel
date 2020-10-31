@extends("app")


<ul class ="p-3 group shadow-lg bg-white text-gray-900">
    @foreach ($animals as $animal) 

<li class = "p-3 group shadow-lg bg-white text-gray-900">
    <div class="p-3 group shadow-lg bg-white text-gray-900">
        <p class="">Name: {{ $animal->name }}</p>
        <p class="">Type: {{ $animal->type }}</p>
        <p class="">Age:{{ $animal->date_of_birth }}</p>
        <p class="">Weight:{{ $animal->weight_kg }}</p>
        <p class="">Height:{{ $animal->height_m }}</p>
    </div>
</li>
    @endforeach    
</ul>
