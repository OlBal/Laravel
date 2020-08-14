@extends("app")

@section("title")
<title> Welcome TO THE WOOORRRLLDDD OF TOMORRROWWWWW </title>
@endsection

@section("content")

    @if ($owners->isEmpty() )
        <p>No Owners Found</p>
    @else 
        @include('partials/ownersList')
    @endif
    
@endsection

