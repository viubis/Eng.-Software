<?php

require 'VerificadorCartao.php';
Use verificador\VerificadorCartao;

$host = "127.0.0.1";
$port = 20205;
set_time_limit(0);

$sock = socket_create(AF_INET, SOCK_STREAM, 0);
socket_bind($sock, $host, $port);
socket_listen($sock);
echo "Listening for connections";

do{
    $accept = socket_accept($sock);
    echo "\n\n\nCliente conectado";
    $msg = socket_read($accept, 1024);
    $infos = explode(";", $msg);
    $verif = new VerificadorCartao();
    $resposta = $verif -> verificacao($infos[0],$infos[1],$infos[2],$infos[3]);

    $msg = trim($msg);
    echo "Client says: \t".$msg."\n\n";

    socket_write($accept, $resposta, strlen($resposta));
}while(true);

socket_close($accept);
socket_close($sock);

