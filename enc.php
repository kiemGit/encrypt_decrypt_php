<?php
$publicKey = file_get_contents('public_key.pem');
$data = "Hello, this is a secret message!";

openssl_public_encrypt($data, $encrypted, $publicKey);
$encryptedData = base64_encode($encrypted); // For easier storage/transmission
echo "Encrypted: " . $encryptedData;
