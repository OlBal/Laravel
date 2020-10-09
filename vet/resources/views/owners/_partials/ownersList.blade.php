
<ul>
    @foreach ($owners as $owner) 
        <li class="list-none mt-8 mb-8">
            <a class=" transition duration-300 ease-in-out p-3 group shadow-lg bg-white hover:bg-orange-800 text-gray-900 list-none text-2xl "href="/owners/{{$owner->id}}">{{ $owner->fullName() }}</a>
        </li>
    @endforeach    
<ul>
