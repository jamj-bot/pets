<!-- Modal -->
<div class="modal fade" id="createConsultation" tabindex="-1" role="dialog" aria-labelledby="editConsultationTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title lead text-bold" id="editConsultationTitle">
                    New Consultation
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-sm-2 p-md-4 p-md-5">
                {!! Form::open(['route' => 'admin.consultations.store', 'class' => 'form-horizontal', 'autocomplete' => 'off', 'files' => true])!!}

                    {!! Form::hidden('pet_id', $pet->id) !!}
                    {!! Form::hidden('age', $pet->age) !!}

                    @include('admin.partials.form-consultation')
                    <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                            <span class="float-right">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                {!! Form::submit('Save', ['class' => 'btn bg-gradient-danger shadow']) !!}
                            </span>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>