<?php

namespace App\Classes;

class Enc{

    public function encriptar($valor){
        return bin2hex( openssl_encrypt($valor, 'aes-256-cbc', 'E858Fktq0R9Tqp1ptfR5XKVztLZSVu1y', OPENSSL_RAW_DATA,'P6ITh6CieSo5J7Z0'));

    }

    public function desencriptar($valor_encriptado){
        return openssl_decrypt( hex2bin($valor_encriptado), 'aes-256-cbc', 'E858Fktq0R9Tqp1ptfR5XKVztLZSVu1y', OPENSSL_RAW_DATA,'P6ITh6CieSo5J7Z0');
    }
}