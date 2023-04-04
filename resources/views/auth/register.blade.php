<x-guest-layout>
    <style>
        input[readonly='true'] {
            cursor: not-allowed;
            background: gray;
        }
    </style>
    <form method="POST" action="{{ route('register') }}" novalidate>
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>


        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        {{-- -------------------------- --}}
        <!-- Bank Name eg. GTB-->
        <div class="mt-4">
            <x-input-label for="bank_name" :value="__('Bank Name')" />
            <x-text-input id="bank_name" class="block mt-1 w-full" type="text" name="bank_name" :value="old('bank_name')"
                required placeholder="eg Bank of America" />
            <x-input-error :messages="$errors->get('bank_name')" class="mt-2" />
        </div>

        <!-- Bank Account Name eg Jon Doe -->
        <div class="mt-4">
            <x-input-label for="bank_account_name" :value="__('Bank Account Name')" />
            <x-text-input id="bank_account_name" class="block mt-1 w-full" type="text" name="bank_account_name"
                :value="old('bank_account_name')" required
                placeholder="This should be the same as the name on your bank account and BVN" />
            <x-input-error :messages="$errors->get('bank_account_name')" class="mt-2" />
        </div>

        <!-- Bank Acc. Number -->
        <div class="mt-4">
            <x-input-label for="bank_account_num" :value="__('Bank Account Number')" />
            <x-text-input id="bank_account_num" class="block mt-1 w-full" type="text" minlength=10 maxlength=10
                name="bank_account_num" :value="old('bank_account_num')" required />
            <x-input-error :messages="$errors->get('bank_account_num')" class="mt-2" />
        </div>


        <!-- Referal Name -->
        <div class="mt-4">
            <x-input-label for="referrer" :value="__('Name of Referrer')" />
            <x-text-input id="referrer" class="block mt-1 w-full" type="text" name="referrer" :value="old('referrer')"
                required />
            <x-input-error :messages="$errors->get('referrer')" class="mt-2" />
        </div>

        {{-- ----------------------------------------------- --}}
        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Ref Code -->
        @if (isset($super_code))
            <div class="mt-4">
                <x-input-label for="super_code" :value="__('super_code')" />
                <x-text-input id="super_code" class="block mt-1 w-full" type="text" :value="$super_code ?? old('super_code')"
                    name="super_code" readonly='true' />
            </div>
        @endif

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
