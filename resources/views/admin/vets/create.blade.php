@extends('adminlte::page')

@section('title', 'Pets')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Add Vet</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.vets.index') }}">Vets</a></li>
                    <li class="breadcrumb-item active">Add Vet</li>
                </ol>
            </div>
        </div>
    </div>
@stop

@section('content')
	<div class="card">
    	<div class="card-header">
    		Add Vet
    	</div>
    	<div class="card-body">
    		{!! Form::open(['route' => 'admin.vets.store']) !!}

    			@include('admin.vets.partials.form')

    			{!! Form::submit('Add Vet', ['class' => 'btn btn-primary shadow']) !!}
    		{!! Form::close() !!}
    	</div>
    </div>
@stop
