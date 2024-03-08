<div class="flex flex-col gap-2">
    <label for="image_url" class="w-fit py-2 px-4 bg-vert text-white font-black rounded">Image</label>
    <div id="picture-wrapper" class="h-28 border-2 border-dashed border-black flex justify-center items-center relative rounded-lg bg-cover bg-no-repeat">
        <input onchange="previewImage(event)" name="image_url" id="image_url" type="file" class="absolute w-full h-full outline-none opacity-0">
        <p class="text-lg">+</p>
    </div>
</div>
