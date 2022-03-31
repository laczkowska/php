<?php

$search = array("rosołek", "pomidorowa", "pierogi", "pizza");

function r($search){
    echo str_replace($search,"*","lubie rosołek i schbowe");
}
r($search);
