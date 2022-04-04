<?php
class decode {
    public static function decode_user(){
        $jwt = parse_ini_file($_SERVER['DOCUMENT_ROOT'] . "/Concesionary_PHP_OO_MVC/jwt.ini");
        $token = $_GET['username'];
        $secret = $jwt['secret'];

        $JWT = new JWT;
        $json = $JWT->decode($token, $secret);
        $json = json_decode($json, TRUE);
        return $json;
    }
}