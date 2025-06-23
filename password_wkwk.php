<?php
$passwordAsli = 'admin123';

$hash = password_hash($passwordAsli, PASSWORD_BCRYPT);

echo $hash;
?>