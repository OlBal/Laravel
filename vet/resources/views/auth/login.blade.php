@extends('app')

@section('content')
 <div style="background-image: url('../../public/img/jf-brou-915UJQaxtrk-unsplash.jpg');"> 
<div class ="flex flex-direction-row justify-center align-center text-center h-auto w-screen mt-20">
                    <form class="flex flex-col  h-auto bg-white shadow-lg rounded px-8 pt-6 pb-8 mb-4 " method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="text-xl">{{ __('Login') }}</div>
                        
                            <label for="email" class="text-gray-700 text-sm font-bold py-4">{{ __('E-Mail Address') }}</label>

                                <input id="email" type="email" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                       
                            <label for="password" class="block text-gray-700 text-sm font-bold py-2 mb-2">{{ __('Password') }}</label>

                           
                                <input id="password" type="password" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                      
                  
                                <div class="form-check">
                                        <input class="mr-2 leading-tight" type="checkbox"type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class=" mt-4 form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>

                      
                                <button type="submit" class=" bg-orange-500 hover:bg-orange-800 text-white font-bold p-4 mb-2 rounded focus:outline-none focus:shadow-outline">
                                    {{ __('Login') }}
                                </button>


                                <a class ="mb-2 "href="/register">Register a new account </a>


                                @if (Route::has('password.request'))
                                    <a class="mb-2 inline-block align-baseline font-bold text-sm text-orange-500 hover:text-orange-800" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                        
                        </div>
                    </form>
                 </div>
                </div>
            </div>
    </div>
</div>
@endsection
