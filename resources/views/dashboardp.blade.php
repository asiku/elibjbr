@extends('templatedashboard')

@section('main')

@include('sidebar')

<!-- Page Content Holder -->
<div id="content">

@include('navbar')




    <h2>Polling Berdasarkan Profesi</h2>
    @if (!empty($kandidat_list))

<div class="row">
  <div class="col-sm-12">



    <?php  foreach($kandidat_list as $kandidat): ?>

          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">{{$kandidat->nama}}</h3>
            </div>
            <div class="panel-body">

              <!-- <div class="container"> -->
                <!-- <div class="row"> -->
              <div class="col-sm-4">
              <div class="panel panel-default">
                <div class="panel-body">
                  <img  class="img-responsive"  src="{{asset('gbr/'.$kandidat->foto)}}" alt="Card image cap">
                  <p> <strong>Total Vote :</strong> <span class="titleprogresstot" id={{'tot'.$kandidat->id_kandidat}}></span> </p>
                  <!-- <p> <strong> Misi</strong>, -->
                    <!-- {{$kandidat->misi}} </p> -->
                    <div class="progress" >
                   <div id={{'pr'.$kandidat->id_kandidat}} class="progress-bar progress-bar-striped active" role="progressbar"
                      aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                     <span class="titleprogress" id={{$kandidat->id_kandidat}}></span>
                   </div>
                  </div>
                </div>
              </div>
            </div>

              <div class="col-sm-8">
                <div class="panel panel-default">
                <div class="panel-body">
                  <canvas id={{'chartp'.$kandidat->id_kandidat}} ></canvas>
                </div>
              </div>
            </div>

            <!-- </div> -->
          <!-- </div> -->

          <img  class="imgload" src="{{asset('gbr/loading.gif')}}" alt="Card image cap" >

          <span class="titleprogressp" id={{$kandidat->id_kandidat}}></span>

          </div>


        </div>




    <?php endforeach ?>
    @else
    <div class="alert alert-danger" role="alert">
      <p>Tidak Ada Data !</p>
    </div>
    @endif

  </div>
</div>

  <!-- <div class="line"></div> -->
    <div class="panel panel-default">
      <div class="panel-body"><h3>Jumlah Keseluruhan <span id="totall"> </span> Vote</h3></div>
    </div>

</div>
@stop
