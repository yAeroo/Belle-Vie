@extends('layout.AppLayout') @section('title') Search @endsection 

@section('content')
<x-navbar />

        <div class="col-md-4 p-10 h-screen place-items-center">
            @livewire('counter')
        </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
@livewireScripts

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

@endsection