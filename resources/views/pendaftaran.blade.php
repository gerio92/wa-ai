<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5">
                    <div class="card-header bg-primary text-white">
                        <h2 class="text-center">PASIEN LAMA</h2>
                    </div>
                    <div class="card-body">
                        <form action="process_registration.php" method="POST">
                            <div class="mb-3">
                                <label for="full_name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="full_name" name="full_name" required>
                            </div>
 <div class="mb-3">
                                <label for="dob" class="form-label">Nomer Register</label>
                                <input type="text" class="form-control" id="dob" name="dob" required>
                            </div>
                            <div class="mb-3">
                                <label for="dob" class="form-label">Nomer RM</label>
                                <input type="text" class="form-control" id="dob" name="dob" required>
                            </div>
                                                 
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="poli_tujuan" class="form-label">Poli Tujuan</label>
                                    <select class="form-select" id="poli_tujuan" name="poli_tujuan" required>
                                        <option value="">Pilih Poli</option>
                                        <option value="umum">Poli Umum</option>
                                        <option value="gigi">Poli Gigi</option>
                                        <option value="anak">Poli Anak</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="nama_dokter" class="form-label">Nama Dokter</label>
                                    <input type="text" class="form-control" id="nama_dokter" name="nama_dokter" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="tanggal_pendaftaran" class="form-label">Tanggal Pendaftaran</label>
                                    <input type="date" class="form-control" id="tanggal_pendaftaran" name="tanggal_pendaftaran" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="nomor_antrian" class="form-label">Nomor Antrian</label>
                                    <input type="text" class="form-control" id="nomor_antrian" name="nomor_antrian" required>
                                </div>
                            </div>

                            <div class="d-grid">

                                <button type="submit" class="btn btn-primary btn-lg">Register</button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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

</body>
</html>
