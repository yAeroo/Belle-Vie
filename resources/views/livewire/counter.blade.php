<div class="flex justify-center items-center flex-col">
    <div>
    <form>
        <div id="input-cont" class="flex items-center border-solid border-2 border-black rounded-lg bg-white">
            <span class="icon inline p-1"><x-icon name="magnifying-glass" color="#9ca3af"/></span>
        <input class="form-control rounded-lg px-3 bg-white focus:outline-none" wire:model="searchTerm" type="text" placeholder="¿Buscas algo?">
        </div>
    </form><br>
    </div>
<div class="relative">
    <ul class="list-group">
        @if($users && $users->count() > 0)
            @foreach($users as $user)
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 items-center text-[#E95F4A] text-3xl text-center max-w-md mx-auto bg-white drop-shadow-lg rounded-xl shadow-md overflow-hidden md:max-w-2xl m-5 p-5 ">
                    <div class="sm:col-auto">
                        <img src="{{ asset('storage/pfp/' . $user->profile_pic) }}" class="mx-auto block  w-2/5 h-24 md:w-48 rounded-full  border-secu border-solid border-4" alt="profile-pic">
                    </div>
                    <a class="list-group-item col-span-2 sm:col-auto texte-center" href="{{ route('profile', $user) }}">
                        {{$user->name}}
                    </a>              
                </div>
            @endforeach
        @endif

        @if($places && $places->count() > 0)
            @foreach($places as $place)
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 items-center text-[#E95F4A] text-3xl text-center max-w-md mx-auto bg-white drop-shadow-lg rounded-xl shadow-md overflow-hidden md:max-w-2xl m-5 p-5 ">
                    <div class="sm:col-auto">
                        <img src="{{ asset('storage/place/' . $place->img) }}" class="mx-auto block  w-2/5 h-24 md:w-48 rounded-full  border-secu border-solid border-4" alt="profile-pic">
                    </div>
                    <a class="list-group-item col-span-2 sm:col-auto text-center" href="{{ route('place.index', $place) }}">
                        {{$place->place_name}}
                    </a>
                </div>
            @endforeach
        @endif
    </ul>
</div>
</div> 

