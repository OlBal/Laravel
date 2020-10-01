
<ul class ="">
    @foreach ($owners as $owner) 
<li class="list"><a href="/owners/{{$owner->id}}">{{ $owner->fullName() }}</a></li>
    @endforeach    
</ul>

