
@section("content")
<div class="flex h-full justify-center justify-self-center bg-white w-3/4 shadow-md rounded px-8 pt-6 pb-8 mt-10">
    <form method ="post"class="text-center self-center bg-white w-2/4 shadow-lg rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        <h2 class="m-0 pb-5 justify-center">New Owner Form</h2>
        <fieldset>
                <input 
                required 
                placeholder = "First Name" 
                type = "text" id="first_name" name="first_name" 
                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 text-sm font-bold mb-2 @error('first_name')is-invalid @enderror" 
                value="{{  old('first_name')  }}" />

                @error('last_name')
                <p class="invalid-feedback">{{ $message }} </p>
                @enderror

                <input 
                required placeholder = "Last Name" 
                type = "text" id="last_name" 
                name="last_name" 
                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 text-sm font-bold mb-2 @error('last_name')is-invalid @enderror" 
                value="{{ old('last_name') }}" />

                @error('last_name')
                <p class="invalid-feedback">{{ $message }} </p>
                @enderror

                <input required placeholder = "Address 1" 
                type = "text" id="address_1" 
                name="address_1" 
                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 text-sm font-bold mb-2 @error('address_1')is-invalid @enderror"
                value="{{ old('address_1') }}"/>

                @error('address_1')
                <p class="invalid-feedback">{{ $message }} </p>
                @enderror
            
                <input required placeholder = "Address 2"
                type = "text" id="address_2"
                name="address_2" 
                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 text-sm font-bold mb-2 @error('address_2')is-invalid @enderror" 
                value="{{ old('address_2') }}"/>

                @error('address_2')
                <p class="invalid-feedback">{{ $message }} </p>
                @enderror

                <input  
                required placeholder = "Town" 
                type="text" id="town"
                name="town"
                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 text-sm font-bold mb-2 @error('town')is-invalid @enderror"
                value="{{ old('town') }}" />

                @error('town')
                <p class="invalid-feedback">{{ $message }} </p>
                @enderror

                <input 
                required placeholder = "Postcode" 
                type="text" id="postcode" 
                name="postcode" 
                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 text-sm font-bold mb-2 @error('postcode')is-invalid @enderror" 
                value="{{ old('postcode') }}"/>
               
                @error('postcode')
                <p class="invalid-feedback">{{ $message }} </p>
                @enderror

                <input 
                required placeholder = "Telephone" 
                type = "tel" id="telephone" 
                name="telephone" 
                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 text-sm font-bold mb-2 @error('telephone')is-invalid @enderror" 
                value="{{ old('telephone') }}"/>

                @error('telephone')
                <p class="invalid-feedback">{{ $message }} </p>
                @enderror
            
                <input 
                placeholder = "Email" 
                type = "email" id="email" 
                name="email" 
                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 text-sm font-bold mb-2  @error('email')is-invalid @enderror" 
                value=" {{ old('email') }}"/>

                @error('email')
                <p>{{ $message }} </p>
                @enderror
             <button type="submit" class="mt-2 bg-orange-500 hover:bg-orange-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Create</button>
        </fieldset>
    </form>
</div>
@endsection