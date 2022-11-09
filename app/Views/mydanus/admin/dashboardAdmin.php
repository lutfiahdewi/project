    <?= $this->extend('mydanus/admin/templateAdmin'); ?>

    <?= $this->section('maincontent'); ?>

    <!-- Toko-toko -->
    <section id="merchants" class="peachgreen afternav">
        <div class="container containerSeller">
            <div class="row filter ">
                <h2>Daftar Toko</h2>
                <div class="row my-md-3">
                    <div class="col-md-4 mb-4">
                        <div class="card p-3">
                            <img src="img/sampel produk 1.png" class="card-img-top" alt="Gambar Kue enak">
                            <div class="card-body">
                                <h5 class="card-title"><a href="" class="stretched-link"> UKM Wirus</a></h5>
                                <small>Bergabung sejak 1 Oktober 2022</small>
                                <p><i class="bi bi-star-fill gold"></i>
                                    <i class="bi bi-star-fill gold"></i>
                                    <i class="bi bi-star-fill gold"></i>
                                    <i class="bi bi-star-fill gold"></i>
                                    <i class="bi bi-star-half gold"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card p-3">
                            <img src="img/sampel produk 1.png" class="card-img-top" alt="Gambar Kue enak">
                            <div class="card-body">
                                <h5 class="card-title"><a href="" class="stretched-link"> UKM Wirus</a></h5>
                                <small>Bergabung sejak 1 Oktober 2022</small>
                                <p><i class="bi bi-star-fill gold"></i>
                                    <i class="bi bi-star-fill gold"></i>
                                    <i class="bi bi-star-fill gold"></i>
                                    <i class="bi bi-star-fill gold"></i>
                                    <i class="bi bi-star-half gold"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card p-3">
                            <img src="img/sampel produk 1.png" class="card-img-top" alt="Gambar Kue enak">
                            <div class="card-body">
                                <h5 class="card-title"><a href="" class="stretched-link"> UKM Wirus</a></h5>
                                <small>Bergabung sejak 1 Oktober 2022</small>
                                <p><i class="bi bi-star-fill gold"></i>
                                    <i class="bi bi-star-fill gold"></i>
                                    <i class="bi bi-star-fill gold"></i>
                                    <i class="bi bi-star-fill gold"></i>
                                    <i class="bi bi-star-half gold"></i>
                                </p>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

            <!-- Pagination -->
            <div class="row pagination">
                <nav aria-label="pagination search">
                    <ul class="pagination justify-content-center ">
                        <li class="page-item disabled "><a class="page-link">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item" aria-current="page"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>

    <?= $this->endSection(); ?>