@extends('templatedashboard')

@section('main')

@include('sidebar')

<!-- Page Content Holder -->
<div id="content">

@include('navbar')

    <h2>Polling Kelompok Umur</h2>
    @if (!empty($kandidat_list))
    <div class="row">
    <?php  foreach($kandidat_list as $kandidat): ?>

        <div class="col-xs-12 col-sm-6 col-md-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">{{$kandidat->nama}}</h3>
            </div>
            <div class="panel-body">

              <img class="img-responsive" src="{{asset('gbr/'.$kandidat->foto)}}" alt="Card image cap">
              <img  class="imgload" src="{{asset('gbr/loading.gif')}}" alt="Card image cap" >
              <!-- buat 17 -->
              <!-- <p> <strong>Total Vote Pemilih Pemula 17 - 20 :</strong> <span class="titleprogresstot17" id={{'tot17'.$kandidat->id_kandidat}}></span> </p>
              <div class="progress" >
               <div id={{'pr17'.$kandidat->id_kandidat}} class="progress-bar progress-bar-striped active" role="progressbar"
                  aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                 <span class="titleprogress17" id={{$kandidat->id_kandidat}}></span>
               </div>
              </div> -->

              <!-- buat 20 -->
              <!-- <p> <strong>Total Vote Pemilih Pemula 20 - 40 :</strong> <span class="titleprogresstot20" id={{'tot20'.$kandidat->id_kandidat}}></span> </p>
              <div class="progress" >
               <div id={{'pr20'.$kandidat->id_kandidat}} class="progress-bar progress-bar-striped active" role="progressbar"
                  aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                 <span class="titleprogress20" id={{$kandidat->id_kandidat}}></span>
               </div>
              </div> -->
 <span class="titleprogress17" id={{$kandidat->id_kandidat}}></span>
              <canvas id={{'chart'.$kandidat->id_kandidat}} width="200" height="200"></canvas>



            </div>
          </div>
  </div>
    <?php endforeach ?>

    @else
    <div class="alert alert-danger" role="alert">
      <p>Tidak Ada Data !</p>
    </div>
    @endif
    </div>

  <!-- <div class="line"></div> -->
    <div class="panel panel-default">
      <div class="panel-body"><h3>Jumlah Keseluruhan <span id="totall"> </span> Vote</h3></div>
    </div>

</div>
@stop
