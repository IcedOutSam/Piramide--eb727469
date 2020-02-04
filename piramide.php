<?php
echo "Kies een cijfer tussen 0 en 209" . PHP_EOL;
$kech = readline();
if ($kech > 209 && $kech <= 0){
  exit;
}
for ($i = 0; $i <= $kech; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo "*";
    }
    echo PHP_EOL;
}
?>
