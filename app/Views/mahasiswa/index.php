<?php $this->view("templates/header", $data) ?>

<div class="container mt-4 pt-3">
   <div class="row">
      <div class="col-lg-6">
         <?php Core\Flasher::flash() ?>
      </div>
   </div>
   <div class="row">
      <div class="col-lg-6">
         <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#formModal">Tambah data mahasiswa</button>
         <br><br>
         <!-- list mahasiswa -->
         <h3>Daftar Mahasiswa</h3>
         <ul class="list-group">
            <?php foreach ($data["mhs"] as $mhs) : ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
               <?= $mhs["nama"] ?>
               <div>
                  <a href="<?= BASEURL ?>/mahasiswa/detail/<?= $mhs["id"] ?>"
                     class="text-decoration-none badge bg-success">Detail</a>
                  <a href="<?= BASEURL ?>/mahasiswa/delete/<?= $mhs["id"] ?>"
                     class="text-decoration-none badge bg-danger" onclick="return confirm('Hapus data?');">Hapus</a>
               </div>
            </li>
            <?php endforeach; ?>
         </ul>
      </div>
   </div>
</div>
<!-- modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <form action="<?= BASEURL ?>/mahasiswa/add" method="POST">
            <div class="mb-3">
               <label for="nama" class="form-label">Nama</label>
               <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
               <label for="nim" class="form-label">NIM</label>
               <input type="number" class="form-control" id="nim" name="nim">
            </div>
            <div class="mb-3">
               <label for="email" class="form-label">Email</label>
               <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
               <label for="prodi" class="form-label">prodi</label>
               <select class="form-control" name="prodi" id="prodi">
                  <option value="Teknik Elektro">Teknik Elektro</option>
                  <option value="Teknik Informatika">Teknik Informatika</option>
                  <option value="Teknik Mesin">Teknik Mesin</option>
                  <option value="Teknik Sipil">Teknik Sipil</option>
               </select>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success">Tambah data</button>
            </form>
         </div>
      </div>
   </div>
</div>

<?php $this->view("templates/footer"); ?>