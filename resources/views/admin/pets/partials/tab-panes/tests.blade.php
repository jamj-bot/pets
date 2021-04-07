<div class="card">
    <div class="card-header">
        <h3 class="modal-title lead font-weight-bold">
            Test history
        </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="row">
            <div class="col-5 col-sm-3">
                <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                    @foreach($pet->consultations as $consultation)
                        @if($consultation->files->count())
                            <a class="text-sm nav-link @if($loop->first) active @endif" id="vert-tabs-{{ $consultation->id }}-tab" data-toggle="pill" href="#vert-tabs-{{ $consultation->id }}" role="tab" aria-controls="vert-tabs-{{ $consultation->id }}" aria-selected="false">{{ $consultation->created_at->diffForHumans() }}
                            </a>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="col-7 col-sm-9">
                <div class="tab-content" id="vert-tabs-tabContent">
                    @foreach($pet->consultations as $consultation)
                        @if($consultation->files->count())
                            <div class="border border-1 tab-pane text-left fade @if($loop->first) show active @endif" id="vert-tabs-{{ $consultation->id }}" role="tabpanel" aria-labelledby="vert-tabs-{{ $consultation->id }}-tab">
                                <h5 class="m-3">Laboratory</h5>
                                <ul class="ml-3 text-secondary list-unstyled">
                                    @foreach($consultation->files as $file)
                                        @if($consultation->files->count())
                                            @if($file->extension == 'pdf' )
                                                <li class="text-truncate">
                                                    <a href="{{ Storage::url($file->url) }}"  target="_blank" class="btn-link text-secondary">
                                                        <i class="far fa-fw fa-file-pdf"></i>{{ $file->file_name }}
                                                    </a>
                                                </li>
                                            @endif
                                        @endif
                                    @endforeach
                                </ul>

                                <h5 class="m-3 mt-5">Cabinet</h5>
                                <div class="m-1 row">
                                    @foreach($consultation->files as $file)
                                        @if($file->extension != 'pdf' )
                                            <div class="col-sm-3 mb-4 text-center">
                                                <a href="{{ Storage::url($file->url) }}" target="_blank" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
                                                    <img src="{{ Storage::url($file->url) }}" class="img-fluid img-thumbnail" alt="white sample" loading="lazy">
                                                </a>
                                                <div class="text-truncate">
                                                    <small class="text-muted text-truncate">{{ $file->file_name }}</small>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>