@extends('app')

@section('content')

<div class="h-full w-screen flex justify-center self-center flex-col" > 
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="shadow-lg text-3xl self-center rounded p-6 mt-64">
    {{ __('Hello Welcome!') }}
    </div>
    <a class="shadow-lg text-1xl self-center rounded p-6 mt-6 hover:bg-orange-800 hover:text-white text font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" href="/owners">Proceed to owners</a>
    
</div>

@endsection
