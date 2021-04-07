@extends('adminlte::page')

@section('title', 'Pets')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="display-4">Species</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Species</li>
                </ol>
            </div>
        </div>
    </div>
@stop

@section('content')
    @if(session('info'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('info') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

	<div class="card">
		<div class="card-header">
			Species
			<span class="float-right">
				<a href="{{ route('admin.species.create') }}" class="btn btn-info shadow"> Add Species</a>
			</span>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered table-hover shadow-sm">
					<thead>
						<tr>
							<th width="10px" scope="col">#</th>
							<th scope="col">Common Name</th>
							<th scope="col">Scientific Name</th>
							<th colspan="2" scope="colgroup"><span class="sr-only">Options</span></th>
						</tr>
					</thead>
				  	<tbody>
				  		@foreach($species as $speciesItem)
					    	<tr>
					      		<td>{{ $speciesItem->id }}</td>
					      		<td >{{ $speciesItem->common_name }}</td>
					      		<td>{{ $speciesItem->scientific_name }}</td>
					      		<td width="10px">
					      			<a href="{{ route('admin.species.edit', $speciesItem) }}" class="btn btn-block btn-outline-primary btn-sm shadow">Edit</a> </td>
					      		<td width="10px">
					      			<form action="{{ route('admin.species.destroy', $speciesItem) }}" method="POST">
					      				@csrf
					      				@method('delete')
					      					<button class="btn btn-block btn-outline-danger btn-sm shadow" type="submit">Delete</button>
					      			</form>
					      		</td>
					    	</tr>
				    	@endforeach
				  	</tbody>
				</table>
			</div>
		</div>
	</div>
@stop
