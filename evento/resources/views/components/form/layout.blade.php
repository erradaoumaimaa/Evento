@props(['role'])

<form action="{{ route('register.' . $role) }}" method="POST" id="{{ $role }}-form" class="absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] bg-white rounded-lg opacity-[0] z-[-50] transition-all" enctype="multipart/form-data">
    @csrf

    <h1 class="mb-4 text-center p-4 w-full bg-vert rounded-t-lg text-3xl font-black text-white">{{ strtoupper($role) }} SIGN-UP</h1>
    <div class="p-10 lg:grid grid-cols-3 lg:items-start flex flex-col items-center justify-center gap-y-8 gap-x-20">
        {{--        USER/DEFAULT INPUTS --}}
        @include('auth._default-inputs')

        {{ $slot }}

        @include('auth._image-input')

        <x-form.button />
    </div>
</form>
