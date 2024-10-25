# encrypt_decrypt_php
encrypt decrypt php data

# generate key
    openssl genrsa -out private_key.pem 2048
    openssl rsa -in private_key.pem -pubout -out public_key.pem

# create full access private_key
    chmod 777 private_key.pem
