
<ul>
    <div class="flex flex-col justify-start">
    @foreach ($owners as $owner) 
        <li class="list-none mt-8 mb-8">
            <a class=" transition duration-300 ease-in-out p-3 m-10 group shadow-lg bg-white hover:bg-orange-800 text-gray-900 list-none text-2xl "href="/owners/{{$owner->id}}">{{ $owner->fullName() }}</a>
        </li>
    @endforeach    
    </div>
<ul>


     {{-- @foreach ($animals as $animal) 

<li class = "list-none mb-8">
    <div class=" group shadow-lg bg-white text-gray-900 list-none text pb-3 pl-3 pr-3 pt-0">
        <p class="">Name: {{ $animal->name }}</p> --}}