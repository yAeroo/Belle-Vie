@extends('layout.AppLayout') @section('title') Search @endsection 

@section('content')

@livewire('counter')
<div class="flex items-center gap-4">
    <h1 class="">Que tal soy searc</h1>
    <br>
    <form class=""> 
        <input type="text"  placeholder="usarios, propiedades , etc">
    </form>
</div>
 
<br><br><br><br><br><br>

@endsection