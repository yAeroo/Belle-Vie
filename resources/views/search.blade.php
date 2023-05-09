@extends('layout.AppLayout') @section('title') Search @endsection 

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4 grid h-screen place-items-center">
            @livewire('counter')
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
@livewireScripts
 
<br><br><br><br><br><br>

@endsection