<x-dashboard.layoutCompany>

    <div class="w-[70%] m-auto space-y-2 mt-16">
        <h1 class="text-2xl text-center p-2 bg-vert text-white rounded-lg">Edit Job</h1>

        <form action="{{ route('jobs.update', $job->id) }}" method="POST"
              class="border-4 border-black rounded-lg p-10 lg:grid grid-cols-3 lg:items-start flex flex-col items-center justify-center gap-y-8 gap-x-20">
            @csrf
            @method('PUT')

            <x-form.input name="title" :value="$job->title"/>
            <x-form.input name="description" :textarea="true" :value="$job->description" />
            <x-form.input name="skills" :value="$job->skills"/>
            <x-form.input name="location" :value="$job->location"/>

            <x-form.input-layout>
                <x-form.label name="contract"/>
                <select id="contract" name="contract" class="p-2 border-2 border-vert rounded shadow-md w-64">
                    <option value="" selected>Please choose...</option>
                    <option value="hybrid" {{ $job->contract == 'hybrid' ? 'selected' : '' }}>Hybrid</option>

                </select>
                @if($errors->first('contract'))
                    <p class="text-xs text-red-500">{{ $errors->first($name) }}</p>
                @endif
            </x-form.input-layout>

            <x-form.button label="Update Job"/>
        </form>
    </div>
</x-dashboard.layoutCompany>
