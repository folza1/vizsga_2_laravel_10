{{--<x-app-layout>--}}
{{--    <x-slot name="header">--}}
{{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            {{ __('Dashboard') }}--}}
{{--        </h2>--}}
{{--    </x-slot>--}}

{{--    <div class="py-12">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--                <div class="p-6 text-gray-900">--}}
{{--                    {{ __("You're logged in!") }}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</x-app-layout>--}}
<x-layout>
    <h1 class="text-3xl text-center font-bold my-6">Be vagy jelentkezve kedves  {{ Auth::user()->name }}!</h1>
    <form method="POST" class="mx-auto text-center" action="{{ route('logout') }}">
        @csrf
        <button class="text-2xl p-3 border bg-amber-200 hover:bg-gray-400 text-black" href="route('logout')">
            Kijelentkezés
        </button>
    </form>
</x-layout>
