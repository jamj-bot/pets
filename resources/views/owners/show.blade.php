<x-app-layout>
		<div class="container">
		@isset($owner)
			<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
				<div class="md:col-span-2">
					<h1 class="text-3xl mt-4">My profile</h1>
					<div class="my-5 bg-white shadow overflow-hidden border-t-4 border-blue-500 sm:rounded-lg">
					  	<div class="px-4 py-5 sm:px-6 border-b border-gray-300">
					    	<h3 class="text-xl leading-6 font-bold text-gray-900">
					      		{{ $owner->name }}
					    	</h3>
					    	<p class="mt-1 max-w-2xl text-xs font-medium text-gray-500 uppercase tracking-wider">
					      		{{ $owner->code }}
					    	</p>
					 	</div>
						<div class="border-t border-gray-200">
						    <dl>
						    	<div class="border-b border-gray-200 bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
						        	<dt class="text-xs font-medium text-gray-500 uppercase tracking-wider">
						          		Phone
						        	</dt>
						        	<dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
						          		{{ $owner->phone }}
						        	</dd>
						      	</div>
						     	<div class="border-b border-gray-200 bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
						        	<dt class="text-xs font-medium text-gray-500 uppercase tracking-wider">
						          		Email
						        	</dt>
						        	<dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
						          		{{ $owner->email }}
						        	</dd>
						      	</div>
						      	<div class="border-b border-gray-200 bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
						        	<dt class="text-xs font-medium text-gray-500 uppercase tracking-wider">
						          		Registed
						        	</dt>
						        	<dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
						          		{{ $owner->created_at }}
						        	</dd>
						      	</div>
						    </dl>
						</div>
					</div>
				</div>

				<div>
					<h1 class="text-3xl mt-4">My activities</h1>
					<div class="my-5 bg-white shadow overflow-hidden border-t-4 border-yellow-500 sm:rounded-lg">
					  	<div class="px-4 py-5 sm:px-6 border-b border-gray-300">
					    	<h3 class="text-xl leading-6 font-bold text-gray-900">
					      		{{ $owner->name }}
					    	</h3>
					    	<p class="mt-1 max-w-2xl text-xs font-medium text-gray-500 uppercase tracking-wider">
					      		{{ $owner->code }}
					    	</p>
					 	</div>
						<div class="border-t border-gray-200">
						    <dl>
						    	<div class="border-b border-gray-200 bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
						        	<dt class="text-xs font-medium text-gray-500 uppercase tracking-wider">
						          		Phone
						        	</dt>
						        	<dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
						          		{{ $owner->phone }}
						        	</dd>
						      	</div>
						     	<div class="border-b border-gray-200 bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
						        	<dt class="text-xs font-medium text-gray-500 uppercase tracking-wider">
						          		Email
						        	</dt>
						        	<dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
						          		{{ $owner->email }}
						        	</dd>
						      	</div>
						      	<div class="border-b border-gray-200 bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
						        	<dt class="text-xs font-medium text-gray-500 uppercase tracking-wider">
						          		Registed
						        	</dt>
						        	<dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
						          		{{ $owner->created_at }}
						        	</dd>
						      	</div>
		{{--
						      	<div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
						        	<dt class="text-sm font-medium text-gray-500">
						        		Pets
						        	</dt>
						        	<dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
						          		<ul class="border border-gray-200 rounded-md divide-y divide-gray-200">
						          			@foreach($owner->pets as $pet)
							            		<li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
							              			<div class="w-0 flex-1 flex items-center">
							                			<!-- Heroicon name: solid/paper-clip -->
							                			<svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
		  													<path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z" />
		  													<path fill-rule="evenodd" d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" clip-rule="evenodd" />
														</svg>
							                			<span class="ml-2 flex-1 w-0 truncate">
							                  				{{ $pet->name }} / {{ $pet->species->common_name }} / {{ $pet->chip }}
							                			</span>
							              			</div>
							              			<div class="ml-4 flex-shrink-0">
							                			<a href="{{ route('pets.show', $pet) }}" class="font-medium text-indigo-600 hover:text-indigo-500">
							                  				View more
							                			</a>
							              			</div>
							            		</li>
						            		@endforeach
						          		</ul>
						        	</dd>
						      	</div> --}}
						    </dl>
						</div>
					</div>
				</div>
			</div>

			<div class="flex flex-col">
				<h1 class="text-3xl mt-4">My pets</h1>
				<div class="my-5 overflow-x-auto sm:-mx-6 lg:-mx-8">
					<div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
					 	<div class="shadow overflow-hidden border-t-4 border-red-500  sm:rounded-lg">
					    	<table class="min-w-full divide-y divide-gray-200">
						     	<thead class="bg-gray-50 border-b border-gray-300">
						        	<tr>
										<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
											Pet
										</th>
										<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
											Specie
										</th>
										<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
											Status
										</th>
										<th scope="col" class="relative px-6 py-3">
											<span class="sr-only">View</span>
										</th>
						        	</tr>
						      	</thead>

							    <tbody class="bg-white divide-y divide-gray-200">
							     	@foreach($pets as $pet)
								        <tr>
								        	<td class="px-6 py-4 whitespace-nowrap">
									            <div class="flex items-center">
									             	<div class="flex-shrink-0 h-10 w-10">
									                	<img class="h-10 w-10 rounded-full" src="@if($pet->image) {{ Storage::url($pet->image->url) }} @else https://cdn.pixabay.com/photo/2016/06/15/17/46/feet-1459485_960_720.png @endif" alt="">
									             	</div>
									              	<div class="ml-4">
									               		<div class="text-sm font-medium text-gray-900">
									                		{{ $pet->name }}
									                	</div>
									                	<div class="text-sm text-gray-500">
									                  		{{ $pet->chip }}
									                	</div>
									              </div>
									            </div>
								          	</td>
								          	<td class="px-6 py-4 whitespace-nowrap">
									            <div class="flex items-center">
									              	<div class="ml-0">
								               			<div class="text-sm font-medium text-gray-900">
															{{ $pet->species->common_name }}
															<span class="text-gray-500 italic">
																/ {{ $pet->species->scientific_name }}
															</span>
														</div>
														<div class="text-sm text-gray-500">
															{{ $pet->breed }}
								                		</div>
									              	</div>
									            </div>
								          	</td>
								          	<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
								          		@if($pet->status == 'alive')
								          			<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Alive</span>
								          		@else
								          			<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Dead</span>
								          		@endif
								          	</td>
								          	<td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
								            	<a href="{{ route('pets.show', $pet) }}" class="text-indigo-600 hover:text-indigo-900">View</a>
								          	</td>
								        </tr>
							        @endforeach
							    </tbody>
					    	</table>
					  	</div>
					</div>
				</div>
				<div class="mb-4">
		    		{{ $pets->links() }}
		    	</div>
			</div>
		@else
			<div class="my-5 bg-white shadow overflow-hidden sm:rounded-lg">
				<div class="px-4 py-5 sm:px-6">
					<h3 class="text-xl leading-6 font-bold text-gray-900">
			      		Sorry!
			    	</h3>
				    <p class="mt-1 max-w-2xl text-sm text-gray-500">
				     	Aún no ha sido registrado en el sistema como propietario o el email con el que fue registrado no coincide.
				    </p>
				 </div>
			</div>
		@endisset
	</div>
</x-app-layout>
