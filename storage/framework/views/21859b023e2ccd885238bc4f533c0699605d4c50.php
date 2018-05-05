<?php $__env->startSection('main'); ?>
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><img src="<?php echo e(asset('gbr/user.svg')); ?>" class="img-b" alt="">Polling Pilpres Jambu Raya</a>
  <span id="pkeldesa" class="navbar-text">

    </span>
</nav>
<div id="d-header">
<div class="line">

</div>
  <div class="headertitle"><h4><strong>Pilpres Jambu Raya</strong> Periode 2018-2019 Memilih Calon Presiden Jambu Raya.
    Pilih dengan Hati Nurani
  </h4></div>
  <div class="line">

  </div>
</div>

<div class="d-voter">

<?php if(!empty($kandidat_list)): ?>
<div class="row" >
<?php  foreach($kandidat_list as $kandidat): ?>

  <div class="msgk"></div>

    <div class="col-xs-12 col-sm-6 col-md-4" >
  <div class="card square-card" style="width: 18rem;">
    <img class="card-img-top" src="<?php echo e(asset('gbr/'.$kandidat->foto)); ?>" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><?php echo e($kandidat->nama); ?></h5>
      <!-- <p class="card-text"> <strong>Visi</strong>, <?php echo e($kandidat->visi); ?>  </p> -->
        <!-- <p class="card-text" > <strong> Misi</strong>,
          <?php echo e($kandidat->misi); ?> </p> -->



    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo e($kandidat->id_kandidat); ?>"
      data-nama="<?php echo e($kandidat->nama); ?>">Vote</button>
    </div>
  </div>
  </div>

<?php endforeach ?>
</div>
<?php endif; ?>

<?php if (! (empty($kandidat_list))): ?>

<div id="msgkosong" class="alert alert-danger" role="alert" >
  <p>Tidak Ada Data kandidat!</p>
</div>

<?php endif; ?>

</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <!-- <h5 class="modal-nama" id="exampleModalLabelnama">New message</h5> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div id="alertktp" class="alert alert-warning alert-dismissible fade show" role="alert">
          No. Ktp Sudah Pernah Di Input!

          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
        </div>

        <form action="<?php echo e(url('counter')); ?>" method="post" class="needs-validation" data-toggle="validator" autocomplete="off" novalidate>
          <?php echo e(csrf_field()); ?>

          <!-- <input type="hidden" name="_token" > -->
<!-- style="visibility: hidden;" -->
          <div class="form-group" >
            <input type="hidden" class="form-control" id="id_kandidat" name="id_kandidat" required>
            <!-- <label for="id_kandidat" class="col-form-label">Id Kandidat</label>
            <input type="text" class="form-control" id="id_kandidat" required> -->
            <!-- <div class="invalid-feedback">
              No. Ktp Harus di Isi!
            </div> -->
          </div>
          <div class="form-group">
            <label for="no_ktp" id="lblnoktp" class="col-form-label">No. KTP:</label>
            <input type="text" class="form-control" id="no_ktp" name="no_ktp" required>
            <div class="invalid-feedback">
              No. Ktp Harus di Isi!
            </div>
          </div>
          <div class="form-group">
            <label for="nama" class="col-form-label">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
            <div class="invalid-feedback">
              Nama Harus di Isi!
            </div>
          </div>
          <div class="form-group">
            <label for="tgl_lahir" class="col-form-label">Tgl Lahir:</label>
            <input name="tgl_lahir" class="form-control" id="tgl_lahir" type="date" required>
            <div class="invalid-feedback">
              Tgl Harus diisi
            </div>
          </div>
          <div class="form-group">
          <select class="custom-select" name="profesi" required>
            <option value="">Pilih Salah Satu Profesi</option>
            <option value="Pegawai Swasta">Pegawai Swasta</option>
            <option value="Wiraswasta">Wiraswasta</option>
            <option value="Pengajar">Pengajar</option>
            <option value="Dokter">Dokter</option>
            <option value="Pelayan Medis">Pelayan Medis</option>
            <option value="Buruh">Buruh</option>
            <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
            <option value="Mahasiswa">Mahasiswa</option>
            <option value="Pelajar">Pelajar</option>
            <option value="PNS">PNS</option>
            <option value="Non Formal">Non Formal</option>
            <option value="Tidak Punya Pekerjaan">Tidak Punya Pekerjaan</option>
            <option value="Lainnya">Lainnya</option>

          </select>
          <div class="invalid-feedback">Anda Belum memilih Profesi!</div>
        </div>
          <div class="form-group">
            <label for="jk" class="col-form-label">Jenis Kelamin:</label>
            <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" id="customControlValidation2" name="jk" value='l' required>
                <label class="custom-control-label" for="customControlValidation2"> Laki-laki</label>
              </div>
              <div class="custom-control custom-radio mb-3">
                <input type="radio" class="custom-control-input" id="customControlValidation3" name="jk" value='p' required>
                <label class="custom-control-label" for="customControlValidation3">Perempuan</label>
                <div class="invalid-feedback"> Anda Belum Memilih Jenis Kelamin!</div>
              </div>
          </div>
          <div class="form-group">
            <input type="hidden" class="form-control" id="latitude" name="latitude">
          </div>
          <div class="form-group">
            <input type="hidden" class="form-control" id="longitude" name="longitude">
          </div>
          <div class="form-group">
            <input type="hidden" class="form-control" id="kel_desa" name="kel_desa">
          </div>
          <div class="form-group">
            <input type="hidden" class="form-control" id="kecamatan" name="kecamatan">
          </div>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button class="btn btn-primary"  type="submit"> Proses Vote</button>
        </form>




      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary"> Proses Vote</button>
      </div> -->
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>
<div class="footer">

