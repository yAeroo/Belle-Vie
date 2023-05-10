<style>
    .errors{
        background-color: rgba(252, 165, 165, 0.685);
    }

    .success{
        background-color: rgba(172, 252, 165, 0.685);
    }
</style>

@if ($errors->any())
    <div id="errors" class="errors text-red-600 px-3 py-2 rounded mb-3">
        <ul>
            <span class="inline"><x-icon variant='mini' name='exclamation-circle' color='red' class="h-4 inline m-2"/>
                <strong class="font-bold">¡Oops! Ha ocurrido un error</strong></span>
            @foreach ($errors->all() as $error)
                <li class="list-disc pl-7 list-inside">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>

    <script>
        const error = document.getElementById('errors');

        setTimeout(function(){
            error.classList.add('hidden');
        }, 10000);
    </script>
@endif

@if (Session::get('success'))
    <div id="success" class="success text-green-600 px-3 py-2 rounded mb-3">
        <ul>
            <span class="inline"><x-icon variant='mini' name='check-circle' color='green' class="h-4 inline m-2"/>
                <span class="">Se han guardado los cambios</span></span>
        </ul>
    </div>

    <script>
        const success = document.getElementById('success');

        setTimeout(function(){
            success.classList.add('hidden');
        }, 10000);
    </script>
@endif

