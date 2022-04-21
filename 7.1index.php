<?php

$imgDir="img";
$dir = scandir($imgDir);
array_shift($dir);
array_shift($dir);
$count = count($dir);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>galeria</title>
</head>
<body>

<?php

$id = 0;
foreach($dir as $a){
    echo "<a href='7.2index.php?id=".$id."'>";
    echo "<img src=\"$imgDir/$a\" alt=\"$a\" height='60px' width='60px'>";
    echo "</a>";
    $id++;
}
?>
</body>
</html>