<link rel="stylesheet" type="text/css" htref="styles.css">

<?php
require('header.php');

$dbuser = 's24545';
$dbpass = 'Nat.Lacz';
$db = new PDO("mysql:host=localhost;dbname=s24545", $dbuser,$dbpass) or die ("error");
$db -> setAtrribute(PDO:ATTR_ERRMODE, PDO:ERRMODE_EXCEPTION);
$db -> exec("SETNAMES 'utf8'");
?>
<div id="content">
<?php
$stmt = $db ->prepare("SELECT * FROM products");
$stmt -> execute();
while($row = $stmt -> fetch(PDO:FETCH_ASSOC)){
    echo "<div>";
    echo "<h2>".$row['name']."</h2>";
    echo "<h3>Cena netto: ".$row['net_price']."</h3>";
    echo $row['description'];
    echo "</div>";}

echo "<div id='menu'>";

$max=0;
foreach ($db->query(/*cos tu wpisz*/  as $row){
    $max=$row['max(id)'];
}

/* produkty i kategorie sklepu, bazy danych */

funtion showCategories($category_id=null){
    global $pdo;
    if($category_id){
        $stmt = $db ->prepare("SELECT * FROM products WHERE category_id=cid");
        $stmt -> bindValue(':cid', $category_id, PDO::PARAM_INT);
        $stmt -> execute();
    }else{
        $stmt = $db ->prepare("SELECT * FROM products");
        $stmt -> execute();}

    while($row = $stmt -> fetch(PDO:FETCH_ASSOC)){
    echo "<div>";
    echo "<h2>";
    // zdjecie



    echo "</h2>";


    echo "<h2>".$row['name']."</h2>";

    echo "<h3>Cena netto: ".$row['net_price']."</h3>";
    $fileName="images/".$row['index'].".jpg";
    if(file_exists($fileName)){
         echo "<img src=$fileName>";}
         echo $row['description'];
         echo "</div>";
    }
}

?>
$_GET['cat_id']
<div id="content";
<?php
if (isset($_GET['cat_id'])){
    $category_id=$_GET['cat_id']
    }else{
        $category_id=null;
    } showCategories($category_id);

require('footer.php');
?>

