@extends('adminlte::page')

@section('title', 'Pets')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="display-4">Add Species</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.species.index') }}">Species</a></li>
                    <li class="breadcrumb-item active">Add Species</li>
                </ol>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="card">
    	<div class="card-header">
    		Add Species
    	</div>
    	<div class="card-body">
    		{!! Form::open(['route' => 'admin.species.store']) !!}

    			@include('admin.species.partials.form')

    			{!! Form::submit('Add Species', ['class' => 'btn btn-primary shadow']) !!}
    		{!! Form::close() !!}
    	</div>
    </div>
@stop
