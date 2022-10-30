<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org" xmlns:layout="http://www.ultraq.net.nz/thymeleaf/layout"
    xmlns:sec="http://www.thymeleaf.org/thymeleaf-extras-springsecurity5" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>layout</title>
    <link rel=”icon” href=”https://stis.ac.id/media/source/up.png”>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/bf9192ff90.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/style2.css" rel="stylesheet" />
    <style>
        section {
            margin: 5vw;
        }

        #savebutton {

            width: 20%;
            margin-top: 3vw;
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

        .isi {
            padding-left: 30%
        }
    </style>
</head>

<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h3><span>Jiddan Najdi</span></h3>
            <small><i class="fa-sharp fa-solid fa-pen pe-3"></i>Ubah Profil</small>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="/" id="home"><span><i class="fa-solid fa-house"></i></span>
                        <span>Home</span></a>
                </li>
                <li>
                    <a href="profilpembeli.html" id="profil" class="active"><span><i
                                class="fa-solid fa-user"></i></span>
                        <span>Profil</span></a>
                </li>
                <li>
                    <a href="pesanansaya.html" id="keranjang"><span>
                            <<i class="fa-light fa-cart-shopping"></i>
                        </span>
                        <span>Pesanan Saya</span></a>
                </li>
                <li>
                    <a href="keluhan.html" id="keluhan"><span><i class="fa-solid fa-triangle-exclamation"></i></span>
                        <span>Ajukan Keluhan</span></a>
                </li>
            </ul>
        </div>
        <div class="logout" href="logout.php">
            <a href="logout.php" id="login"><span><i class="fa-solid fa-right-from-bracket pe-3"></i></span>
                <span>Logout</span></a>
        </div>

    </div>


    <div class="main-content">
        <header>

            <nav class="navbar navbar-expand-lg  navbar-dark shadow fixed-top" style="background-color: #134121;">

                <div class="container my-2">
                    <!-- <a class="navbar-brand" href="#">MyDanus</a> -->
                    <div class="container my-2">
                        <a href="home.html"><img src="assets/img/logo.png" id="logo" alt="logo mydanus"
                                width="150px"></a>
                    </div>
                </div>
                <h5 class="nav-toggle">
                    <!-- <span class="las la-bars"> -->
                    <span><i class="fa-solid fa-bars"></i>
                    </span>
                </h5>

    </div>
    </div>

    </nav>
    </header>

    <main>
        <!-- Content Section -->
        <div class="isi">
            <section>
                <div class="container">
                    <form method="post" class="form-signup" id="form-regis">
                        <h2><span><i class="fa-solid fa-user"></i> Jiddan Najdi</h2>
                        <p>2219011xxx</p>
                        <div class="row content">
                            <!-- <div class="col-md-6"> -->
                            <div class="row"></div>
                            <table>
                                <tr>
                                    <th width="25%"></th>
                                    <th width="80%"></th>
                                </tr>
                                <tr>
                                    <div class="form-group">
                                        <td><label for="namalengkap">Nama Lengkap</label></td>
                                        <td><input type="text" name="namalengkap" id="nama" readonly="readonly"
                                                disabled></td>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="form-group">
                                        <td><label for="NIM">NIM</label></td>
                                        <td><input type="text" name="NIM" id="nim" readonly="readonly" disabled></td>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="form-group">
                                        <td><label for="kelas">Kelas</label></td>
                                        <td><input type="kelas" name="kelas" id="kelas" readonly="readonly" disabled>
                                        </td>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="form-group">
                                        <td><label for="emaillain">Email Lain</label></td>
                                        <td><input type="email" name="emaillain" id="emaillain"></td>
                                    </div>
                                </tr>

                                <tr>
                                    <div class="form-group">
                                        <td><label for="nohp">No. HP</label></td>
                                        <td><input type="text" name="nohp" id="nohp"></td>
                                    </div>
                                </tr>

                                <tr>
                                    <div class="form-group">
                                        <td><label for="alamat">Alamat</label></td>
                                        <td><input type="text" name="alamat" id="alamat"></td>
                                    </div>
                                </tr>



                                <!-- </div> -->
                            </table>
                            <button class="btn btn-class" id="savebutton">Simpan</button>
                        </div>
                </div>
                </form>
        </div>
        </section>
        </div>
    </main>

    </div>


    <!-- footer -->
    <footer class="">
        <div class="container ">
            <div class="row credit text-center py-3">
                <small>All rights reserved by &copyMydanus 2022</small>
            </div>
        </div>
    </footer>
    <!-- footer -->
    <script th:src="@{https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js}"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>
    <script>
        document.getElementById('nama').value = "Jiddan Najdi Putra";
        document.getElementById('nama').style = "background-color:#fddd34;"
        document.getElementById('nim').value = "2219011xxx";
        document.getElementById('nim').style = "background-color:#fddd34;"
        document.getElementById('kelas').value = "3SI1";
        document.getElementById('kelas').style = "background-color:#fddd34;"
        document.getElementById('emaillain').value = "emaillain@gmail.com";
        document.getElementById('nohp').value = "081445777xxx";
        document.getElementById('alamat').value = "Lombok";
    </script>
</body>

</html>