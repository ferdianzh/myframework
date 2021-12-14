<?php $this->view("templates/header2") ?>

<main class="container mt-5">
    <div class="row">
        <div class="col">
            <div class="card text-center bg-dark pt-3">
                <img src="<?= BASEURL ?>/img/app/undraw_traveling_re_weve.svg" class="card-img-top tile-image">
                <div class="card-body">
                    <h4 class="card-title text-white">Pangkalan</h4>
                </div>
                <a href="<?= BASEURL ?>/manage/pangkalan" class="stretched-link h-100"></a>
            </div>
        </div>
        <div class="col">
            <div class="card text-center bg-dark pt-3">
                <img src="<?= BASEURL ?>/img/app/undraw_order_ride_re_372k.svg" class="card-img-top tile-image">
                <div class="card-body">
                    <h4 class="card-title text-white">Angkot</h4>
                </div>
                <a href="<?= BASEURL ?>/manage/angkot" class="stretched-link h-100"></a>
            </div>
        </div>
    </div>
    <div class="container text-center mt-4">
       <a href="<?=  BASEURL?>" class="btn bg-hub rounded-pill text-white fs-4 px-4 py-2">Kembali ke Halaman Utama</a>
    </div>
</main>

<?php $this->view("templates/footer") ?>