<?php
session_start();
if (!empty($_SESSION['username_decafe'])) {
    header("location:login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travel Robby Karya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body style="background-color:#4F94ED;">
    <i style="color: white;" class="bi bi-phone-fill fs-1 position-absolute top-0 start-50 translate-middle-x"></i>
    <H1 style="text-align:center; margin-top:50px; color: white;"> Register Akun Anda</H1>
    <form action="proses/prosesregister.php" method="POST">
    <table border=2 cellpadding=10 cellspacing=15 align="center">
            <tr>
                <td style="color: white;">Nama</td>
                <td><input type="text" class="form-control" id="floatingInput" placeholder="Your Name" name="nama" required></td>
            </tr>
            <tr>
                <td style="color: white;">Username</td>
                <td><input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="username" required>
            </tr>
            <tr hidden>
                <td style="color: white;">Level</td>
                <td><input type="text" class="form-control" id="floatingInput" placeholder="password" name="level"></td>
            </tr>
            <tr>
                <td style="color: white;">Password</td>
                <td><input type="password" class="form-control" id="floatingInput" placeholder="Password" name="password"></td>
            </tr>
            <tr>
                <td style="color: white;">No HP</td>
                <td><input type="number" class="form-control" id="floatingInput" placeholder="No HP" name="nohp"></td>
            </tr>
            <tr>
                <td style="color: white;">Alamat</td>
                <td><input type="text" class="form-control" id="floatingInput" placeholder="Alamat" name="alamat" required></td>
            </tr>
            <tr>
                <td><button style="margin-top:30px; background-color:#0430E5 ; color: white;" type="submit" class="btn btn bg-gradient position-absolute bottom-25 start-50 translate-middle-x" name="input_register_validate" value="1234">Daftar</button></td>
            </tr>
</body>

</html>