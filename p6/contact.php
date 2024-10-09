<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Kontak Kami</title>
</head>
<body>
    <div class="container mt-5">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Geheee</a>
                <div class="collapse navbar-collapse">
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
        
       
        <form action="konfirmasi.php" method="POST">
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" class="form-control" id="name" name="name" required />
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required />
            </div>
            <div class="form-group">
                <label for="hobby">Hobi:</label><br />
                <input type="checkbox" name="hobby[]" value="Nyanyi" /> Nyanyi <br />
                <input type="checkbox" name="hobby[]" value="Baca" /> Baca <br />
                <input type="checkbox" name="hobby[]" value="Lari" /> Lari <br />
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label><br />
                <input type="radio" name="gender" value="Laki-Laki" required /> Laki-Laki <br />
                <input type="radio" name="gender" value="Perempuan" required /> Perempuan
            </div>
            <div class="form-group">
                <label for="dob">Tanggal Lahir:</label>
                <input type="date" class="form-control" id="dob" name="dob" required />
            </div>
            <button type="submit" class="btn btn-primary">Konfirmasi</button>
        </form>
    </div>
</body>
</html>
