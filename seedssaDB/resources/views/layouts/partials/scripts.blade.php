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



{{--// anticonceptivo.blade--}}


<script>


        $("#btn").click(function(){
            $("#desplegar").collapse('show');
        });
        $("#btnclear").click(function(){
            $("#text").val('');
            $("#desplegar").collapse('hide');

        });

        $("#btn1").click(function(){
            $("#desplegar1").collapse('show');
        });
        $("#btnclear1").click(function(){
            $("#text1").val('');
            $("#desplegar1").collapse('hide');

        });

        //HHH

        $("#btn2").click(function(){
            $("#desplegar2").collapse('show');
        });
        $("#btnclear2").click(function(){
            $("#text2").val('');
            $("#desplegar2").collapse('hide');

        });

        //
        $("#btn3").click(function(){
            $("#desplegar3").collapse('show');
        });
        $("#btnclear3").click(function(){
            $("#text3").val('');
            $("#desplegar3").collapse('hide');

        });

        //
        $("#btn4").click(function(){
            $("#desplegar4").collapse('show');
        });
        $("#btnclear4").click(function(){
            $("#text4").val('');
            $("#desplegar4").collapse('hide');

        });

        //
        $("#btn5").click(function(){
            $("#desplegar5").collapse('show');
        });
        $("#btnclear5").click(function(){
            $("#text5").val('');
            $("#desplegar5").collapse('hide');

        });

        //
        $("#btn6").click(function(){
            $("#desplegar6").collapse('show');
        });
        $("#btnclear6").click(function(){
            $("#text6").val('');
            $("#desplegar6").collapse('hide');

        });

        //
        $("#btn7").click(function(){
            $("#desplegar7").collapse('show');
        });
        $("#btnclear7").click(function(){
            $("#text7").val('');
            $("#desplegar7").collapse('hide');

        });


        //
        $("#btn8").click(function(){
            $("#desplegar8").collapse('show');
        });
        $("#btnclear8").click(function(){
            $("#text8").val('');
            $("#desplegar8").collapse('hide');

        });

        //
        $("#btn9").click(function(){
            $("#desplegar9").collapse('show');
        });
        $("#btnclear9").click(function(){
            $("#text9").val('');
            $("#desplegar9").collapse('hide');

        });

        //
        $("#btn10").click(function(){
            $("#desplegar10").collapse('show');
        });
        $("#btnclear10").click(function(){
            $("#text10").val('');
            $("#desplegar10").collapse('hide');

        });






        /*

                $("#btn1").click(function(){
                    $("#desplegar2").collapse('show');
                });
                $("#btnclear1").click(function(){
                    $("#desplegar2").collapse('hide');
                });

                $("#btnclear1").click(function(e) {
                    e.preventDefault();
                    $("#text1").val('');
                });
        */













</script>








