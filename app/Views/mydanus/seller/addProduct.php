<?= $this->extend('mydanus/templateSeller'); ?>

<?= $this->section('maincontent'); ?>

<!--Tambah Produk-->
<section id="addproduct" class="peachgreen afternav">
    <div class="container containerSeller py-5 ">
        <h2>Tambah Produk Baru</h2>
        <h6>Lengkapi isian berikut untuk menambahakan produk baru</h6>
        <div class="boxform p-5 rounded border border-secondary my-5">
            <form>
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="productName" class="form-label ">Nama Barang</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control border border-warning" id="productName" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="criteria" class="form-label">Kriteria</label>
                    </div>
                    <div class="col-md-9">
                        <select class="form-select border border-warning" aria-label="Default select example" required>
                            <option selected disabled>----Pilih kriteria----</option>
                            <option value="makananminuman">Makanan dan Minuman</option>
                            <option value="merch">Merch</option>
                            <option value="aplikasi">Aplikasi</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="description" class="form-label">Deskripsi Produk</label>
                    </div>
                    <div class="col-md-9">
                        <textarea class="form-control border border-warning" id="description" rows="3" placeholder=""></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="price" class="form-label">Harga</label>
                    </div>
                    <div class="col-md-9">
                        <input type="number" class="form-control border border-warning" id="price" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="stock" class="form-label">Stok</label>
                    </div>
                    <div class="col-md-9">
                        <input type="number" class="form-control border border-warning" id="stock" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="" class="form-label">Pre-Order</label>
                    </div>
                    <div class="col-md-9">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="yes">
                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="no">
                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="formFileMultiple" class="form-label">Foto Produk</label>
                    </div>
                    <div class="col-md-9">
                        <input class="form-control border border-warning" type="file" id="formFileMultiple" multiple>
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