<div>
	<div class="card">
		<div class="card-header">
	    	<div class="input-group">
	    		<div class="input-group-append">
	                <span class="input-group-text"><i class="fas fa-search"></i></span>
	            </div>
	    		<input  class="form-control" wire:model="search" placeholder="Search by code, name or e-mail" type="" name="">
	    		<span>
	    			<a href="{{ route('admin.owners.create') }}" class="btn btn-info shadow ml-3">Add Owner</a>
	    		</span>
	    	</div>
		</div>
		@if($owners->count())
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered table-hover shadow-sm">
					<thead>
						<tr>
							<th scope="col">Code</th>
							<th scope="col">Name</th>
							<th scope="col">Phone</th>
							<th colspan="3" scope="colgroup"><span class="sr-only">Options</span></th>
						</tr>
					</thead>
					<tbody>
						@foreach($owners as $owner)
	    					<tr>
	    						<td>{{ $owner->code }}</td>
	    						<td>{{ $owner->name }}</td>
	    						<td>{{ $owner->phone }}</td>
	    						<td width="10px">
					      			<a href="{{ route('admin.owners.show', $owner) }}" class="btn btn-block btn-outline-info btn-sm shadow">Profile</a>
					      		</td>
	    						<td width="10px">
					      			<a href="{{ route('admin.owners.edit', $owner) }}" class="btn btn-block btn-outline-warning btn-sm shadow">Edit</a>
					      		</td>
					      		<td width="10px">
					      			<form action="{{ route('admin.owners.destroy', $owner) }}" method="POST">
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
				{{ $owners->links() }}
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
