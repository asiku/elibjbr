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



// $( "#tesdiv" ).click(function() {
//   $(".tesdiv2").toggle();
// });

// $('ul > ul li').each(function(i)
// {
//   var b=$(this).attr('id');
//   alert(b);
//    });




$('ul li').each(function(i)
{
   var b=$(this).attr('id');


   $( "#"+b ).click(function() {


    var txt=$.trim($("#"+b).text());

    var f1="<iframe ";
    var f2="src={{ url('/') }}/pdffiles/";
    var f3=" style=width:auto;height:600px allowfullscreen webkitallowfullscreen></iframe>";

    document.getElementById('frm1').innerHTML = f1+f2+txt+f3 ;

  });

});

// function hidesub() {
//   $('ul li>ul li').each(function(i)
//   {
//      var b=$(this).attr('id');
// alert(b);
//      $("#"+b).hide();
//      });
// }




});

</script>

  </body>
</html>
