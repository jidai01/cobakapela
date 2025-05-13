@extends('main')
@section('content')
    <div class="container-fluid p-0 mt-5 mb-5">
        <h4 class="border-top border-bottom border-2 border-dark py-1 m-0 mb-3 d-flex justify-content-center">
            {{ $title }}
        </h4>
        <div class="d-flex justify-content-center">
            <div class="container">

                <!-- PELINDUNG START -->
                
                <!-- PELINDUNG END -->


                <!-- PENASIHAT START -->
                
                <!-- PENASIHAT END -->


                <!-- PENGURUS INTI START -->
                <h5 class="border border-1 border-dark py-1 m-0 mb-3 d-flex justify-content-center rounded" data-bs-toggle="collapse"
                    href="#pengurusintiCards" role="button" aria-expanded="false" aria-controls="pengurusintiCards"
                    style="cursor: pointer;">
                    Pengurus Inti
                </h5>
                <div class="collapse" id="pengurusintiCards">
                    <div class="container mb-3">
                        <div class="row justify-content-center g-3">
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center">
                                <div class="card" style="width: 10rem;">
                                    <img src="{{ asset('img/logo.jpg') }}" alt="logo-sanbello" class="card-img-top">
                                    <div class="card-body px-1">
                                        <h6 class="card-title text-center">nama</h6>
                                        <p class="card-text text-center">posisi</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- PENGURUS INTI END -->


                <!-- SEKSI BIDANG I START -->
                
                <!-- SEKSI BIDANG I END -->


                <!-- SEKSI BIDANG II START -->

                <!-- SEKSI BIDANG II END -->


                <!-- SEKSI BIDANG III START -->
                
                <!-- SEKSI BIDANG III END -->


                <!-- SEKSI BIDANG IV START -->
                
                <!-- SEKSI BIDANG IV END -->

            </div>
        </div>
    </div>
@endsection
