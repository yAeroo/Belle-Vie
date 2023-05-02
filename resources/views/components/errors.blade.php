<style>
    .errors{
        background-color: rgba(252, 165, 165, 0.685);
    }
</style>

@if ($errors->any())
    <div class="errors text-red-600 px-3 py-2 rounded mb-3">
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
@endif