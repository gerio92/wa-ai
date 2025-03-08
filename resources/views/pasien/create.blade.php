@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-header bg-primary text-white">
                    <h2 class="text-center">Form Registrasi Pasien BARU</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('pasien.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nmpasien" class="form-label">Nama Pasien</label>
                            <input type="text" class="form-control" id="nmpasien" name="nmpasien" required>
                        </div>

                        <div class="mb-3">
                            <label for="nik" class="form-label">NIK</label>
                            <input type="text" class="form-control" id="nik" name="nik" required>
                        </div>

                        <div class="mb-3">
                            <label for="gender" class="form-label">Jenis Kelamin</label>
                            <select class="form-select" id="gender" name="gender" required>
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="Laki-laki">L</option>
                                <option value="Perempuan">P</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">No. Telepon</label>
                            <input type="tel" class="form-control" id="phone" name="phone" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="nomrm" class="form-label">No. Rekam Medis</label>
                            <input type="text" class="form-control" id="nomrm" name="nomrm" required>
                        </div>

                        <div class="mb-3">
                            <label for="id_penjamin" class="form-label">Penjamin</label>
                            <select class="form-select" id="id_penjamin" name="id_penjamin" required>
                                    <option value="">Pilih Penjamin</option>
                                @foreach($penjamin as $p)
                                    <option value="{{ $p->id }}">{{ $p->nmpenjamin }}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="mb-3">
                            <label for="id_batih" class="form-label">Batih</label>
                            <input type="text" class="form-control" id="id_batih" name="id_batih">
                        </div>

                        <div class="mb-3">
                            <label for="name_user" class="form-label">Nama Pengguna</label>
                            <input type="text" class="form-control" id="name_user" name="name_user">
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">Daftar</button>
                        </div>
                    </form>

                    @if(isset($pasien))
                    <div class="mt-5">
                        <div class="card id-card" style="width: 340px; height: 214px; border-radius: 15px; overflow: hidden;">
                            <div class="card-body p-0">
                                <div class="row g-0 h-100">
                                    <div class="col-4 bg-primary d-flex align-items-center justify-content-center">
                                        <img src="https://via.placeholder.com/100x100" alt="Patient Photo" class="rounded-circle" style="width: 80px; height: 80px;">
                                    </div>
                                    <div class="col-8 p-3">
                                        <div class="d-flex flex-column h-100">
                                            <div class="mb-2">
                                                <h5 class="card-title mb-1">{{ $pasien->nmpasien }}</h5>
                                                <small class="text-muted">Pasien</small>
                                            </div>
                                            <div class="mb-2">
                                                <small class="text-muted">No. Rekam Medis</small>
                                                <p class="mb-0">{{ $pasien->nomrm }}</p>
                                            </div>
                                            <div class="mt-auto text-end">
                                                <img src="{{ $pasien->qrcode ? asset('storage/qrcodes/' . $pasien->qrcode) : 'https://api.qrserver.com/v1/create-qr-code/?size=80x80&data=' . $pasien->nomrm }}" alt="QR Code" class="qr-code">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .id-card {
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        border: 1px solid rgba(0,0,0,0.1);
    }
    .id-card .col-4 {
        background: linear-gradient(135deg, #0d6efd, #0b5ed7);
    }
    .id-card h5 {
        font-size: 1.1rem;
        font-weight: 600;
    }
    .id-card small {
        font-size: 0.8rem;
    }
    .qr-code {
        width: 60px;
        height: 60px;
        border: 1px solid #ddd;
        padding: 3px;
        border-radius: 5px;
    }
</style>
@endsection