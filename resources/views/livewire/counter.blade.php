<div>
    <form>
        <input class="form-control" wire:model="searchTerm" type="text" placeholder="What are you searching for...">
    </form><br>

    <ul class="list-group">
        @if($users && $users->count() > 0)
        @foreach($users as $user)
        <li class="list-group-item">{{$user->name}}</li>
        @endforeach
        @else
        <p class="text-info">No users found using your search query</p>
        @endif

    </ul>
</div>