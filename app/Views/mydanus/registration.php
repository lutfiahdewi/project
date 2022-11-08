<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Registrasi MyDanus</title>
    <style>
        section {
            margin: 5vw;
        }

        .content {
            margin-top: 4%;
            padding: 3%;
            background-color: #fff;

        }

        input {
            border: 1px solid #fddd34;
            border-radius: 5px;
            padding: 3px;

        }

        .content {
            border: 1px solid black;
        }

        .atbottom {
            position: absolute;
            bottom: 0;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark shadow-lg fixed-top py-md-3 px-md-3" id="mainnavbar">
            <div class="container">
                <a href="/home"><img class="logo" src="img/header logo.png" id="logo" alt="logo mydanus"></a>
            </div>
        </nav>
    </header>

    <section>
        <div class="container">
            <form method="post" class="form-signup" id="form-regis">
                <h2>Daftar Sebagai Pembeli</h2>
                <p>Isikan isian berikut untuk mendaftar sebagai pembeli di MyDanus</p>
                <div class="row content">
                    <table>
                        <tr>
                            <th width="25%"></th>
                            <th width="80%"></th>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td><label for="namalengkap">Nama Lengkap</label></td>
                                <td><input type="text" name="namalengkap" placeholder="isikan nama lengkap Anda"></td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td><label for="kelas">Kelas</label></td>
                                <td><input type="text" name="kelas" placeholder="Isikan Kelas Anda"></td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td><label for="email">Email</label></td>
                                <td><input type="email" name="email" placeholder="Isikan e-mail STIS Anda"></td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td><label for="nohp">No. HP</label></td>
                                <td><input type="text" name="nohp" placeholder="Isikan No. HP Anda"></td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td><label for="alamat">Alamat</label></td>
                                <td><input type="text" name="alamat" placeholder="Isikan alamat Anda"></td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td><label for="password">Password</label></td>
                                <td><input type="password" name="password" placeholder="Masukkan password"></td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td><label for="password">Konfirmasi Password</label></td>
                                <td><input type="password" name="namalengkap" placeholder="Masukkan ulang password">
                                </td>
                            </div>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="d-flex justify-content-end"><button class="btn btn-class px-3" id="regisbutton">Daftar</button></td>
                        </tr>
                    </table>
                    <div class="row px-4">
                        <p for="checkbox" class="form-check-label">Sudah punya akun? <span>
                                <a href="/">login sekarang</a>
                            </span></p>
                    </div>
                </div>
        </div>
        </form>
        </div>
    </section>

    <!-- footer -->
    <footer class="greenpeach">
        <div class="container ">

            <div class="row credit text-center py-3">
                <small>All rights reserved by &copyMydanus 2022</small>
            </div>
        </div>

    </footer>
    <!-- wall -->
    <section id="wall" class="p-0">
        <img src="img/tembok berwarna.png" alt="">
    </section>
    <!-- Akhir wall -->
    <!-- footer -->
</body>

</html>