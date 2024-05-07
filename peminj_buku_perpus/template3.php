<?php
    include "header.php";
?>

<div class="contaiter">
  <div class="row">
      <div class="col-lg-12 mt-2" style="min-height: 500px;">
        <div class="card">
          <div class="card-header">
            Data Buku
          </div>
          Tambah Data Buku
          <div class="card-body">
            <div class="row">
              <div class="col">
                <form action="">
                  <div class="form-group">
                    <label for="">Id Buku</label>
                    <input type="text" class="form-control" placeholder="Id Buku">
                  </div>
                  <div class="form-group">
                    <label for="">Judul Buku</label>
                    <input type="text" class="form-control" placeholder="Judul Buku">
                  </div>
                  <div class="form-group">
                    <label for="">Penulis Buku</label>
                    <input type="text" class="form-control" placeholder="Nama Penulis">
                  </div>
                  <input type="submit" name="" id="" class="btn btn-primary" value="Simpan">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>

<?php
    include "footer.html";
?>