<?= $this->extend('mydanus/templateSeller'); ?>

<?= $this->section('maincontent'); ?>
<!--Edit Produk-->
<section id="addproduct" class="peachgreen afternav">
    <div class="container containerSeller py-5 ">
        <h2>Perbarui Produk </h2>
        <h6>Perbarui kelengkapan produk</h6>
        <div class="boxform p-5 rounded border border-secondary my-5">
        <form>
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="productName" class="form-label ">Nama Barang</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control border border-warning" id="productName" value="Snack Pagi" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="criteria" class="form-label">Kriteria</label>
                    </div>
                    <div class="col-md-9">
                        <select class="form-select border border-warning" aria-label="Default select example" required>
                            <option  disabled>----Pilih kriteria----</option>
                            <option selected value="makananminuman">Makanan dan Minuman</option>
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
                        <textarea class="form-control border border-warning" id="description" rows="3" >Makanan enak</textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="price" class="form-label">Harga</label>
                    </div>
                    <div class="col-md-9">
                        <input type="number" class="form-control border border-warning" id="price" value="3500" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="stock" class="form-label">Stok</label>
                    </div>
                    <div class="col-md-9">
                        <input type="number" class="form-control border border-warning" id="stock" value="35" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="" class="form-label">Pre-Order</label>
                    </div>
                    <div class="col-md-9">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="yes" checked>
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
                    <button type="submit" class="btn btn-success"><a href="manageproduct">Simpan</a></button>
                </div>

            </form>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>