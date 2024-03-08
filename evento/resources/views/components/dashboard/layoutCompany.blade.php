<x-layout class="flex flex-col items-center justify-center mt-32">
    <x-dashboard.navbarCompany />

    <section class="flex m-10 gap-8">
        <!-- SIDEBAR -->
{{--        <x-dashboard.sidebar :links="serialize(['overview' => 'candidat', 'offers' => 'candidat.offers', 'comapnies' => 'profile', 'profile' => 'profile'])" />--}}

        <main class="w-full flex justify-between gap-8">
            {{ $slot }}
        </main>
    </section>
</x-layout>
