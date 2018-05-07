@extends('templateelib')

@section('main')

<div class="container-fluid">

<div class="row">

<div class="col-lg-12">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">E-Library Jambu Raya</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <!-- <li class="nav-item active">
        <a class="nav-link" href={{url('elib')}}>Home <span class="sr-only">(current)</span></a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href={{url('logout')}}>Logout</a>
      </li>
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</div>

<div class="col-sm-3 col-md-6 col-lg-4">
<div class="d-kategori card square-card">
@if (!empty($kategory_list))
<ul class="list-group">
<button type="button" class="list-group-item list-group-item-action active">

Divisi

@if (session('status'))

        {{ session('status') }}

@endif
</button>

<!-- @if(session('status')=='Admin')
  @include('elibadmin')
@else -->
  @include('elibdivisi')
<!-- @endif -->



</ul>



@endif
</div>
</div>
  <!-- <div class="col-lg-1 "></div> -->
<div class="col-sm-9 col-md-6 col-lg-8 ">
  <div id="frm1" class="d-isi card square-card" style="width:auto;height:600px" >

  </div>
</div>


</div>
</div>
@stop


@section('footer')
