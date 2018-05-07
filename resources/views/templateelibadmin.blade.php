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



function getkat(kat){
  $("#tmpth").val(kat.replace(/-/g,' ')+" >");
}


function hpschar_pth(k){
  var s= k.replace(/[0-9]/g, "");
  return s;
}

$(document).ready(function() {



// $( "#tesdiv" ).click(function() {
//   $(".tesdiv2").toggle();
// });

// $('ul > ul li').each(function(i)
// {
//   var b=$(this).attr('id');
//   alert(b);
//    });



tampilsub();
hidesub();
tampilpdf();
// setPth();

function tampilpdf(){

  $('ul li>ul>li li').each(function(i)
  {
     var b=$(this).attr('id');

     // alert(b);
     $( "#"+b ).click(function() {



      var txt=$.trim($("#"+b).text());


      $("#spathinfo").text($("#tmpth").val()+txt);


      var f1="<iframe ";
      var f2="src={{ url('/') }}/pdffiles/";
      var f3=" style=width:auto;height:600px allowfullscreen webkitallowfullscreen></iframe>";

      document.getElementById('frm1').innerHTML = f1+f2+txt+f3 ;

       });

     });

}



function tampilsub() {
  $('ul li>a').each(function(i)
  {
     var kr=$(this).attr('id');

     $( "#"+kr ).click(function() {
       $('ul li>ul>li').each(function(i)
       {
         var b=$(this).attr('id');
         if(hpschar(b)==hpschar(kr)){
             $("#"+b).toggle();
         }


       });

     });
});
}

function hpschar(k){
  var s= k.replace(/[0-9]/g, "");
  return s;
}

// function setPth(kr){
//   $('ul li>ul>li').each(function(i)
//   {
//     var b=$(this).attr('id');
//     if(hpschar(b)==hpschar(kr)){
//         $("#"+b).toggle();
//     }
//
//
//   });
// }


function hidesub() {
  // >ul>li
  $('ul li>ul>li').each(function(i)
  {
     var b=$(this).attr('id');

     // alert(b);
      $("#"+b).hide();

     });
}




});

</script>

  </body>
</html>
