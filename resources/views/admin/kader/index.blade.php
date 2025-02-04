@extends('layouts.app')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Kader</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-user-circle" aria-hidden="true"></i></> Kader</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.kader.index') }}" method="GET">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                @can('kader.create')
                                <div class="input-group-prepend">
                                    <a href="{{ route('admin.kader.create') }}" class="btn btn-primary" style="padding-top: 10px;"><i class="fa fa-pluscircle"></i> TAMBAH</a>
                                </div>
                                @endcan
                                <input type="text" class="form-control" name="q"
                                    placeholder="cari berdasarkan nama user">
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
                                    <th scope="col" style="text-align: center; width:6%">NO.</th>
                                    {{-- <th scope="col">PHOTO</th>  --}}
                                    <th scope="col">NAMA LENGKAP</th>
                                    <th scope="col">ALAMAT</th>
                                    <th scope="col">TEMPAT & TANGGAL LAHIR</th>
                                    <th scope="col">SEMSTER</th>
                                    <th scope="col">KELAS</th>
                                    <th scope="col" style="width: 15%; text-align:center">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($kaders as $no => $kader)
                                    <tr>
                                        <th scope="row" style="text-align:center">{{ ++$no + ($kaders->currentPage()-1) * $kaders->perPage() }}</th>
                                       {{-- <td>
                                        <img src="{{ Storage::url('public/kaders/'.$kader->photo) }}" class="w-50"
                                        style="height: 250;object-fit: cover;border-top-left-radius: .3rem;border-top-right-radius: .3rem;">
                                       </td> --}}
                                        <td>{{ $kader->nama_lengkap }}</td>
                                        <td>{{ $kader->alamat_sekarang }}</td>
                                        <td>{{ $kader->tempat_tanggal_lahir }}</td>
                                        <td>{{ $kader->semester }}</td>
                                        <td>{{ $kader->kelas }}</td>
                                        <td class="text-center">
                                            @can('kader.edit')
                                            <a href="{{ route('admin.kader.edit',$kader->id) }}" class="btn btn-sm btn-primary">
                                                <i class="fa fa-pencil-alt"></i>
                                            </a>
                                            @endcan

                                            @can('kader.show')
                                            <a href="{{ route('admin.kader.show',$kader->id) }}" class="btn btn-sm btn-success">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            @endcan
                                            
                                            @can('kader.delete')
                                            <button onClick="Delete(this.id)" class="btn btn-sm btn-danger" id="{{ $kader->id }}">
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
                            {{$kaders->links("vendor.pagination.bootstrap-4")}}
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
                    url: "{{ route("admin.kader.index") }}/" + id,
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