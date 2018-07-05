<?php
/**
 * Bruno Claudino Matias
 * arquivo auxiliar do login com o facebook.
 */
require_once "app/Http/Controllers/config.php";
try{
    $acessToken = $helper->getAccessToken();

}catch(\Facebook\Exceptions\FacebookResponseException | \Facebook\Exceptions\FacebookSDKException $e){
    echo $e;
    exit();
}
if(!$acessToken){
    return view('Auth/login');
    exit();
}
$client = $FB->getOAuth2Client();
if(!$acessToken->isLongLived())
    $acessToken = $client->getLongLivedAccessToken($acessToken);

$response = $FB->get("/me?fields=id,first_name, last_name, email, gender", $acessToken);
$userData = $response->getGraphNode()->asArray();
$_SESSION['userData'] = $userData;
$_SESSION['acess_token'] = (String) $acessToken;
return view('cadastro_de_consumidor');
exit();
