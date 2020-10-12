@extends("app")

@section("title")
<title> An Owner</title>
@endsection

@section("content")

<div class="h-full w-screen ">
    <div class="flex space-x-56 justify-center py-8 pl-20">
        <h2 class="px-4 text-2xl underline">Owner</h2>
        <h2 class="px-4 text-2xl underline">Animals</h2>
        <h2 class="px-4 text-2xl underline">Add a new animal</h2>
    </div>
    <div class="flex mx-8 ">
        <article class="flex-1 px-4 ">
            @include("owners/_partials/owner")
        </article>
        <article class="flex-initial text-center px-4">
            @include ("/animals/_partials/animalsList",["animals" => $animals])
        </article>
        <article class="flex-1 px-4">
            @include("/animals/_partials/animalForm")
        </article>
    </div>
</div>
@endsection

