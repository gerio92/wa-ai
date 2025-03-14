<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5">
                    <div class="card-header bg-primary text-white">
                        <h2 class="text-center">Formulir Pendaftaran Pasien</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('pasien.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="nomrm" class="form-label">Nomor Rekam Medis</label>
                                <input type="text" class="form-control" id="nomrm" name="nomrm" placeholder="Masukkan Nomor RM" required>
                            </div>

                            <div class="mb-3">
                                <label for="nama_pasien" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" placeholder="Masukkan Nama Lengkap" required>
                            </div>

                            <div class="mb-3">
                                <label for="nik" class="form-label">NIK</label>
                                <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK" required>
                            </div>

                            <div class="mb-3">
                                <label for="gender" class="form-label">Jenis Kelamin</label>
                                <select class="form-select" id="gender" name="gender" required>
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="L">L</option>
                                    <option value="P">P</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Nomor HP</label>
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Masukkan Nomor HP" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Alamat Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email">
                            </div>

                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Masukkan Alamat Lengkap" required></textarea>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">Daftar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>