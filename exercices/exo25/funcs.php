<?php

function afficherTableau(array $array){
    $str = "";
    for ($i=0; $i < count($array); $i++) { 
        $str.= $array[$i];
        if($i!= count($array)-1){
            $str.="-";
        }
    }
    echo $str;
}

function calculerMoyenne(array $array){
    return array_sum($array) / count($array);
}

function estTableauPair(array $array){
    $estPair = true;
    foreach($array as $val){
        if($val%2==1)$estPair = false;
    }
    return $estPair;
}

?>