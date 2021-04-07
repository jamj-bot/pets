@extends('adminlte::page')

@section('title', 'Pets')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="display-4">Owner's Profile</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.owners.index') }}">Owners</a></li>
                    <li class="breadcrumb-item active">{{ $owner->name }}</li>
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
                <div class="card card-info card-outline">
                    <div class="card-body box-profile text-dark">
{{--                         <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">
                        </div> --}}

                        <h3 class="profile-username text-center">{{ $owner->name }}</h3>

                        <p class="text-muted text-center">#{{ $owner->code }}</p>
                        {{--                         <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Pets</b> <a class="float-right">1,322</a>
                            </li>
                        </ul> --}}
                        <hr>
                        <strong><i class="fas fa-fw fa-phone-square-alt"></i> Phone</strong>
                        <p class="text-muted">{{ $owner->phone }}</p>
                        <hr>
                        <strong><i class="fas fa-fw fa-envelope"></i> E-mail</strong>
                        <p class="text-muted">{{ $owner->email }}</p>
                        <hr>
                        <strong><i class="fas fa-fw fa-calendar-plus"></i> Registed</strong>
                        <p class="text-muted">{{ $owner->created_at }}</p>
                        <hr>
                        <strong><i class="far fa-fw fa-calendar-plus"></i> Updated</strong>
                        <p class="text-muted">{{ $owner->updated_at }}</p>
                        <hr>

                        <a href="{{ route('admin.owners.edit', $owner) }}" class="btn bg-gradient-info btn-block"><b>Edit</b></a>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- About Me Box -->
{{--                 <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">About Me</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <strong><i class="fas fa-phone-square-alt"></i> Phone</strong>
                        <p class="text-muted">{{ $owner->phone }}</p>
                        <hr>
                        <strong><i class="fas fa-envelope"></i> E-mail</strong>
                        <p class="text-muted">{{ $owner->email }}</p>
                        <hr>
                        <i class="fas fa-calendar-plus"></i> Registed</strong>
                        <p class="text-muted">{{ $owner->created_at }}</p>
                        <hr>
                        <i class="far fa-calendar-plus"></i> Updated</strong>
                        <p class="text-muted">{{ $owner->updated_at }}</p>
                        <hr>
                    </div>
                    <!-- /.card-body -->
                </div> --}}
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card card-info card-tabs">
                    <div class="card-header p-0 pt-1">
                        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link {{ !$errors->any() ? 'active' : '' }}" id="custom-tabs-one-activity-tab" data-toggle="pill" href="#custom-tabs-one-activity" role="tab" aria-controls="custom-tabs-one-activity" aria-selected="false">Activity</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-one-pets-tab" data-toggle="pill" href="#custom-tabs-one-pets" role="tab" aria-controls="custom-tabs-one-pets" aria-selected="false">Pets</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-one-timeline-tab" data-toggle="pill" href="#custom-tabs-one-timeline" role="tab" aria-controls="custom-tabs-one-timeline" aria-selected="true">timeline</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ $errors->any() ? 'active' : '' }}" id="custom-tabs-one-add_pet-tab" data-toggle="pill" href="#custom-tabs-one-add_pet" role="tab" aria-controls="custom-tabs-one-add_pet" aria-selected="false">Add Pet</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-one-tabContent">
                            <div class="tab-pane fade {{ !$errors->any() ? 'active show' : '' }}" id="custom-tabs-one-activity" role="tabpanel" aria-labelledby="custom-tabs-one-activity-tab">
                                {{-- @include('admin.owners.partials.tab-panes.activity') --}}
                            </div>
                            <div class="tab-pane fade" id="custom-tabs-one-pets" role="tabpanel" aria-labelledby="custom-tabs-one-pets-tab">
                                @include('admin.owners.partials.tab-panes.pets')
                            </div>
                            <div class="tab-pane fade" id="custom-tabs-one-timeline" role="tabpanel" aria-labelledby="custom-tabs-one-timeline-tab">
                                @include('admin.owners.partials.tab-panes.timeline')
                            </div>
                            <div class="tab-pane fade {{ $errors->any() ? 'active show' : '' }}" id="custom-tabs-one-add_pet" role="tabpanel" aria-labelledby="custom-tabs-one-add_pet-tab">
                                @include('admin.owners.partials.tab-panes.add_pet')
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card -->

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
                                @include('admin.owners.partials.tab-panes.pets')
                            </div>
                            <!-- /.tab-pane -->



                            <div class="tab-pane" id="timeline">
                                @include('admin.owners.partials.tab-panes.timeline')
                            </div>
                            <!-- /.tab-pane -->

                            <div class="{{ $errors->any() ? 'active' : '' }} tab-pane" id="add_pet">
                                @include('admin.owners.partials.tab-panes.add_pet')
                            </div>
                            <!-- /.tab-pane -->

                        </div>
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div>
                <!-- /.card --> --}}
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
{{--     <script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create( document.querySelector( '#diseases' ) )
            .catch( error => {
                console.error( error );
            });
    </script> --}}
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