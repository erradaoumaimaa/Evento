<x-dashboard.layout>
    <div class="w-[70%] m-auto space-y-2">
        <h1 class="text-2xl text-center p-2 bg-vert text-white rounded-lg">New Curricilum Vitae</h1>

        <form action="{{ route('cv.update') }}" method="POST" class="border-4 border-black rounded-lg p-10 lg:grid grid-cols-3 lg:items-start flex flex-col items-center justify-center gap-y-8 gap-x-20">
            @csrf
            @method('PUT')

            <x-form.input-bulk-edit :array="$education" name="education"/>
            <x-form.input-bulk-edit :array="$experiences" name="experiences"/>
            <x-form.input-bulk-edit :array="$hard_skills" name="hard_skills"/>
            <x-form.input-bulk-edit :array="$soft_skills" name="soft_skills"/>
            <x-form.input-bulk-edit :array="$languages" name="languages"/>

            <x-form.button />
        </form>
    </div>

    @push('scripts')
        <script src="/js/cv.js"></script>
        <script src="/js/cv-edit.js"></script>
    @endpush
</x-dashboard.layout>
