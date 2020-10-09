@extends('app')

@section('content')
<div class="h-full">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    {{ __('Hello! Welcome.') }}
</div>

@endsection
