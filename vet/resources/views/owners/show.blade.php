@extends("app")

@section("title")
<title> An Owner</title>
@endsection

@section("content")

@include("owners/_partials/owner")

@include ("/animals/_partials/animalsList",["animals" => $animals])

@include("/animals/_partials/animalForm")

@endsection

