<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Report</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .card {
            margin: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Patient Report</h1>
        <form method="POST" class="mb-4">
            <div class="form-group">
                <label for="nomrm">Nomor RM:</label>
                <input type="text" class="form-control" id="nomrm" name="nomrm" required>
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
        
        <div class="row">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Sample data for demonstration
                $patients = [
                    ['nomrm' => '123456', 'name' => 'John Doe', 'address' => '123 Main St', 'total_points' => 50],
                    ['nomrm' => '789012', 'name' => 'Jane Smith', 'address' => '456 Elm St', 'total_points' => 75],
                    // Add more patient data as needed
                ];

                $nomrm = $_POST['nomrm'];
                $found = false;

                foreach ($patients as $patient) {
                    if ($patient['nomrm'] === $nomrm) {
                        $found = true;
                        echo '<div class="col-md-4">';
                        echo '<div class="card">';
                        echo '<div class="card-body">';
                        echo '<h5 class="card-title">Nomor RM: ' . $patient['nomrm'] . '</h5>';
                        echo '<p class="card-text">Nama: ' . $patient['name'] . '</p>';
                        echo '<p class="card-text">Alamat: ' . $patient['address'] . '</p>';
                        echo '<p class="card-text">Total Points: ' . $patient['total_points'] . '</p>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                }

                if (!$found) {
                    echo '<div class="col-md-12">';
                    echo '<div class="alert alert-danger" role="alert">Patient not found!</div>';
                    echo '</div>';
                }
            }
            ?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
