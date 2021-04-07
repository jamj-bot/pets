<!-- Modal -->
<div class="modal fade" id="createFile" tabindex="-1" role="dialog" aria-labelledby="createFileTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createFileTitle">Add file</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {!! Form::open(['route' => 'admin.files.store', 'class' => 'form-horizontal', 'autocomplete' => 'off', 'files' => true])!!}
                    {!! Form::hidden('consultation_id', $consultation->id) !!}
                    {!! Form::hidden('pet_id', $consultation->pet->id) !!}

                    @include('admin.consultations.partials.files-form')

                    <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                            <span class="float-right">
                                <button type="button" class="btn btn-secondary shadow" data-dismiss="modal">Cancel</button>
                                {!! Form::submit('Upload', ['class' => 'btn bg-gradient-danger shadow']) !!}
                            </span>
                        </div>
                    </div>
                {!! Form::close()!!}
            </div>
{{--             <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> --}}
        </div>
    </div>
</div>