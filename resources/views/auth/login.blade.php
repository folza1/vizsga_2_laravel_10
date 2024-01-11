<x-layout>
    @if(session()->has('success'))
        <div class="alert alert-success text-center" role="alert" id="success-message">
            <p>{{ session('success') }}</p>
        </div>

        <script>
            // Automatikus üzenet eltűnés 5 másodperc után
            $(document).ready(function () {
                setTimeout(function () {
                    $('#success-message').fadeOut('slow');
                }, 5000); // 5000 miliszekundum = 5 másodperc
            });
        </script>
    @endif
    <p class="text-2xl font-bold text-center my-5">Bejelentkezés</p>
    <form action="{{ route('login') }}" method="POST" class="w-1/3 mx-auto mt-10 border rounded p-3">
        @csrf
        <div class="mb-3">
            <div class="mx-3">
                <label for="email" class="form-label text-lg">E-mail</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email címed"
                       value="{{ old('email') }}" required>
                @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
        </div>

        <div class="mb-3">
            <div class="mx-3">
                <label for="password" class="form-label text-lg">Jelszó</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Jelszavad"
                       required>
                @error('password')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
        </div>

        <div class="mx-3">
            <button type="submit" class="btn btn-primary text-black bg-blue-300 w-full mt-4">Belépés</button>
        </div>

        <div class="mt-3">
            <a href="{{ route('password.request') }}" class="btn btn-link d-block mx-auto">Elfelejtetted a
                jelszavad?</a>
        </div>
    </form>
</x-layout>

{{--<x-guest-layout>--}}
{{--    <!-- Session Status -->--}}
{{--    <x-auth-session-status class="mb-4" :status="session('status')" />--}}

{{--    <form method="POST" action="{{ route('login') }}">--}}
{{--        @csrf--}}

{{--        <!-- Email Address -->--}}
{{--        <div>--}}
{{--            <x-input-label for="email" :value="__('Email')" />--}}
{{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password" :value="__('Password')" />--}}

{{--            <x-text-input id="password" class="block mt-1 w-full"--}}
{{--                            type="password"--}}
{{--                            name="password"--}}
{{--                            required autocomplete="current-password" />--}}

{{--            <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Remember Me -->--}}
{{--        <div class="block mt-4">--}}
{{--            <label for="remember_me" class="inline-flex items-center">--}}
{{--                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">--}}
{{--                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
{{--            </label>--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            @if (Route::has('password.request'))--}}
{{--                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">--}}
{{--                    {{ __('Forgot your password?') }}--}}
{{--                </a>--}}
{{--            @endif--}}

{{--            <x-primary-button class="ms-3">--}}
{{--                {{ __('Log in') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</x-guest-layout>--}}
