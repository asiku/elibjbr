<?php  foreach($kategory_list as $kategory): ?>

@if($kategory!="")
    <li class="list-group-item">


  <div class="">
        <div id="accordion">
  <!-- <div class="card"> -->
    <!-- <div class="card-header" id="headingOne"> -->
    @if(App\Http\Controllers\elibController::filterkategorydivisi_kat(session('status'),$kategory->kategory)!="")
    <h5 class="mb-0">
      <button class="btn btn-link" data-toggle="collapse" data-target="#p{{App\Http\Controllers\elibController::angkasub()}}{{$kategory->id_perpus}}" aria-expanded="true" aria-controls="{{$kategory->id_perpus}}">
        <img class="imgico" src="{{asset('gbr/folder.svg')}}" alt="">
          {{App\Http\Controllers\elibController::filterkategorydivisi_kat(session('status'),$kategory->kategory)}}
      </button>
    </h5>
    @endif
    <!-- </div> -->

    <div id="p{{App\Http\Controllers\elibController::angkasub2()}}{{$kategory->id_perpus}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div id="isi_{{$kategory->id_perpus}}">
      <ul style="font-size:0.80em;cursor:pointer;vertical-align:top;">
        <?php  foreach(App\Http\Controllers\elibController::filterkategorydivisi(session('status'),$kategory->kategory) as $filelst): ?>
                <li id="{{App\Http\Controllers\elibController::angka()}}">
                  <a href="#">{{$filelst->pth}}</a>   </li>
        <?php endforeach ?>
      </ul>
      </div>
    </div>

  <!-- </div> -->

</div>
</div>


</li>
@endif
<?php endforeach ?>
