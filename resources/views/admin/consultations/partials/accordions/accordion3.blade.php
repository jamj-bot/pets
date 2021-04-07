<div class="card">
    <div class="card-header bg-gradient-light">
        <h4 class="card-title w-100">
            <a class="d-block w-100" data-toggle="collapse" href="#collapseTreatment" aria-expanded="true">
                Treatment <ion-icon  class="float-right" name="chevron-down-outline"></ion-icon>
            </a>
        </h4>
    </div>
    <div id="collapseTreatment" class="collapse show" data-parent="#accordion3" style="">
        <div class="card-body">
            <div class="post">
                {!! $consultation->treatment_plan !!}
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header bg-gradient-light">
        <h4 class="card-title w-100">
            <a class="d-block w-100" data-toggle="collapse" href="#collapseInstructions" aria-expanded="false">
                Instructions <ion-icon  class="float-right" name="chevron-down-outline"></ion-icon>
            </a>
        </h4>
    </div>
    <div id="collapseInstructions" class="collapse" data-parent="#accordion3" style="">
        <div class="card-body">
            <div class="post">
                {!! $consultation->intructions_to_owner !!}
            </div>
        </div>
    </div>
</div>
<div class="card card">
    <div class="card-header bg-gradient-light">
        <h4 class="card-title w-100">
            <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapsePrognosis" aria-expanded="false">
              Prognosis <ion-icon  class="float-right" name="chevron-down-outline"></ion-icon>
            </a>
        </h4>
    </div>
    <div id="collapsePrognosis" class="collapse" data-parent="#accordion3" style="">
        <div class="card-body">
            <div class="post">
                {!! $consultation->prognosis !!}
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header bg-gradient-light">
        <h4 class="card-title w-100">
            <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapseStatus" aria-expanded="false">
                Consultation Status <ion-icon  class="float-right" name="chevron-down-outline"></ion-icon>
            </a>
        </h4>
    </div>
    <div id="collapseStatus" class="collapse" data-parent="#accordion3" style="">
        <div class="card-body">
            <div class="post">
                {!! $consultation->consult_status !!}
            </div>
        </div>
    </div>
</div>