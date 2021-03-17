@extends('layouts.app')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Murobbi</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-user-circle" aria-hidden="true"></i></> Murobbi</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.murobbi.index') }}" method="GET">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                @can('murobi.create')
                                <div class="input-group-prepend">
                                    <a href="{{ route('admin.murobbi.create') }}" class="btn btn-primary" style="padding-top: 10px;"><i class="fa fa-pluscircle"></i> TAMBAH</a>
                                </div>
                                @endcan
                                <input type="text" class="form-control" name="q"
                                    placeholder="cari berdasarkan nama murobbi">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> CARI
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" style="text-align: center; width:1%">NO.</th>
                                    {{-- <th scope="col">PHOTO</th>  --}}
                                    <th scope="col">NAMA LENGKAP</th>
                                    <th scope="col" style="width: 1%">ANGKATAN</th>
                                    <th scope="col">PROGRAM STUDI</th>
                                    <th scope="col">SEMESTER</th>
                                    <th scope="col">ALAMAT</th>
                                    <th scope="col">TEMPAT & TANGGAL LAHIR</th>
                                    <th scope="col">Photo</th>
                                    <th scope="col" style="width: 15%; text-align:center">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($murobbis as $no => $murobbi)
                                    <tr>
                                        <th scope="row" style="text-align:center">{{ ++$no + ($murobbis->currentPage()-1) * $murobbis->perPage() }}</th>
                                        <td>{{ $murobbi->nama_lengkap }}</td>
                                        <td>{{ $murobbi->angkatan }}</td>
                                        <td>{{ $murobbi->program_studi }}</td>
                                        <td>{{ $murobbi->semester }}</td>
                                        <td>{{ $murobbi->alamat_sekarang }}</td>
                                        <td>{{ $murobbi->tempat_tanggal_lahir }}</td>
                                        <td>
                                            <img src="{{ Storage::url('public/murobbis/'.$murobbi->photo) }}" class="img-fluid" width="80px">
                                        </td>
                                        <td class="text-center">
                                            @can('murobi.edit')
                                            <a href="{{ route('admin.murobbi.edit',$murobbi->id) }}" class="btn btn-sm btn-primary">
                                                <i class="fa fa-pencil-alt"></i>
                                            </a>
                                            @endcan

                                            @can('murobi.show')
                                            <a href="{{ route('admin.murobbi.show',$murobbi->id) }}" class="btn btn-sm btn-success">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            @endcan

                                            @can('murobi.delete')
                                            <button onClick="Delete(this.id)" class="btn btn-sm btn-danger" id="{{ $murobbi->id }}">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                            @endcan

                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">Tidak Ada Data</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div style="text-align: center">
                            {{$murobbis->links("vendor.pagination.bootstrap-4")}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    //ajax delete
    function Delete(id) {
        var id = id;
        var token = $("meta[name='csrf-token']").attr("content");
        swal({
            title: "APAKAH KAMU YAKIN ?",
            text: "INGIN MENGHAPUS DATA INI!",
            icon: "warning",
            buttons: [
                'TIDAK',
                'YA'
            ],
            dangerMode: true,
        }).then(function (isConfirm) {
            if (isConfirm) {
                //ajax delete
                jQuery.ajax({
                    url: "{{ route("admin.murobbi.index") }}/" + id,
                    data: {
                        "id": id,
                        "_token": token
                    },
                    type: 'DELETE',
                    success: function (response) {
                        if (response.status == "success") {
                            swal({
                                title: 'BERHASIL!',
                                text: 'DATA BERHASIL DIHAPUS!',
                                icon: 'success',
                                timer: 1000,
                                showConfirmButton: false,
                                showCancelButton: false,
                                buttons: false,
                            }).then(function () {
                                location.reload();
                            });
                        } else {
                            swal({
                                title: 'GAGAL!',
                                text: 'DATA GAGAL DIHAPUS!',
                                icon: 'error',
                                timer: 1000,
                                showConfirmButton: false,
                                showCancelButton: false,
                                buttons: false,
                            }).then(function () {
                                location.reload();
                            });
                        }
                    }
                });
            } else {
                return true;
            }
        })
    }
</script>
@stop
