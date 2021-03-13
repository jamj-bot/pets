@extends('adminlte::page')

@section('title', 'Pets')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>{{ $pet->name }}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.pets.index') }}">Pets</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </div>
        </div>
    </div>
@stop

@section('content')

    <div class="container-fluid">
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
                    <div class="card-body box-profile text-dark text-capitalize">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="@if($pet->image) {{ Storage::url($pet->image->url) }} @else https://cdn.pixabay.com/photo/2017/01/31/17/57/animal-2025999_960_720.png @endif" alt="Pet profile picture">
                        </div>

                        <h3 class="profile-username text-center">{{ $pet->name }}</h3>

                        <p class="text-muted text-center">{{ $pet->chip }}</p>

{{--                         <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Pets</b> <a class="float-right">9</a>
                            </li>
                        </ul>
 --}}                   <hr>

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
                        <i class="fas fa-fw fa-venus-mars"></i> Gender</strong>
                        <p class="text-muted">{{ $pet->sex }}</p>
                        <hr>
                        <i class="fas fa-fw fa-calendar-day"></i> Age</strong>
                        <p class="text-muted">{{ $pet->dob }}</p>
                        <hr>
                        <i class="fas fa-fw fa-neuter"></i> Neutered</strong>
                        <p class="text-muted">{{ $pet->neutered }}</p>
                        <hr>

                        <a href="{{ route('admin.pets.edit', $pet) }}" class="btn bg-gradient-purple btn-block"><b>Edit</b></a>
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
                                <a class="nav-link {{ !$errors->any() ? 'active' : '' }}" id="custom-tabs-one-notes-tab" data-toggle="pill" href="#custom-tabs-one-notes" role="tab" aria-controls="custom-tabs-one-notes" aria-selected="false">Notes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-one-pets-tab" data-toggle="pill" href="#custom-tabs-one-pets" role="tab" aria-controls="custom-tabs-one-pets" aria-selected="false">Pets</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-one-timeline-tab" data-toggle="pill" href="#custom-tabs-one-timeline" role="tab" aria-controls="custom-tabs-one-timeline" aria-selected="true">timeline</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ $errors->any() ? 'active' : '' }}" id="custom-tabs-one-edit_pet-tab" data-toggle="pill" href="#custom-tabs-one-edit_pet" role="tab" aria-controls="custom-tabs-one-edit_pet" aria-selected="false">Edit Pet</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-one-tabContent">
                            <div class="tab-pane fade {{ !$errors->any() ? 'active show' : '' }}" id="custom-tabs-one-notes" role="tabpanel" aria-labelledby="custom-tabs-one-notes-tab">
                                @include('admin.pets.partials.tab-panes.notes')
                            </div>
                            <div class="tab-pane fade" id="custom-tabs-one-pets" role="tabpanel" aria-labelledby="custom-tabs-one-pets-tab">
                                Pets
                            </div>
                            <div class="tab-pane fade" id="custom-tabs-one-timeline" role="tabpanel" aria-labelledby="custom-tabs-one-timeline-tab">
                                Timeline
                            </div>
                            <div class="tab-pane fade {{ $errors->any() ? 'active show' : '' }}" id="custom-tabs-one-edit_pet" role="tabpanel" aria-labelledby="custom-tabs-one-edit_pet-tab">
                                @include('admin.pets.partials.edit_pet')
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>

{{--                 <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link {{ !$errors->any() ? 'active' : '' }}" href="#activity" data-toggle="tab">Activity</a></li>
                            <li class="nav-item"><a class="nav-link" href="#pets" data-toggle="tab">Pets</a></li>
                            <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>
                            <li class="nav-item"><a class="nav-link {{ $errors->any() ? 'active' : '' }}" href="#add_pet" data-toggle="tab">Add Pet</a></li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content text-dark">
                            <div class="{{ !$errors->any() ? 'active' : '' }} tab-pane" id="activity">
                                @include('admin.owners.partials.tab-panes.activity')
                            </div>
                            <!-- /.tab-pane -->

                            <div class="tab-pane" id="pets">
                            </div>
                            <!-- /.tab-pane -->



                            <div class="tab-pane" id="timeline">
                            </div>
                            <!-- /.tab-pane -->

                            <div class="{{ $errors->any() ? 'active' : '' }} tab-pane" id="add_pet">
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div> --}}

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
        $(document).ready(function() {
            $('#pets_table').DataTable();
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