<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.4 -->
<script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/js/app.min.js') }}" type="text/javascript"></script>

<script src="{{asset('/plugins/iCheck/icheck.min.js')}}" type="text/javascript"></script>


<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->



<script src="{{asset('/plugins/datepicker/bootstrap-datepicker.js')}}"  type="text/javascript" ></script>

<script src="{{asset('/plugins/colorpicker/bootstrap-colorpicker.js')}}"  type="text/javascript" ></script>



{{--datapicker en usuarios.blade.php--}}
<script>
    $('#reservation').datepicker("setDate",'today');




</script>

<script>
    $(".rg").change(function () {

        if ($("#r1").attr('checked')) {

            $('#r1edit:input').removeAttr('disabled');

        }
        else {
            $('#r1edit:input').attr('disabled', 'disabled');
        }
    });

</script>



