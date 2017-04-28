<?php 
require_once "function/libmhs.php";
$mhs = new mhs();
?>

  <div class="row">
    <div class="col-lg-12">
      <div class="page-header">
        <h4>
          <i class="glyphicon glyphicon-user"></i> Data Mahasiswa
          <a class="btn btn-primary pull-right" href="?page=tambah">
            <i class="glyphicon glyphicon-plus"></i> Tambah
          </a>
        </h4>
      </div>

  <?php  
  if (empty($_GET['alert'])) {
    echo "";
  } elseif ($_GET['alert'] == 1) {
    echo "<div class='alert alert-danger alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='glyphicon glyphicon-alert'></i> Gagal!</strong> Terjadi kesalahan.
          </div>";
  } elseif ($_GET['alert'] == 2) {
    echo "<div class='alert alert-success alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data berhasil disimpan.
          </div>";
  } elseif ($_GET['alert'] == 3) {
    echo "<div class='alert alert-success alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data berhasil diubah.
          </div>";
  } elseif ($_GET['alert'] == 4) {
    echo "<div class='alert alert-success alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data berhasil dihapus.
          </div>";
  }
  ?>

      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Data Mahasiswa</h3>
        </div>
        <div class="panel-body">
          <table class="table table-striped table-hover" id="dataTables-example">
            <thead>
              <tr>
                <th>No.</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Tempat, Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Alamat</th>
                <th>No. Telepon</th>
                <th>Aksi</th>
              </tr>
            </thead>   

            <tbody>
            <?php
            $no = 1;
            $data = $mhs->view();
            foreach ($data as $rec) {
              $tanggal        = $rec['tanggal_lahir'];
              $tgl            = explode('-',$tanggal);
              $tanggal_lahir  = $tgl[2]."-".$tgl[1]."-".$tgl[0];

              echo "  <tr>
                    <td width='50' class='center'>$no</td>
                    <td width='60'>$rec[nim]</td>
                    <td width='150'>$rec[nama]</td>
                    <td width='180'>$rec[tempat_lahir], $tanggal_lahir</td>
                    <td width='120'>$rec[jenis_kelamin]</td>
                    <td width='120'>$rec[agama]</td>
                    <td width='250'>$rec[alamat]</td>
                    <td width='80'>$rec[no_telepon]</td>

                    <td width='100'>
                      <div class=''>
                        <a data-toggle='tooltip' data-placement='top' title='Ubah' style='margin-right:5px' class='btn btn-primary btn-sm' href='?page=ubah&id=$rec[nim]'>
                          <i class='glyphicon glyphicon-edit'></i>
                        </a>";
            ?>
                        <a data-toggle="tooltip" data-placement="top" title="Hapus" class="btn btn-danger btn-sm" href="proseshapus.php?id=<?php echo $rec['nim'];?>" onclick="return confirm('Anda yakin ingin menghapus siswa <?php echo $rec['nama']; ?>?');">
                          <i class="glyphicon glyphicon-trash"></i>
                        </a>
            <?php
              echo "
                      </div>
                    </td>
                  </tr>";
              $no++;
            }
            ?>
            </tbody>           
          </table>
        </div>
      </div> 
    </div>
  </div> 