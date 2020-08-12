@extends("app")

@section("title")
<title> Address </title>
@endsection

@section("content")

<h5>Contact</h5>

@foreach (App\Owner::all() as $owners)

    <ul class="list-group">
        <li class="list-group-item ">{{ $owners->fullAddress() }} </li>
    </ul>

@endforeach

@endsection
