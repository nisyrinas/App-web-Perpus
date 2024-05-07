<?php
    include "header.php";
?>

<div class="contaiter">
  <div class="row">
      <div class="col-lg-12 mt-2" style="min-height: 500px;">
        <div class="card">
          <div class="card-header">
            Data Mahasiswa
          </div>
          Tambah Data Mahasiswa
          <div class="card-body">
            <div class="row">
              <div class="col">
                <form action="simpan_mahasiswa.php" method="POST">
                  <div class="form-group">
                    <label for="">Id mahasiswa</label>
                    <input type="text" class="form-control" placeholder="Id Mahasiswa" name="id_mahasiswa">
                  </div>
                  <div class="form-group">
                    <label for="">Nama mahasiswa</label>
                    <input type="text" class="form-control" placeholder="Nama Mahasiswa" name="nama">
                  </div>
                  <div class="form-group">
                    <label for="">Nomor Hp</label>
                    <input type="text" class="form-control" placeholder="Nomor HP" name="no_hp">
                  </div>
										<div class="form=group">
											<label for="">Alamat</label>
											<input type="text" class="form-control" placeholder="Alamat" name="alamat">
										</div>
										<div class="class">
										<label for="">Program studi</label>
										<input type="text" class="form-control" placeholder="Program Studi" name="prodi">
										</div>
										<div class="class">
											<label for="">Jumlah buku</label>
											<input type="text" class="form-control" placeholder="Jumlah Buku" name="jumlah_buku">
										</div>
                  <input type="submit" class="btn btn-primary" value="Simpan">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>

<?php
    include "footer.php";
?>