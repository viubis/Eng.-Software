<?php
/**
 * Created by PhpStorm.
 * User: victo
 * Date: 06/07/2018
 * Time: 23:34
 */

namespace mine_apple;


class VerificadorCartao{

    public function verificarCartao($infos){
        $host = "127.0.0.1";
        $port = 20205;
        $sock = socket_create(AF_INET, SOCK_STREAM, 0);
        socket_connect($sock, $host, $port);

        socket_write($sock, $infos, strlen($infos));

        $reply = socket_read($sock, 1024);
        $reply = trim($reply);
        return $reply;
    }

}
