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
    <p class="text-2xl font-bold text-center my-5">Elfelejtett jelszó</p>
    <form action="{{ route('password.email') }}" method="POST" class="w-1/3 mx-auto mt-10 border rounded p-3">
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

        <div class="mx-3">
            <button type="submit" class="btn btn-primary text-black bg-blue-300 w-full mt-4">Email küldése</button>
        </div>
    </form>
</x-layout>
{{--<x-guest-layout>--}}
{{--    <div class="mb-4 text-sm text-gray-600">--}}
{{--        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}--}}
{{--    </div>--}}

{{--    <!-- Session Status -->--}}
{{--    <x-auth-session-status class="mb-4" :status="session('status')" />--}}

{{--    <form method="POST" action="{{ route('password.email') }}">--}}
{{--        @csrf--}}

{{--        <!-- Email Address -->--}}
{{--        <div>--}}
{{--            <x-input-label for="email" :value="__('Email')" />--}}
{{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            <x-primary-button>--}}
{{--                {{ __('Email Password Reset Link') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</x-guest-layout>--}}
