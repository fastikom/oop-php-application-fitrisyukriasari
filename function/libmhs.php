<?php
// memanggil class database
require_once "function/libdb.php";
// instance objek db
$db = new database();
// koneksi ke MySQL dengan method connect
$db->connect();

// class siswa 
class mhs {

    // method untuk menampilkan data siswa 
    function view() {
        $query =  mysql_query("SELECT * FROM datadiri ORDER BY nim DESC");
        while ($data = mysql_fetch_array($query)) {
            $hasil[] = $data;
        }
        return $hasil;
    }

    // Method untuk menyimpan data ke tabel siswa 
    function insert($nim, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat, $no_telepon) {
        $query = mysql_query("INSERT INTO datadiri (nim, 
                                                    nama,
                                                    tempat_lahir,
                                                    tanggal_lahir,
                                                    jenis_kelamin,
                                                    agama,
                                                    alamat,
                                                    no_telepon) 
                                            VALUES ('$nim',
                                                    '$nama',
                                                    '$tempat_lahir',
                                                    '$tanggal_lahir',
                                                    '$jenis_kelamin',
                                                    '$agama',
                                                    '$alamat',
                                                    '$no_telepon')");

        if($query){
            // jika data berhasil disimpan alihkan ke halaman siswa dan tampilkan pesan = 2 
            header("Location: index.php?alert=2");
        }
        else{
            // jika data gagal disimpan alihkan ke halaman siswa dan tampilkan pesan = 1 
            header("Location: index.php?alert=1");
        }
    }

    // Method untuk menampilkan data siswa berdasarkan kode siswa 
    function get_siswa($nim) {
        $query = mysql_query("SELECT * FROM datadiri WHERE nim='$nim'");

        return mysql_fetch_array($query);
    }
    
    // Method untuk mengubah data pada tabel siswa 
    function update($nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat, $no_telepon, $nim) {
        $query = mysql_query("UPDATE datadiri SET nama            = '$nama',
                                                  tempat_lahir    = '$tempat_lahir',
                                                  tanggal_lahir   = '$tanggal_lahir',
                                                  jenis_kelamin   = '$jenis_kelamin',
                                                  agama           = '$agama',
                                                  alamat          = '$alamat',
                                                  no_telepon      = '$no_telepon'
                                            WHERE nim             = '$nim'"); 

        if($query){
            // jika data berhasil disimpan alihkan ke halaman siswa dan tampilkan pesan = 3 
            header("Location: index.php?alert=3");
        }
        else{
            // jika data gagal disimpan alihkan ke halaman siswa dan tampilkan pesan = 1 
            header("Location: index.php?alert=1");
        }
    }
    
    // Method untuk menghapus data pada tabel siswa 
    function delete($nim) {
        $query = mysql_query("DELETE FROM datadiri WHERE nim = '$nim'");

        if($query){
            // jika data berhasil disimpan alihkan ke halaman siswa dan tampilkan pesan = 4 
            header("Location: index.php?alert=4");
        }
        else{
            // jika data gagal disimpan alihkan ke halaman siswa dan tampilkan pesan = 1 
            header("Location: index.php?alert=1");
        }
    }
}
?>
