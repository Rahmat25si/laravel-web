@extends('layouts.admin.app')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
    <div>
        <h2 class="h4 fw-bold">Data User</h2>
        <p class="mb-0 text-muted">List data seluruh user</p>
    </div>
    <div>
        <a href="{{ route('user.create') }}" class="btn btn-primary">Tambah User</a>
    </div>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="card border-0 shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-centered table-nowrap mb-0 rounded">
                <thead class="thead-light">
                    <tr>
                        <th class="border-0 rounded-start">NAME</th>
                        <th class="border-0">EMAIL</th>
                        <th class="border-0">PASSWORD</th>
                        <th class="border-0 rounded-end">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user as $item)
                        <tr>
                            <td class="fw-bold">{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td class="text-truncate" style="max-width: 200px;">{{ $item->password }}</td>
                            <td>
                                <a href="{{ route('user.edit', $item->id) }}" class="btn btn-sm btn-info text-white">Edit</a>
                                <form action="{{ route('user.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus user ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
