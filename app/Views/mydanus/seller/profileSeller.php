<?= $this->extend('mydanus/templateSeller'); ?>

<?= $this->section('maincontent'); ?>

<!--profil toko-->
<section id="profiltoko" class="afternav mt-3 mb-5">
    <div class="container containerSeller">
        <div class="row">
            <div class="col-md-2 align-self-center text-center">
                <img class="rounded-circle" src="img/default big profile icon.png" alt="">
            </div>
            <div class="col-md-5">
                <div class="namatoko">
                    <h1>UKM Wirus</h1>
                </div>
                <h6>UKM ini menjual....</h6>
            </div>
            <div class="col-md-5">
                <ul class="list-unstyled">
                    <li><i class="bi bi-cart me-3"></i>Produk terjual :</li>
                    <li><i class="bi bi-star me-3"></i>Penilaian :</li>
                    <li><i class="bi bi-shop me-3"></i>Bergabung :</li>
                    <li><i class="bi bi-whatsapp me-3"></i>Kontak : <a href="https://wa.me/628123456890" target="blank">0812-3456-7890</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!--Profil Lengkap-->
<section id="addproduct" class="peachgreen">
    <div class="container containerSeller pb-5 ">
        <div class="boxform p-5 rounded border border-secondary my-5">
            <form>
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="namaToko" class="form-label ">Nama Toko</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" readonly class="form-control border border-warning" id="namaToko" required value="UKM Wirus">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="username" class="form-label ">Username</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" readonly class="form-control border border-warning" id="username" required value="ukm_wirus">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="eamil" class="form-label ">Email</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" readonly class="form-control border border-warning" id="email" required value="example@stis.ac.id">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="password" class="form-label ">Password</label>
                    </div>
                    <div class="col-md-9">
                        <input type="password" readonly class="form-control border border-warning" id="password" value="abcde123" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="phone" class="form-label ">No. Hp</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" readonly class="form-control border border-warning" id="phone" required value="0812 3456 7890">
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>