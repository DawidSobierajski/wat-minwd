<?php
include "TSimplex.class.php";

$maxiterasi=100;
$type="max"; // $type="max"; or $type="min";
$precision=0.000001;
$tolerance=0.05; // 5%
$convergence=0.001;
$iscetak=true;

$assumelinearmodel=true;
$assumenonnegatif=true;
$useautomaticscaling=true;

$estimatestype="tangent"; // Tangent or Quadratic
$derivativestype="forward"; //Forward or Central
$searchtype="newton";

$leftdata=array
(
array(0.5,2,1),
array(1,2,4)
); // Persamaan disebelah kiri

$rightdata=array(24,60); //nilai sebelah kanan <- Subject to constraint

$zdata=array(6,14,13);

$r = new TSimplex($leftdata,$rightdata,$zdata,$maxiterasi,$iscetak);

// IF $iscetak= false, initial in setting.php
$jlhvariabel=$r->jumlahstatement();
$varcelltarget=$r->varvalue();
$result=$r->result();

echo "Z=".$result."<br>";
for ($i = 0; $i<=($jlhvariabel-1); $i++) {
    echo $varcelltarget[$i][0]."=".$varcelltarget[$i][1]; echo "<br>";
}

?>