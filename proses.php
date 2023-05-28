<?php
    if(isset($_POST['tampil']))
    {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $tgl = $_POST['tgl lahir'];

        echo"<ul>";
        echo"<li> Nama: $nama</li>
            <li> Alamat: $alamat</li>
            <li> Tanggal Lahir: $tgl </li>
            ";
        echo"</ul>";
    }
 ?>