
@section("content")
<div class="flex h-full justify-content bg-white w-3/4 shadow-md rounded px-8 pt-6 pb-8 m-0">
    <form method ="post"class="bg-white w-2/4 shadow-md rounded px-8 pt-6 pb-8 mb-4  ">
        @csrf
        <h2 class="m-0 pb-5 justify-center">Owner Form</h2>

        <fieldset class="card-body">
            <div class="form-group">
                <input 
                required 
                placeholder = "First Name" 
                type = "text" id="first_name" name="first_name" 
                class="block text-gray-700 text-sm font-bold mb-2 @error('first_name')is-invalid @enderror" 
                value="{{  old('first_name')  }}" />

                @error('last_name')
                <p class="invalid-feedback">{{ $message }} </p>
                @enderror
            </div>

            <div class="form-group">
                <input 
                required placeholder = "Last Name" 
                type = "text" id="last_name" 
                name="last_name" 
                class="block text-gray-700 text-sm font-bold mb-2 @error('last_name')is-invalid @enderror" 
                value="{{ old('last_name') }}" />

                @error('last_name')
                <p class="invalid-feedback">{{ $message }} </p>
                @enderror
            </div>

            <div class="form-group">
                <input required placeholder = "Address 1" 
                type = "text" id="address_1" 
                name="address_1" 
                class="block text-gray-700 text-sm font-bold mb-2 @error('address_1')is-invalid @enderror"
                value="{{ old('address_1') }}"/>

                @error('address_1')
                <p class="invalid-feedback">{{ $message }} </p>
                @enderror
            </div>
            
            <div class="form-group">
                <input required placeholder = "Address 2"
                type = "text" id="address_2"
                name="address_2" 
                class="block text-gray-700 text-sm font-bold mb-2  @error('address_2')is-invalid @enderror" 
                value="{{ old('address_2') }}"/>

                @error('address_2')
                <p class="invalid-feedback">{{ $message }} </p>
                @enderror
            </div>

            <div class="form-group">
                <input  
                required placeholder = "Town" 
                type="text" id="town"
                name="town"
                class="block text-gray-700 text-sm font-bold mb-2 @error('town')is-invalid @enderror"
                value="{{ old('town') }}" />

                @error('town')
                <p class="invalid-feedback">{{ $message }} </p>
                @enderror
            </div>

            <div class="form-group">
                <input 
                required placeholder = "Postcode" 
                type="text" id="postcode" 
                name="postcode" 
                class="block text-gray-700 text-sm font-bold mb-2 @error('postcode')is-invalid @enderror" 
                value="{{ old('postcode') }}"/>
               
                @error('postcode')
                <p class="invalid-feedback">{{ $message }} </p>
                @enderror
            </div>

            <div class="form-group">
                <input 
                required placeholder = "Telephone" 
                type = "tel" id="telephone" 
                name="telephone" 
                class="block text-gray-700 text-sm font-bold mb-2 @error('telephone')is-invalid @enderror" 
                value="{{ old('telephone') }}"/>

                @error('telephone')
                <p class="invalid-feedback">{{ $message }} </p>
                @enderror
            </div>
            
            <div class="form-group">
                <input 
                placeholder = "Email" 
                type = "email" id="email" 
                name="email" 
                class="block text-gray-700 text-sm font-bold mb-2  @error('email')is-invalid @enderror" 
                value=" {{ old('email') }}"/>

                @error('email')
                <p class="invalid-feedback">{{ $message }} </p>
                @enderror
            </div>
             <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold mt-2 py-2 px-4 rounded focus:outline-none focus:shadow-outline">Create</button>
        </fieldset>
    </form>
</div>
@endsection