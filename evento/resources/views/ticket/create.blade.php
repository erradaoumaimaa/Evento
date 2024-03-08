<x-dashboard.layout>
    <div class="w-[70%] m-auto space-y-2 mt-16">
        <h1 class="text-2xl text-center p-2 bg-vert text-white rounded-lg">New Curricilum Vitae</h1>

        <form action="{{ route('cv.store') }}" method="POST" class="border-4 border-black rounded-lg p-10 lg:grid grid-cols-3 lg:items-start flex flex-col items-center justify-center gap-y-8 gap-x-20">
            @csrf

            <x-form.input name="education[]" :bulk="true"/>
            <x-form.input name="experiences[]" :bulk="true"/>
            <x-form.input name="hard_skills[]" :bulk="true"/>
            <x-form.input name="soft_skills[]" :bulk="true"/>
            <x-form.input name="languages[]" :bulk="true"/>

            <x-form.button />
        </form>
    </div>

    @push('scripts')
        <script src="/js/cv.js"></script>
    @endpush
</x-dashboard.layout>
