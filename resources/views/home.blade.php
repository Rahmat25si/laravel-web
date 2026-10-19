@extends('admin.layouts')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
    <div class="d-block mb-4 mb-md-0">
        <h2 class="h4 fw-bold">Dashboard</h2>
        <p class="mb-0 text-muted">Selamat datang di Panel Admin Volt.</p>
    </div>
</div>

<div class="row">
    <div class="col-12 mb-4">
        <div class="card border-0 shadow p-4">
            <h5 class="fw-bold">Halo, {{ $username ?? 'Admin' }}!</h5>
            <p class="text-muted">Gunakan menu sidebar di sebelah kiri untuk mengelola data pelanggan.</p>
            <div>
                <a href="{{ route('pelanggan.index') }}" class="btn btn-gray-800">Lihat Data Pelanggan</a>
            </div>
        </div>
    </div>
</div>
@endsection
