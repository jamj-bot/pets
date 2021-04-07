<h4 class="lead text-purple text-uppercase text-left mb-2">Physiological constants</h4>
<div class="row py-3 bg-gradient-light border mb-5 shadow-sm">
    <div class="col-sm-12 col-md-6 col-lg-3">
        <div class="form-group">
            {!! Form::label('weight', 'Weight', ['class' => 'col-form-label']) !!}
            <span><small> (kgs)</small></span>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-weight"></i></span>
                </div>
                {!! Form::text('weight', null, ['class' => 'form-control', 'placeholder' => '15.250']) !!}
            </div>
            @error('weight')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-3">
        <div class="form-group">
            {!! Form::label('temperature', 'Temperature', ['class' => 'col-form-label']) !!}
            <span><small> (°c)</small></span>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-thermometer-quarter"></i></span>
                </div>
                {!! Form::text('temperature', null, ['class' => 'form-control', 'placeholder' => '38.90']) !!}
            </div>
            @error('temperature')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-3">
        <div class="form-group">
            {!! Form::label('heart_rate', 'Heart Rate', ['class' => 'col-form-label']) !!}
            <span><small> (bpm)</small></span>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-heart"></i></span>
                </div>
                {!! Form::text('heart_rate', null, ['class' => 'form-control', 'placeholder' => '116']) !!}
            </div>
            @error('heart_rate')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-3">
        <div class="form-group">
            {!! Form::label('respiratory_rate', 'Respiratory Rate', ['class' => 'col-form-label']) !!}
            <span><small> (bpm)</small></span>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-lungs"></i></span>
                </div>
                {!! Form::text('respiratory_rate', null, ['class' => 'form-control', 'placeholder' => '25']) !!}
            </div>
            @error('respiratory_rate')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-3">
        <div class="form-group">
            {!! Form::label('pulse', 'Pulse', ['class' => 'col-form-label']) !!}
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-heartbeat"></i></span>
                </div>
                 {!! Form::select('pulse', ['Strong and synchronous with each heart beat' => 'Strong and synchronous with each heart beat', 'Irregular' => 'Irregular', 'Bounding' => 'Bounding', 'Weak or absent' => 'Weak or absent'], null, ['class' => 'form-control', 'placeholder' => 'Choose...']) !!}
            </div>
            @error('pulse')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-3">
        <div class="form-group">
            {!! Form::label('capillary_refill_time', 'Capillary Refill Time', ['class' => 'col-form-label']) !!}
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-stopwatch"></i></span>
                </div>
                 {!! Form::select('capillary_refill_time', ['Less than 1 second' => 'Less than 1 second', '1-2 seconds' => '1-2 seconds', 'Longer than 2 seconds' => 'Longer than 2 seconds'], null, ['class' => 'form-control', 'placeholder' => 'Choose...']) !!}
            </div>
            @error('capillary_refill_time')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
</div>

<h4 class="lead text-purple text-uppercase text-left mb-2">Physical exam</h4>
<div class="row py-3 bg-gradient-light border mb-5 shadow-sm">
    <div class="col-sm-12 col-md-6 col-lg-3">
        <div class="form-group">
            {!! Form::label('reproductive_status', 'Reproductive Status', ['class' => 'col-form-label']) !!}
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-ankh"></i></span>
                </div>
                 {!! Form::select('reproductive_status', ['Pregnant' => 'Pregnant', 'Lactating' => 'Lactating', 'Neither' => 'Neither'], null, ['class' => 'form-control', 'placeholder' => 'Choose...']) !!}
            </div>
            @error('reproductive_status')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-3">
        <div class="form-group">
            {!! Form::label('consciousness', 'Consciousness', ['class' => 'col-form-label']) !!}
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-eye"></i></span>
                </div>
                 {!! Form::select('consciousness', ['Alert and responsive' => 'Alert and responsive', 'Depressed or obtunded' => 'Depressed or obtunded', 'Stupor' => 'Stupor', 'Comatose' => 'Comatose'], null, ['class' => 'form-control', 'placeholder' => 'Choose...']) !!}
            </div>
            @error('consciousness')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-3">
        <div class="form-group">
            {!! Form::label('hydration', 'Hydration', ['class' => 'col-form-label']) !!}
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-tint"></i></span>
                </div>
                 {!! Form::select('hydration', ['Normal' => 'Normal', '0-5%' => '0-5%', '6-7%' => '6-7%', '8-9%' => '8-9%', '+10%' => '+10%'], null, ['class' => 'form-control', 'placeholder' => 'Choose...']) !!}
            </div>
            @error('hydration')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-3">
        <div class="form-group">
            {!! Form::label('body_condition', 'Body Condition', ['class' => 'col-form-label']) !!}
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-dog"></i></span>
                </div>
                 {!! Form::select('body_condition', ['Too thin' => 'Too thin', 'Ideal' => 'Ideal', 'Too heavy' => 'Too heavy'], null, ['class' => 'form-control', 'placeholder' => 'Choose...']) !!}
            </div>
            @error('body_condition')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-3">
        <div class="form-group">
            {!! Form::label('pain', 'Pain', ['class' => 'col-form-label']) !!}
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="far fa-sad-tear"></i></span>
                </div>
                 {!! Form::select('pain', ['None' => 'None', 'Vocalization' => 'Vocalization', 'Changes in behavior' => 'Changes in behavior', 'Physical changes' => 'Physical changes'], null, ['class' => 'form-control', 'placeholder' => 'Choose...']) !!}
            </div>
            @error('pain')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
