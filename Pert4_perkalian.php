<!DOCTYPE html>
<html>

<body>

  <h1>Tugas Pertemuan 4 E dan F</h1>

  <?php
  echo "Dari latihan diatas apa perbedaan perintah break dan continue, 
  continue bertugas melalukan perulangan sebanyak apa data yang akan diulang sedangkan break,
  bertugas menghentikan perulangan jika data yg terakhir continue lakukan memiliki nilai berhenti.";
  ?>
  <br /><br />
  <?php
  $bil1 = 12;
  for ($b = 15; $b <= 45; $b+=2) {
    $total = $bil1 * $b;
    echo "<p> $bil1 x $b = $total";
  }
  ?>

</body>

</html>