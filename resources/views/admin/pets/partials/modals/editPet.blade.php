<!-- Modal -->
<div class="modal fade" id="editPet" tabindex="-1" role="dialog" aria-labelledby="editPetTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editPetTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {!! Form::model($pet, ['route' => ['admin.pets.update', $pet], 'method' => 'put', 'class' => 'form-horizontal', 'autocomplete' => 'off', 'files' => true]) !!}
                    {!! Form::hidden('owner_id', $pet->owner->id) !!}

                    @include('admin.partials.form-pet')

                    <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                            {!! Form::submit('Update Pet', ['class' => 'btn bg-gradient-danger shadow']) !!}
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>