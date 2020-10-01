@extends("app")


<ul class ="animals__list-group">
    @foreach ($animals as $animal) 

<li class = "animals__list-item">
    <div class="animals__list-item__container">
        <p class="">Name: {{ $animal->name }}</p>
        <p class="">Type: {{ $animal->type }}</p>
        <p class="">Age:{{ $animal->date_of_birth }}</p>
        <p class="">Weight:{{ $animal->weight_kg }}</p>
        <p class="">Height:{{ $animal->height_m }}</p>
    </div>
</li>
    @endforeach    
</ul>
