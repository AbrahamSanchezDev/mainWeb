<?php

function encriptarStringConHash($inputString){
    return hash('sha256',$inputString);
}
function encriptarStringConM5($inputString){
    return md5($inputString);
}
?>