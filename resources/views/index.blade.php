<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Registration</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5">
                    <div class="card-header bg-primary text-white">
                        <h2 class="text-center">Patient Registration Form</h2>
                    </div>
                    <div class="card-body">
                        <form action="process_registration.php" method="POST">
                            <div class="mb-3">
                                <label for="full_name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="full_name" name="full_name" required>
                            </div>

                            <div class="mb-3">
                                <label for="dob" class="form-label">Date of Birth</label>
                                <input type="date" class="form-control" id="dob" name="dob" required>
                            </div>

                            <div class="mb-3">
                                <label for="gender" class="form-label">Gender</label>
                                <select class="form-select" id="gender" name="gender" required>
                                    <option value="">Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>

                            <div class="mb-3">
                                <label for="address" class="form-label">Home Address</label>
                                <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="medical_history" class="form-label">Medical Record Number</label>
                                <textarea class="form-control" id="medical_history" name="medical_history" rows="1"></textarea>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">Register</button>
                            </div>
                        </form>

                        <!-- Digital ID Card -->
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
                                                    <h5 class="card-title mb-1">John Doe</h5>
                                                    <small class="text-muted">Patient</small>
                                                </div>
                                                <div class="mb-2">
                                                    <small class="text-muted">Medical Record No.</small>
                                                    <p class="mb-0">RM123456789</p>
                                                </div>
                                                <div class="mt-auto text-end">
                                                    <img src="https://api.qrserver.com/v1/create-qr-code/?size=80x80&data=RM123456789" alt="QR Code" class="qr-code">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
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
