

<ul class ="animals__list-group">
    @foreach ($animals as $animal) 

<li class = "list-none mb-8">
    <div class=" group shadow-lg bg-white text-gray-900 list-none text pb-3 pl-3 pr-3 pt-0">
        <p class="">Name: {{ $animal->name }}</p>
        <p class="">Type: {{ $animal->type }}</p>
        <p class="">Age:{{ $animal->date_of_birth }}</p>
        <p class="">Weight:{{ $animal->weight_kg }}</p>
        <p class="">Height:{{ $animal->height_m }}</p>
    </div>
</li>
    @endforeach    
</ul>
