<?php
$a="dJ6NnQjL3n3LSyGVexHycA==";
include('dec.php');
include('encryptPII.php');
echo 'decrypted value'.decrypt_data($a);

$b="abc";
echo 'encrypted value'.encrypt_data($b);
?>