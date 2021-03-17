@extends('layouts.app')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Murobbi</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-user-circle"></i> Detail Murobbi</h4>
                </div>
                <div class="card-body">
                    <div class="col-12 col-sm-12 col-lg-12">
                        <div class="card author-box card-primary">
                            <div class="card-body">
                                <div class="author-box-left">
                                    <img alt="image" src="{{ Storage::url('public/murobbis/'.$murobbi->photo) }}"
                                        class="rounded-circle author-box-picture">
                                </div>
                                <div class="author-box-details">
                                    <div class="author-box-name">
                                        <a href="#">{{ $murobbi->nama_lengkap }}</a>
                                    </div>

                                    <div class="author-box-job">{{ $murobbi->nama_panggilan }}</div>
                                    <div class="text-black-50 font-weight-bold mt-3 ">Semster</div>
                                    <p>{{$murobbi->semester}}</p>

                                    <div class="text-black-50 font-weight-bold mt-3 ">Angkatan</div>
                                    <p>{{$murobbi->angkatan}}</p>

                                    <div class="text-black-50 font-weight-bold mt-3 ">Program Studi</div>
                                    <p>{{$murobbi->program_studi}}</p>

                                    <div class="text-black-50 font-weight-bold mt-3 ">Tempat Tanggal Lahir</div>
                                    <p>{{$murobbi->tempat_tanggal_lahir}}</p>

                                    <div class="text-black-50 font-weight-bold mt-3 ">Alamat Asal</div>
                                    <p>{{$murobbi->alamat_asal}}</p>

                                    <div class="text-black-50 font-weight-bold mt-3 ">Alamat Sekarang</div>
                                    <p>{{$murobbi->alamat_sekarang}}</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>
</div>
@stop
