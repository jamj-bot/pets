@extends('adminlte::page')

@section('title', 'Pets')

@section('content_header')
    <div class="container-fluid">

        @if(session('info'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('info') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Consultation</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.pets.index') }}">Pets</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.pets.show', $consultation->pet) }}">{{ $consultation->pet->name}}</a></li>
                    <li class="breadcrumb-item active">Consultation</li>
                </ol>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"></h3>

            <span class="float-left">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-sm bg-gradient-warning shadow-sm" data-toggle="modal" data-target="#editConsultation">
                    <i class="fas fa-fw fa-pen-alt"></i> Edit Consultation
                </button>
                <!-- Modal -->
                @include('admin.consultations.partials.modals.editConsultation')
            </span>



            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>

        <div class="card-body" style="display: block;">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">

                    <div class="text-muted text-right text-uppercase mb-3 row d-flex flex-row justify-content-end align-items-end">
                        <div class="p-2 col-12 col-md-8">
                            <p>{{ $consultation->diagnosis }}
                                <b class="text-xs d-block"> <u>Diagnosis</u></b>
                            </p>
                        </div>
                        <div class="p-2 col-12 col-md-2">
                            <p>{{ $consultation->prognosis }}
                                <b class="text-xs d-block"> <u>Prognosis</u></b>
                            </p>
                        </div>
                    </div>

                    <hr>

                    <h4 class="mb-3">Physiological constants</h4>
                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <div class="info-box bg-light">
                                <div class="info-box-content text-sm">
                                    <span class="info-box-text text-center text-muted text-wrap">Weight</span>
                                    <span class="info-box-number text-center text-muted mb-0">{{ $consultation->weight }} kilograms</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="info-box bg-light">
                                <div class="info-box-content text-sm">
                                    <span class="info-box-text text-center text-muted text-wrap">Temperature</span>
                                    <span class="info-box-number text-center text-muted mb-0">{{ $consultation->temperature }} °C</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="info-box bg-light">
                                <div class="info-box-content text-sm">
                                    <span class="info-box-text text-center text-muted text-wrap">Capillary Refill Time</span>
                                    <span class="info-box-number text-center text-muted mb-0">{{ $consultation->capillary_refill_time }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <div class="info-box bg-light">
                                <div class="info-box-content text-sm">
                                    <span class="info-box-text text-center text-muted text-wrap">Heart Rate</span>
                                    <span class="info-box-number text-center text-muted mb-0">{{ $consultation->heart_rate }} bpm</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="info-box bg-light">
                                <div class="info-box-content text-sm">
                                    <span class="info-box-text text-center text-muted text-wrap">Respiratory Rate</span>
                                    <span class="info-box-number text-center text-muted mb-0">{{ $consultation->respiratory_rate }} bpm</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="info-box bg-light">
                                <div class="info-box-content text-sm">
                                    <span class="info-box-text text-center text-muted text-wrap">Pulse</span>
                                    <span class="info-box-number text-center text-muted mb-0">{{ $consultation->pulse }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h4 class="mb-3 mt-4">Physic Exam</h4>
                    <div class="row">
                        <div class="col-12">
                            <div id="accordion">
                                @include('admin.consultations.partials.accordions.accordion')
                            </div>
                        </div>
                    </div>

                    <h4 class="mb-3 mt-4">Diagnosis Plan</h4>
                    <div class="row">
                        <div class="col-12">
                            <div id="accordion2">
                                @include('admin.consultations.partials.accordions.accordion2')
                            </div>
                        </div>
                    </div>

                    <h4 class="mb-3 mt-4">Treatment Plan</h4>
                    <div class="row">
                        <div class="col-12">
                            <div id="accordion3">
                                @include('admin.consultations.partials.accordions.accordion3')
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                    <h3 class="ml-3 text-primary text-xl lead">
                        <a href="{{ route('admin.pets.show', $consultation->pet) }}">
                            {{ $consultation->pet->name }}
                            <span class="text-md text-muted">#{{ $consultation->pet->chip }}</span>
                        </a>
                    </h3>


                    <div class="ml-3 text-muted">
                        <p class="text-sm">0{{ $consultation->id }}
                            <b class="d-block">Consultation number</b>
                        </p>
                        <p class="text-sm">{{ $consultation->pet->species->common_name }}
                            <span class="font-italic">/ {{ $consultation->pet->species->scientific_name }}</span>
                            <span>/ {{ $consultation->pet->breed }}</span>
                            <b class="d-block">Species and breed</b>
                        </p>
                        <p class="text-sm">{{ $consultation->pet->dob }} / {{ $consultation->age }}
                            <b class="d-block">Date of birth / age</b>
                        </p>
                        <p class="text-sm">{{ $consultation->pet->sex }}
                            <b class="d-block">Gender</b>
                        </p>
                        <p class="text-sm">{{ $consultation->pet->neutered }}
                            <b class="d-block">Neutered</b>
                        </p>
                        <p class="text-sm">{{ $consultation->pet->diseases }}
                            <b class="d-block">Diseases</b>
                        </p>
                        <p class="text-sm">{{ $consultation->pet->allergies }}
                            <b class="d-block">Allergies</b>
                        </p>
                    </div>

                    <hr>
                    <h5 class="ml-3 mt-4 text-muted">Medical files</h5>

                    <ul class="ml-3 list-unstyled">
                        @foreach($consultation->files as $file)
                            <li class="text-truncate">
                                <a href="{{ Storage::url($file->url) }}" class="btn-link text-secondary">
                                    @if($file->extension != 'pdf')
                                        <i class="far fa-fw fa-image"></i>
                                    @elseif($file->extension == 'pdf')
                                        <i class="far fa-fw fa-file-pdf"></i>
                                    @endif
                                    {{ $file->file_name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>

                    <div class="btn-group ml-3 my-2 shadow">
                        <!-- Button trigger modal #createFile-->
                        <button type="button" class="btn btn-sm bg-gradient-primary" data-toggle="modal" data-target="#createFile">
                            Add Files
                        </button>

                        <!-- Button trigger modal #editFile -->
                        <button type="button" class="btn btn-sm bg-gradient-warning" data-toggle="modal" data-target="#editFile">
                            Edit Files
                        </button>

                    </div>
                    <!-- Modal #createFile-->
                     @include('admin.consultations.partials.modals.createFile')
                    <!-- Modal #editFile-->
                     @include('admin.consultations.partials.modals.editFile')
                    <hr>

                    <h5 class="ml-3 mt-4 text-muted">Vet</h5>
                    <div class="ml-3 text-muted">
                        <p class="text-sm">{{ $consultation->vet->name }}
                            <b class="d-block">Vet's name</b>
                        </p>
                        <p class="text-sm">#{{ $consultation->vet->code }}
                            <b class="d-block">Vet's code</b>
                        </p>
                        <p class="text-sm">{{ $consultation->vet->email }}
                            <b class="d-block">Vet's email</b>
                        </p>
                        <p class="text-sm">{{ $consultation->vet->phone }}
                            <b class="d-block">Vet's phone</b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
@stop

@section('js')
    @include('admin.partials.scripts.classic-editor')

    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

    <script>
        $(document).ready(function() {
            $('.tests-js').select2();
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bs-custom-file-input/1.1.1/bs-custom-file-input.min.js" integrity="sha512-LGq7YhCBCj/oBzHKu2XcPdDdYj6rA0G6KV0tCuCImTOeZOV/2iPOqEe5aSSnwviaxcm750Z8AQcAk9rouKtVSg==" crossorigin="anonymous"></script>

    <script>
        $(function () {
            bsCustomFileInput.init();
        });
    </script>

@stop