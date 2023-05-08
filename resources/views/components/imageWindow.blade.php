<div id='modal' class="h-screen w-full fixed left-0 top-0 flex justify-center place-items-center bg-black bg-opacity-50  z-40">
    {{-- {{ Session::get('imageStatus') ? '' : 'hidden'  }} --}}
    <!-- Ventana Emergente -->
    <div class="bg-[#ecf0f1] rounded shadow-lg w-11/12 md:w-1/3">
        @if (Session::get('imageStatus'))
            <!-- Encabezado Ventana -->
            <div class="border-b px-4 py-2 flex justify-center">
                <h3 class="font-semibold text-lg">Imagen de perfil actualizada</h3>
            </div>
            <!-- Cuerpo de la Ventana -->
            <div class="px-5 py-5 flex justify-center items-center">
                <img class="rounded-full" src="{{ asset('storage') . '/pfp/' . $user->profile_pic }}" height="200px" width="200px">
            </div>
            <div class="flex justify-between items-center w-100 border-t p-3">
                    <a href="{{ route('profile.settings', $user) }}" class="hover:bg-gray-200 px-3 py-1 rounded text-gray mr-2">Cancelar</a>

                    <a href="{{ route('profile.settings', $user) }}" class="bg-prim hover:bg-orange-800 px-3 py-1 rounded text-white">Aceptar</a>
            </div>
        @else
            <!-- Encabezado Ventana -->
            <div class="border-b px-4 py-2 flex justify-center">
                <h3 class="font-semibold text-lg">Actualizar imagen de perfil</h3>
            </div>

            <form action="{{ route('config.store', $user) }}" method="POST" enctype='multipart/form-data'>
            @csrf
            <label for="image" id="div-file" class="px-5 py-24 m-10 flex justify-center items-center rounded-lg">    
                <input type="file" name="image" id="image">
                <div class="flex justify-center flex-col items-center">
                    <x-icon name='camera' color='white' variant='solid' class="h-10"/>

                    <h3>Sube tu nueva foto de perfil</h3>
                </div>
            </label>

            <div class="flex justify-between items-center w-100 border-t p-3">
                <p id='closeModal' class="hover:bg-gray-200 px-3 py-1 rounded text-gray mr-2 cursor-pointer">Cancelar</p>
                
                <input type="submit" class="bg-[#f87171] hover:bg-orange-800 px-3 py-1 rounded text-white" value="Aceptar">
            </div>
            </form>
        @endif
    </div>
</div>

<script>
    const modal = document.getElementById('modal');

    const showModal = document.getElementById('edit-bttn');
    const closeModal = document.getElementById('closeModal');
    const acceptModal = document.getElementById('acceptModal');

    showModal.addEventListener('click', function(){
        modal.classList.remove('hidden')
    });

    closeModal.addEventListener('click', function(){
        modal.classList.add('hidden')
    });

    acceptModal.addEventListener('click', function(){
        modal.classList.add('hidden')
    });
    
</script>