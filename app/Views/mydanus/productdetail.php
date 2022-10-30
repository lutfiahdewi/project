    <?= $this->extend('mydanus/template'); ?>

    <?= $this->section('maincontent'); ?>

    <!--Produk-->
    <section id="product" class="peachgreen afternav">
        <div class="container py-5 ">
            <div class="row justify-content-between">
                <div class="col-md-5 picture">
                    <img src="img/sampel produk 2.png" alt="">
                    
                </div>
                <div class="col-md-5 description">
                    <h2>Donat Hati untuk Menyemangati Kesayanganmu</h2>
                    <p><i class="bi bi-star-fill gold"></i>
                        <i class="bi bi-star-fill gold"></i>
                        <i class="bi bi-star-fill gold"></i>
                        <i class="bi bi-star-fill gold"></i>
                        <i class="bi bi-star-half gold"></i>
                    </p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et, exercitationem. Quas temporibus consequatur perspiciatis, aut rerum consequuntur veritatis nihil minus quae sed voluptatibus aliquid ea nulla fugiat ducimus saepe quis praesentium quo modi ullam expedita non. Voluptatibus nemo nihil, at iusto nesciunt error excepturi sed quas nobis nam, labore consequatur.</p>
                    <h6><i class="bi bi-exclamation-triangle-fill gold me-3"></i>Pre-Order</h6>
                    <h1 class="pt-3">Rp. 5000</h1>
                </div>
            </div>
            <!-- JADI TAMPILAN GRIDNYA YG GIMANA BIAR RESPONSIVENYA GAMPANG  -->
            <div class="row justify-content-between"> 
                <div class="col">
                    <div class="smallpic"></div>
                </div>
                <div class="col justify-content-end">
                <button type="button" class="btn btn-success">Success</button>
                </div>
            </div>
            <div class="row seller py-md-4">

            </div>
        </div>
    </section>

    <?= $this->endSection(); ?>