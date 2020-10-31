@extends("app")

 @section("title")
        Edit Animal
    @endsection

@section('content')
    @include('animals/_partials/animalsList')
    @include('animals/_partials/animalForm')
@endsection

