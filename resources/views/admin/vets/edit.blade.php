@extends('adminlte::page')

@section('title', 'Pets')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="display-4">Edit vet</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.vets.index') }}">Vets</a></li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </div>
        </div>
    </div>
@stop

@section('content')
    @if(session('info'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('info') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="card">
    	<div class="card-header">
    		Edit Owner
    	</div>
    	<div class="card-body">
    		{!! Form::model($vet, ['route' => ['admin.vets.update', $vet], 'method' => 'put']) !!}

    			@include('admin.vets.partials.form')

    			{!! Form::submit('Update vet', ['class' => 'btn btn-primary shadow']) !!}
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

      // BS-Stepper Init
      // document.addEventListener('DOMContentLoaded', function () {
      //   window.stepper = new Stepper(document.querySelector('.bs-stepper'))
      // });

      // // DropzoneJS Demo Code Start
      // Dropzone.autoDiscover = false;

      // // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
      // var previewNode = document.querySelector("#template");
      // previewNode.id = "";
      // var previewTemplate = previewNode.parentNode.innerHTML;
      // previewNode.parentNode.removeChild(previewNode);

      // var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
      //   url: "/target-url", // Set the url
      //   thumbnailWidth: 80,
      //   thumbnailHeight: 80,
      //   parallelUploads: 20,
      //   previewTemplate: previewTemplate,
      //   autoQueue: false, // Make sure the files aren't queued until manually added
      //   previewsContainer: "#previews", // Define the container to display the previews
      //   clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
      // });

      // myDropzone.on("addedfile", function(file) {
      //   // Hookup the start button
      //   file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file); };
      // });

      // // Update the total progress bar
      // myDropzone.on("totaluploadprogress", function(progress) {
      //   document.querySelector("#total-progress .progress-bar").style.width = progress + "%";
      // });

      // myDropzone.on("sending", function(file) {
      //   // Show the total progress bar when upload starts
      //   document.querySelector("#total-progress").style.opacity = "1";
      //   // And disable the start button
      //   file.previewElement.querySelector(".start").setAttribute("disabled", "disabled");
      // });

      // // Hide the total progress bar when nothing's uploading anymore
      // myDropzone.on("queuecomplete", function(progress) {
      //   document.querySelector("#total-progress").style.opacity = "0";
      // });

      // // Setup the buttons for all transfers
      // // The "add files" button doesn't need to be setup because the config
      // // `clickable` has already been specified.
      // document.querySelector("#actions .start").onclick = function() {
      //   myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED));
      // };
      // document.querySelector("#actions .cancel").onclick = function() {
      //   myDropzone.removeAllFiles(true);
      // };
      // DropzoneJS Demo Code End
    </script>

@stop