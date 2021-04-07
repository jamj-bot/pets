<div class="row bg-gradient-light border mb-5 shadow-sm">
    <div class="col-sm-12">

        <div class="col-sm-12">
            <div class="custom-file mt-2">
                {!! Form::label('file', 'Choose file', ['class' => 'custom-file-label']) !!}
                {!! Form::file('file', ['class' => '', 'accept' => 'image/*, .pdf']) !!}
            </div>
            <small class="text-gray">
                    All Common Image File Formats (JPG, PNG, GIF) and PDF .
            </small>
            @error('file')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>