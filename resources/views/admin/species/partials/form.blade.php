
<div class="form-group row">
	{!! Form::label('common_name', 'Common Name', ['class' => 'col-sm-2 col-form-label']) !!}
	<div class="col-sm-10">
		{!! Form::text('common_name', null, ['class' => 'form-control', 'placeholder' => 'Enter Species Common Name']) !!}
		@error('common_name')
			<small class="text-danger">{{ $message }}</small>
		@enderror
	</div>
</div>

<div class="form-group row">
	{!! Form::label('scientific_name', 'Scientific Name', ['class' => 'col-sm-2 col-form-label']) !!}
	<div class="col-sm-10">
		{!! Form::text('scientific_name', null, ['class' => 'form-control', 'placeholder' => 'Enter Species Scientific Name']) !!}
		@error('scientific_name')
			<small class="text-danger">{{ $message }}</small>
		@enderror
	</div>
</div>
