<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panggilan Pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
            font-family: 'Poppins', sans-serif;
        }

        .navbar {
            background: linear-gradient(135deg, #0d6efd, #0b5ed7);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-weight: 600;
            font-size: 1.5rem;
        }

        .section {
            background: white;
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .section:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .form-control {
            border-radius: 10px;
            border: 1px solid #ddd;
            padding: 10px;
            transition: border-color 0.3s ease;
        }

        .form-control:focus {
            border-color: #0d6efd;
            box-shadow: 0 0 5px rgba(13, 110, 253, 0.5);
        }

        .btn-primary, .btn-success {
            border-radius: 10px;
            padding: 10px 20px;
            font-weight: 600;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .btn-primary:hover, .btn-success:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .table {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .table th {
            background: #0d6efd;
            color: white;
            font-weight: 600;
        }

        .table td {
            vertical-align: middle;
        }

        .table tbody tr:hover {
            background-color: rgba(13, 110, 253, 0.05);
        }

        h3, h5 {
            color: #0d6efd;
            font-weight: 700;
        }

        .text-center {
            color: #333;
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .fade-in {
            animation: fadeIn 0.5s ease-in-out;
        }
    </style>
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <span class="navbar-brand">KASIR</span>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="section fade-in">
            <h3 class="mb-4 text-center">Panggil Pasien Berdasarkan No Register</h3>
            <div class="mb-3">
                <label for="noregister" class="form-label">Nomor Register</label>
                <input type="text" class="form-control" id="noregister" placeholder="Masukkan Nomor Register">
            </div>
            <div class="d-grid">
                <button class="btn btn-primary btn-lg" onclick="panggilPasien()">Panggil Pasien</button>
            </div>
        </div>

        <div class="section fade-in mt-4">
            <h5>Detail Pasien</h5>
            <table class="table">
                <tbody>
                    <tr><th>Nama Pasien</th><td id="nama_pasien">-</td></tr>
                    <tr><th>NIK</th><td id="nik">-</td></tr>
                    <tr><th>Alamat</th><td id="alamat">-</td></tr>
                    <tr><th>Poli</th><td id="poli">-</td></tr>
                    <tr><th>Dokter</th><td id="dokter">-</td></tr>
                    <tr><th>Tanggal Praktek</th><td id="tgl_praktek">-</td></tr>
                    <tr><th>Antrian</th><td id="antrian">-</td></tr>
                </tbody>
            </table>
        </div>

        <div class="section fade-in mt-4">
            <h5>Input Transaksi</h5>
            <div class="mb-3">
                <label for="diagnosa" class="form-label">Diagnosa</label>
                <input type="text" class="form-control" id="diagnosa" placeholder="Masukkan Diagnosa">
            </div>
            <div class="mb-3">
                <label for="total_harga" class="form-label">Total Tarif (Rp)</label>
                <input type="number" class="form-control" id="total_harga" placeholder="Masukkan Total Tarif">
            </div>
            <div class="d-grid">
                <button class="btn btn-success btn-lg" onclick="simpanTransaksi()">Simpan Transaksi</button>
            </div>
        </div>
    </div>

    <script>
        function panggilPasien() {
            let noregister = $("#noregister").val().trim();
            if (noregister === "") {
                Swal.fire({ icon: "warning", title: "Masukkan Nomor Register" });
                return;
            }

            Swal.fire({ title: "Mencari...", didOpen: () => Swal.showLoading() });

            $.get("/get-pasien/" + noregister, function(response) {
                Swal.close();
                if (response.pasien) {
                    $("#nama_pasien").text(response.pasien.nama_pasien).data("id", response.pasien.id_pasien);
                    $("#nik").text(response.pasien.nik);
                    $("#alamat").text(response.pasien.alamat);
                    $("#poli").text(response.poli.nama_poli).data("id", response.poli.id_poli);
                    $("#dokter").text(response.dokter.nama_dokter).data("id", response.dokter.id_dokter);
                    $("#tgl_praktek").text(response.tanggal_pemeriksaan);
                    $("#antrian").text(response.antrian);
                } else {
                    Swal.fire({ icon: "error", title: "Pasien Tidak Ditemukan" });
                }
            }).fail(() => Swal.fire({ icon: "error", title: "Terjadi Kesalahan" }));
        }

        function simpanTransaksi() {
            let noregister = $("#noregister").val().trim();
            let diagnosa = $("#diagnosa").val().trim();
            let total_harga = parseFloat($("#total_harga").val());

            if (!noregister || !total_harga || isNaN(total_harga)) {
                Swal.fire({ icon: "warning", title: "Harap lengkapi semua data" });
                return;
            }

            let point = Math.floor(total_harga / 200000);

            let transaksiData = {
                _token: "{{ csrf_token() }}",
                noregister: noregister,
                id_pasien: $("#nama_pasien").data("id"),
                id_poli: $("#poli").data("id"),
                id_dokter: $("#dokter").data("id"),
                tgl_praktek: $("#tgl_praktek").text(),
                diagnosa: diagnosa,
                total_harga: total_harga,
                point: point
            };

            Swal.fire({ title: "Menyimpan...", didOpen: () => Swal.showLoading() });

            $.post("/save-transaksi", transaksiData, function(response) {
                Swal.close();
                if (response.success) {
                    Swal.fire({ icon: "success", title: "Transaksi Berhasil Disimpan", text: "Total Point: " + point });
                } else {
                    Swal.fire({ icon: "error", title: "Gagal Menyimpan Transaksi" });
                }
            }).fail(() => Swal.fire({ icon: "error", title: "Terjadi Kesalahan" }));
        }
    </script>
</body>
</html>