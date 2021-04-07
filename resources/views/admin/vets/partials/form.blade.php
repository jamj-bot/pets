<div class="form-group row">
	{!! Form::label('code', 'Code', ['class' => 'col-sm-2 col-form-label']) !!}
	<div class="col-sm-10">
		{!! Form::number('code', null, ['class' => 'form-control', 'placeholder' => '0123456789']) !!}
		@error('code')
			<small class="text-danger">{{ $message }}</small>
		@enderror
	</div>
</div>

<div class="form-group row">
	{!! Form::label('name', 'Name', ['class' => 'col-sm-2 col-form-label']) !!}
	<div class="col-sm-10">
		{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'M.V.Z. John Doe']) !!}
		@error('name')
			<small class="text-danger">{{ $message }}</small>
		@enderror
	</div>
</div>

<div class="form-group row">
	{!! Form::label('phone', 'Phone', ['class' => 'col-sm-2 col-form-label']) !!}
	<div class="col-sm-10">
		{!! Form::text('phone', null, ['class' => 'form-control', 'data-inputmask' => '&quot;mask&quot;: &quot;(999) 999-9999&quot;', 'data-mask' => '', 'inputmode' => 'text', 'placeholder' => '(331) 020-3040']) !!}
		@error('phone')
			<small class="text-danger">{{ $message }}</small>
		@enderror
	</div>
</div>

<div class="form-group row">
	{!! Form::label('email', 'Email', ['class' => 'col-sm-2 col-form-label']) !!}
	<div class="col-sm-10">
		{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'john_doe_mvz@email.com']) !!}
		@error('email')
			<small class="text-danger">{{ $message }}</small>
		@enderror
	</div>
</div>


