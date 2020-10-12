@extends("app")

@section("title")
<title> Owners </title>
@endsection

@section("content")

    @if ($owners->isEmpty() )
        <p>No Owners Found</p>
    @else 
    <div class="flex justify-start">
        @include('owners/_partials/ownersList')
    @endif



</div>



@endsection

