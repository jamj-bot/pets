@extends('adminlte::page')

@section('title', 'Pets')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Owner</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.owners.index') }}">Owners</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.owners.show', $owner) }}">Profile</a></li>
                    <li class="breadcrumb-item active">Edit</li>
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
    <div class="card">
    	<div class="card-header">
    		Edit Owner
    	</div>
    	<div class="card-body text-dark">
    		{!! Form::model($owner, ['route' => ['admin.owners.update', $owner], 'method' => 'put']) !!}

    			@include('admin.owners.partials.form')

    			{!! Form::submit('Update Owner', ['class' => 'btn btn-primary shadow']) !!}
    		{!! Form::close() !!}
    	</div>
    </div>
@stop

