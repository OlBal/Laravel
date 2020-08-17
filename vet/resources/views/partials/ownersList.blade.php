
<ul>
    @foreach ($owners as $owner) 
    <li class=""><a href="">{{ $owner->fullName() }}</a></li>
    @endforeach    
</ul>

