<?= $this->extend('mydanus/admin/templateAdmin'); ?>

<?= $this->section('maincontent'); ?>

<!--Daftar pembeli-->
<section id="complaintlist" class="afternav peachgreen mt-3 pb-5">
    <div class="container containerSeller">
        <h2>Daftar Pembeli</h2>
        <h6>Daftar nama pembeli dan status</h6>
        <table class="table table-striped boxform border py-4">
            <tr>
                <th>Nama Pembeli</th>
                <th>Aksi</th>
            </tr>
            <tr>
                <td>Imam Hadi Susanto</td>
                <td>
                    <button type="button" class="btn btn-danger fa-solid fa-ban p-2 me-3"></button>
                    <button type="button" class="btn btn-success fa-solid fa-check p-2 me-3" disabled></button>
                </td>
            </tr>
            <tr>
                <td>Ahmad Zein Abid Muhabbab</td>
                <td>
                    <button type="button" class="btn btn-danger fa-solid fa-ban p-2 me-3" disabled></button>
                    <button type="button" class="btn btn-success fa-solid fa-check p-2 me-3"></button>
                </td>
            </tr>
        </table>


    </div>
</section>

<?= $this->endSection(); ?>