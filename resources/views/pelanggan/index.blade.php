@extends('layouts.admin.app')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
    <div>
        <h2 class="h4 fw-bold">Data Pelanggan</h2>
        <p class="mb-0 text-muted">List data seluruh pelanggan</p>
    </div>
    <div>
        <a href="{{ route('pelanggan.create') }}" class="btn btn-primary">Tambah Pelanggan</a>
    </div>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="card border-0 shadow mb-4">
    <div class="card-body">

        {{-- FORM FILTER & SEARCH --}}
        <form method="GET" action="{{ route('pelanggan.index') }}" class="mb-4">
            <div class="row g-2">
                {{-- Dropdown Gender --}}
                <div class="col-md-3">
                    <select name="gender" class="form-select" onchange="this.form.submit()">
                        <option value="">All Genders</option>
                        <option value="male" {{ request('gender') == 'male' ? 'selected' : '' }}>Male</option>
                        <option value="female" {{ request('gender') == 'female' ? 'selected' : '' }}>Female</option>
                    </select>
                </div>

                {{-- Input Search & Clear --}}
                <div class="col-md-4">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Cari nama, email, hp..." value="{{ request('search') }}">
                        <button type="submit" class="btn btn-outline-primary">
                            <svg class="icon icon-xxs" fill="currentColor" viewBox="0 0 20 20" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        @if(request('search'))
                            <a href="{{ request()->fullUrlWithQuery(['search' => null]) }}" class="btn btn-outline-danger" title="Clear Search">X</a>
                        @endif
                    </div>
                </div>
            </div>
        </form>

        <div class="table-responsive">
            <table class="table table-centered table-nowrap mb-0 rounded">
                <thead class="thead-light">
                    <tr>
                        <th class="border-0 rounded-start">NO</th>
                        <th class="border-0" style="min-width: 180px;">NAME</th>
                        <th class="border-0">EMAIL</th>
                        <th class="border-0">PHONE</th>
                        <th class="border-0 rounded-end">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pelanggan as $item)
                    <tr>
                        <td>{{ ($pelanggan->currentPage() - 1) * $pelanggan->perPage() + $loop->iteration }}</td>
                        <td class="fw-bold">{{ $item->first_name }} {{ $item->last_name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>
                            <div class="d-flex gap-1">
                                <a href="{{ route('pelanggan.edit', $item->pelanggan_id) }}" class="btn btn-sm btn-info text-white">Edit</a>
                                <form action="{{ route('pelanggan.destroy', $item->pelanggan_id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted py-3">Data tidak ditemukan.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-3">
            {{ $pelanggan->links('pagination::bootstrap-5') }}
        </div>

    </div>
</div>
@endsection
