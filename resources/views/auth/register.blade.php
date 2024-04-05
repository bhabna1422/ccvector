{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}

<x-guest-layout>
    @section('section')
     <div class="wrapper">
       <div class="container">
           <div class="row">
               <div class="col-lg-6">
                  <div class="login-details">
                    <img src="{{asset('front/img/logo.png')}}" alt="">
                    <h1>Register your account
                   </h1>
                   <h4>And wait for approval</h4>
                   <h4>Already have an account ?

                   </h4>
                   <button class="btn btn-register">Login</button>
                  </div>
               </div>
               <div class="col-lg-6">
                   <div class="login-from1">
                       <!-- Session Status -->
           <x-auth-session-status class="mb-4" :status="session('status')" />

           <!-- Validation Errors -->
           <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                              <!-- Email Address -->
                           <div>
                            <x-label for="email" :value="__('Name')" />

                            <x-input id="email" class="block mt-1 w-full" type="text" name="name" :value="old('email')" required autofocus />
                           </div>

                           {{-- <div>
                            <x-label for="email" :value="__('First Name')" />

                            <x-input id="email" class="block mt-1 w-full" type="text" name="name" :value="old('email')" required autofocus />
                           </div>

                           <div>
                            <x-label for="email" :value="__('Last Name')" />

                            <x-input id="email" class="block mt-1 w-full" type="text" name="name" :value="old('email')" required autofocus />
                           </div> --}}

                           <!-- Email Address -->
                           <div>
                               <x-label for="email" :value="__('Email')" />

                               <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                           </div>

                           <!-- Password -->
                           <div class="mt-4">
                               <x-label for="password" :value="__('Password')" />

                               <x-input id="password" class="block mt-1 w-full"
                                               type="password"
                                               name="password"
                                               required autocomplete="current-password" />
                           </div>
                           <div class="mt-4">
                            <x-label for="password_confirmation" :value="__('Confirm Password')" />
            
                            <x-input id="password_confirmation" class="block mt-1 w-full"
                                            type="password"
                                            name="password_confirmation" required />
                        </div>
                        

                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>
            
                            <x-button class="ml-4">
                                {{ __('Register') }}
                            </x-button>
                        </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
     </div>
    @endsection
   </x-guest-layout>

