@extends('adminlte::page')

@section('title', 'Pets')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="display-4">Add Vet</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.vets.index') }}">Vets</a></li>
                    <li class="breadcrumb-item active">Add Vet</li>
                </ol>
            </div>
        </div>
    </div>
@stop

@section('content')
	<div class="card">
    	<div class="card-header">
    		Add Vet
    	</div>
    	<div class="card-body">
    		{!! Form::open(['route' => 'admin.vets.store']) !!}

    			@include('admin.vets.partials.form')

    			{!! Form::submit('Add Vet', ['class' => 'btn btn-primary shadow']) !!}
    		{!! Form::close() !!}
    	</div>
    </div>
@stop

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.5/jquery.inputmask.min.js" integrity="sha512-sR3EKGp4SG8zs7B0MEUxDeq8rw9wsuGVYNfbbO/GLCJ59LBE4baEfQBVsP2Y/h2n8M19YV1mujFANO1yA3ko7Q==" crossorigin="anonymous"></script>
    <script>
      $(function () {
        // //Initialize Select2 Elements
        // $('.select2').select2()

        // //Initialize Select2 Elements
        // $('.select2bs4').select2({
        //   theme: 'bootstrap4'
        // })

        // //Datemask dd/mm/yyyy
        // $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
        // //Datemask2 mm/dd/yyyy
        // $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
        // //Money Euro
        $('[data-mask]').inputmask()

        // //Date range picker
        // $('#reservationdate').datetimepicker({
        //     format: 'L'
        // });
        // //Date range picker
        // $('#reservation').daterangepicker()
        // //Date range picker with time picker
        // $('#reservationtime').daterangepicker({
        //   timePicker: true,
        //   timePickerIncrement: 30,
        //   locale: {
        //     format: 'MM/DD/YYYY hh:mm A'
        //   }
        // })
        // //Date range as a button
        // $('#daterange-btn').daterangepicker(
        //   {
        //     ranges   : {
        //       'Today'       : [moment(), moment()],
        //       'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        //       'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
        //       'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        //       'This Month'  : [moment().startOf('month'), moment().endOf('month')],
        //       'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        //     },
        //     startDate: moment().subtract(29, 'days'),
        //     endDate  : moment()
        //   },
        //   function (start, end) {
        //     $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        //   }
        // )

        // //Timepicker
        // $('#timepicker').datetimepicker({
        //   format: 'LT'
        // })

        // //Bootstrap Duallistbox
        // $('.duallistbox').bootstrapDualListbox()

        // //Colorpicker
        // $('.my-colorpicker1').colorpicker()
        // //color picker with addon
        // $('.my-colorpicker2').colorpicker()

        // $('.my-colorpicker2').on('colorpickerChange', function(event) {
        //   $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
        // });

        // $("input[data-bootstrap-switch]").each(function(){
        //   $(this).bootstrapSwitch('state', $(this).prop('checked'));
        // });

      })
    </script>

@stop