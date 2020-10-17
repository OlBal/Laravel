@extends("app")

@section("title")
<title> Animals </title>
@endsection

@section("content")
    @include('animals/_partials/animalsList')
@endsection

