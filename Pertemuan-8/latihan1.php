<html>
<head>
<title>koneksi database MySQL</title>
</head>
<body>
<h1>Demo koneksi database MySQL</h1>
<?php
$conn=mysqli_connect
("localhost","root","");
if ($conn) {
echo "OK";
} else {
echo "server not connected";
}
?>
</body>
</html>