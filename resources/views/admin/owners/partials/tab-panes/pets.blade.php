<div class="table-responsive">
    <table id="pets_table" class="table table-bordered table-hover text-capitalize text-truncate" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Specie</th>
                <th>Breed</th>
                <th>Status</th>
                <th>Profile</th>
            </tr>
        </thead>
        <tbody>
            @foreach($owner->pets as $pet)
                <tr>
                    <td>
                        {{ $pet->name }}
                        <span class="text-muted text-sm">
                            <p class="mb-0">{{ $pet->chip }}</p>
                        </span>
                    </td>
                    <td>
                        {{ $pet->species->common_name }}
                        <span class="text-muted text-sm">
                            <p class="font-italic mb-0">{{ $pet->species->scientific_name }}</p>
                        </span>
                    </td>
                    <td>{{ $pet->breed }}</td>
                    <td>{{ $pet->status }}</td>
                    <td width="10px"><a class="btn btn-block btn-outline-info btn-sm shadow" href="{{ route('admin.pets.show', $pet) }}">Profile</a></td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Specie</th>
                <th>Breed</th>
                <th>Status</th>
                <th>Profile</th>
            </tr>
        </tfoot>
    </table>
</div>