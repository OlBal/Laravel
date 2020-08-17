
<ul class ="list-group list-group-flush">
    @foreach ($owners as $owner) 
<li class="list-group-item"><a href="{{$owner->id}}">{{ $owner->fullName() }}</a></li>
    @endforeach    
</ul>

