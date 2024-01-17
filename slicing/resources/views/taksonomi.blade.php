@extends('Layout.Layout1')
@section('content')
    <div class="mb-4" style="margin: 70px 150px 20px 150px" >
        <h5 class="text-center mb-2" style="color:gray">Ingin mencari informasi apa hari ini?</h5>
        <form action="/taksonomi" method="get">
            <div class="row mt-2">
                <div class="form-floating input-group text-center">
                    <input type="text" class="form-control" name="" id="" placeholder="Search...">
                    <label for="" class="form-label ms-2" style="color: gray">Search...</label>
                    <button type="submit" class="btn btn-secondary"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </form>
    </div>
    
    <div class="" style="margin: 0px 100px 10px 100px">
        <h6 class="text-secondary">Alat Utama</h6>

        <div class="row row-cols-9 mb-2">
            <div class="col">
                <div class="">
                    <img src="{{ asset('icon/a04a.png') }}" id="img" alt="">
                </div>
                <p for="" style="font-size:11px" class="text-secondary text-center" >Kendaraan Khusus</p>
            </div>
            <div class="col">
                <div class="">
                    <img src="{{ asset('icon/a04b.png') }}" id="img" alt="">
                </div>
                <p for="" style="font-size:11px" class="text-secondary text-center" >Senjata</p>
            </div>
            <div class="col">
                <div class="">
                    <img src="{{ asset('icon/a04c.png') }}" id="img" alt="">
                </div>
                <p for="" style="font-size:11px" class=" text-secondary text-center" >Amunisi</p>
            </div>
            <div class="col">
                <div class="">
                    <img src="{{ asset('icon/a04d.png') }}" id="img" alt="">
                </div>
                <p for="" style="font-size:11px" class="text-secondary text-center" >Pesawat Terbang</p>
            </div>
            <div class="col">
                <div class="">
                    <img src="{{ asset('icon/a04e.png') }}" id="img" alt="">
                </div>
                <p for="" style="font-size:11px" class="text-secondary text-center" >Alat Besar Khusus</p>
            </div>
            <div class="col">
                <div class="">
                    <img src="{{ asset('icon/a04f.png') }}" id="img" alt="">
                </div>
                <p for="" style="font-size:11px" class="text-secondary text-center" >Penjinak Bahan Peledak</p>
            </div>
            <div class="col">
                <div class="">
                    <img src="{{ asset('icon/a04g.png') }}" id="img" alt="">
                </div>
                <p for="" style="font-size:11px" class="text-secondary text-center" >Perlengkapan Tempur Perorangan</p>
            </div>
            <div class="col">
                <div class="">
                    <img src="{{ asset('icon/a04h.png') }}" id="img" alt="">
                </div>
                <p for="" style="font-size:11px" class=" text-secondary text-center" >Radar</p>
            </div>
            <div class="col">
                <div class="">
                    <img src="{{ asset('icon/a04i.png') }}" id="img" alt="">
                </div>
                <p for="" style="font-size:11px" class=" text-secondary text-center" >Kapal</p>
            </div>
        </div>

        <h6 class="text-secondary">Alat Pendukung</h6>

        <div class="row row-cols-8 mb-2">
            <div class="col">
                <div class="">
                    <img src="{{ asset('icon/a04j.png') }}" id="img" alt="">
                </div>
                <p for="" style="font-size:11px" class="text-secondary text-center" >Peralatan Fasilitas Pangkalan</p>
            </div>
            <div class="col">
                <div class="">
                    <img src="{{ asset('icon/a04k.png') }}" id="img" alt="">
                </div>
                <p for="" style="font-size:11px" class="text-secondary text-center" >Komunikasi & Navigasi</p>
            </div>
            <div class="col">
                <div class="">
                    <img src="{{ asset('icon/a04l.png') }}" id="img" alt="">
                </div>
                <p for="" style="font-size:11px" class=" text-secondary text-center" >Peralatan Survey & Pemetaan</p>
            </div>
            <div class="col">
                <div class="">
                    <img src="{{ asset('icon/a04m.png') }}" id="img" alt="">
                </div>
                <p for="" style="font-size:11px" class="text-secondary text-center" >Peralatan Kesehatan Militer</p>
            </div>
            <div class="col">
                <div class="">
                    <img src="{{ asset('icon/a04n.png') }}" id="img" alt="">
                </div>
                <p for="" style="font-size:11px" class="text-secondary text-center" >Peralatan Laboratorium</p>
            </div>
            <div class="col">
                <div class="">
                    <img src="{{ asset('icon/a04o.png') }}" id="img" alt="">
                </div>
                <p for="" style="font-size:11px" class="text-secondary text-center" >Peralatan Pendidikan</p>
            </div>
            <div class="col">
                <div class="">
                    <img src="{{ asset('icon/a04p.png') }}" id="img" alt="">
                </div>
                <p for="" style="font-size:11px" class="text-secondary text-center" >Peralatan Publikasi</p>
            </div>
            <div class="col">
                <div class="">
                    <img src="{{ asset('icon/a04q.png') }}" id="img" alt="">
                </div>
                <p for="" style="font-size:11px" class=" text-secondary text-center" >Kendaraaan Atas Air</p>
            </div>
        </div>
    </div>
@endsection