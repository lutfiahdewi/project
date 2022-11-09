<?= $this->extend('mydanus/admin/templateAdmin'); ?>

<?= $this->section('maincontent'); ?>

<!--profil admin-->
<section id="profiladmin" class="afternav mt-3 mb-5">
    <div class="container containerSeller">
        <div class="row">
            <div class="col-md-3 align-self-center text-center">
                <img class="rounded-circle" src="img/default big profile icon.png" alt="">
            </div>
            <div class="col-md-9">
                <div class="namaadmin">
                    <h1>Unit IT SEMA</h1>
                </div>
                <h6>Unit IT SEMA sebagai pengawas sistem MyDanus. Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Harum, repellendus quidem atque eos aliquam voluptates nulla voluptatem recusandae,
                    voluptatum minima corrupti quo provident distinctio vitae earum asperiores doloribus? Voluptatum,
                    animi?</h6>
            </div>

        </div>
    </div>
</section>

<!--Profil Lengkap-->
<section id="formprofiladmin" class="peachgreen">
    <div class="container containerSeller pb-5 ">
        <div class="boxform p-5 rounded border border-secondary my-5">
            <form>
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="nama" class="form-label ">Nama</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" readonly class="form-control border border-warning" id="nama" required value="Unit IT SEMA">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="email" class="form-label ">Email lain</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" readonly class="form-control border border-warning" id="email" required value="example@stis.ac.id">
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
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="address" class="form-label ">Alamat</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" readonly class="form-control border border-warning" id="address" required value="Ruang SEMA">
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>