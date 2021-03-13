<div>
    <div class="card">
    	<div class="card-header">
	    	<div class="input-group">
	    		<div class="input-group-append">
	                <span class="input-group-text"><i class="fas fa-search"></i></span>
	            </div>
	    		<input  class="form-control" wire:model="search" placeholder="Search by code, name or e-mail" type="" name="">
	    		<span>
	    			<a href="{{ route('admin.vets.create') }}" class="btn btn-info shadow ml-3">Add Vet</a>
	    		</span>
	    	</div>
    	</div>

		@if($vets->count())
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered table-hover shadow-sm">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Code</th>
							<th scope="col">Name</th>
							<th scope="col">Phone</th>
							<th scope="col">Email</th>
							<th colspan="2" scope="colgroup"><span class="sr-only">Options</span></th>
						</tr>
					</thead>
					<tbody>
						@foreach($vets as $vet)
	    					<tr>
	    						<td width="10px">{{ $vet->id }}</td>
	    						<td>{{ $vet->code }}</td>
	    						<td>{{ $vet->name }}</td>
	    						<td>{{ $vet->phone }}</td>
	    						<td>{{ $vet->email }}</td>
	    						<td width="10px">
					      			<a href="{{ route('admin.vets.edit', $vet) }}" class="btn btn-block btn-outline-warning btn-sm shadoww">Edit</a>
					      		</td>
					      		<td width="10px">
					      			<form action="{{ route('admin.vets.destroy', $vet) }}" method="POST">
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
			<div class="card-footer">
				{{ $vets->links() }}
			</div>
		@else
			<div class="card-body bg-gradient-danger display-4 d-flex justify-content-center">
				<p>
					No results for "<strong>{{ $search }}"</strong>.
				</p>
			</div>
		@endif
    </div>
</div>
