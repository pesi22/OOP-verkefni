<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>OOP in PHP</title>

<?php include("class_lib.php"); ?>

</head>

<body>

<?php 

$tegund = new animal("spendýr");


echo "Þetta eru " . $tegund->get_name();

$hundur = new dog("Voffi");

echo "<br> " . $hundur->get_name();

$fish = new fish("Fiskur");

echo " <br>" . $fish->get_name();


?>


</body>
</html>
