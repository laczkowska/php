<?php
include 'ice.php';
include 'dragon.php';
include 'walka.php';
$p1 = new ice('Cloyster','ice',100);
$p2 = new dragon('Exeguttor','dragon',180);
$walka = new walka($p1, $p2);
$walka -> go();