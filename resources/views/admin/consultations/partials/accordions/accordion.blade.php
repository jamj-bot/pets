<div class="card">
    <div class="card-header bg-gradient-light">
        <h4 class="card-title w-100">
            <a class="d-block w-100" data-toggle="collapse" href="#collapseTwo" aria-expanded="true">
                Anamnesis <ion-icon  class="float-right" name="chevron-down-outline"></ion-icon>
            </a>
        </h4>
    </div>
    <div id="collapseTwo" class="collapse show" data-parent="#accordion" style="">
        <div class="card-body">
            <div class="post">
                {!! $consultation->anamnesis!!}
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header bg-gradient-light">
        <h4 class="card-title w-100">
            <a class="d-block w-100" data-toggle="collapse" href="#collapseOne" aria-expanded="false">
            General information <ion-icon  class="float-right" name="chevron-down-outline"></ion-icon>
            </a>
        </h4>
    </div>
    <div id="collapseOne" class="collapse" data-parent="#accordion" style="">
        <div class="card-body">
            <div class="post">
                <div class="row">
                    <div class="col-12 col-sm-4">
                        <div class="info-box bg-light">
                            <div class="info-box-content text-sm">
                                <span class="text-center text-muted"><ion-icon size="small" name="water-sharp"></ion-icon></span>
                                <span class="info-box-text text-center text-muted text-wrap">Hydration</span>
                                <span class="info-box-number text-center text-muted mb-0">{{ $consultation->hydration }} </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="info-box bg-light">
                            <div class="info-box-content text-sm">
                                <span class="text-center text-muted"><i class="fas fa-dog text-md"></i></span>
                                <span class="info-box-text text-center text-muted text-wrap">Body Condition</span>
                                <span class="info-box-number text-center text-muted mb-0">{{ $consultation->body_condition }} </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="info-box bg-light">
                            <div class="info-box-content text-sm">
                                <span class="text-center text-muted"><ion-icon size="small" name="sad-outline"></ion-icon></span>
                                <span class="info-box-text text-center text-muted text-wrap">Pain</span>
                                <span class="info-box-number text-center text-muted mb-0">{{ $consultation->pain }} </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="info-box bg-light">
                            <div class="info-box-content text-sm">
                                <span class="text-center text-muted"><i class="fas fa-ankh text-md"></i></span>
                                <span class="info-box-text text-center text-muted text-wrap">Pregned or lactating</span>
                                <span class="info-box-number text-center text-muted mb-0">{{ $consultation->reproductive_status }} </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="info-box bg-light">
                            <div class="info-box-content text-sm">
                                <span class="text-center text-muted"><ion-icon size="small" name="eye-sharp"></ion-icon></span>
                                <span class="info-box-text text-center text-muted text-wrap">Consciousness</span>
                                <span class="info-box-number text-center text-muted mb-0">{{ $consultation->consciousness }} </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header bg-gradient-light">
        <h4 class="card-title w-100">
            <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false">
              Observations <ion-icon  class="float-right" name="chevron-down-outline"></ion-icon>
            </a>
        </h4>
    </div>
    <div id="collapseThree" class="collapse" data-parent="#accordion" style="">
        <div class="card-body">
            <div class="post">
                {!! $consultation->observations!!}
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header bg-gradient-light">
        <h4 class="card-title w-100">
            <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false">
                Problem List <ion-icon  class="float-right" name="chevron-down-outline"></ion-icon>
            </a>
        </h4>
    </div>
    <div id="collapseFour" class="collapse" data-parent="#accordion" style="">
        <div class="card-body">
            <div class="post">
                {!! $consultation->problem_list!!}
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header bg-gradient-light">
        <h4 class="card-title w-100">
            <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapseFive" aria-expanded="false">
            Master List <ion-icon  class="float-right" name="chevron-down-outline"></ion-icon>
            </a>
        </h4>
    </div>
    <div id="collapseFive" class="collapse" data-parent="#accordion" style="">
        <div class="card-body">
            <div class="post">
                {!! $consultation->master_list!!}
            </div>
        </div>
    </div>
                                </div>