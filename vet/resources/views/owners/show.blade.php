@extends("app")

@section("title")
<title> An Owner</title>
@endsection

@section("content")

<div class="h-full w-screen">
<div class="grid gap-5 grid-cols-12 grid-rows-2 bg-white">

 <article class="col-start-2 col-span-2 ">
@include("owners/_partials/owner")
</article>

 <article class="col-start-4 col-span-4 ">
@include ("/animals/_partials/animalsList",["animals" => $animals])
</article>

 <article class="col-start-8 col-span-5 ">
@include("/animals/_partials/animalForm")
</article>

</div>
</div>
@endsection

