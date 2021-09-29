@extends('layouts.main')

@section('container')
    <div class="container py-5">

        <section class="py-5" id="header">
            <div class="row align-items-center justify-content-center gap-3 flex-wrap-reverse">
                <div class=" col-sm-5 col-lg-5 text-center text-sm-start ">
                    <h1 class="fs-1 fw-bold">Halo,<br>Saya Muhammad Hafizhuddin.</h1>
                </div>
                <div class="col-6 col-sm-6 col-lg-4 text-center">
                    <img src="img/didin3.jpg" alt="Muhammad Hafizhuddin" class="img-fluid">
                </div>
            </div>
        </section>


        <section class="py-5 my-2" id="about">
            <h2 class="fw-bold d-flex justify-content-center py-4">Tentang Saya</h2>
            <div class="row fs-5 justify-content-center align-items-start">
                <div class=" col-sm-5 col-lg-5 px-5 px-sm-2 px-lg-4 text-center text-sm-start">
                    <p>Seorang mahasiswa tampan, saat ini tinggal di kota Pasuruan yang biasa dijuluki kota Santri. Suka
                        melakukan eksplorasi design yang minimalis dan kadang suka ngoding juga.
                    </p>
                    <p>
                        Bisa saja menghabiskan waktu berjam-jam setiap hari nya untuk melakukan eksplorasi design. Kalian
                        dapat
                        melihat beberapa eksplorasi design saya di <a class="fw-bold" href="#"> Dribble</a>.
                    </p>
                </div>
                <div class=" col-sm-5 col-lg-5 px-5 px-sm-2 px-lg-4 text-center text-sm-start">
                    <p>
                        Saya juga suka menulis di <a class="fw-bold" href="#">Medium</a>, kebanyakan tulisan saya
                        membahas tentang dunia komputer, teknologi dan lebih sering khususnya desain grafis.
                    </p>
                    <p>
                        Aktif di juga <a class="fw-bold" href="https://twitter.com/txtdarididin"> Twitter</a> membahas
                        hal-hal seputar industri design dan jika kamu punya pertanyaan jangan ragu untuk DM saya di twitter,
                        pasti akan jadi obrolan yang menarik.</p>
                    </p>
                </div>
            </div>
        </section>

        <section class="py-5" id="">
            <h2 class="fw-bold d-flex justify-content-center py-4">Skills</h2>
            <div class="row fs-5 justify-content-center ">
                <div class="row col-12 text-center text-sm-start justify-content-end  ">
                    <p class="col-12 col-sm-3 fw-bold text-sm-end"><u>Main Software</u></p>
                    <p class="col-12 col-sm-7">Adobe CC, Inkscape, Davinci, Figma</p>
                </div>
                <div class="row col-12 text-center text-sm-start justify-content-end  ">
                    <p class="col-12 col-sm-3 fw-bold text-sm-end"><u>Main Skills</u></p>
                    <p class="col-12 col-sm-7">Design, Coding, Video Editing</p>
                </div>
            </div>
        </section>

        <section class="py-5 my-5 border-top border-dark border-2 mx-4" id="">
            <div class="row justify-content-center ">
                <div class=" col-sm-5 col-lg-5 text-center text-sm-start ">
                    <h2 class="">Hubungi Saya <svg width="40" height="40" viewBox="0 0 24 24" class="d-none d-md-inline"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M23.0677 11.9929L18.818 7.75739L17.4061 9.17398L19.2415 11.0032L0.932469 11.0012L0.932251 13.0012L19.2369 13.0032L17.4155 14.8308L18.8321 16.2426L23.0677 11.9929Z"
                                fill="currentColor" />
                        </svg></h2>
                    <span class="text-center"></span>
                </div>
                <div class="col-6 col-sm-6 col-lg-4 text-center">
                    <h5> <a href="mailto:didinsdit@gmail.com">didinsdit@gmail.com</a></h5>
                    <a href="https://drive.google.com/file/d/1nqVqiyusXGoJU_1FUnMqedqSRDmX9GPD/view?usp=sharing"
                        target="_blank">My Resume</a>
                </div>
            </div>
        </section>

    </div>

@endsection
