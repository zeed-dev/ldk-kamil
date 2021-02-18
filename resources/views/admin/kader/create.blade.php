@extends('layouts.app')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Kader</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-user-circle"></i> Tambah Kader</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.kader.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>NAMA LENGKAP</label>
                                    <input type="text" name="nama_lengkap" value="{{ old('nama_lengkap') }}"
                                    placeholder="Masukkan Nama Lengkap" class="form-control 
                                    @error('nama_lengkap') is-invalid @enderror">

                                    @error('nama_lengkap')
                                    <div class="invalid-feedback" style="display:block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>NAMA PANGGILAN</label>
                                    <input type="text" name="nama_panggilan" value="{{ old('nama_panggilan') }}"
                                    placeholder="Masukkan Nama Panggilan" class="form-control
                                    @error('nama_panggilan') is-invalid @enderror">

                                    @error('nama_panggilan')
                                    <div class="invalid-feedback" style="display:block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>ANGKATAN</label>
                                    <input type="text" name="angkatan" value="{{ old('angkatan') }}"
                                    class="form-control @error('angkatan') is-invalid @enderror">

                                    
                                    @error('angkatan')
                                    <div class="invalid-feedback" style="display:block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>PROGRAM STUDI</label>
                                    <input type="text" name="program_studi" value="{{ old('program_studi') }}"
                                    class="form-control @error('program_studi') is-invalid @enderror">
                                    
                                    @error('program_studi')
                                    <div class="invalid-feedback" style="display:block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>SEMESTER</label>
                                    <input type="text" name="semester" value="{{ old('semester') }}"
                                    class="form-control @error('semester') is-invalid @enderror">

                                    
                                    @error('semester')
                                    <div class="invalid-feedback" style="display:block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>KELAS</label>
                                    <input type="text" name="kelas" value="{{ old('kelas') }}"
                                    class="form-control @error('kelas') is-invalid @enderror">
                                    
                                    @error('kelas')
                                    <div class="invalid-feedback" style="display:block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>PHOTO</label>
                                    <input type="file" name="photo" value="{{ old('photo') }}"
                                    class="form-control @error('photo') is-invalid @enderror">

                                    
                                    @error('photo')
                                    <div class="invalid-feedback" style="display:block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>TTL</label>
                                    <input type="text" name="tempat_tanggal_lahir" value="{{ old('tempat_tanggal_lahir') }}"
                                    class="form-control @error('tempat_tanggal_lahir') is-invalid @enderror">
                                    
                                    @error('tempat_tanggal_lahir')
                                    <div class="invalid-feedback" style="display:block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>ALAMAT ASAL</label>
                                    <textarea class="form-control @error('alamat_asal') is-invalid @enderror" 
                                    name="alamat_asal" cols="50" rows="50">{{ old('alamat_asal') }}</textarea>
                                    
                                    @error('alamat_asal')
                                    <div class="invalid-feedback" style="display:block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>ALAMAT SEKARANG</label>
                                    <textarea class="form-control @error('alamat_sekarang') is-invalid @enderror" 
                                    name="alamat_sekarang" cols="50" rows="50">{{ old('alamat_sekarang') }}</textarea>
                                    
                                    @error('alamat_sekarang')
                                    <div class="invalid-feedback" style="display:block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">MUROBI</label>
                            <br>
                            <select class="form-control" name="murobi_id">
                                <option>-- PILIH --</option>
                                <option value={{ 3 }}>Akromi Arya</option>
                                <option value={{ 2 }}>Muhammad Kuswari</option>
                                <option value={{ 1 }}>Aljihad</option>
                            </select>
                        </div>
                        <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i>
                            SIMPAN</button>
                        <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i> RESET</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@stop