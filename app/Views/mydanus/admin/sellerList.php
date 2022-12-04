<?= $this->extend('mydanus/admin/templateAdmin'); ?>

<?= $this->section('maincontent'); ?>

<!--Daftar penjual-->
<section id="complaintlist" class="afternav peachgreen mt-3 pb-5">
    <div class="container containerSeller">
        <h2>Daftar Penjual</h2>
        <h6>Daftar nama penjual dan status</h6>
        <table class="table table-striped boxform border py-4">
            <tr>
                <th>Nama Penjual</th>
                <th>Aksi</th>
            </tr>
            <tr>
                <td>UKM Kewirausahan</td>
                <td>
                    <button type="button" class="btn btn-danger fa-solid fa-ban p-2 me-3"></button>
                    <button type="button" class="btn btn-success fa-solid fa-check p-2 me-3" disabled></button>
                </td>
            </tr>
            <tr>
                <td>UKM </td>
                <td>
                    <button type="button" class="btn btn-danger fa-solid fa-ban p-2 me-3" disabled></button>
                    <button type="button" class="btn btn-success fa-solid fa-check p-2 me-3"></button>
                </td>
            </tr>
        </table>

    </div>
</section>

<?= $this->endSection(); ?>