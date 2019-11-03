<!DOCTYPE html>
<html>
<body>

<?php
function swap (&$a, &$b) {
  	$a = $a + $b;
    $b = $a - $b;
    $a = $a - $b;
}
$x = 10;
$y = 5;
echo "sebelum ditukar <br> X: $x <br> Y: $y <br>";
swap ($x, $y);
echo "setelah ditukar <br> X: $x <br> Y: $y <br>";
?>  

</body>
</html>