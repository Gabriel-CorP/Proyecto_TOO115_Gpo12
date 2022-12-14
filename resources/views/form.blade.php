@extends('layouts.plantilla')
@section('css')
    @livewireStyles
    <link href="{{ asset('css/form_registro_asociado.css') }}" rel="stylesheet">
@endsection
@section('contenido')
    <br>
    <div class="container">
        <div class="card">
        <div class="card-header text-center">
            Registro de datos para asociado
        </div>
        <div class="card-body">
            <livewire:wizard />
        </div>
        </div>
            
    </div>
@endsection    

@section('scripts')
    @livewireScripts
@endsection