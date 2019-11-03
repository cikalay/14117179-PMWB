<html>
<head>
<title>Data Mahasiswa</title>
</head>
<BODY>
    <h1>Simpan Data Mahasiswa</h1>
<?php
    $NRP = $_POST["NRP"];
    $nama = $_POST["Nama"];
    $alamat = $_POST["Alamat"];
    $prodi = $_POST["prodi"];
    $conn=mysqli_connect ("localhost","root","") or die ("koneksi gagal");
    mysqli_select_db($conn,"prakweb");
    echo "NRP/NIM : $NRP <br>";
    echo "Nama : $nama <br>";
    echo "Alamat : $alamat <br>";
    echo "Jurusan : $prodi <br>";
    $sqlstr1="insert into mahasiswa values ('$NRP','$nama','$alamat','$prodi')";
    $hasil = mysqli_query($conn,$sqlstr1);
    echo "<br>";
    echo "Simpan Data Mahasiswa berhasil Sukses";
?>
    <form action="TambahData.html">
    <input type ="submit" value="Menu Awal">
    
</form>
</BODY>
</html>