@extends('layouts.app')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Kader</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-user-circle"></i> Detail Kader</h4>
                </div>
                <div class="card-body">
                    <div class="col-12 col-sm-12 col-lg-12">
                        <div class="card author-box card-primary">
                            <div class="card-body">
                                <div class="author-box-left">
                                    <img alt="image" src="{{ Storage::url('public/kaders/'.$kader->photo) }}"
                                        class="rounded-circle author-box-picture">
                                </div>
                                <div class="author-box-details">
                                    <div class="author-box-name">
                                        <a href="#">{{ $kader->nama_lengkap }}</a>
                                    </div>

                                    <div class="author-box-job">{{ $kader->nama_panggilan }}</div>
                                    <div class="text-black-50 font-weight-bold mt-3 ">Semster</div>
                                    <p>{{$kader->semester}}</p>

                                    <div class="text-black-50 font-weight-bold mt-3 ">Angkatan</div>
                                    <p>{{$kader->angkatan}}</p>

                                    <div class="text-black-50 font-weight-bold mt-3 ">Program Studi</div>
                                    <p>{{$kader->program_studi}}</p>

                                    <div class="text-black-50 font-weight-bold mt-3 ">Kelas</div>
                                    <p>{{$kader->kelas}}</p>

                                    <div class="text-black-50 font-weight-bold mt-3 ">Tempat Tanggal Lahir</div>
                                    <p>{{$kader->tempat_tanggal_lahir}}</p>

                                    <div class="text-black-50 font-weight-bold mt-3 ">Murobbi</div>
                                    <p>-</p>

                                    <div class="text-black-50 font-weight-bold mt-3 ">Alamat Asal</div>
                                    <p>{{$kader->alamat_asal}}</p>

                                    <div class="text-black-50 font-weight-bold mt-3 ">Alamat Sekarang</div>
                                    <p>{{$kader->alamat_sekarang}}</p>
                                    
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