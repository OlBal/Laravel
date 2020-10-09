@extends("app")

@section("title")
<title> Owners </title>
@endsection

@section("content")
<div class = "grid grid-cols-6 grid-rows-6">

    @if ($owners->isEmpty() )
        <p>No Owners Found</p>
    @else 
    <div class="row-span-2 col-start-2 col-span-2">
        @include('owners/_partials/ownersList')
    @endif
</div>
    
@endsection

