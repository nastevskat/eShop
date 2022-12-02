<?php
define("DB_HOST" , "localhost");
define("DB_NAME" ,"eshop_db");
define("DB_CHARSET", "utf8"); 
define("DB_USER", "eshop_user");
define("DB_PASSWORD", "ZfTD*QlbO8.4KPV." );
			

$pdo = new PDO(
"mysql:host=".DB_HOST.";charset=".DB_CHARSET.";dbname=".DB_NAME,
DB_USER, DB_PASSWORD, [
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]
);

$stmt = $pdo->prepare("SELECT * FROM `product` WHERE `title` LIKE ? ");
$stmt->execute([
"%".$_POST['search']."%"]);
$results = $stmt->fetchAll();

?>

