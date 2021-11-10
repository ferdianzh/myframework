<div class="container mt-4 pt-3">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data["mhs"]["nama"] ?></h5>
            <h6 class="card-subtitle"><?= $data["mhs"]["nim"] ?></h6>
            <p class="card-text"><?= $data["mhs"]["email"] ?></p>
            <p class="card-text"><?= $data["mhs"]["prodi"] ?></p>
            <a href="<?= BASEURL ?>/mahasiswa" class="btn btn-success">Kembali</a>
        </div>
    </div>
</div>