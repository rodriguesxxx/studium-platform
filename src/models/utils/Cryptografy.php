<?php

namespace src\models\utils;

class Cryptografy{
    private static $KEY = 2006;

    
    public static function encrypted($value) {
        $iv = random_bytes(16); // Gerar um vetor de inicialização aleatório
        $encrypted = openssl_encrypt($value, 'AES-256-CBC', Cryptografy::$KEY , 0, $iv);
        $result = base64_encode($iv . $encrypted);
    
        // Remover todos os caracteres especiais, mantendo apenas letras e números
        $result = preg_replace('/[^a-zA-Z0-9]/', '', $result);
    
        return $result;
    }

    public static function decrypted($encryptedValue) {
        // Adiciona os caracteres especias novamente
        $paddedEncryptedValue = str_pad($encryptedValue, strlen($encryptedValue) + (4 - strlen($encryptedValue) % 4) % 4, '=', STR_PAD_RIGHT);
        $paddedEncryptedValue = wordwrap($paddedEncryptedValue, 4, '/', true);
    
        // Remover os caracteres especiais adicionados anteriormente
        $encryptedValue = str_replace(['/', '='], '', $paddedEncryptedValue);
    
        $data = base64_decode($encryptedValue);
        $iv = substr($data, 0, 16);
        $encrypted = substr($data, 16);
    
        $decrypted = openssl_decrypt($encrypted, 'AES-256-CBC', Cryptografy::$KEY, 0, $iv);
    
        return $decrypted;
    }
    

}

