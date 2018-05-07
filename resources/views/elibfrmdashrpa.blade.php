
<form action="{{url('uploadpdf')}}" method="post" role="form" enctype="multipart/form-data"
  class="needs-validation" data-toggle="validator" autocomplete="off"  novalidate>
  {{ csrf_field() }}

  <div class="form-group" >
    <input type="hidden" class="form-control" id="id_divisi" name="id_divisi" required>

  </div>

  <div class="form-group">


    <input type="text" class="form-control" id="id_divisi" name="id_divisi" value="{{ session('id_divisi') }}" required>

    <div class="invalid-feedback">
      id divisi Harus di Isi!
    </div>
  </div>

  <div class="form-group">
    <label for="id_perpus" class="col-form-label">Kategory:</label>
  <select class="custom-select" name="id_perpus" required>
    <option value="">Pilih Salah Satu kategory</option>
    @if (!empty($kategory_list))
  <?php  foreach($kategory_list as $kategory): ?>
    <option value={{$kategory->id_perpus}}>{{$kategory->kategory}}</option>

  <?php endforeach ?>
  @endif

  </select>
  <div class="invalid-feedback">Anda Belum memilih kategory!</div>
</div>

<div class="form-group" >
<input type="file" name="pth" id="pth">

</div>

  <button class="btn btn-primary"  type="submit"> Simpan </button>
</form>


@if (session('status_msg'))
    <div class="alert alert-success">
        {{ session('status_msg') }}
    </div>
@endif
