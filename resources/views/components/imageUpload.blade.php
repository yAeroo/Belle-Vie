<label for="image" id="div-file" class="px-5 py-12 m-10 cursor-pointer flex justify-center items-center rounded-lg border-dashed border-2 border-[#82589F]">    
    <input type="file" name="image" id="image">
    <div class="flex justify-center flex-col items-center w-full">
        <x-icon name='camera' color='black' variant='solid' class="h-10"/>

        <h3 id="original-text" class="text-black font-semibold">Sube tu imagen aquí</h3>

        <h3 id="file-upload-filename" class="text-ellipsis hidden overflow-hidden text-black font-semibold whitespace-nowrap w-full">
            {{-- Texto del archivo subido --}} 
        </h3>
    </div>
</label>

<script>
    var input = document.getElementById('image');
    var hideText = document.getElementById('original-text');
    var infoArea = document.getElementById('file-upload-filename');

    input.addEventListener('change', showFileName);

    function showFileName(event) {

        var input = event.srcElement;

        var fileName = input.files[0].name;
        hideText.classList.add('hidden');

        infoArea.classList.remove('hidden');
        infoArea.textContent = fileName;
    }
</script>