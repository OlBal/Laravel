<form method="post" class="shadow-lg bg-white text-gray-900 list-none text pb-3 pl-3 pr-3 pt-0"> 
<h4 class="card-header">Add Animal</h4> 
<fieldset class="card-body">

@csrf

<div class="form-group">
  <label for="name">Animal Name</label> 
  <input
  id="name" name="name" type="text"
  class="form-control @error('name') is-invalid @enderror"
  value="{{ old("name") }}" 
  />
  @error('name')
    <p class="invalid-feedback">{{ $message }}</p> 
  @enderror
</div>


<div class="form-group">
  <label for="type">Type Of Animal</label> 
  <input
  id="type" name="type" type="text"
  class="form-control @error('type') is-invalid @enderror"
  value="{{ old("type") }}" />
  @error('type')
    <p class="invalid-feedback"> {{ $message }} </p>
  @enderror
  </div>

<div class="form-group">
  <label for="date_of_birth">Date Of Birth</label> 
  <input
  id="date_of_birth" 
  name="date_of_birth" 
  type="date"
  class="form-control @error('email') is-invalid @enderror"
  value="{{ old("date_of_birth") }}" />
  @error('date_of_birth')
    <p class="invalid-feedback"> {{ $message }} </p>
  @enderror
</div>

<div class="form-group">
  <label for="weight_kg">Weight</label>
  <input
  id = "weight_kg" 
  name = "weight_kg" 
  type = "number" 
  step = "0.01"
  placeholder = "Weight in KG"
  class = "form-control @error('weight_kg') is-invalid @enderror"
  value = "{{ old("weight_kg") }}" />
  @error('weight_kg')
    <p class = "invalid-feedback"> {{ $message }} </p>
  @enderror
</div>

<div class="form-group">
  <label for="height_m">Height</label> 
  <input
  id="height_m"  
  name="height_m" 
  type="number"
  step = "0.01"
  placeholder="Height in meters"
  class="form-control @error('height_m') is-invalid @enderror"
  value="{{ old("email") }}" />
  @error('height_m') 
    <p class="height_m"> {{ $message }} </p>
  @enderror
</div>


  <label for="biteyness">Biteyness</label> 
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

<button class="btn ">Add Animal</button>


</form>