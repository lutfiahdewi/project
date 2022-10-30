    <?= $this->extend('mydanus/template'); ?>

    <?= $this->section('maincontent'); ?>
    <!--Hero-->
    <section id="hero" class="peachbg afternav">
        <div class="container pb-3">
            <div class="row justify-content-around ">
                <div class="col-md-5">
                    <h2>Hey Boy, How are you?</h2>
                    <p class="my-4">"Jika kau menugguku untuk menyerah, kau akan menungguku selamanya"</p>
                    <p>- Naruto Uzumaki</p>
                </div>
                <div class="col-md-5">
                    <img src="img/dashboard jumping man.png" width="200" alt="silhouette running run vector graphic pixabay" />
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Hero -->

    <!-- categories -->
    <section id="categories" class="greenpeach pb-5">
        <div class="container">
            <div class="row d-flex text-center mb-3">
                <h1>Kategori Produk</h1>
            </div>
            <div class="row d-flex justify-content-around">
                <div class="box col-md-2 p-0 mb-3 ">
                    <a href="categories"><img class="border border-secondary " src="img/cat1.jpg" alt=""></a>
                </div>
                <div class="box col-md-2 p-0 mb-3">
                    <a href="#"><img class="border border-secondary " src="img/cat1.jpg" alt=""></a>
                </div>
                <div class="box col-md-2 p-0 mb-3">
                    <a href="#"><img class="border border-secondary " src="img/cat1.jpg" alt=""></a>
                </div>
                <div class="box col-md-2 p-0 mb-3">
                    <a href="#"><img class="border border-secondary " src="img/cat1.jpg" alt=""></a>
                </div>


            </div>
        </div>
    </section>
    <!-- Akhir Categories  -->

    <!-- wall -->
    <section id="wall" class="p-0">
        <img src="img/tembok berwarna.png" alt="">
    </section>
    <!-- Akhir wall -->

    <!-- Carousel  -->
    <section id="carousel" class="greenpeach pb-5">
        <div class="container">
            <div class="row d-flex text-center mb-3">
                <h1>Kategori Produk</h1>
            </div>
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="img/cat1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="..." class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

    </section>
    <!-- Carousel  -->

    <!-- wall -->
    <section id="wall" class="p-0">
        <img src="img/tembok berwarna.png" alt="">
    </section>
    <!-- Akhir wall -->

    <!-- Swiper  -->
    <section id="carousel2" class="greenpeach pb-5">
        <div class="container">
            <div class="row d-flex text-center mb-3">
                <h1>Kategori Produk</h1>
            </div>
            <div class="row">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper justify-content-center">
                        <div class="swiper-slide">
                            <a href="#"><img class="border border-secondary " src="img/cat1.jpg" alt=""></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#"><img class="border border-secondary " src="img/cat1.jpg" alt=""></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#"><img class="border border-secondary " src="img/cat1.jpg" alt=""></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#"><img class="border border-secondary " src="img/cat1.jpg" alt=""></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#"><img class="border border-secondary " src="img/cat1.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>

    </section>
    <!-- Carousel  -->


    <!-- Recomendation -->
    <section id="recommendation" class="peachgreen">
        <div class="container pb-4 ">
            <div class="row d-flex justify-content-center mb-4">
                <div class="col-5 d-flex justify-content-center">
                    <h1>Produk Pilihan</h1>
                </div>
            </div>
            <div class="row products">
                <div class="col-md-3 mb-4">
                    <div class="card border border-warning shadow p-3" >
                        <img src="img/sampel produk 1.png" class="card-img-top" alt="Gambar Kue enak">
                        <div class="card-body">
                            <p><i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-half gold"></i>
                            </p>
                            <h6>UKM wirus</h6>
                            <h5 class="card-title"><a href="product" class="stretched-link"> Kue enak</a></h5>
                            <h4 id="price" class="pt-3">RP. 5.000</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card border border-warning shadow p-3" >
                        <img src="img/sampel produk 1.png" class="card-img-top" alt="Gambar Kue enak">
                        <div class="card-body">
                            <p><i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-half gold"></i>
                            </p>
                            <h6>UKM wirus</h6>
                            <h5 class="card-title"><a href="product" class="stretched-link"> Kue enak</a></h5>
                            <h4 id="price" class="pt-3">RP. 5.000</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card border border-warning shadow p-3" >
                        <img src="img/sampel produk 1.png" class="card-img-top" alt="Gambar Kue enak">
                        <div class="card-body">
                            <p><i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-half gold"></i>
                            </p>
                            <h6>UKM wirus</h6>
                            <h5 class="card-title"><a href="product" class="stretched-link"> Kue enak</a></h5>
                            <h4 id="price" class="pt-3">RP. 5.000</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card border border-warning shadow p-3" >
                        <img src="img/sampel produk 1.png" class="card-img-top" alt="Gambar Kue enak">
                        <div class="card-body">
                            <p><i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-half gold"></i>
                            </p>
                            <h6>UKM wirus</h6>
                            <h5 class="card-title"><a href="product" class="stretched-link"> Kue enak</a></h5>
                            <h4 id="price" class="pt-3">RP. 5.000</h4>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="row products">
                <div class="col-md-3 mb-4">
                    <div class="card border border-warning shadow p-3">
                        <img src="img/sampel produk 1.png" class="card-img-top" alt="Gambar Kue enak">
                        <div class="card-body">
                            <p><i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-half gold"></i>
                            </p>
                            <h6>UKM wirus</h6>
                            <h5 class="card-title">Kue enak</h5>
                            <h4 id="price" class="pt-3">RP. 5.000</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card border border-warning shadow p-3">
                        <img src="img/sampel produk 1.png" class="card-img-top" alt="Gambar Kue enak">
                        <div class="card-body">
                            <p><i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-half gold"></i>
                            </p>
                            <h6>UKM wirus</h6>
                            <h5 class="card-title">Kue enak</h5>
                            <h4 id="price" class="pt-3">RP. 5.000</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card border border-warning shadow p-3">
                        <img src="img/sampel produk 1.png" class="card-img-top" alt="Gambar Kue enak">
                        <div class="card-body">
                            <p><i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-half gold"></i>
                            </p>
                            <h6>UKM wirus</h6>
                            <h5 class="card-title">Kue enak</h5>
                            <h4 id="price" class="pt-3">RP. 5.000</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card border border-warning shadow p-3">
                        <img src="img/sampel produk 1.png" class="card-img-top" alt="Gambar Kue enak">
                        <div class="card-body">
                            <p><i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-half gold"></i>
                            </p>
                            <h6>UKM wirus</h6>
                            <h5 class="card-title">Kue enak</h5>
                            <h4 id="price" class="pt-3">RP. 5.000</h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- recommendation  -->

    <!-- comic panel -->
    <section id="comicpanel" class="peachbg">
        <div class="container pb-5 ">
            <div class="content p-md-5 rounded-5">
                <img src="img/komik my danus.png" alt="" width="auto">
            </div>
        </div>
    </section>
    <!-- comic panel -->

    <!-- Social media -->
    <section id="socialmedia" class="greenpeach">
        <div class="container ">
            <div class="row justify-content-around p-3 ">
                <div class="col-md-4 pt-5">
                    <h1>Follow Us On: </h1>
                    <ul class="list-unstyled">
                        <li class="my-3">
                            <i class="bi bi-instagram me-3"></i><a href="">@mydanus</a>
                        </li>
                        <li class="my-3">
                            <i class="bi bi-facebook me-3"></i><a href="#">mydanus</a>
                        </li>
                        <li class="my-3">
                            <i class="bi bi-twitter me-3"></i></i><a href="#">@mydanus</a>
                        </li>
                        <li class="my-3">
                            <i class="bi bi-whatsapp me-3"></i><a href="#">08xx-xxxx-xxxx</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-7 pt-sm-4">
                    <img src="img/maskot my danus footer.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Social media -->
    <?= $this->endSection(); ?>