@extends('layouts.admin.app')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
    <div>
        <h2 class="h4 fw-bold">Edit Pelanggan</h2>
        <p class="mb-0 text-muted">Form untuk memperbaharui data pelanggan.</p>
    </div>
    <div>
        <a href="{{ route('pelanggan.index') }}" class="btn btn-primary">Kembali</a>
    </div>
</div>

<div class="card border-0 shadow mb-4">
    <div class="card-body">
        <form action="{{ route('pelanggan.update', $dataPelanggan->pelanggan_id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="first_name" class="form-label fw-bold">First Name</label>
                    <input type="text" name="first_name" class="form-control" id="first_name" value="{{ $dataPelanggan->first_name }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="last_name" class="form-label fw-bold">Last Name</label>
                    <input type="text" name="last_name" class="form-control" id="last_name" value="{{ $dataPelanggan->last_name }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="email" class="form-label fw-bold">Email</label>
                    <input type="email" name="email" class="form-control" id="email" value="{{ $dataPelanggan->email }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="phone" class="form-label fw-bold">Phone</label>
                    <input type="text" name="phone" class="form-control" id="phone" value="{{ $dataPelanggan->phone }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="birthday" class="form-label fw-bold">Birthday</label>
                    <input type="date" name="birthday" class="form-control" id="birthday" value="{{ $dataPelanggan->birthday }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="gender" class="form-label fw-bold">Gender</label>
                    <select name="gender" class="form-select" id="gender" required>
                        <option value="male" {{ $dataPelanggan->gender == 'male' ? 'selected' : '' }}>Male</option>
                        <option value="female" {{ $dataPelanggan->gender == 'female' ? 'selected' : '' }}>Female</option>
                    </select>
                </div>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary me-2">Simpan Perubahan</button>
               <a href="{{ route('pelanggan.index') }}" class="btn btn-danger text-white">Batal</a>
        </form>
    </div>
</div>
@endsection
