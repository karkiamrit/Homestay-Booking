<?php

function RandStr(){
    $reg_id = uniqid();
    return regid();
}
//Make the REG_ID
echo "REG_ID= ". RandStr();
?>