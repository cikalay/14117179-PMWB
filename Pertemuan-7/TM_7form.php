<!DOCTYPE html>
<html>
<head>
    <title>Form Mahasiswa Informatic</title>
</head>
<body>
    <h2>Data Mahasiswa HMIF</h2>
        <form action = "TM_7Hasil.php" method = "POST" target = "_blank">
            <label>Nama : </label>
            <input type = "textfield" name = "nama" autofocus required><br><br>
            <label>Alamat : </label>
            <input type = "textfield" name = "alamat"><br><br>
            <label>Jenis Kelamin : </label><br>
            <input type = "radio" name = "gender" value = "laki-laki"> male<br>
            <input type = "radio" name = "gender" value = "perempuan"> female<br><br>
            <label>Golongan Darah : </label>
            <select name = "goldar">
                <option value = "A">A</option>
                <option value = "AB">AB</option>
                <option value = "B">B</option>
                <option value = "O">O</option>
            </select><br><br>
            <label>Hobby : </label><br>
            <input type = "checkbox" name = "hobby" value = "makan">eat<br>
            <input type = "checkbox" name = "hobby" value = "nyanyi">sing<br>
            <input type = "checkbox" name = "hobby" value = "jalan-jalan">travelling<br>
            <input type = "checkbox" name = "hobby" value = "sepakbola">football<br>
            <input type = "checkbox" name = "hobby" value = "belajar">study<br><br>
            <label>Keterangan : </label><br>
            <textarea name = "Keterangan" rows ="5" cols = "5"></textarea><br>
            <input type = "submit" value = "kirim" name = "submit">
        </form>
        
    </body>
    </html>
