
<li {{ $attributes->class(['bottom-0 left-0 bg-gray-700 cursor-pointer hover:bg-gray-700 hover:text-white']) }}>

    <div>
    @if(Auth::user() && Auth::user()->name == 'Admin')
        @if (Route::has('register'))
{{--            <a--}}
{{--                href="{{ route('register-users') }}"--}}
{{--                class="rounded-md px-3 py-4 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20]"--}}
{{--            >--}}
{{--                Register--}}
{{--            </a>--}}
                <a href="{{ route('register-users') }}"
                   class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-700 text-gray-500 hover:text-gray-200 border-l-4 border-transparent hover:border-green-500 pr-6">
                                <span class="inline-flex justify-center items-center ml-4 text-green-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
  <path d="M5.25 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0ZM2.25 19.125a7.125 7.125 0 0 1 14.25 0v.003l-.001.119a.75.75 0 0 1-.363.63 13.067 13.067 0 0 1-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 0 1-.364-.63l-.001-.122ZM18.75 7.5a.75.75 0 0 0-1.5 0v2.25H15a.75.75 0 0 0 0 1.5h2.25v2.25a.75.75 0 0 0 1.5 0v-2.25H21a.75.75 0 0 0 0-1.5h-2.25V7.5Z" />
</svg>

{{--                                --}}
                                </span>
                    <span class="ml-2 font-semibold text-sm tracking-wide truncate font-sans">
                {{ __('Register User') }}
            </span>
                </a>
        @endif
    @endif
    </div>
</li>
