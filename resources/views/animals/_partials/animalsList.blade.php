

<ul>
    <div class="flex items-center flex-col">
    @foreach ($animals as $animal) 
    <li>
        <div class="flex justify-between pt-3 pb-3    mb-8 justify-self flex-row list-none mr self-center w-screen shadow-lg bg-white text-gray-900 list-none text  transition duration-300 ease-in-out hover:bg-orange-800">
        <div class="flex flex-row items-center"> 
            <a class="bg-transparent ml-8 py-2 px-4 hover:bg-white-500 text-black-700 font-semibold hover:text-white border border-orange-800 hover:border-transparent rounded text-2xl "href="/owners/{{$animal->owner->id}}">{{ $animal->name }}</a>
        </div>
        <div class="self-center">
            <p >{{ $animal->date_of_birth }}</p>
        </div>
        <div class="px-4"> 
            <p> {{ $animal->type }}</p>
            <p>{{ $animal->biteyness }}</p>
        </div>
        <div>  
            <p>{{ $animal->weight_kg }}KG</p>
            <p>{{ $animal->height_m }}M</p>
        </div>
        <div class="flex flex-row items-center mr-8">

        <button class=" mr-5 self-center bg-transparent hover:bg-white-500 text-black-700 font-semibold hover:text-white py-2 px-4 border border-orange-800 hover:border-transparent rounded" ><a href="/animals/edit/{{$animal->id}}">Edit</a></button>

        <form class="btn" action="/animals/delete/{{ $animal->id }}" method="post">
        @csrf
            <button type="submit" class="  self-center bg-transparent hover:bg-white-500 text-black-700 font-semibold hover:text-white py-2 px-4 border border-orange-800 hover:border-transparent rounded"  value="Delete">Delete</button>
        </form> 

        
        </div>
        </div>
    </li>
    @endforeach    
</ul>
