@extends('adminlte::page')

@section('title', 'Pets')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="display-4">Pet's Profile</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.pets.index') }}">Pets</a></li>
                    <li class="breadcrumb-item active">{{ $pet->name }}</li>
                </ol>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="container-fluid">
{{--         {{Route::currentRouteName()}} --}}
            @if(session('info'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('info') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="card card-purple card-outline">
                    <div class="card-body box-profile text-dark">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="@if($pet->image) {{ Storage::url($pet->image->url) }} @else https://cdn.pixabay.com/photo/2017/01/31/17/57/animal-2025999_960_720.png @endif" alt="Pet profile picture">
                        </div>


                        <h3 class="profile-username text-center mb-0">{{ $pet->name }}</h3>

                        <p class="text-muted text-center">#{{ $pet->chip }}</p>
                        <div class="text-center">
                        <button type="button" class="btn btn-sm bg-gradient-success shadow " data-toggle="modal" data-target="#createConsultation">
                            <i class="fas fa-fw fa-plus"></i>Consultation
                        </button>
                        <!-- Modal -->
                        @include('admin.pets.partials.modals.createConsultation')
                        </div>
                        <hr>

                        <strong><i class="fas fa-fw fa-user-tie"></i> Owner</strong>
                        <p class="text-muted">
                            <a href="{{ route('admin.owners.show', $pet->owner) }}">{{ $pet->owner->name }}</a></p>
                        <hr>

                        <strong><i class="fas fa-fw fa-paw"></i> Species</strong>
                        <p class="text-muted">{{ $pet->species->common_name }} <span class="font-italic">/ {{ $pet->species->scientific_name }}</span></p>
                        <hr>
                        <strong><i class="fas fa-fw fa-award"></i> Breed</strong>
                        <p class="text-muted">{{ $pet->breed }}</p>
                        <hr>
                        <strong><i class="fas fa-fw fa-venus-mars"></i> Gender</strong>
                        <p class="text-muted">{{ $pet->sex }}</p>
                        <hr>
                        <strong><i class="fas fa-fw fa-calendar-day"></i> DOB</strong>
                        <p class="text-muted">{{ $pet->dob }} / {{ $pet->age }}</p>
                        <hr>
                        <strong><i class="fas fa-fw fa-neuter"></i> Neutered</strong>
                        <p class="text-muted">{{ $pet->neutered }}</p>
                        <hr>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-sm bg-gradient-purple btn-block shadow" data-toggle="modal" data-target="#editPet">
                            Edit
                        </button>
                        <!-- Modal -->
                        @include('admin.pets.partials.modals.editPet')

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->

            <div class="col-md-9">
                <div class="card card-purple card-tabs text-dark">
                    <div class="card-header p-0 pt-1">
                        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-one-notes-tab" data-toggle="pill" href="#custom-tabs-one-notes" role="tab" aria-controls="custom-tabs-one-notes" aria-selected="false">Notes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-one-tests-tab" data-toggle="pill" href="#custom-tabs-one-tests" role="tab" aria-controls="custom-tabs-one-tests" aria-selected="true">Tests</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-one-consultations-tab" data-toggle="pill" href="#custom-tabs-one-consultations" role="tab" aria-controls="custom-tabs-one-consultations" aria-selected="true">Consultations</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-one-tabContent">
                            <div class="tab-pane fade active show" id="custom-tabs-one-notes" role="tabpanel" aria-labelledby="custom-tabs-one-notes-tab">
                                @include('admin.pets.partials.tab-panes.notes')
                            </div>
                            <div class="tab-pane fade" id="custom-tabs-one-tests" role="tabpanel" aria-labelledby="custom-tabs-one-tests-tab">
                                @include('admin.pets.partials.tab-panes.tests')
                            </div>
                            <div class="tab-pane fade" id="custom-tabs-one-consultations" role="tabpanel" aria-labelledby="custom-tabs-one-consultations-tab">
                                @include('admin.pets.partials.tab-panes.consultations')
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

    </div>
@stop

@section('css')

    <style>
        .image-wrapper{
            position: relative;
            padding-bottom: 56.25%;
        }
        .image-wrapper img {
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
    </style>
@stop

@section('js')
    <script>
        @if ($errors->has('chip') || $errors->has('name') || $errors->has('species') || $errors->has('breed') || $errors->has('sex') || $errors->has('dob') || $errors->has('neutered') || $errors->has('diseases') || $errors->has('allergies') || $errors->has('status') )
            $('#editPet').modal('show')
        @elseif($errors->any())
            $('#createConsultation').modal('show')
        @endif
    </script>


    @include('admin.partials.scripts.classic-editor')

    <script>
        $(document).ready(function() {
            $('.tests-js').select2();
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#consultations_table').DataTable();
        });
    </script>

    <script>
        //Cambiar imagen
        document.getElementById("file").addEventListener('change', cambiarImagen);

        function cambiarImagen(event){
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result);
            };

            reader.readAsDataURL(file);
        }
    </script>
@stop