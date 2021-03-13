@extends('adminlte::page')

@section('title', 'Pets')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Owners</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Pets</li>
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
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table id="pets_table" class="table table-bordered table-hover text-capitalize" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col">Owner</th>
                            <th scope="col">Pet Name</th>
                            <th scope="col">Specie</th>
                            <th scope="col">Breed</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Status</th>
                            <th scope="col">Profile</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pets as $pet)
                            <tr>
                                <td>
                                    <a href="{{ route('admin.owners.show', $pet->owner) }}">
                                    {{ $pet->owner->name }}
                                        <span class="text-muted text-sm">
                                            <p class="mb-0">{{ $pet->owner->email }}</p>
                                        </span>
                                    </a>
                                </td>
                                <td>
                                    {{ $pet->name }}
                                    <span class="text-muted text-sm">
                                        <p class="mb-0">{{ $pet->chip }}</p>
                                    </span>
                                </td>
                                <td>
                                    {{ $pet->species->common_name }}
                                    <span class="text-muted text-sm">
                                        <p class="font-italic mb-0">{{ $pet->species->scientific_name }}</p>
                                    </span>
                                </td>
                                <td>{{ $pet->breed }}</td>
                                <td>{{ $pet->sex }}</td>
                                <td>{{ $pet->status }}</td>
                                <td>
                                    <a class="btn btn-block btn-outline-info btn-sm shadow" href="{{route('admin.pets.show', $pet) }}">Profile</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th scope="col">Owner</th>
                            <th scope="col">Pet Name</th>
                            <th scope="col">Specie</th>
                            <th scope="col">Breed</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Status</th>
                            <th scope="col">Profile</th>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>
        <div class="card-footer">

        </div>
    </div>
@stop

@section('js')
    <script>
        $(document).ready(function() {
            $('#pets_table').DataTable();
        });
    </script>
@stop