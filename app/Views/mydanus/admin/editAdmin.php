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
		<!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-success mb-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <i class="bi bi-pencil-fill me-3"></i>Edit Password
            </button>
            <form>
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="nama" class="form-label ">Nama</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control border border-warning" id="nama" required value="Unit IT SEMA">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="email" class="form-label ">Email lain</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control border border-warning" id="email" required value="example@stis.ac.id">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="phone" class="form-label ">No. Hp</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control border border-warning" id="phone" required value="0812 3456 7890">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="address" class="form-label ">Alamat</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control border border-warning" id="address" required value="Ruang SEMA">
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
			<!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Password</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="">
                            <div class="modal-body">
                                <div class="mb-3 px-3">
                                    <label for="newpassword" class="form-label ">Password Baru</label>
                                    <input type="password" class="form-control border border-warning" id="newpassword" required>
                                </div>
                                <div class="mb-3 px-3">
                                    <label for="confirmpassword" class="form-label ">Konfirmasi Password Baru</label>
                                    <input type="password" class="form-control border border-warning" id="confirmpassword" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>