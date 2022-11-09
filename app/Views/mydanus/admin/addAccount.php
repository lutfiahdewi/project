<?= $this->extend('mydanus/admin/templateAdmin'); ?>

<?= $this->section('maincontent'); ?>

<!--Tambah Toko-->
<section id="addAccount" class="peachgreen afternav">
    <div class="container containerSeller py-5 ">
        <h2>Tambah Toko Baru</h2>
        <h6>Lengkapi isian berikut untuk menambahakan akun baru</h6>
        <div class="boxform p-5 rounded border border-secondary my-5">
            <form>
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="nama" class="form-label ">Nama toko</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control border border-warning" id="nama" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="username" class="form-label ">Username</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control border border-warning" id="username" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="email" class="form-label ">Email</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control border border-warning" id="email" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="password" class="form-label ">Password</label>
                    </div>
                    <div class="col-md-9">
                        <input type="password" class="form-control border border-warning" id="password" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="confirmpassword" class="form-label ">Konfirmasi Password</label>
                    </div>
                    <div class="col-md-9">
                        <input type="password" class="form-control border border-warning" id="confirmpassword" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="phone" class="form-label ">No Hp</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control border border-warning" id="phone" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="photo" class="form-label">Foto/logo</label>
                    </div>
                    <div class="col-md-9">
                        <input class="form-control border border-warning" type="file" accept="image/*" id="photo" required>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-success">Tambah</button>
                </div>

            </form>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>