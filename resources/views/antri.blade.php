<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Queue Configuration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
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

        .profile-icon {
            width: 40px;
            height: 40px;
            border: 2px solid white;
            transition: transform 0.3s ease;
        }

        .profile-icon:hover {
            transform: scale(1.1);
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

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .fade-in {
            animation: fadeIn 0.5s ease-in-out;
        }
        .form-check-input:checked {
            background-color: #0d6efd;
            border-color: #0d6efd;
        }

        .form-check-label {
            font-weight: 500;
        }

        .form-select {
            border-radius: 10px;
            border: 1px solid #ddd;
            padding: 10px;
            transition: border-color 0.3s ease;
        }

        .form-select:focus {
            border-color: #0d6efd;
            box-shadow: 0 0 5px rgba<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <span class="navbar-brand">Pendaftaran Pasien Ke Poli</span>
            <div class="d-flex align-items-center">
                <img src="https://via.placeholder.com/40" alt="Profile" class="rounded-circle profile-icon me-2">
                <span class="navbar-text">Admin User</span>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="section fade-in">
            <h3 class="mb-4 text-center">Input Data Pasien</h3>
            <form action="{{ route('drtransaksi.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nomrm" class="form-label">Nomor RM</label>
                    <input type="tex(13, 110, 253, 0.5);
        }
    </style>
</head>
<body class="bg-light">
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <span class="navbar-brand">Pendaftaran Pasien Ke Poli</span>
            <div class="d-flex align-items-center">
                <img src="https://via.placeholder.com/40" alt="Profile" class="rounded-circle profile-icon me-2">
                <span class="navbar-text">Admin User</span>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="section fade-in">
            <h3 class="mb-4 text-center">Input Data Pasien</h3>
            <form action="{{ route('drtransaksi.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nomrm" class="form-label">Nomor RM</label>
                    <input type="text" class="form-control" id="nomrm" name="nomrm" placeholder="Masukkan Nomor RM" required>
                </div>


                <div class="row mb-3">
                    <div class="col-md-4">
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="full_name" name="full_name" disabled>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">NIK</label>
                        <input type="text" class="form-control" id="nik" name="nik" disabled>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" disabled>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                    <label for="kode_booking" class="form-label">Kode Booking</label>
                    <input type="text" class="form-control" id="kode_booking" name="kode_booking" placeholder="Masukkan Kode Booking" required>
                </div>
                <div class="col-md-6">
                    <label for="noregister" class="form-label">Nomor Register</label>
                    <input type="text" class="form-control" id="noregister" name="noregister" placeholder="Masukkan Nomor Register" required>
                </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="poli_tujuan" class="form-label">Poli Tujuan</label>
                        <select class="form-select" id="poli_tujuan" name="poli_tujuan" required>
                            <option value="">Pilih Poli</option>
                            @foreach($polis as $poli)
                                <option value="{{ $poli->id_poli }}">{{ $poli->nama_poli }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="nama_dokter" class="form-label">Nama Dokter</label>
                        <select class="form-select" id="nama_dokter" name="nama_dokter" required>
                            <option value="">Pilih Dokter</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="tgl_praktek" class="form-label">Tanggal Praktek</label>
                        <input type="date" class="form-control" id="tgl_praktek" name="tgl_praktek" required>
                    </div>
                    <div class="col-md-6">
                        <label for="antrian" class="form-label">Nomor Antrian</label>
                        <input type="text" class="form-control" id="antrian" name="antrian" required>
                    </div>
                </div>

                <div class="section mt-4">
                    <h5><i class="bi bi-clipboard-check me-2"></i>Kehadiran Dokter</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="id_praktek_dokter" id="hadir" value="1">
                        <label class="form-check-label" for="hadir">Hadir Tepat Waktu</label>
                    </div>
                    <div id="input_waktu_jam" class="mt-2 d-none">
                        <label>Waktu Kehadiran</label>
                        <input type="time" name="waktu_jam" id="waktu_jam" class="form-control">
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="id_praktek_dokter" id="pending" value="2">
                        <label class="form-check-label" for="pending">Pending</label>
                    </div>
                    <div id="input_waktu_pending" class="mt-2 d-none">
                        <label>Waktu Pending</label>
                        <input type="time" name="waktu_pending" id="waktu_pending" class="form-control">
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="id_praktek_dokter" id="tidak_hadir" value="3">
                        <label class="form-check-label" for="tidak_hadir">Tidak Hadir</label>
                    </div>
                </div>

                <div class="d-grid mt-4">
                    <button type="submit" class="btn btn-primary btn-lg">Register</button>
                </div>
            </form>
        </div>
    </div>
    @if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Pasien Berhasil Didaftarkan!',
                text: 'Yuk daftarkan pasien lagi!',
                confirmButtonText: 'OK'
            });
        </script>
    @endif

    <script>
        $(document).ready(function() {
            $("#nomrm").on("keypress", function(event) {
                if (event.which === 13) {
                    event.preventDefault();
                    cariRM();
                }
            });

            function cariRM() {
                let nomrm = $("#nomrm").val().trim();
                if (nomrm === "") return;

                Swal.fire({ title: "Mencari...", didOpen: () => Swal.showLoading() });

                $.post("{{ route('get_pasien') }}", { nomrm, _token: "{{ csrf_token() }}" }, function(response) {
                    Swal.close();
                    if (response.status === "success") {
                        $("#full_name").val(response.nama_pasien);
                        $("#nik").val(response.nik);
                        $("#alamat").val(response.alamat);
                    } else {
                        Swal.fire({ icon: "error", title: "RM TIDAK DITEMUKAN" });
                        $("#full_name, #nik, #alamat").val("");
                    }
                }).fail(() => Swal.fire({ icon: "error", title: "Terjadi Kesalahan" }));
            }

            $("#poli_tujuan").change(function() {
                let id_poli = $(this).val();
                if (!id_poli) return $("#nama_dokter").html('<option value="">Pilih Dokter</option>');

                $.post("{{ route('get_dokter') }}", { id_poli, _token: "{{ csrf_token() }}" }, function(response) {
                    $("#nama_dokter").html('<option value="">Pilih Dokter</option>');
                    response.dokters.forEach(dokter => {
                        $("#nama_dokter").append(`<option value="${dokter.id_dokter}">${dokter.nama_dokter}</option>`);
                    });
                });
            });

            $('input[name="id_praktek_dokter"]').change(function() {
                let praktekValue = $(this).val();
                if (praktekValue == "1") {
                    $("#input_waktu_jam").removeClass("d-none");
                    $("#input_waktu_pending").addClass("d-none");
                } else if (praktekValue == "2") {
                    $("#input_waktu_pending").removeClass("d-none");
                    $("#input_waktu_jam").addClass("d-none");
                } else {
                    $("#input_waktu_jam, #input_waktu_pending").addClass("d-none");
                }
            });
        });
    </script>
</body>
</html>