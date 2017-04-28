<?php
//membuat class database
class database {
    // property
    private $Host = "localhost";
    private $User = "root";
    private $Pass = "qwerty6.";
    private $DB = "sis";

    // method koneksi MySQL
    public function connect() {
        mysql_connect($this->Host, $this->User, $this->Pass) or die("Koneksi lagi masuk angin ! " .mysql_error());
        mysql_select_db($this->DB) or die ("Database lagi mutung. " .mysql_error());
    }
}
?>