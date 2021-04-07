<div class="form-group row">
    {!! Form::label('chip', 'Chip', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10 mb-2">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-microchip"></i></span>
            </div>
            {!! Form::number('chip', null, ['class' => 'form-control', 'placeholder' => '9876543210']) !!}
        </div>
        @error('chip')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>

<div class="form-group row">
    {!! Form::label('name', 'Name', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10 mb-2">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-cat"></i></span>
            </div>
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Firulais']) !!}
        </div>
        @error('name')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>

<div class="form-group row ">
    {!! Form::label('species_id', 'Specie', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10 mb-2">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-paw"></i></span>
            </div>
             {!! Form::select('species_id', $species, null, ['class' => 'form-control']) !!}
        </div>
        @error('species_id')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>

<div class="form-group row">
    {!! Form::label('breed', 'Breed', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10 mb-2">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-award"></i></span>
            </div>
            {!! Form::text('breed', null, ['class' => 'form-control', 'placeholder' => 'Doberman']) !!}
        </div>
        @error('breed')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>

<div class="form-group row ">
    {!! Form::label('sex', 'Gender', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10 mb-2">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-venus-mars"></i></span>
            </div>
             {!! Form::select('sex', ['male' => 'Male', 'female' => 'Female', 'unknown' => 'Unknown'], null, ['class' => 'form-control']) !!}
        </div>
        @error('sex')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>

<div class="form-group row">
    {!! Form::label('dob', 'Date of Birth', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10 mb-2">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-calendar-day"></i></span>
            </div>
            {!! Form::date('dob', null, ['class' => 'form-control']) !!}
        </div>
        @error('dob')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>

<div class="form-group row ">
    {!! Form::label('neutered', 'Neutered', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10 mb-2">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-neuter"></i></span>
            </div>
             {!! Form::select('neutered', ['yes' => 'Yes', 'no' => 'No', 'unknown' => 'Unknown'], null, ['class' => 'form-control']) !!}
        </div>
        @error('neutered')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>

<div class="form-group row">
    {!! Form::label('diseases', 'Diseases', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10 mb-2">
        {!! Form::textarea('diseases', null, ['class' => 'form-control', 'rows' => 3]) !!}
        @error('diseases')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>

<div class="form-group row">
    {!! Form::label('allergies', 'Allergies', ['class' => 'col-sm-2 col-form-label']) !!}

    <div class="col-sm-10 mb-2">
        {!! Form::textarea('allergies', null, ['class' => 'form-control', 'rows' => 2]) !!}
        @error('allergies')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>

<div class="form-group row">
    <p class="font-weight-bold col-sm-2 col-form-label">Status</p>
    <div class="col-sm-10 mb-2">
        <label class="mr-2 font-weight-normal">
            {!! Form::radio('status', 'alive', true) !!}
            Alive
        </label>
        <label class="ml-2 font-weight-normal">
            {!! Form::radio('status', 'dead') !!}
            Dead
        </label>
        @error('status')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>

<div class="form-group row">
    <div class="font-weight-bold col-sm-2 col-form-label">
        <div class="image-wrapper">
            @isset($pet->image)
                <img id ="picture" src="{{ Storage::url($pet->image->url) }}">
            @else
                <img id ="picture" src="https://cdn.pixabay.com/photo/2017/01/31/17/57/animal-2025999_960_720.png">
            @endisset
        </div>
    </div>
    <div class="col-sm-10">
        <div class="custom-file mt-2">
            {!! Form::label('file', 'Choose file', ['class' => 'custom-file-label']) !!}
            {!! Form::file('file', ['class' => 'custom-file-input', 'accept' => 'image/*']) !!}
        </div>
        <small class="text-gray">
                All Common Image File Formats (JPG, PNG, GIF, etc.).
        </small>
        @error('file')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>


