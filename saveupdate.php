<?php
require($_SERVER['DOCUMENT_ROOT'] . '/_config.php');


$sql = "UPDATE funcionarios SET func_name = '$_POST[name]', func_email = '$_POST[email]',
func_password = SHA1('$_POST[password]') WHERE func_id = '$_POST[id]'";

$conn->query($sql);

header('location: /');
