@extends('adminlte::page')

@section('title', 'Pets')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="display-4">Add Owner</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.owners.index') }}">Owners</a></li>
                    <li class="breadcrumb-item active">Add Owner</li>
                </ol>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="card">
    	<div class="card-header">
    		Add Owner
    	</div>
    	<div class="card-body text-dark">
    		{!! Form::open(['route' => 'admin.owners.store']) !!}

    			@include('admin.owners.partials.owner-form')

    			{!! Form::submit('Add Owner', ['class' => 'btn btn-primary shadow']) !!}
    		{!! Form::close() !!}
    	</div>
    </div>
@stop