</div>

<div class="row py-3 bg-gradient-light border mb-5 shadow-sm">
    <div class="col-12 col-lg-6">
        <div class="form-group">
            {!! Form::label('anamnesis', 'Anamnesis', ['class' => 'col-form-label']) !!}
            <span><small> (*)</small></span>
            {!! Form::textarea('anamnesis', null, ['class' => 'form-control', 'rows' => 2, 'placeholder' => 'Anamnesis']) !!}
            @error('anamnesis')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>


    <div class="col-12 col-lg-6">
        <div class="form-group">
            {!! Form::label('observations', 'Observations', ['class' => 'col-form-label']) !!}
            <span><small> (*)</small></span>
            {!! Form::textarea('observations', null, ['class' => 'form-control', 'rows' => 2, 'placeholder' => 'Observations']) !!}
            @error('observations')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="col-12 col-lg-6">
        <div class="form-group">
            {!! Form::label('problem_list', 'Problem List', ['class' => 'col-form-label']) !!}
            <span><small> (*)</small></span>
            {!! Form::textarea('problem_list', null, ['class' => 'form-control', 'rows' => 2, 'placeholder' => 'Problem List']) !!}
            @error('problem_list')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="col-12 col-lg-6">
        <div class="form-group">
            {!! Form::label('master_list', 'Master List', ['class' => 'col-form-label']) !!}
            {!! Form::textarea('master_list', null, ['class' => 'form-control', 'rows' => 2, 'placeholder' => 'Master List']) !!}
            @error('master_list')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
</div>

<h4 class="lead text-purple text-uppercase text-left mb-2">Diagnosis</h4>
<div class="row py-3 bg-gradient-light border mb-5 shadow-sm">
    <div class="col-12 col-lg-6">
        <div class="form-group">
            {!! Form::label('tests', 'Tests', ['class' => 'col-form-label']) !!}
            <div class="input-group">
                {!! Form::select('tests[]', $tests, null, ['class' => 'form-control, tests-js', 'multiple' => 'multiple', 'style' => 'width:100%']) !!}
            </div>
            @error('diagnosis_plan')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="col-12 col-lg-6">
        <div class="form-group">
            {!! Form::label('diagnosis', 'Diagnosis', ['class' => 'col-form-label']) !!}
            <span><small> (*)</small></span>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-thermometer-quarter"></i></span>
                </div>
                {!! Form::text('diagnosis', null, ['class' => 'form-control', 'placeholder' => 'Diagnosis']) !!}
            </div>
            @error('diagnosis')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
</div>

<h4 class="lead text-purple text-uppercase text-left mb-2">Treatment</h4>
<div class="row py-3 bg-gradient-light border mb-5 shadow-sm">
    <div class="col-12 col-lg-6">
        <div class="form-group">
            {!! Form::label('treatment_plan', 'Treatment Plan', ['class' => 'col-form-label']) !!}
            {!! Form::textarea('treatment_plan', null, ['class' => 'form-control', 'rows' => 2, 'placeholder' => 'Treatment Plan']) !!}
            @error('treatment_plan')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="col-12 col-lg-6">
        <div class="form-group">
            {!! Form::label('intructions_to_owner', 'Intructions To Owner', ['class' => 'col-form-label']) !!}
            {!! Form::textarea('intructions_to_owner', null, ['class' => 'form-control', 'rows' => 2, 'placeholder' => 'Intructions To Owner']) !!}
            @error('intructions_to_owner')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="col-12 col-lg-6">
        <div class="form-group">
            {!! Form::label('prognosis', 'Prognosis', ['class' => 'col-form-label']) !!}
            <span><small> (*)</small></span>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="far fa-thumbs-up"></i></span>
                </div>
                 {!! Form::select('prognosis', ['Good' => 'Good', 'Fair' => 'Fair', 'Guarded' => 'Guarded', 'Grave' => 'Grave', 'Poor' => 'Poor'], null, ['class' => 'form-control', 'placeholder' => 'Choose...']) !!}
            </div>
            @error('prognosis')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="col-12 col-lg-6">
        <div class="form-group">
            {!! Form::label('consult_status', 'Consult Status', ['class' => 'col-form-label']) !!}
            <span><small> (*)</small></span>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="far fa-thumbs-up"></i></span>
                </div>
                 {!! Form::select('consult_status', ['Open' => 'Open', 'Closed' => 'Closed'], null, ['class' => 'form-control', 'placeholder' => 'Choose...']) !!}
            </div>
            @error('consult_status')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
</div>
