<!-- Modal -->
<div class="modal fade" id="editFile" tabindex="-1" role="dialog" aria-labelledby="createFileTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createFileTitle">Add file</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="list-group">
                    @foreach($consultation->files as $file)
                        <li class="text-left text-muted list-group-item d-flex justify-content-between align-items-center">
                        {{ $file->file_name }}
                            <span>
                                <form action="{{ route('admin.files.destroy', $file) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                        <button class="btn btn-sm btn-danger shadow" type="submit"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </span>
                        </li>
                    @endforeach
                </ul>
            </div>
             <div class="modal-footer">
                <button type="button" class="btn btn-secondary shadow" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>