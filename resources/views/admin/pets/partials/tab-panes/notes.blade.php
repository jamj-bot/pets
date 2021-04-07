<div class="card">
    <div class="card-header">
        <h3 class="modal-title lead font-weight-bold">
            Medical conditions
        </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <dl>
            <dt>Diseases</dt>
            <dd>
                @isset($pet->diseases)
                    <i class="text-danger fas fa-fw fa-times"></i>{{ $pet->diseases }}
                @else
                     <i class="text-success fas fa-fw fa-check"></i>None
                @endisset
            </dd>
            <dt>Allergies</dt>
            <dd>
                @isset($pet->allergies)
                    <i class="text-danger fas fa-fw fa-times"></i>{{ $pet->allergies }}
                @else
                    <i class="text-success fas fa-fw fa-check"></i>None
                @endisset
            </dd>
        </dl>
    </div>
  <!-- /.card-body -->
</div>