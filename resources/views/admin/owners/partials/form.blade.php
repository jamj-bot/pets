<div class="form-group row">
	{!! Form::label('code', 'Code', ['class' => 'col-sm-2 col-form-label']) !!}
	<div class="col-sm-10">
	    <div class="input-group">
	        <div class="input-group-prepend">
	            <span class="input-group-text"><i class="fas fa-barcode"></i></span>
	        </div>
			{!! Form::number('code', null, ['class' => 'form-control', 'placeholder' => 'e.g., 9876543210']) !!}
		</div>
		@error('code')
			<small class="text-danger">{{ $message }}</small>
		@enderror
	</div>
</div>

<div class="form-group row">
	{!! Form::label('name', 'Name', ['class' => 'col-sm-2 col-form-label']) !!}
	<div class="col-sm-10">
		<div class="input-group">
	        <div class="input-group-prepend">
	            <span class="input-group-text"><i class="fas fa-user-md"></i></span>
	        </div>
			{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'e.g., John Doe']) !!}
		</div>
		@error('name')
			<small class="text-danger">{{ $message }}</small>
		@enderror
	</div>
</div>

<div class="form-group row">
	{!! Form::label('phone', 'Phone', ['class' => 'col-sm-2 col-form-label']) !!}
	<div class="col-sm-10">
		<div class="input-group">
	        <div class="input-group-prepend">
	            <span class="input-group-text"><i class="fas fa-phone"></i></span>
	        </div>
			{!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'e.g., 3399999999']) !!}
		</div>
		@error('phone')
			<small class="text-danger">{{ $message }}</small>
		@enderror
	</div>
</div>

<div class="form-group row">
	{!! Form::label('email', 'Email', ['class' => 'col-sm-2 col-form-label']) !!}
	<div class="col-sm-10">
		<div class="input-group">
	        <div class="input-group-prepend">
	            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
	        </div>
			{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'e.g., john_doe@email.com']) !!}
		</div>
		@error('email')
			<small class="text-danger">{{ $message }}</small>
		@enderror
	</div>
</div>