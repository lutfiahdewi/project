<?= $this->extend('mydanus/admin/templateAdmin'); ?>

<?= $this->section('maincontent'); ?>

<!--Daftar Keluhan-->
<section id="complaintlist" class="afternav peachgreen mt-3 pb-5">
    <div class="container containerSeller">
        <h2>Daftar Keluhan</h2>
        </h2>
        <h6>Kendala/masalah yang dialami pengguna</h6>
        <div class="list py-4 px-3">
            <div class="row boxform border border-secondary rounded mb-3 py-2 d-flex flex-wrap">
                <div class="col-10">
                    <h5>Lutfiah Kumala Dewi</h5>
                </div>
                <div class="col-2 d-flex justify-content-end">
                    <a href="complaintDetail"><i class="bi bi-chevron-right ms-3"></i></a>
                </div>
            </div>
            <div class="row boxform border border-secondary rounded mb-3 py-2 d-flex flex-wrap">
                <div class="col-10">
                    <h5>UKM Kewirausahaan</h5>
                </div>
                <div class="col-2 d-flex justify-content-end">
                    <a href="complaintDetail"><i class="bi bi-chevron-right ms-3"></i></a>
                </div>
            </div>
            <div class="row boxform border border-secondary rounded mb-3 py-2 d-flex flex-wrap">
                <div class="col-10">
                    <h5>Khasatun Prasasti Saputri</h5>
                </div>
                <div class="col-2 d-flex justify-content-end">
                    <a href="complaintDetail"><i class="bi bi-chevron-right ms-3"></i></a>
                </div>
            </div>
            <div class="row boxform border border-secondary rounded mb-3 py-2 d-flex flex-wrap">
                <div class="col-10">
                    <h5>UKM Media Kampus</h5>
                </div>
                <div class="col-2 d-flex justify-content-end">
                    <a href="complaintDetail"><i class="bi bi-chevron-right ms-3"></i></a>
                </div>
            </div>
            <div class="row boxform border border-secondary rounded mb-3 py-2 d-flex flex-wrap">
                <div class="col-10">
                    <h5>Lorem, ipsum.</h5>
                </div>
                <div class="col-2 d-flex justify-content-end">
                    <a href="complaintDetail"><i class="bi bi-chevron-right ms-3"></i></a>
                </div>
            </div>
            <div class="row boxform border border-secondary rounded mb-3 py-2 d-flex flex-wrap">
                <div class="col-10">
                    <h5>Lorem ipsum dolor sit.</h5>
                    </h5>
                </div>
                <div class="col-2 d-flex justify-content-end">
                    <a href="complaintDetail"><i class="bi bi-chevron-right ms-3"></i></a>
                </div>
            </div>
        </div>

    </div>
</section>

<?= $this->endSection(); ?>