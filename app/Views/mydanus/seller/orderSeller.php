    <?= $this->extend('mydanus/templateSeller'); ?>

    <?= $this->section('maincontent'); ?>

    <!--Komplain-->
    <section id="complaint" class="afternav peachgreen mt-3 pb-5">
        <div class="container containerSeller">
            <h2>Daftar Pesanan</h2>
            <div class="accordion py-4">
                <div class="accordion-item boxform rounded border border-secondary my-3">
                    <button class="accordion-button  rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                        Donat Hati untuk Menyemangati Kesayanganmu
                    </button>
                    <div id="collapse1" class="accordion-collapse collapse show">
                        <div class="accordion-body">
                            <ul>
                                <li>Pembayaran</li>
                                <li>Pemesanan</li>
                                <li>Pengiriman</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item boxform rounded border border-secondary my-3">
                    <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </button>
                    <div id="collapse2" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <ul>
                                <li>Pembayaran</li>
                                <li>Pemesanan</li>
                                <li>Pengiriman</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item boxform rounded border border-secondary my-3">
                    <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                        Adipisci voluptatibus animi quia quas,
                    </button>
                    <div id="collapse3" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <ul>
                                <li>Pembayaran</li>
                                <li>Pemesanan</li>
                                <li>Pengiriman</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item boxform rounded border border-secondary my-3">
                    <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                        Provident, tempora rem? Cumque doloribus dolor voluptatibus repellat,
                    </button>
                    <div id="collapse4" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <ul>
                                <li>Pembayaran</li>
                                <li>Pemesanan</li>
                                <li>Pengiriman</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <?= $this->endSection(); ?>