<x-layout class="flex flex-col items-center justify-center mt-32">
    <x-dashboard.navbar>
        <div class="hidden lg:flex items-center space-x-4">
            <a href="{{ route('candidat') }}" class="flex items-center text-white">
                <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                </svg>
                Home
            </a>
            <a href="{{ route('candidat.companies') }}" class="flex items-center text-white">

                <svg class=" w-6 h-6 mr-1"
                     xmlns="http://www.w3.org/2000/svg" width="24" height="24"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                </svg>
                Companies
            </a>
            <a href="{{ route('candidat.jobs') }}" class="flex items-center text-white">

                <svg class=" w-6 h-6 mr-1"
                     xmlns="http://www.w3.org/2000/svg" width="24" height="24"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/>
                </svg>
                Jobs
            </a>
            <a href="{{ route('candidat.profile') }}" class="flex items-center text-white">
                <svg class="text-gray-100 w-6 h-6 mr-1"
                     xmlns="http://www.w3.org/2000/svg" width="24" height="24"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13l-3 3m0 0l-3-3m3 3V8m0 13a9 9 0 110-18 9 9 0 010 18z"/>
                </svg>
                Profile
            </a>
            <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-white-700 flex items-center" role="menuitem" tabindex="-1" id="user-menu-item-2">
                <svg class="w-6 h-6 mr-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z"/>
                    <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                    <path d="M7 12h14l-3 -3m0 6l3 -3" />
                </svg>
                Sign out
            </a>
        </div>
    </x-dashboard.navbar>

    <section class="flex gap-8">
        <!-- SIDEBAR -->
{{--        <x-dashboard.sidebar :links="serialize(['overview' => 'candidat', 'offers' => 'candidat.offers', 'comapnies' => 'profile', 'profile' => 'profile'])" />--}}

        <main {{ $attributes->merge(['class' => 'w-full flex justify-between gap-8']) }}>
            {{ $slot }}
        </main>
    </section>
</x-layout>
