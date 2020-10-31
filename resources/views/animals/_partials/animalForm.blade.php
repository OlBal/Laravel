<form method="post" class="shadow-lg bg-white text-gray-900 list-none text pb-3 pl-3 pr-3 pt-0 text-center"> 
<h4 class="card-header">Add Animal</h4> 
<fieldset class="card-body">

@csrf

  <input
  id="name" name="name" type="text" placeholder="Name"
  class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 text-sm font-bold mb-2 @error('type') is-invalid @enderror"
  value="{{ old("name") }}" />
  @error('name')
    <p class="invalid-feedback">{{ $message }}</p> 
  @enderror

  <input
  id="type" name="type" type="text" placeholder="Type"
  class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 text-sm font-bold mb-2 @error('type') is-invalid @enderror"
  value="{{ old("type") }}" />
  @error('type')
    <p class="invalid-feedback"> {{ $message }} </p>
  @enderror
 
  <input
  id="date_of_birth" 
  name="date_of_birth" 
  type="date"
  placeholder="Date Of Birth"
  class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 text-sm font-bold mb-2 @error('email') is-invalid @enderror"
  value="{{ old("date_of_birth") }}" />
  @error('date_of_birth')
    <p class="invalid-feedback"> {{ $message }} </p>
  @enderror

  <input
  id = "weight_kg" 
  name = "weight_kg" 
  type = "number" 
    placeholder="Weight (In KG)"
  step = "0.01"
  placeholder = "Weight in KG"
  class = "bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 text-sm font-bold mb-2 @error('weight_kg') is-invalid @enderror"
  value = "{{ old("weight_kg") }}" />
  @error('weight_kg')
    <p class = "invalid-feedback"> {{ $message }} </p>
  @enderror

  <input
  id="height_m"  
  name="height_m" 
  type="number"
  step = "0.01"
    placeholder="Height (In Meters)"
  placeholder="Height in meters"
  class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 text-sm font-bold mb-2 @error('height_m') is-invalid @enderror"
  value="{{ old("email") }}" />
  @error('height_m') 
    <p class="height_m"> {{ $message }} </p>
  @enderror

  <input
  id="biteyness"  
  name="biteyness" 
  type="range" min="1" max="5"
  placeholder="Biteyness"
  class="border-0 form-control @error('biteyness') is-invalid @enderror"
  value="{{ old("biteyness") }}" />
  @error('biteyness') 
    <p class="invalid-feedback"> {{ $message }} </p>
  @enderror
</fieldset>

<button type="submit" class="mt-2 bg-orange-500 hover:bg-orange-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Add Animal</button>


</form>