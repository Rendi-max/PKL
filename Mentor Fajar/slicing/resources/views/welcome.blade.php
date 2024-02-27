@extends('Layout.Layout1')
@section('content')
    <div class="text-center" style="margin: 70px 150px 100px 150px">
        <div class="img-fluid mx-auto">
            <img src="{{ asset('logo/00a.png') }}" alt="">
        </div>
        <form action="/taksonomi" method="get">
            <div class="row mt-2">
                <div class="form-floating input-group text-center">
                    <input type="text" class="form-control" name="" id="" placeholder="Search...">
                    <label for="" class="form-label ms-2" style="color: gray">Search...</label>
                    <button type="submit" class="btn btn-secondary"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </form>
        <div class="">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                          <li class="nav-item me-2">
                            <a class="nav-link " style="color: gray" aria-current="page" href="#"><b>Topik Populer</b></a>
                          </li>
                          <li class="nav-item me-2">
                            <a class="nav-link"  style="color: lightblue"href="#"><b>Lore ipsum</b></a>
                          </li>
                          <li class="nav-item me-2">
                            <a class="nav-link"  style="color: lightblue"href="#"><b>Lore ipsum</b></a>
                          </li>
                          <li class="nav-item me-2">
                            <a class="nav-link"  style="color: lightblue"href="#"><b>Lore ipsum</b></a>
                          </li>
                          <li class="nav-item me-2">
                            <a class="nav-link"  style="color: lightblue"href="#"><b>Lore ipsum</b></a>
                          </li>
                        </ul>
                </div>
            </nav>
        </div>
        <div class="mt-4">
          <h6 class="text-center mb-3" style="color:gray">Cari Informasi Sesuai Topik</h6>
          <div class="d-flex justify-content-center">
            <div class="col-8  d-flex justify-content-evenly">
              <img src="{{ asset('icon/a03a.png') }}" alt="">
            
              <img src="{{ asset('icon/a03b.png') }}" alt="">
            
              <img src="{{ asset('icon/a03c.png') }}" alt="">
            
              <img src="{{ asset('icon/a03d.png') }}" alt="">
            
              <img src="{{ asset('icon/a03e.png') }}" alt="">
            </div>
          </div>
        </div>
    </div>
@endsection