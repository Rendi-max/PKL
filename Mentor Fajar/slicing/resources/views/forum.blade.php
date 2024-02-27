@extends('Layout.Layout2')
@section('content')
    <div class="row container-fluid h-100 p-4">
        <div class="col-3 rounded p-4" style="background-color: #f8fcff">
            <h3 class="mb-2"><b>Diskusi</b></h3>
            <h6 class="text-secondary mb-2">Fitur diskusi berfungsi untuk mempermudah pengguna dalam memahami infor</h6>
            <button class="btn btn-success container-fluid mt-2 rounded">Buat Diskusi Baru</button>
        </div>
        <div class="col-9 p-4" style="height: 100vh">
            <div class="row input-group">
                <div class="col-4"><i class="bi bi-chevron-down me-2"></i>Urutkan Berdasarkan</div>
                <div class="col-8 d-flex"><input type="text" class="form-control" style=""><button class="btn btn-outline-dark"><i class="bi bi-search"></i></button></div>
            </div>
            <div class="row mt-4 col-12 p-2">
                <div class="card mb-2">
                    <h5 class="mb-0 mt-2"><b>Topik tidak di Temukan</b></h5>
                    <p class="text-secondary mb-1" style="font-size: 13px">Bagaimana cara memunculkan document?</p>
                    <div class="d-flex " style="font-size: 10px">
                        <p class="text-secondary">Rendi, 1 Jam yang Lalu</p>
                        <div class="col d-flex flex-row-reverse">
                            <p class="text-secondary ms-1 ">33</p>
                            <i class="bi bi-chat-fill" style="color: gray"></i>
                            <p class="text-secondary ms-1 me-2">1500</p>
                            <i class="bi bi-caret-right-fill" style="color:gray"></i>
                            <i class="bi bi-caret-left-fill" style="color:gray"></i>
                        </div>
                    </div>
                </div>
                <div class="card mb-2">
                    <h5 class="mb-0 mt-2"><b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, animi.</b></h5>
                    <p class="text-secondary mb-1" style="font-size: 13px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam voluptas temporibus hic magni quam.</p>
                    <div class="d-flex " style="font-size: 10px">
                        <p class="text-secondary">Azam, 2 Hari yang Lalu</p>
                        <div class="col d-flex flex-row-reverse">
                            <p class="text-secondary ms-1 ">30</p>
                            <i class="bi bi-chat-fill" style="color: gray"></i>
                            <p class="text-secondary ms-1 me-2">2400</p>
                            <i class="bi bi-caret-right-fill" style="color:gray"></i>
                            <i class="bi bi-caret-left-fill" style="color:gray"></i>
                        </div>
                    </div>
                </div>
                <div class="card mb-2">
                    <h5 class="mb-0 mt-2"><b>Lorem, ipsum.</b></h5>
                    <p class="text-secondary mb-1" style="font-size: 13px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam voluptas temporibus hic magni quam.</p>
                    <div class="d-flex " style="font-size: 10px">
                        <p class="text-secondary">Faisal, 2 Hari yang Lalu</p>
                        <div class="col d-flex flex-row-reverse">
                            <p class="text-secondary ms-1 ">10</p>
                            <i class="bi bi-chat-fill" style="color: gray"></i>
                            <p class="text-secondary ms-1 me-2">1200</p>
                            <i class="bi bi-caret-right-fill" style="color:gray"></i>
                            <i class="bi bi-caret-left-fill" style="color:gray"></i>
                        </div>
                    </div>
                </div>
                <div class="card mb-2">
                    <h5 class="mb-0 mt-2"><b>Weladalah</b></h5>
                    <p class="text-secondary mb-1" style="font-size: 13px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam voluptas temporibus hic magni quam.</p>
                    <div class="d-flex " style="font-size: 10px">
                        <p class="text-secondary">Bila, 2 jam yang Lalu</p>
                        <div class="col d-flex flex-row-reverse">
                            <p class="text-secondary ms-1 ">30</p>
                            <i class="bi bi-chat-fill" style="color: gray"></i>
                            <p class="text-secondary ms-1 me-2">3200</p>
                            <i class="bi bi-caret-right-fill" style="color:gray"></i>
                            <i class="bi bi-caret-left-fill" style="color:gray"></i>
                        </div>
                    </div>
                </div>
                <div class="card mb-2">
                    <h5 class="mb-0 mt-2"><b>Prabowo Vs Ganjar</b></h5>
                    <p class="text-secondary mb-1" style="font-size: 13px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam voluptas temporibus hic magni quam.</p>
                    <div class="d-flex " style="font-size: 10px">
                        <p class="text-secondary">Dion the Lord of Darkness, 1 Menit yang Lalu</p>
                        <div class="col d-flex flex-row-reverse">
                            <p class="text-secondary ms-1 ">30</p>
                            <i class="bi bi-chat-fill" style="color: gray"></i>
                            <p class="text-secondary ms-1 me-2">9999</p>
                            <i class="bi bi-caret-right-fill" style="color:gray"></i>
                            <i class="bi bi-caret-left-fill" style="color:gray"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection