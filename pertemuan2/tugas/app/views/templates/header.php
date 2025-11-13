<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            color: white;
        }
        .navbar {
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            box-shadow: 0 4px 12px rgba(0,0,0,0.3);
        }
        .navbar-brand {
            font-weight: 600;
        }
        .nav-link {
            color: rgba(255,255,255,0.8);
            transition: 0.3s;
        }
        .nav-link:hover, .nav-link.active {
            color: white;
            text-shadow: 0 0 8px rgba(255,255,255,0.6);
        }
    </style>
</head>
<body>

    <!-- ===== HEADER / NAVBAR ===== -->
    <nav class="navbar navbar-expand-lg navbar-dark py-3">
        <div class="container">
            <a class="navbar-brand fw-bold" href="<?= BASEURL; ?>">Website PHP (MVC)</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <a class="nav-link <?= ($data['judul'] == 'Home') ? 'active' : ''; ?>" href="<?= BASEURL; ?>">Home</a>
                    <a class="nav-link <?= ($data['judul'] == 'Daftar User') ? 'active' : ''; ?>" href="<?= BASEURL; ?>/user">Users</a>
                </ul>
            </div>
        </div>
    </nav>
