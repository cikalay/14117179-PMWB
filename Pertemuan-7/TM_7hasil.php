<?php
if(isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    echo "Nama = $nama";
    echo "<br>";
    if(isset($_POST['alamat'])) {
        $alamat = $_POST['alamat'];
        echo "Alamat = $alamat";
    }
    echo "<br>";
    if(isset($_POST['gender'])) {
        $gender = $_POST['gender'];
        echo "jenis kelamin = $gender";
    }
    echo "<br>";
    if(isset($_POST['goldar'])) {
        $goldar = $_POST['goldar'];
        echo "golongan darah = $goldar";
    }
    echo "<br>";
    if(isset($_POST['hobby'])) {
        $hobby = $_POST['hobby'];
        echo "Hobby = $hobby";
    }
    echo "<br>";
    if(isset($_POST['keterangan'])) {
        $keterangan = $_POST['Keterangan'];
        echo "Keterangan = $keterangan";   
    }
}
?>
