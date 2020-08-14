
<ul>
    @foreach ($owners as $owner) 
    <li class="">{{ $owner->fullName() }}</li>
    @endforeach    
</ul>

