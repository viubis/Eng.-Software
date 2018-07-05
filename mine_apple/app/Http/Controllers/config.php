<?php
/**
 * Bruno Claudino Matias.
 * arquivo auxiliar do login com o facebook
 */
session_start();
require_once "../../../Facebook/autoload.php";
try{
    $FB = new \Facebook\Facebook([
        'app_id' => '1721177701304468',
        'app_secret' => '70931a355f36e1d4851155fa813f0555',
        'default_graph_version' => 'v2.10'
    ]);

    $helper = $FB->getRedirectLoginHelper();
}catch(Exception $e){
    echo $e;
}

