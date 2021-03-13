@extends('adminlte::page')

@section('title', 'Pets')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Vets</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Vets</li>
                </ol>
            </div>
        </div>
    </div>
@stop

@section('content')
	@if(session('info'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('info') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @livewire('admin.vets-index')
@stop
