<!DOCTYPE html>
<html>
<body>

<?php  
// kita inisialisasi nilai x = 1
// lalu perulangan akan berjalan selama x kurang dari 10
// jika kondisi terpenuhi, perulangan dijalankan dan x ditambah 1 sampai perulangan berakhir
for ($x = 1; $x <= 10; $x++) {
// adapun statement yang dijalan ketika perulangan adalah yang ini:
  if ($x == 4) {
  	echo "Perulangan berakhir di urutan ke- $x";
  	break;
  }
  echo "Perulangan ke- $x<br>";
}
?>

</body>
</html>