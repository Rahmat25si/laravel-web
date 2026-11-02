@extends('layouts.admin.app')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
    <div>
        <h2 class="h4 fw-bold">Tambah User</h2>
        <p class="mb-0 text-muted">Form untuk menambahkan data user baru.</p>
    </div>
    <div>
        <a href="{{ route('user.index') }}" class="btn btn-primary">Kembali</a>
    </div>
</div>

<div class="card border-0 shadow mb-4">
    <div class="card-body">
        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="name" class="form-label fw-bold">Name</label>
                    <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="password" class="form-label fw-bold">Password</label>
                    <input type="password" name="password" class="form-control" id="password" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="email" class="form-label fw-bold">Email</label>
                    <input type="email" name="email" class="form-control" id="email" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="password_confirmation" class="form-label fw-bold">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required>
                </div>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary me-2">Simpan</button>
                <a href="{{ route('user.index') }}" class="btn btn-outline-gray-500">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection
