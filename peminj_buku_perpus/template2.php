<?php
    include "header.html";
?>

<div class="contaiter">
  <div class="row">
      <div class="col-lg-12 mt-2" style="min-height: 500px;">
        <div class="card">
          <div class="card-header">
            Data Buku
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col">
                <a href="" class="btn btn-primary">Tambah Data</a>
              </div>
              <div class="col">
                <form action="" class="from-inline float-right">
                  <input type="text" class="form-control">
                  <input type="submit" class="btn btn-primary ml-1">
                </form>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <table class="table table-bordered table-striped">
                  <tr>
                    <th>No</th>
                    <th>Id Buku</th>
                    <th>Judul Buku</th>
                    <th>Penulis Buku</th>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>k-0001</td>
                    <td>Pengenalan Sistem Telekomunikasi</td>
                    <td>Pak XXXX</td>
                  </tr>
                </table>
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