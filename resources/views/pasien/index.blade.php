@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="my-4">Daftar Pasien</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>NIK</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pasiens as $key => $pasien)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $pasien->nmpasien }}</td>
                    <td>{{ $pasien->nik }}</td>
                    <td>{{ $pasien->gender }}</td>
                    <td>{{ $pasien->alamat }}</td>
                    <td>{{ $pasien->phone }}</td>
                    <td>
                        <a href="{{ route('pasien.show', $pasien->id_pasien) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ route('pasien.edit', $pasien->id_pasien) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('pasien.destroy', $pasien->id_pasien) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus pasien ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
