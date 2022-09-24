<?php

function RandStr($length, $encrypt = 10){
    $reg_id = '';
    for($i=0;$i<$encrypt;$i++){
        $reg_id = base64_encode(md5(microtime(true)));}
    return substr($reg_id, 0, $length);
}
//Make the REG_ID
echo "REG_ID= ". RandStr(10);
?>