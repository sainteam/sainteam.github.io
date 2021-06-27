<?php

include "databases.php";

$result = mysqli_query($link, "SELECT * FROM `product`");

while($product = mysqli_fetch_assoc($result)){
	echo $product['model'];
	echo "<br>";
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Главная страница</title>		
</head>
<body> 

	<h1>Здравствуйте, <?php echo $user; ?></h1>
	<h1>Вы подключились к БД - <?php echo $db; ?></h1>

</body>
</html>