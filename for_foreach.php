<!DOCTYPE html>
<html>
<body>

<?php  
$colors = array("red", "green", "blue", "yellow"); 

foreach ($colors as $x) {
  echo "$x <br>";
}

for ($x = 0; $x <= count($colors); $x++) {
  echo "The elemen is: $colors[$x] <br>";
}
?>  

</body>
</html>