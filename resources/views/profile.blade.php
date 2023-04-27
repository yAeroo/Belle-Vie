@extends('layout.AppLayout') @section('title') {{ Str::title($user->username) }} @endsection

@section('content')
<x-navbar />
    <section id="profile" class="min-h-screen bg-[url({{ asset('img/profile-banner.png') }})] bg-cover flex items-end justify-center pt-40 ">
        <article
            id="profile-info"
            class="bg-white h-[80vh] sm:w-10/12 w-full sm:rounded-t-3xl p-5 shadow-black shadow-lg transition-all flex flex-col">
            <div
                id="profile-pic"
                class="w-full flex justify-center">
                <img
                    src="{{ asset('storage') . '/pfp/' . $user->profile_pic }}"
                    class="-mt-28 w-52 h-52 lg:w-60 lg:h-60 rounded-full border-8 border-solid border-white transition-all"
                    alt="profile-pic">
            </div>

            <div id="edit-bttn" class="relative">
                <div
                    to="/profile/settings"
                    class="absolute -top-20 lg:-top-28 left-[85%] md:left-[70%] xl:left-[82%] flex md:w-48 items-center justify-center bg-prim p-2 rounded-full">
                </div>
            </div>

            <div id="profile-name" class="my-5">
                <p class="font-title text-4xl md:text-5xl text-center font-bold tracking-wide transition-all">
                    {{ $user_fn }}
                </p>
            </div>
        </article>
    </section>
@endsection


