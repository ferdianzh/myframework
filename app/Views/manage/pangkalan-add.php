<?php $this->view("templates/header2") ?>

<div class="container mt-3">
   <form class="row g-3" action="<?= BASEURL ?>/manage/save/pangkalan" method="post">
      <div class="col-8">
         <label for="id" class="form-label">ID</label>
         <input type="text" class="form-control" id="id" name="id" placeholder="Kode ID">
      </div>
      <div class="col-md-4">
         <label for="tipe" class="form-label">Tipe</label>
         <select id="tipe" class="form-select" name="tipe">
            <option value="1">Pangkalan</option>
            <option value="2">Terminal</option>
         </select>
      </div>
      <div class="col-12">
         <label for="nama" class="form-label">Nama</label>
         <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Pangkalan atau Terminal">
      </div>
      <div class="col-md-6">
         <label for="kordinat_x" class="form-label">Kordinat X</label>
         <input type="number" class="form-control" id="kordinat_x" name="kordinat_x">
      </div>
      <div class="col-md-6">
         <label for="kordinat_y" class="form-label">Kordinat Y</label>
         <input type="number" class="form-control" id="kordinat_y" name="kordinat_y">
      </div>
      <div class="col-12">
         <button type="submit" class="btn btn-dark">Submit</button>
      </div>
   </form>
</div>

<?php $this->view("templates/footer") ?>