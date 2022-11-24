<x-guest-layout>
<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <x-nav-link :href="route('register')" :active="request()->routeIs('register')">
                        {{ __('Register') }}
                    </x-nav-link>
               
            </div>
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

            <!-- Username -->
            <div>
                <x-label for="username" :value="__('UserName')" />

                <x-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus />
            </div>

             <!-- Fullname -->
             <div>
                <x-label for="fullname" :value="__('FullName')" />

                <x-input id="fullname" class="block mt-1 w-full" type="text" name="fullname" :value="old('fullname')" required autofocus />
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

            <!-- Alamat -->
            <div class="mt-4">
                <x-label for="address" :value="__('Alamat')" />

                <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required />
            </div>

             <!-- Tanggal -->
             <div class="mt-4">
                <x-label for="birthdate" :value="__('Tanggal')" />

                <x-input id="birthdate" class="block mt-1 w-full" type="date" name="birthdate" :value="old('birthdate')" required />
            </div>

            <!-- No.Telepon -->
            <div class="mt-4">
                <x-label for="phonenumber" :value="__('No. Telepon')" />

                <x-input id="phonenumber" class="block mt-1 w-full" type="text" name="phonenumber" :value="old('phonenumber')" required />
            </div>

              <!-- agama-->
              <div class="mt-4">
                <x-label for="agama" :value="__('Agama')" />

                <x-input id="agama" class="block mt-1 w-full" type="text" name="agama" :value="old('agama')" required />
            </div>

            <!-- jeniskelamin-->
            <div class="mt-4">
                <x-label for="jeniskelamin" :value="__('Jenis Kelamin')" />
                <select name="jeniskelamin" id="jeniskelamin">
                    <option value="1">Laki-Laki</option>
                    <option value="2">Perempuan</option>
                </select>
                <!-- <x-input id="jeniskelamin" class="block mt-1 w-full" type="numeric" name="jeniskelamin" :value="old('agama')" required /> -->
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
</x-guest-layout>
