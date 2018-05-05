<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="widht=device-width,initial-scale=1">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/style4.css')); ?>">


  </head>
  <body>
<div class="wrapper">
  <?php echo $__env->yieldContent('main'); ?>
</div>
<?php echo $__env->yieldContent('footer'); ?>

<!-- jQuery CDN -->
 <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
 <!-- Bootstrap Js CDN -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyCRizwRaEHVp_4uN5AYtvWJ5NZrFgvql40"></script>
<!-- <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script> -->

<script>

$(document).ready(function() {
  // var    map;
  var petas=new Array();
    $('.titleprogresspeta').each(function() {
        // map=new google.maps.Map(document.getElementById("map"+this.id), {
        //     center: new google.maps.LatLng(-6.639010, 106.801778),
        //     zoom: 10
        //   });
console.log("id "+this.id);
          petas.push(new google.maps.Map(document.getElementById("map"+this.id), {
              center: new google.maps.LatLng(-6.639010, 106.801778),
              zoom: 10
            }));
          // caripetakeldesa(this.id);
    });


var banding;

  var interval = setInterval(function() {

    carijmlvotes();
setpersen();

  }, 2000);


// caripeta();

function setpersen(){

var dat="";

var km=-1;

  $('.titleprogress').each(function() {
    //  alert( this.id );
      carijmlvote(this.id);
  });

  $('.titleprogress17').each(function() {

      carijmlvote17(this.id);
  });

  $('.titleprogressp').each(function() {
      carijmlvoteprofesi(this.id);
  });

  $('.titleprogresspeta').each(function() {
    km=km+1;
      caripetakeldesa(this.id,km);
  });


}



function getRandomColor() {
  var letters = '0123456789ABCDEF';
  var color = '#';
  for (var i = 0; i < 6; i++) {
    color += letters[Math.floor(Math.random() * 16)];
    // color += letters[Math.floor(1 * 16)];

  }
  return color;
}

  $('#sidebarCollapse').on('click', function () {
      $('#sidebar').toggleClass('active');
  });


  function carijmlvoteprofesi(ns){

    $.ajax({

      url: "<?php echo e(url('carijmlvoteprofesi')); ?>"+ "/" + ns,
      success: function( response ) {

        var t = JSON.parse(response);


        if(response!=null){

          // var s=0;
          //
          // for(i=0;i<Object.keys(t).length;i++){
          // s=s + parseInt(t[i]['tot_vote']);
          //
          // }



                  var pro = new Array();
                  var totv = new Array();
                  var color = new Array();
// alert(banding==response);
            $.each(t, function(index, value) {

                pro.push(value.profesi);
                totv.push(value.tot_vote);
                color.push(getRandomColor());

            });



  $(".imgload").hide("slow");

          new Chart(document.getElementById("chartp"+ns), {
              type: 'bar',
              data: {
                labels: pro,
                datasets: [{
                  label: "Jumlah Pemilih",
                  backgroundColor: color,
                  data: totv
                }]
              },
              options: {
                scales: {
                          yAxes: [{
                              ticks: {
                                  beginAtZero:true
                              }
                          }]
                      },
                animation:{
                // animateRotate: false,
                duration: 10,
                render: false,
                },

                legend: { display: false },
                title: {
                  display: true,
                  text: 'Polling Berdasarkan Profesi'
                }

              }
          });


        }

      }

    });
  }


  function carijmlvote17(ns){

    $.ajax({

      url: "<?php echo e(url('carijmlvoteumur')); ?>"+ "/" + ns,
      success: function( response ) {


        var t = JSON.parse(response);



        if(response!=null){

          var s=0;
          // alert(Object.keys(t).length)
          for(i=0;i<Object.keys(t).length;i++){
          s=s + parseInt(t[i]['tot_vote']);

          }
  $(".imgload").hide("slow");
          carijmlvoteD(ns,s);
console.log("Dat:"+dat);



        //  $("#pr17"+ns)
        //  .css("width", s + "%")
        //  .attr("aria-valuenow",  s)
        //  .attr("id",  "pr17"+ns)
        //  .text( s + "%");
        //  $("#pr17"+ns).append("<span class='titleprogress17' id="+ns+'></span>');

        //  alert(response.length)


        }

        // carijmlvotep(ns);




      }
    });
  }

  function carijmlvoteD(ns,b){

    $.ajax({

      url: "<?php echo e(url('carijmlvoteumurD')); ?>"+ "/" + ns,
      success: function( response ) {

        // console.log(response);
        var t = JSON.parse(response);

        if(response!=null){

          var s=0;
          // alert(Object.keys(t).length)
          for(i=0;i<Object.keys(t).length;i++){
          s=s + parseInt(t[i]['tot_vote']);

          }

          carijmlvoteE(ns,b,s);

        //   new Chart(document.getElementById("chart"+ns), {
        //       type: 'doughnut',
        //       data: {
        //         labels: ["17 - 20 thn", "20 - 50 thn","Diatas 50 thn"],
        //         datasets: [{
        //           label: "Population (millions)",
        //           backgroundColor: ["#3e95cd", "#8e5ea2",#333333],
        //           data: [b,s]
        //         }]
        //       },
        //       options: {
        //         animation:{
        // animateRotate: false,
        // render: false,
        // },
        //         title: {
        //           display: true,
        //           text: 'Total vote Kelompok Umur'
        //         }
        //       }
        //   });

        }


      }
    });
    // alert(dat);

  }

  function carijmlvoteE(ns,b,a){

    $.ajax({

      url: "<?php echo e(url('carijmlvoteumurE')); ?>"+ "/" + ns,
      success: function( response ) {

        // console.log(response);
        var t = JSON.parse(response);

        if(response!=null){

          var s=0;
          // alert(Object.keys(t).length)
          for(i=0;i<Object.keys(t).length;i++){
          s=s + parseInt(t[i]['tot_vote']);

          }


          new Chart(document.getElementById("chart"+ns), {
              type: 'doughnut',
              data: {
                labels: ["17 - 20 thn ", "20 - 50 thn " ,"Diatas 50 thn "],
                datasets: [{
                  label: "Population (millions)",
                  backgroundColor: ["#3e95cd", "#8e5ea2","#333333"],
                  data: [b,a,s]
                }]
              },
              options: {
                animation:{
        animateRotate: false,
        render: false,
        },
                title: {
                  display: true,
                  text: 'Total vote Kelompok Umur'
                }
              }
          });

        }


      }
    });
    // alert(dat);

  }


  function carijmlvote(ns){

    $.ajax({

      url: "<?php echo e(url('carijmlvote')); ?>"+ "/" + ns,
      success: function( response ) {

        // console.log('getabsen:'+response);
  console.log(response);
        var t = JSON.parse(response);
        // console.log("noktp: "+t['no_ktp']);
        // console.log('jml absen;'+t[0]['toth']);


        // parseFloat()

        // var tot=(parseFloat(t[0]['tot_vote'])/a) * 100;

      //   $("#pr"+ns)
      //  .css("width", t[0]['tot_vote'] + "%")
      //  .attr("aria-valuenow",  t[0]['tot_vote'])
      //  .text( t[0]['tot_vote'] + "%");

      carijmlvotep(ns);
  $(".imgload").hide("slow");
       $("#tot"+ns).text(t[0]['tot_vote']);

      //  console.log(response);
        // if (t['no_ktp']!=null) {
        //   $("#alertktp").show("slow");
        //   // $('#lblnoktp').val("No. KTP: Sudah Ada!");
        //   $('#no_ktp').val("");
        // }
        // else{
        //   $("#alertktp").hide("slow");
        // }

      }
    });
  }


  function carijmlvotep(ns){

    $.ajax({

      url: "<?php echo e(url('carijmlvotep')); ?>"+ "/" + ns,
      success: function( response ) {

        $("#pr"+ns)
       .css("width", response + "%")
       .attr("aria-valuenow",  response)
       .attr("id",  "pr"+ns)
       .text( response + "%");
       $("#pr"+ns).append("<span class='titleprogress' id="+ns+'></span>');


      }
    });
  }

  function carijmlvotes(){

    $.ajax({

      url: "<?php echo e(url('carijmlvotes')); ?>",
      success: function( response ) {
var t = JSON.parse(response);

        $("#totall").text(t[0]['tot_vote']);

      }
    });
  }


  function caripemilihall(){

    $.ajax({

      url: "<?php echo e(url('caripemilihall')); ?>",
      success: function( response ) {

      var t = JSON.parse(response);

      $("#tbpemilih").find("tr:gt(0)").remove();

        $.each(t, function(index, value) {


          var pemilihrow = '<tr>' +
                    '<td>' + value.nama + '</td>' +
                    '<td>' + value.no_ktp + '</td>' +
                    '<td>' + value.tgl_lahir + '</td>' +
                    '<td>' + value.jk + '</td>' +
                    '<td>' + value.profesi + '</td>' +
                    '<td>' + value.umur + '</td>' +
                    '</tr>';

          $('#tbpemilih tbody').append(pemilihrow);

        });


      }
    });
  }

  function caripemilih(ns){

    $.ajax({

      url: "<?php echo e(url('caripemilih')); ?>"+ "/" + ns,
      success: function( response ) {

      var t = JSON.parse(response);

      $("#tbpemilih").find("tr:gt(0)").remove();

        $.each(t, function(index, value) {


          var pemilihrow = '<tr>' +
										'<td>' + value.nama + '</td>' +
										'<td>' + value.no_ktp + '</td>' +
										'<td>' + value.tgl_lahir + '</td>' +
										'<td>' + value.jk + '</td>' +
										'<td>' + value.profesi + '</td>' +
                    '<td>' + value.umur + '</td>' +
									  '</tr>';

					$('#tbpemilih tbody').append(pemilihrow);

        });


      }
    });
  }

  $('#txtcari').keyup(function(e) {

  var chatinput = document.getElementById("txtcari").value;
  console.log(chatinput);
  if (chatinput == "" || chatinput.length == 0 || chatinput == null) {
caripemilihall();
  console.log("text kosong");
  }

  else {
    caripemilih($("#txtcari").val());
  }
  });

  $( "#btcari" ).click(function() {
    caripemilih($("#txtcari").val());
  });


function geo() {
  if (navigator.geolocation) {
	navigator.geolocation.getCurrentPosition(successFunction, errorFunction);
} else {
   console.log("browser kga support");
}

}

function successFunction(position) {
	var lat = position.coords.latitude;
	var long = position.coords.longitude;
	alert('Your latitude is :'+lat+' and longitude is '+long);
}

// function carialamat(lat,lng) {
// var rst="";
//     $.ajax({
//
//     url: "http://maps.googleapis.com/maps/api/geocode/json?latlng="+lat+","+lng+"&sensor=true",
//     success: function( response ) {
//
//       //  var t=JSON.parse(response);
//       //  console.log(response.results[0]['formatted_address']);
//        rst=response.results[0]['formatted_address'];
//        console.log(response.results[0]['address_components'][4]['long_name']);
//       //  console.log("alamat"+t['results'][0]['address_components']['formatted_address']);
//
//     }
//   });
//
//   return rst;
// }

function caripetakeldesa(ns,ix){


  $.ajax({

    url: "<?php echo e(url('caripetakeldesa')); ?>"+ "/" + ns,
    success: function( response ) {

var markers = [];

$(".imgload").hide("slow");


      // var map = new google.maps.Map(document.getElementById('map'+ns), {
      //   center: new google.maps.LatLng(-6.639010, 106.801778),
      //   zoom: 10
      // });

var map=petas[ix];

  var infoWindow = new google.maps.InfoWindow;

   var t=JSON.parse(response);
   console.log("peta"+t[0]['latitude']);

if(response!=null){

  var pro = new Array();
  var totv = new Array();
  var color = new Array();
// alert(banding==response);
$.each(t, function(index, value) {

pro.push(value.kel_desa);
totv.push(value.tot_vote);
color.push(getRandomColor());

});
   new Chart(document.getElementById("chartpeta"+ns), {
       type: 'bar',
       data: {
         labels: pro,
         datasets: [{
           label: "Jumlah Pemilih",
           backgroundColor: color,
           data: totv
         }]
       },
       options: {
         scales: {
                   yAxes: [{
                       ticks: {
                           beginAtZero:true
                       }
                   }]
               },
         animation:{
         // animateRotate: false,
         duration: 10,
         render: false,
         },

         legend: { display: false },
         title: {
           display: true,
           text: 'Polling Berdasarkan Kelurahan/Desa'
         }

       }
   });

}



  $.each(t, function(index, value) {
    // console.log("desa:"+value.nama);

    console.log(index);

var name = value.tot_vote;
var keldesa=value.kel_desa;
var kec=value.kecamatan;

    var point = new google.maps.LatLng(
        parseFloat(value.latitude), parseFloat(value.longitude));
  var infowincontent = document.createElement('div');
  var strong = document.createElement('strong');
  strong.textContent = name
  infowincontent.appendChild(strong);
  infowincontent.appendChild(document.createElement('br'));

  var ndeso = document.createElement('text');
  ndeso.textContent = keldesa;
  infowincontent.appendChild(ndeso);

  var kecm = document.createElement('text');
  kecm.textContent = kec;
  infowincontent.appendChild(kecm);

  var marker = new google.maps.Marker({
    map: map,
    position: point,
    label: "V"
  });

  markers.push(marker);
  marker.addListener('click', function() {
    infoWindow.setContent(infowincontent);
    infoWindow.open(map, marker);
  });

  });
// var markerCluster = new MarkerClusterer(map, markers,  {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
    }
  });

}

function caripeta(){


  $.ajax({

    url: "<?php echo e(url('caripeta')); ?>",
    success: function( response ) {

var markers = [];

      var map = new google.maps.Map(document.getElementById('map'), {
        center: new google.maps.LatLng(-6.639010, 106.801778),
        zoom: 10
      });

  var infoWindow = new google.maps.InfoWindow;

   var t=JSON.parse(response);
   console.log("peta"+t[0]['latitude']);


  $.each(t, function(index, value) {
    console.log("desa:"+value.nama);
var name = value.nama;
var keldesa=value.kel_desa;
var kec=value.kecamatan;

    var point = new google.maps.LatLng(
        parseFloat(value.latitude), parseFloat(value.longitude));
  var infowincontent = document.createElement('div');
  var strong = document.createElement('strong');
  strong.textContent = name
  infowincontent.appendChild(strong);
  infowincontent.appendChild(document.createElement('br'));

  var ndeso = document.createElement('text');
  ndeso.textContent = keldesa;
  infowincontent.appendChild(ndeso);

  var kecm = document.createElement('text');
  kecm.textContent = kec;
  infowincontent.appendChild(kecm);

  var marker = new google.maps.Marker({
    map: map,
    position: point,
    label: "V"
  });

  markers.push(marker);
  marker.addListener('click', function() {
    infoWindow.setContent(infowincontent);
    infoWindow.open(map, marker);
  });

  });
var markerCluster = new MarkerClusterer(map, markers,  {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
    }
  });

}
//



// function initMap() {
//         var map = new google.maps.Map(document.getElementById('map'), {
//           center: new google.maps.LatLng(-33.863276, 151.207977),
//           zoom: 12
//         });
//         var infoWindow = new google.maps.InfoWindow;
//
//
//
//           // Change this depending on the name of your PHP or XML file
//           downloadUrl('https://storage.googleapis.com/mapsdevsite/json/mapmarkers2.xml', function(data) {
//             var xml = data.responseXML;
//             var markers = xml.documentElement.getElementsByTagName('marker');
//             Array.prototype.forEach.call(markers, function(markerElem) {
//               var name = markerElem.getAttribute('name');
//               var address = markerElem.getAttribute('address');
//               var type = markerElem.getAttribute('type');
//
//               var point = new google.maps.LatLng(
//                   parseFloat(markerElem.getAttribute('lat')),
//                   parseFloat(markerElem.getAttribute('lng')));
//
//               var infowincontent = document.createElement('div');
//               var strong = document.createElement('strong');
//               strong.textContent = name
//               infowincontent.appendChild(strong);
//               infowincontent.appendChild(document.createElement('br'));
//
//               var text = document.createElement('text');
//               text.textContent = address
//               infowincontent.appendChild(text);
//               var icon = customLabel[type] || {};
//
//               var marker = new google.maps.Marker({
//                 map: map,
//                 position: point,
//                 label: icon.label
//               });
//               marker.addListener('click', function() {
//                 infoWindow.setContent(infowincontent);
//                 infoWindow.open(map, marker);
//               });
//
//             });
//
//
//           });
//         }


$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget);
  // var recipient = button.data('whatever');
  // var nm = button.data('nama');
  var modal = $(this);
  // modal.find('.modal-title').text(recipient);
  modal.find('.modal-title').text("Tambah Data");
  // modal.find('.modal-nama').text(nm);
  // modal.find('.modal-body input').val(recipient)

});


});


(function() {
  'use strict';
  window.addEventListener('load', function() {

    var forms = document.getElementsByClassName('needs-validation');

    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();

</script>

<!-- <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRizwRaEHVp_4uN5AYtvWJ5NZrFgvql40&callback=caripeta">
</script> -->


  </body>
</html>
