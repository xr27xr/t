<?php
//if the ip has changed, bring down the network interface and bring it up with the new IP
if($ipConf != $ip) {
    $ifdownSuccess = exec("sudo -n ifconfig eth0 down", $downOutput, $downRetvar);
    $ifupSuccess = exec("sudo -n ifconfig eth0 up ".$ip, $upOutput, $upRetvar);
    //TODO: check for ifupSucess and revert to old ip if the command failed
    var_dump($downOutput);
    var_dump($downRetvar);
    var_dump($ifdownSuccess);
    var_dump($upOutput);
    var_dump($upRetvar);
    var_dump($ifupSuccess);
}