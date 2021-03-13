<x-app-layout>
	<div class="container">
		<div class="flex flex-col">
			<h1 class="text-3xl mt-4">My pets</h1>
			<div class="my-5 overflow-x-auto sm:-mx-6 lg:-mx-8">
				<div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
				 	<div class="shadow overflow-hidden border-t-4 border-blue-400  sm:rounded-lg">
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
										DOB
									</th>
									<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
										Sex
									</th>
									<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
										Neutered
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
							          		<div class="flex items-center">
								              	<div class="ml-0">
							               			<div class="text-sm font-medium text-gray-900">
														{{ $pet->dob }}
													</div>
								              	</div>
								            </div>
							          	</td>
							          	<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
							          		<div class="flex items-center">
								              	<div class="ml-0">
							               			<div class="text-sm font-medium text-gray-900">
														{{ $pet->sex }}
													</div>
								              	</div>
								            </div>
							          	</td>
							          	<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
							          		<div class="flex items-center">
								              	<div class="ml-0">
							               			<div class="text-sm font-medium text-gray-900">
														{{ $pet->neutered }}
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
	</div>
</x-app-layout>