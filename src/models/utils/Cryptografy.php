<?php

namespace src\models\utils;

class Cryptografy{
    private static $KEY = 2006;

    
    public static function encrypted($value){
        $iv = random_bytes(16); // Gerar um vetor de inicialização aleatório
        $encrypted = openssl_encrypt($value, 'AES-256-CBC', Cryptografy::$KEY , 0, $iv);
        return base64_encode($iv . $encrypted);
    }

    public static function descrypted($value){
        $data = base64_decode($value);
        $iv = substr($data, 0, 16); // Extrair o vetor de inicialização
        $data = substr($data, 16); // Extrair os dados criptografados
        return openssl_decrypt($data, 'AES-256-CBC', Cryptografy::$KEY , 0, $iv);
    }

}

