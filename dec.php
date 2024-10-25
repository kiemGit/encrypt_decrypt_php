<?php
// The encrypted data (as base64 string for easy demonstration)
$encryptedData = '...'; // Assume this is obtained after encryption

// Load private key from file
$privateKey = file_get_contents('private_key.pem');

// Decode the base64-encoded encrypted data
$encrypted = base64_decode($encryptedData);

// Decrypt the data using the private key
if (openssl_private_decrypt($encrypted, $decrypted, $privateKey, OPENSSL_PKCS1_PADDING)) {
    echo "Decrypted message: " . $decrypted;
} else {
    echo "Decryption failed!";
}
