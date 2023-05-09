
<div class="flex justify-center items-center flex-col">
    <div>
    <form>
        <div id="input-cont" class="flex items-center border-solid border-2 border-black rounded-lg bg-white">
            <span class="icon inline p-1"><x-icon name="magnifying-glass" color="#9ca3af"/></span>
        <input class="form-control rounded-lg px-3 bg-white focus:outline-none" wire:model="searchTerm" type="text" placeholder="Estas buscando algo?">
        </div>
    </form><br>
    </div>
    <ul class="list-group">
        @if($users && $users->count() > 0)
        @foreach($users as $user)
        <a class="list-group-item grid text-center max-w-md mx-auto bg-[#f87171] rounded-xl shadow-md overflow-hidden md:max-w-2xl m-5 p-5" href="{{ route('profile', $user) }}">            <img
            src="{{ asset('storage') . '/pfp/' . $user->profile_pic }}"
            class=" w-1/6  rounded-full transition-all border-secu border-solid border-4"
            alt="profile-pic">
{{$user->name}}</a>
        @endforeach
        @else
        <p class="text-info"></p>
        @endif
    </ul>
</div> 


