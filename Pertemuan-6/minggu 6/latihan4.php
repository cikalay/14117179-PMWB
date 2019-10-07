<?php
echo "Daftar Bilangan Prima dari 1 sampai 37 <br>";
for ($i = 1; $i <= 37; $i++) {
  $mod = 0;
  for ($j = 1; $j <= $i ; $j++) {
    if ($i%$j == 0) {
      $mod++;
    }
}
  if ($mod == 2) {
    echo $i; echo "<br/>";
    }
}
?>