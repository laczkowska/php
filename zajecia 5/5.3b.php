<?php

if(isset($_POST['add'])){

    $file = fopen("5.3d","r")or die("lol");
    while (!feof($file) ) {
        $tablica[] = fgetcsv($file);
    }
    fclose($file);
    $index = count($tablica);
    $dataForAdd=$_POST['nameAdd'].",".$index.",".$_POST['insidesAdd'];

    $file = fopen("5.3d", 'a+')or die ("file not here");
    fwrite($file,"\n".$dataForAdd);
    fclose($file);
}
if(isset($_POST['del'])){
    $index=$_POST['lineRemove']-1;
    $i = 0;
    $file = fopen("5.3d","r")or die("lol");
    while (!feof($file) ) {
        $tablica[] = fgetcsv($file);
    }
    fclose($file);

    unset($tablica[$index]);
    $write = fopen("5.3d", "w") or die("can't open the file");
    foreach($tablica as $a) {
        if($i == 0) {
            fwrite($write, $a[0].",".$i.",".$a[2]);
        }
        else {
            fwrite($write, "\n".$a[0].",".$i.",".$a[2]);
        }
        $i++;

    }
    fclose($write);
}

if(isset($_POST['edit'])){
    $index = $_POST['lineToEdit']-1;

    $file = fopen("5.3d","r")or die("lol");
    while (!feof($file) ) {
        $tablica[] = fgetcsv($file);
    }
    fclose($file);

    if($_POST['namEdit'] == ""){
        $textToChange=$tablica[$index][0] . "," . $index . ",";
        if($_POST['insidesEdit'] == ""){
            $textToChange=$textToChange.$tablica[$index][2];
        }
        else{
            $textToChange=$textToChange.$_POST['insidesEdit'];
        }
    }
    elseif($_POST['insidesEdit'] == ""){
        $textToChange=$_POST['namEdit'] . ",". $index . ",". $tablica[$index][2];
    }
    else{
        $textToChange=$_POST['namEdit'] . "," . $index . "," . $_POST['insidesEdit'];
    }

    $i = 0;
    $array = array();
    $read = fopen("5.3d", "r") or die("can't open the file");
    while(!feof($read)) {
        $array[$i] = fgets($read);
        ++$i;
    }
    fclose($read);

    $array[$index]=$textToChange;

    $write = fopen("5.3d", "w") or die("can't open the file");
    foreach($array as $a) {
        fwrite($write,$a);
    }
    fclose($write);
}
echo "D O N E";
header("Refresh:1,url=edit.php");