@props(['name'])

<div class="flex gap-4 items-center w-full">
    <x-form.label color="[#ffb700]" :name="$name" />
    <p class="py-2 px-4 border-2 border-orange rounded">{{ auth()->user()->$name }}</p>
</div>
