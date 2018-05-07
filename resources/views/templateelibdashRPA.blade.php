<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="widht=device-width,initial-scale=1">
    <title>E-library Jambu Raya</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/styleelib.css')}}">


  </head>
  <body>
<div class="container">
  @yield('main')
</div>

@yield('footer')
<script src="{{asset('bootstrap/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>


<script>

$(document).ready(function() {

  $('select').on('change', function (e) {
      var optionSelected = $("option:selected", this);
      var valueSelected = this.value;
    $("#id_divisi").val(valueSelected);
    console.log($("#id_divisi").val());
  });




});

</script>

  </body>
</html>
