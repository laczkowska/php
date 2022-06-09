<link rel="stylesheet" type="text/css" htref="styles.css">
<?php
$db = new PDO("mysql:host=localhost;dbname=s24545", $dbuser,$dbpass) or die ("error");
$db -> setAtrribute(PDO:ATTR_ERRMODE, PDO:ERRMODE_EXCEPTION);
$db -> exec("SETNAMES 'utf8'");

function showMenu(){
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM categories");
    $stmt -> execute();
    echo "<a href='index.php'>Strona główna</a><br>";
    while($row = $stmt -> fetch(PDO:FETCH_ASSOC)){
        $name=$row['name']"<br>";
        $id=$row['id'];
        echo <a href='index.php?cat_id=$id'>$name</a>"<br>";
        echo "</div>";}
}
?>
<div id="content">
<?php
echo "<div id='menu'>";
showMenu();
echo "</div";

echo "<div id='products'>";