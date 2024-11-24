<?php
function sankaku($teihen, $takasa)
{
     $trianglrmenseki = $teihen * $takasa /2;
     return $trianglrmenseki;
}
$triangle = sankaku(4,3);
echo $triangle . "<br />";

function sikaku($tei, $taka)
{
     $sikaku = $tei * $taka;
     return $sikaku;
}
$kekka = sikaku(5,5);
echo $kekka . "<br />";

function daikei($zyoutei, $katei ,$takasa)
{
     $daikei = ($zyoutei + $katei) * $takasa / 2;
     return $daikei;
}
$result = daikei(5,5,5);
echo $result;