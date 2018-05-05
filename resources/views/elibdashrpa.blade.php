@extends('templateelibdashRPA')

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
      <li class="nav-item active">
        <a class="nav-link" href={{url('elib')}}>Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href={{url('logoutRPA')}}>Logout</a>
      </li>

    </ul>

  </div>
</nav>
</div>



<div class="col-sm-3 col-md-6 col-lg-4">
  <div class="d-kategori card square-card">
    <div class="list-group" id="list-tab" role="tablist">
     <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Input Data File</a>
     <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Input kategory File</a>

   </div>


  </div>
</div>
  <!-- <div class="col-lg-1 "></div> -->
<div class="col-sm-9 col-md-6 col-lg-8 ">
  <div  class="d-isi card square-card" >
    <!--  -->
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
        @include('elibfrmdashrpa')
      </div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
          @include('elibfrmkatrpa')
      </div>

    </div>
  </div>
</div>


</div>
</div>
@stop


@section('footer')
