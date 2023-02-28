<?php

function Rafly($string){
if(strrev($string)== $string){
    return 1;
}else{
    return 0;
}
}
$kata = "taat";
if(Rafly($kata)){
    echo "kata palindrom";
}else{
    echo "bukan kata palindrom";
}