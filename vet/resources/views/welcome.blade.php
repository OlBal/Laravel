@extends("app")

@section("title")
<title> Welcome TO THE WOOORRRLLDDD OF TOMORRROWWWWW </title>
@endsection

@section("content")
<div class ="container">
<h5>Welcome</h5>
<p> Welcome to the vetinary practice to end all practices.</p>
@endsection

@section("content")

@foreach (App\Owner::all() as $owners)
    <ul class="list-group">
        <li class="list-group-item ">{{ $owners->fullName() }} </li>
    </ul>
@endforeach
@endsection
</div>

