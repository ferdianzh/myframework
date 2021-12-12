<?php $this->view("templates/header2") ?>

<main class="container">
    <div class="row">
        <div class="col">
            <a href="<?= BASEURL ?>/manage/pangkalan" class="btn btn-primary">Pangkalan</a>
        </div>
        <div class="col">
            <a href="<?= BASEURL ?>/manage/angkot" class="btn btn-success">Angkot</a>
        </div>
    </div>
    <div class="container bg-warning">
       <a href="<?=  BASEURL?>" class="btn btn-dark">Kembali ke Halaman Utama</a>
    </div>
</main>

<?php $this->view("templates/footer") ?>