@extends('layouts.app')

@section('content')
<div class="main-content">
    <div class="section">
        <div class="section-header">
            <h1> Permission</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-key"></i> Permission</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.permission.index') }}" method="GET">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="q" placeholder="cari berdasarkan nama permissions">
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
                                    <th scope="col">NAMA PERMISSION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($permissions as $no => $permission)
                                    <tr>
                                        <th scope="row" style="text-align: center">{{ ++$no + ($permissions->currentPage()-1) * $permissions->perPage() }}</th>
                                        <td>{{ $permission->name }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="text-center">Tidak Ada Data</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $permissions->links("vendor.pagination.bootstrap-4") }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection