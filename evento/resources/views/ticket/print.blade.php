<x-layout class="flex flex-col items-center justify-center">
<div class="container mx-auto ">
    <div class="w-full bg-white overflow-hidden">
        <div class="p-4 sm:p-6">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-between gap-4">
                    <img src="{{ public_path() . '/storage/' . $picture }}" alt="" class="w-16 rounded-full">
                    <div>
                        <h2 class="text-2xl font-semibold">{{ $name }}</h2>
                        <p class="text-sm text-gray-600">{{ $title }}</p>
                    </div>
                </div>
                <div>
                    <p class="text-sm text-gray-600">Email: {{ $email }}</p>
                    <p class="text-sm text-gray-600">Location: {{ $location }}</p>
                </div>
            </div>
            <hr class="my-4">
            <div>
                <h3 class="text-lg font-semibold mb-2">Summary</h3>
                <p class="text-sm leading-relaxed">{{ $summary }}</p>
            </div>

            <x-dashboard.cv-section name="experience">
                @foreach($experiences as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </x-dashboard.cv-section>

            <x-dashboard.cv-section name="education">
                @foreach($education as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </x-dashboard.cv-section>

            <x-dashboard.cv-section name="hard_skills">
                @foreach($hard_skills as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </x-dashboard.cv-section>

            <x-dashboard.cv-section name="soft_skills">
                @foreach($soft_skills as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </x-dashboard.cv-section>

            <x-dashboard.cv-section name="languages">
                @foreach($languages as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </x-dashboard.cv-section>

        </div>
    </div>
</div>
</x-layout>
