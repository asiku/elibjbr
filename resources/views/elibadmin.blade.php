
<input type="hidden" id="tmpth">

<ul class="list-group">
<?php  foreach($divisi_list as $divisi): ?>
@if($divisi->divisi!="Admin")
    <li class="list-group-item">

            <a id=1{{App\Http\Controllers\elibController::angkaparent()}}{{$divisi->divisi}} data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
              <img class="imgico" src="{{asset('gbr/notebook.svg')}}" alt="">  {{$divisi->divisi}}
              </a>

            <ul class="list-group">


              <?php  foreach($kategory_list as $kategory): ?>
                  <li id=2{{App\Http\Controllers\elibController::angkachild()}}{{$divisi->divisi}} class="level2">


                <div class="">

                      <div id="accordion">
                <!-- <div class="card"> -->
                  <!-- <div class="card-header" id="headingOne"> -->

                @if(App\Http\Controllers\elibController::filterkategorydivisi_kat($divisi->divisi,$kategory->kategory)!="")
                <h5 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#p{{App\Http\Controllers\elibController::angkasub()}}{{$kategory->id_perpus}}" aria-expanded="true" aria-controls="{{$kategory->id_perpus}}">
                    <img class="imgico" src="{{asset('gbr/folder.svg')}}" alt="">
                    {{App\Http\Controllers\elibController::filterkategorydivisi_kat($divisi->divisi,$kategory->kategory)}}
                  </button>
                </h5>
                @endif

                  <!-- </div> -->

                  <div id="p{{App\Http\Controllers\elibController::angkasub2()}}{{$kategory->id_perpus}}" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div id="isi_{{$kategory->id_perpus}}">
                    <ul style="font-size:0.80em;cursor:pointer;vertical-align:top;">
                      <?php  foreach(App\Http\Controllers\elibController::filterkategorydivisi($divisi->divisi,$kategory->kategory) as $filelst): ?>
                              <li onclick=getkat('{{str_replace(' ', '-',$divisi->divisi.' >  '.$kategory->kategory)}}'); id="pdf{{App\Http\Controllers\elibController::angka()}}">

                                <a href="#">{{$filelst->pth}}</a>

                               </li>
                      <?php endforeach ?>
                    </ul>
                    </div>
                  </div>

                <!-- </div> -->

                </div>

              </div>


              </li>
              <?php endforeach ?>
                </ul>

    </li>



@endif
<?php endforeach ?>
</ul>
