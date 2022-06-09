<?php
include 'cart.php';
include 'baza.php';

$result = baza();
var_dump($result);

/*$file = fopen("p","r")or die("error: dead");
while (!feof($file) ) {
    $tablica[] = fgetcsv($file);
}
for($i = 0; $i < count($tablica); $i++) {
    if (isset($_GET['add'.$i])){
        dodaj($i);
    }
}
for($i = 0; $i < count($tablica); $i++) {
    if (isset($_GET['del'.$i])){
        usun($i);
    }
}
if(isset($_GET['clear'])){
    wyczysc();
}*/

?>
    <!DOCTYPE html>
    <html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0"> <meta http-equiv = "X-UA-Compatible" content = "ie=edge">
        <title>kosz</title>
    </head>
    <body>
    <table>
        <form method = "get">
            <?php
            $i = 0;
            foreach($result as $a){
                echo '<tr>';
                echo "<td>".$a[0]."</td><td>".$a[1]."</td><td>".$a[2]."zł </td>";
                echo '<td><input type = "submit" name = "add'.$i.'" value = "do koszyka"><br></td>'; $i++;
                echo '</tr>';
            }
            ?>
        </form>
    </table>
    <h1>koszyk</h1>
    <?php
    if(!empty($_SESSION['cart'])){
        echo '<table>
    <form method = "get">';
        $i = 0;
        foreach($_SESSION['cart'] as $a){
            if($a[1] > 0){
                echo '<tr>';
                echo "<td>".$a[0]."</td><td>".",".$a[1]."</td><td>".",".$a[2]."zł </td>";
                echo '<td><input type = "submit" name = "del'.$i.'" value = "usuń"><br></td>'; $i++;
                echo '</tr>';
            }
            else{
                echo '<tr hidden>';
                echo "<td>".$a[0]."</td><td>".",".$a[1]."</td><td>".",".$a[2]."zł </td>";
                echo '<td><input type = "submit" name = "del'.$i.'" value = "usuń"><br></td>'; $i++;
                echo '</tr>';
            }
        }
        echo '<tr><td><input type = "submit" name = "clear" value = "wyczyść"></td></tr>
    </form>
    </table>';
        echo "Total price: ".$_SESSION['totalPrice'];
    }
    ?>
    </body>
    </html>








<!--
/*
$dbuser = 's24545';
$dbpass = 'Nat.Lacz';
$db = new PDO("mysql:host=localhost;dbname=s24545", $dbuser,$dbpass) or die ("error");
$db -> setAtrribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db -> exec("SETNAMES 'utf8'");
?>

/*$stmt = $db ->prepare("SELECT * FROM products");
$stmt -> execute();
while($row = $stmt -> fetch(PDO::FETCH_ASSOC)){
    echo "<div>";
    echo "<h2>".$row['name']."</h2>";
    echo "<h3>Cena netto: ".$row['net_price']."</h3>";
    echo $row['description'];
    echo "</div>";}

echo "<div id='menu'>";

$max=0;
foreach ($db->query(  as $row){
    $max=$row['max(id)'];
}

// produkty i kategorie sklepu, bazy danych */
//function showMenu(){
//    global $db;
//    $stmt = $db->prepare("SELECT * FROM categories");
//    $stmt -> execute();
//    echo "<a href='index.php'>Strona główna</a><br>";
//    while($row = $stmt -> fetch(PDO:FETCH_ASSOC)){
//        $name=$row['name']"<br>";
//        $id=$row['id'];
//       echo <a href='index.php?cat_id=$id'>$name</a>"<br>";
//      echo "</div>";}
}



//echo "<div id='menu'>";
//showMenu();
//echo "</div";

//echo "<div id='products'>";

-->
