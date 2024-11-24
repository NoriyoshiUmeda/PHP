<?php
$people = array(
    "Taro" => "25歳men",
    "Jiro" => "20歳men",
    "Hanako" => "16歳women"
);

foreach ($people as $person => $age){
    print $person . "($age)" .  "<br />";
}