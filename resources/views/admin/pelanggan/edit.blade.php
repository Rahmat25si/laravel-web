@extends('admin.layouts')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
    <div class="d-block mb-4 mb-md-0">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item">
                    <a href="#">
                        <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 00-1-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                    </a>
                </li>
                <li class="breadcrumb-item"><a href="{{ route('pelanggan.index') }}">Pelanggan</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
            </ol>
        </nav>
        <h2 class="h4">Edit Pelanggan</h2>
        <p class="mb-0">Form untuk memperbaharui data pelanggan.</p>
    </div>
    <div>
        <a href="{{ route('pelanggan.index') }}" class="btn btn-primary">Kembali</a>
    </div>
</div>

<div class="row">
    <div class="col-12 col-xl-12">
        <div class="card card-body border-0 shadow mb-4">
            <form action="{{ route('pelanggan.update', $dataPelanggan->pelanggan_id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="first_name">First name</label>
                            <input class="form-control" id="first_name" name="first_name" type="text" value="{{ $dataPelanggan->first_name }}" required>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="birthday">Birthday</label>
                            <input class="form-control" id="birthday" name="birthday" type="date" value="{{ $dataPelanggan->birthday }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="last_name">Last name</label>
                            <input class="form-control" id="last_name" name="last_name" type="text" value="{{ $dataPelanggan->last_name }}" required>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="gender">Gender</label>
                        <select class="form-select mb-0" id="gender" name="gender" aria-label="Gender select example">
                            <option selected>Gender</option>
                            <option value="Female" {{ $dataPelanggan->gender == 'Female' ? 'selected' : '' }}>Female</option>
                            <option value="Male" {{ $dataPelanggan->gender == 'Male' ? 'selected' : '' }}>Male</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" id="email" name="email" type="email" value="{{ $dataPelanggan->email }}" required>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input class="form-control" id="phone" name="phone" type="text" value="{{ $dataPelanggan->phone }}">
                        </div>
                    </div>
                </div>

                <div class="mt-3">
                    <button class="btn btn-info text-white" type="submit">Simpan Perubahan</button>
                    <a href="{{ route('pelanggan.index') }}" class="btn btn-link text-gray-600">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
