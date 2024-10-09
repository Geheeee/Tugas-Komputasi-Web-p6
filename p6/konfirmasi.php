<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Konfirmasi Kontak</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Geheee</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Konten Utama -->
    <div class="container mt-5">
        <h2 class="text-center">Konfirmasi Kontak</h2>
        <?php
        $host = "localhost";
        $user = "root";
        $pass = "";
        $namadb = "mahasiswa";
        $port = 3307;

        // Koneksi ke database
        $koneksi = mysqli_connect($host, $user, $pass, $namadb, $port);
        if (!$koneksi) {
            die("Koneksi gagal: " . mysqli_connect_error());
        }

        // Cek apakah form sudah disubmit
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = mysqli_real_escape_string($koneksi, htmlspecialchars($_POST['name']));
            $email = mysqli_real_escape_string($koneksi, htmlspecialchars($_POST['email']));
            $hobbies = isset($_POST['hobby']) ? implode(', ', $_POST['hobby']) : 'Tidak ada';
            $gender = mysqli_real_escape_string($koneksi, htmlspecialchars($_POST['gender']));
            $dob = mysqli_real_escape_string($koneksi, htmlspecialchars($_POST['dob']));

            // Query untuk memasukkan data ke database
            $sql = "INSERT INTO kontak (name, email, hobby, gender, dob) 
                    VALUES ('$name', '$email', '$hobbies', '$gender', '$dob')";

            if (mysqli_query($koneksi, $sql)) {
                echo "<div class='alert alert-success' role='alert'>
                        <h4 class='alert-heading'>Data Berhasil Disimpan</h4>
                        <p><strong>Nama:</strong> $name</p>
                        <p><strong>Email:</strong> $email</p>
                        <p><strong>Hobi:</strong> $hobbies</p>
                        <p><strong>Gender:</strong> $gender</p>
                        <p><strong>Tanggal Lahir:</strong> $dob</p>
                        <hr>
                        <p class='mb-0'>Terima kasih telah mengisi form ini.</p>
                      </div>";
            } else {
                echo "<div class='alert alert-danger' role='alert'>
                        <h4 class='alert-heading'>Error</h4>
                        <p>Terjadi kesalahan saat menyimpan data: " . mysqli_error($koneksi) . "</p>
                      </div>";
            }
        }

        mysqli_close($koneksi);
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>
