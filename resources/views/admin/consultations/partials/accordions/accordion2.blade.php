<div class="card">
    <div class="card-header bg-gradient-light">
        <h4 class="card-title w-100">
            <a class="d-block w-100" data-toggle="collapse" href="#collapseTests" aria-expanded="true">
                Tests <ion-icon  class="float-right" name="chevron-down-outline"></ion-icon>
            </a>
        </h4>
    </div>
    <div id="collapseTests" class="collapse show" data-parent="#accordion2" style="">
        <div class="card-body">
            <div class="post">
                <ol>
                    @foreach($consultation->tests as $test)
                        <li>{!! $test->test_name !!}</li>
                @endforeach
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="card card">
    <div class="card-header bg-gradient-light">
        <h4 class="card-title w-100">
            <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapseDiagnosis" aria-expanded="false">
              Diagnosis <ion-icon  class="float-right" name="chevron-down-outline"></ion-icon>
            </a>
        </h4>
    </div>
    <div id="collapseDiagnosis" class="collapse" data-parent="#accordion2" style="">
        <div class="card-body">
            <div class="post text-bold">
                {!! $consultation->diagnosis!!}
            </div>
        </div>
    </div>
</div>