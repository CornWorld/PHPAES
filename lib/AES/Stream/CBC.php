<?php

namespace AES\Stream;

use AES\Block\Cipher;

class CBC extends Mode
{
    function encrypt(Cipher $cipher, $plaintext, $iv)
    {
        if (!is_string($plaintext) || ($messageLen = strlen($plaintext)) % 16 !== 0) {
            throw new \InvalidArgumentException('Plaintext length must be a multiple of 16 bytes');
        }

        $out = '';
        $offset = 0;
        while ($offset < $messageLen) {
            $out .= $iv = $cipher->encrypt(substr($plaintext, $offset, 16) ^ $iv);
            $offset += 16;
        }

        return $out;
    }

    function decrypt(Cipher $cipher, $ciphertext, $iv)
    {
        if (!is_string($ciphertext) || ($messageLen = strlen($ciphertext)) % 16 !== 0) {
            throw new \InvalidArgumentException('Ciphertext length must be a multiple of 16 bytes');
        }

        $out = '';
        $offset = 0;
        while ($offset < $messageLen) {
            $out .= $cipher->decrypt($block = substr($ciphertext, $offset, 16)) ^ $iv;
            $iv = $block;
            $offset += 16;
        }

        return $out;
    }
} 