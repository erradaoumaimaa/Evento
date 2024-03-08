<div class="input-duplicate flex items-center gap-2">
    <input type="{{ $type ?? 'text' }}" name="{{ $name }}" value="{{ $value ?? old($name) }}" id="{{ $name }}" placeholder="Type something here..." class=" p-2 border-2 border-vert rounded shadow-md w-64">
    <button onclick="removeInput(event)" class="{{ $bulk ?? 'hidden' }}  hidden" type="button">-</button>
    <button onclick="addInput(event)" class="{{ $bulk ?? 'hidden' }} " type="button">+</button>
</div>
