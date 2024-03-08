@props(['name'])

<div class="mt-4">
    <h3 class="text-lg font-semibold mb-2">{{ ucwords(str_replace('_', ' ', $name)) }}</h3>
    <ul class="list-disc list-inside text-sm">
        {{ $slot }}
    </ul>
</div>
