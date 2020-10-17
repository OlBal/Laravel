@extends("app")

@section("title")
<title> Owners </title>
@endsection

@section("content")

    @if ($owners->isEmpty() )
        <p class="shadow-lg text-4xl self-center rounded p-4 mt-64">No Owners Found</p>
    @else 
    <div class="flex flex-col justify-center">
        <section class=" flex flex-row justify-between items-center h-24 text-gray-700  bg-gray-400 ">
            <h1 class="font-bold text-2xl ml-10">Owners</h1>
             <button class=" mr-10 self-center bg-transparent hover:bg-orange-500 text-black-700 font-semibold hover:text-white py-2 px-4 border border-orange-800 hover:border-transparent rounded" >
            <a href="/owners/create">Add Owner</a>
            </button>
        </section>
        @include('owners/_partials/ownersList')
    </div>

    @endif




@endsection

