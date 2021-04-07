<div class="card">
    <div class="card-header">
        <h3 class="modal-title lead font-weight-bold">
            Consultations history
        </h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table data-order='[[ 0, "desc" ]]' id="consultations_table" class="table table-bordered table-hover text-capitalize text-truncate" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Diagnosis</th>
                        <th scope="col">Status</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pet->consultations as $consultation)
                        <tr>
                            <td width="10px">
                                {{ $consultation->updated_at->format('d/m/y H:i') }}
                            </td>
                            <td style="max-width: 350px;" class="text-truncate">
                                <a href="{{ route('admin.consultations.show', $consultation) }}">
                                    {{ $consultation->diagnosis }}
                                </a>
                            </td>
                            <td width="10px" class="text-center">
                                <i class="fas fa-fw fa-{{ $consultation->consult_status == 'Open' ? 'lock-open text-warning' : 'lock text-dark' }}"></i>
                            </td>
                            <td width="10px" class="text-center">
                                <form action="{{ route('admin.consultations.destroy', $consultation) }}" method="POST">
                                    @csrf
                                    @method('delete')

                                    <button class="btn btn-outline-danger btn-sm shadow-sm" type="submit"><i class="fas fa-trash-alt"></i></button>

                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Diagnosis</th>
                        <th scope="col">Status</th>
                        <th scope="col">Delete</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>