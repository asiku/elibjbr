@extends('template')

@section('main')

<div class="card dlogin">
  <div class="card-header">
    Login Dashboard
  </div>
  <div class="card-body logcolor">

    <form action="{{url('clogin')}}" method="post" class="needs-validation" data-toggle="validator" autocomplete="off" novalidate>
      {{ csrf_field() }}
      <div class="form-group">
        <label for="user" class="col-form-label">User Name:</label>
        <input type="text" class="form-control" id="usernm" name="usernm" required>
        <div class="invalid-feedback">
          User Harus di Isi!
        </div>
      </div>

      <div class="form-group">
        <label for="pwd" class="col-form-label">Password:</label>
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
