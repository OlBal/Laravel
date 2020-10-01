@extends("app")

@section("title")
<title> Welcome</title>
@endsection

@section("content")
<div class ="welcome_container">
    <h1> {{ $welcome }}</h1>
</div>
@endsection

