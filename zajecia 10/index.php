<?php
$dbuser = 's24545';
$dbpass = 'Nat.Lacz';
$db = new PDO("mysql:host=localhost;dbname=s24545", $dbuser, $dbpass) or die ("error");
if(isset($_GET['mainId'])){
    $mainId=$_GET['mainId'];
}
else{
    $mainId=1;}
if($mainId>1){
    $prev=$mainId-1;}
else{
    $prev = 1;}
$idMax = $mainId*5;
$idMin = $idMax-4;
$next=$mainId+1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Auta</title>
    <style>
        table{
            border-collapse: collapse;
        }
        td{
            border: 2px solid black;
        }
    </style>
</head>
<body>
<?php
$sql = 'SELECT id,make,model FROM cars where id<='.$idMax. " and id>=".$idMin;
echo '<table>';
echo '<tr>';
echo "<td>ID</td>";
echo '<td>MARKA</td>';
echo '<td>MODEL</td>';
echo '<td>CZYTAJ DALEJ</td>';
echo '</tr>';
foreach ($db->query($sql) as $row) {
    echo '<tr>';
    echo "<td>".$row['id'] . "</td>";
    echo "<td>".$row['make'] . "</td>";
    echo "<td>".$row['model'] . "</td>";
    echo '<td><a href="carInfo.php?id=' . $row['id'] . '">Czytaj dalej</a> <br></td>';
    echo '</tr>';
}
echo '</table>';
echo '<button><a href="index.php?mainId='.$prev.'">Poprzednie</a></button>';
echo '<button><a href="index.php?mainId='.$next.'">Następne</a></button>';
?>
</body>
</html>