</div>


<script>
$(document).ready(function() {

 getdesa();


cekv();

function cekv() {
  if( $('.msgk').length )         // use this if you are using id to check
{
     $("#msgkosong").hide();
}
}




  $("#alertktp").hide();
$('#no_ktp').keyup(function(e) {
console.log("cari");
var chatinput = document.getElementById("no_ktp").value;
console.log(chatinput);
if (chatinput == "" || chatinput.length == 0 || chatinput == null) {

console.log("text kosong");
}

else {
  carinoktp($("#no_ktp").val());
}
});

function carinoktp(ns){
  $.ajax({

    url: "<?php echo e(url('cariktp')); ?>"+ "/" + ns,
    success: function( response ) {

      // console.log('getabsen:'+response);
console.log(response);
      var t = JSON.parse(response);
      // console.log("noktp: "+t['no_ktp']);
      // console.log('jml absen;'+t[0]['toth']);


      if (t['no_ktp']!=null) {
        $("#alertktp").show("slow");
        // $('#lblnoktp').val("No. KTP: Sudah Ada!");
        $('#no_ktp').val("");
      }
      else{
        $("#alertktp").hide("slow");
      }
    }
  });
}

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
	// alert('Your latitude is :'+lat+' and longitude is '+long);
  $("#latitude").val(lat);
  $("#longitude").val(long);
  carikeldesa(lat,long);
  carikec(lat,long);
}

function errorFunction(position) {
	// alert('Error!');
  console.log("geo error");
}

function getdesa() {
   geo();

}



$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget);
  var recipient = button.data('whatever');
  var nm = button.data('nama');
  var modal = $(this);
  // modal.find('.modal-title').text(recipient);
  modal.find('.modal-title').text("Pilih "+nm);
  // modal.find('.modal-nama').text(nm);
  // modal.find('.modal-body input').val(recipient)
  $("#id_kandidat").val(recipient);

$("#alertktp").hide();
geo();



});

function caristrdesa(h){

var koma=new Array();

for(i=0;i<h.length;i++){

  if(h[i].search(",")!=-1){

    koma.push(i);

  }

}

var hs=koma[1]-koma[0];

return h.substring(koma[0]+2,koma[0]+hs);
}



function carikeldesa(lat,lng) {
var rst="";
    $.ajax({

    url: "https://maps.googleapis.com/maps/api/geocode/json?latlng="+lat+","+lng+"&sensor=true",
    success: function( response ) {

       rst=response.results[0]['formatted_address'];
       console.log(response.results[0]['address_components'][4]['long_name']);

      //  $("#kel_desa").val(response.results[0]['address_components'][4]['long_name']);
      $("#kel_desa").val(caristrdesa(rst));

      $("#pkeldesa").text("Kel./Desa: "+caristrdesa(rst));

    }
  });

  return rst;
}


function carikec(lat,lng) {
var rst="";
    $.ajax({

    url: "http://maps.googleapis.com/maps/api/geocode/json?latlng="+lat+","+lng+"&sensor=true",
    success: function( response ) {

      //  var t=JSON.parse(response);
      //  console.log(response.results[0]['formatted_address']);
       rst=response.results[0]['formatted_address'];
       console.log(response.results[0]['address_components'][5]['long_name']);
       $("#kecamatan").val(response.results[0]['address_components'][5]['long_name']);
      //  console.log("alamat"+t['results'][0]['address_components']['formatted_address']);

    }
  });

  return rst;
}



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



<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>