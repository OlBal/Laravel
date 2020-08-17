

<form method="post" class="form card mt-4 mb-4"> <h4 class="card-header">Add Animal</h4> <fieldset class="card-body">
@csrf

<div class="form-group">
  <label for="name">Animal Name</label> 
  <input
  id="name" name="name" type="text"
  class="form-control @error('name') is-invalid @enderror"
  value="{{ old("email", $owner ? $owner->animal : "") }}" 
  />
  @error('name') <p class="invalid-feedback">{{ $message }}</p> 
  @enderror
</div>


<div class="form-group">
<label for="type">Type Of Animal</label> 
  <input
  id="type" name="type" type="text"
  class="form-control @error('type') is-invalid @enderror"
  value="{{ old("type", $owner ? $owner->animal : "") }}" />
  @error('comment')
  <p class="invalid-feedback"> {{ $message }} </p>
 @enderror
</div>

 <div class="form-group">
  <label for="date_of_birth">Date Of Birth</label> <input
  id="date_of_birth" name="date_of_birth" type="date"
  class="form-control @error('email') is-invalid @enderror"
  value="{{ old("date_of_birth", $owner ? $owner->animal : "") }}" />
  @error('')
  <p class="invalid-feedback"> {{ $message }} </p>
  @enderror
 </div>

 <div class="form-group">
  <label for="weight_kg">Weight</label> <input
  id="weight_kg" name="weight_kg" type="number"
  placeholder="Weight in KG"
  class="form-control @error('weight_kg') is-invalid @enderror"
  value="{{ old("wight_kg", $owner ? $owner->animal : "") }}" />
  @error('email')
  <p class="invalid-feedback"> {{ $message }}</p>
@enderror
</div>


<div class="form-group">
  <label for="height_m">Height</label> 
  <input
  id="height_m" 
  name="height_m" 
  type="number"
  placeholder="Height in meters"
  class="form-control @error('name') is-invalid @enderror"
  value="{{ old("email", $owner ? $owner->animal : "") }}" 
  />
  @error('name') <p class="invalid-feedback">{{ $message }}</p> @enderror
</div>





</fieldset>
<div class="card-footer text-right">
<button class="btn btn-success">Add Animal</button>
  </div>
</form>