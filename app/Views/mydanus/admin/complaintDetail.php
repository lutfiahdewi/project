<?= $this->extend('mydanus/admin/templateAdmin'); ?>

<?= $this->section('maincontent'); ?>
<!--Nama Complaint-->
<section id="namacomplaint" class="border-bottom border-dark">
    <div class="container containerSeller py-1">
        <h4 id=""><a href="complaintList"><i class="bi bi-arrow-left me-3"></a></i>UKM Kewirausahaan</h4>
    </div>
</section>

<!--Detail Komplain-->
<section id="complaint" class="peachgreen pb-5">
    <div class="container containerSeller">
        <h2>Detail Keluhan</h2>
        <h6>Diajukan oleh <span id="">UKM Kewirausahaan</span> pada <span id="date">dd-mm-yyyy</span></h6>
        <form class="boxform border border-secondary rounded p-4 my-4">
            <div class="mb-3">
                <textarea class="form-control content rounded p-3 m-0" rows="15">
Pembelinya bau bawang. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur harum vitae cupiditate minus omnis, enim porro. Expedita consequuntur id odio sit vel totam aliquid. Beatae quos ea nobis, tempora perspiciatis voluptatem unde a quidem officia illum odio sunt blanditiis dolores, eligendi eos id facere! Debitis nostrum quam consequatur architecto error autem mollitia placeat quas laudantium, ratione eveniet quos cum eius culpa voluptatem quisquam vitae, quo voluptatum. Quas reiciendis sint quos error, at numquam a beatae doloremque suscipit magni mollitia. Natus harum, est tenetur nulla, corporis dolor magni aperiam veritatis, pariatur fugiat quibusdam maxime distinctio cumque expedita. Unde minus omnis a.
Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil perspiciatis molestias, voluptatibus facere sapiente, magni possimus similique est explicabo illo ad sit! Tempora dolores a facere. Incidunt reiciendis deleniti repellendus accusamus quod et aliquam corporis fugit voluptatibus quidem molestiae sequi sunt aspernatur quae nobis autem natus ducimus in sint libero, necessitatibus error explicabo? Labore ut itaque quam, blanditiis beatae possimus repellat eaque, cumque explicabo enim laboriosam nihil id nesciunt! Autem eos et quod magnam amet reiciendis, labore officia id rerum ipsum eum dolor, nesciunt rem sit eius, doloremque possimus quia quas. Necessitatibus iure maiores, non maxime ea soluta cupiditate eum, esse corporis est, aperiam nam voluptates. Ut alias, reprehenderit nisi soluta reiciendis dignissimos quaerat repudiandae? Soluta consequuntur quos natus, voluptate neque ex! A rerum atque consectetur aliquam aut ad sapiente reiciendis labore excepturi ratione. Corporis accusamus vero unde veniam dolorum quas! Molestias recusandae laudantium sit saepe nemo culpa maxime asperiores quidem odio, corporis libero ut aliquid cum ipsa ipsam quis deserunt velit pariatur reiciendis consectetur! Explicabo quidem, hic dignissimos omnis dolore sunt corrupti eius placeat.
            </textarea>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-danger btn-lg px-3 py-2 me-3"> <i class="bi bi-x-lg"></i></button>
                <button type="submit" class="btn btn-success btn-lg px-3 py-2"> <i class="bi bi-check-lg"></i></button>
            </div>

        </form>
    </div>
</section>

<?= $this->endSection(); ?>