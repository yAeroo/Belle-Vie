@extends('layout.AppLayout') @section('title') Search @endsection 

@section('content')

@livewire('counter')

<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <h3 class="h1 alert alert-success">Busca Usuarios</h3>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
@livewireScripts
 
<br><br><br><br><br><br>

@endsection