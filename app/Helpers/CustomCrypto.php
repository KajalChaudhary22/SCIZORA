<?php

if (!function_exists('custom_encrypt')) {
    function custom_encrypt($string)
    {
        $key = config('app.key'); // Use your APP_KEY for security
        $iv = substr(hash('sha256', $key), 0, 16); // Initialization vector
        $encrypted = openssl_encrypt($string, 'AES-256-CBC', $key, 0, $iv);
        return str_replace('/', '_', base64_encode($encrypted)); // URL safe
    }
}

if (!function_exists('custom_decrypt')) {
    function custom_decrypt($string)
    {
        $key = config('app.key');
        $iv = substr(hash('sha256', $key), 0, 16);
        $decoded = base64_decode(str_replace('_', '/', $string));
        return openssl_decrypt($decoded, 'AES-256-CBC', $key, 0, $iv);
    }
}
