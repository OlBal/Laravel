
<ul>
    <div class="flex items-center flex-col">
    @foreach ($owners as $owner) 
        <li>
           <div class=" flex justify-between pt-3 pb-3    mb-8 justify-self flex-row list-none mr self-center w-screen shadow-lg bg-white text-gray-900 list-none text  transition duration-300 ease-in-out hover:bg-orange-800">
                <a class="bg-transparent ml-8 py-2 px-4 hover:bg-white-500 text-black-700 font-semibold hover:text-white border border-orange-800 hover:border-transparent rounded text-2xl "href="/owners/{{$owner->id}}"> 
                {{ $owner->fullName() }}</a>
                <div class="flex flex-row items-center mr-8">
                        <button class="mr-5 self-center bg-transparent hover:bg-white-500 text-black-700 font-semibold hover:text-white py-2 px-4 border border-orange-800 hover:border-transparent rounded" >
                        <a href="/owners/edit/{{ $owner->id }}">Edit</a></button>

                    <form class=""action="/owners/delete/{{ $owner->id }}" method="post">
                    @csrf
                        <button type="submit" class=" self-center bg-transparent hover:bg-white-500 text-black-700 font-semibold hover:text-white py-2 px-4 border border-orange-800 hover:border-transparent rounded" value="Delete">Delete</button>
                    </form> 
                </div>
            </div>
        </li>
    @endforeach    
    </div>
<ul>

