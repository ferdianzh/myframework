<?php $this->view("templates/header") ?>

<main class="row">
    <div class="col-4 bg-primary">
        <p>menu</p>
    </div>
    <div class="col-8 bg-success">
        <p>map</p>
    </div>
    <div>
        <p><b>Test DB:</b> <?= $pangkalan['nama'] ?></p>
    </div>
</main>

<?php $this->view("templates/footer") ?>