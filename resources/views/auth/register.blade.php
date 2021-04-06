<x-guest-layout>
   <!-- <div class="row">
    <div class="col-lg-6"> -->
    <x-auth-card>
        <x-slot name="logo">
        <br>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <!-- Student Number -->
            <div>
                <x-label for="stdnum" :value="__('Student No.')" />

                <x-input id="stdnum" class="block mt-1 w-full" type="text" name="stdnum" :value="old('Student No.')" required autofocus />
            </div>
            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Full Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-2">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-2">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-2">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="mt-2">
                <x-label for="dept_id" value="{{ __('Department:') }}"/>
                <select name="dept_id" class="block mt-1 w-full border=gray-300 focus::border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option value="bsit">BSIT</option>
                    <option value="bscs">BSCS</option>
                    <option value="bac">BAC</option>
                    <option value="HCS">HCS</option>
                    <option value="bsed">BSED</option>
                    <option value="bsme">BSME</option>                    
                </select>
            </div>

            <!-- <div class="mt-2">
                <x-label for="role_id" value="{{ __('Register as:') }}"/>
                <select name="role_id" class="block mt-1 w-full border=gray-300 focus::border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option value="alumnilead">Alumni Leader</option>
                    <option value="alumni">Alumni</option>
                </select>
            </div> -->

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <button class="btn btn-success ml-3">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    </x-auth-card>
    <!-- </div>
</div> -->
</x-guest-layout>

