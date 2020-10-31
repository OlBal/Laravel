
<nav class="flex w-screen justify-between shadow-md">
  <a class="font-bold self-center text-xl ml-10" href="/home">The Vet</a> 
  <ul class =" text-lg list-none flex inline-block py-3  flex-row flex-end justify-around">
      <li class="  mr-6 self-center"><a href="/home">Home</a></li>
      <li class="mr-6 self-center"><a href="/owners">Owners</a></li>
      <li class="mr-6 self-center"><a href="/animals">Animals</a></li>

   @if (Auth::check())    
      <li class="mr-6 self-center"> <a class ="self-center bg-transparent hover:bg-orange-500 text-black-700 font-semibold hover:text-white py-2 px-4 border border-orange-800 hover:border-transparent rounded" href="{{ route('logout') }}">Logout</a></li>
    @else
     <li class="mr-6  self-center"><a class ="self-center bg-transparent hover:bg-orange-500 text-black-700 font-semibold hover:text-white py-2 px-4 border border-orange-800 hover:border-transparent rounded" href="/login">Login</a></li>
     @endif
  </ul>  
</nav>

 
         

           
    