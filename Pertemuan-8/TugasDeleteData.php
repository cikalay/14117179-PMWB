<?php
echo "<h1>HAPUS DATA</h1>";
$hapus = $_POST['hapus'];
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"prakweb");
$sqlstr2 = "delete from mahasiswa where NRP = '$hapus'";
echo "NIM $hapus dihapus dari Data Mahasiswa";
echo "<br><br>";
$hasil1 = mysqli_query($conn,$sqlstr2);
$hasil = mysqli_query($conn,"select NRP,Nama,Alamat,Nama_Jur from mahasiswa natural join jurusan");
$jumlah = mysqli_num_rows($hasil);
echo "<br>";
echo "Data Sesudah Dihapus : ";
echo "<br>";
echo "<br>";
while($baris=mysqli_fetch_array($hasil)) {
    echo "NIM : ";
    echo $baris[0];
    echo "<br>";
    echo "Nama : ";
    echo $baris[1];
    echo "<br>";
    echo "Alamat :";
    echo $baris[2];
    echo "<br>";
    echo "Jurusan :";
    echo $baris[3];
    echo "<br>";
    echo "<br>";
}
?>
<form action ="TambahData.html">
    <input type ="submit" value ="Menu Awal">
</form>