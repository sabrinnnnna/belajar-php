<!DOCTYPE html>
<html>
<body>
 
 <?php
$txt = "PHP";
echo "I love $txt!";

$name = 'Linus';
function myTest() {
  $name = 'Tobias';
  echo "My name is $name.<br>";
}
myTest();
echo $name;
?> 

</body>
</html>