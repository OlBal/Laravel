@extends("app")

<ul class ="">
    @foreach ($owners as $owner) 
<li class="list"><a href="{{ $owner }}">{{ $owner }}</a></li>
    @endforeach    
</ul>
