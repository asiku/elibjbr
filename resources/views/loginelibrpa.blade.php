@extends('templateelibdashRPA')

@section('main')

<div class="card dlogin">
  <div class="card-header">
    Login E-Library Jambu Raya
  </div>
  <div class="card-body logcolor">

    <form action="{{url('eloginRPA')}}" method="post" class="needs-validation" data-toggle="validator" autocomplete="off" novalidate>
      {{ csrf_field() }}

      <div class="form-group" >
        <?php  foreach($divisi_list as $divisi): ?>
              <input type="hidden" class="form-control" id="id_divisi" name="id_divisi" value="{{$divisi->id_divisi}}" required>
        <?php endforeach ?>


      </div>

      <div class="form-group">
      <label for="user" class="col-form-label">Divisi</label>
      <select class="custom-select" id="usernm" name="usernm" required>
          <option value="">Pilih Salah Satu Divisi</option>
        @if (!empty($divisi_list))
        <?php  foreach($divisi_list as $divisi): ?>
            <option value={{$divisi->divisi}}>{{$divisi->divisi}}</option>
        <?php endforeach ?>

        @endif
      </select>
      <div class="invalid-feedback">Anda Belum memilih Profesi!</div>
    </div>

      <div class="form-group">
        <label for="pwd" class="col-form-label">Password</label>
        <input type="password" class="form-control" id="pwd" name="pwd" required>
        <div class="invalid-feedback">
          Password Harus di Isi!
        </div>
      </div>
      <button class="btn btn-primary"  type="submit"> Login</button>
    </form>

  </div>

</div>


@stop
