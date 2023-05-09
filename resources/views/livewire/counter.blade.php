
<div class=" bg-[#f87171]">
    <h3 class="h1 alert alert-success">Busca Usuarios</h3>
    <form>
        <input class="form-control" wire:model="searchTerm" type="text" placeholder="ingresa">
    </form><br>

    <ul class="list-group">
        @if($users && $users->count() > 0)
        @foreach($users as $user)
        <a class="list-group-item" href="{{ route('profile', $user) }}">{{$user->name}}</a>
        @endforeach
        @else
        <p class="text-info"></p>
        @endif
    </ul>
</div>

