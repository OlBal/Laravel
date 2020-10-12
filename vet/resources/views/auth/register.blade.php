@extends('app')

@section('content')
<div class="flex h-full justify-center mt-24 bg-white w-3/4 px-8 pt-6 pb-8 m-0">               
                    <form method="POST" class ="flex flex-col text-center self-center bg-white w-2/4 shadow-md rounded px-8 pt-6 pb-8 mb-4action="{{ route('register') }}">
                         <div class="m-0 pb-5 justify-center">{{ __('Register') }}</div>
                        @csrf
                     <fieldset>
                                <input id="name" type="text" 
                                 placeholder = "Name" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 text-sm font-bold mb-2 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          
                    
                                <input placeholder = "Email" 
                                id="email" type="email" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 text-sm font-bold mb-2 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                       
                                <input id="password" type="password" placeholder = "Password" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 text-sm font-bold mb-2 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                       
                                <input id="password-confirm" 
                                placeholder = "Confirm Password" type="password" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 text-sm font-bold mb-2" name="password_confirmation" required autocomplete="new-password">
                         
                                <button type="submit" class="bg-orange-500 hover:bg-orange-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                    {{ __('Register') }}
                                </button>
                                </div>
                                <fieldset>
                            </form>
            </div>
       

@endsection
