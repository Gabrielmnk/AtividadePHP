<?php
require($_SERVER['DOCUMENT_ROOT'] . '/_config.php');

$id = $_GET['id'];

if (!empty($_GET)) :

    $sql = "UPDATE funcionarios SET func_status = 'delete' WHERE func_id = {$id}";

    $conn->query($sql);
    header('location: /');

endif;
