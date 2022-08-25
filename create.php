<?php
require($_SERVER['DOCUMENT_ROOT'] . '/_config.php');



if ($_SERVER['REQUEST_METHOD'] == 'POST') :

    $sql = "INSERT INTO funcionarios (func_name,func_email,func_password) VALUES ('$_POST[name]','$_POST[email]', SHA1('$_POST[password]'))";

    $res = $conn->query($sql);

    header('location:/');
endif;


$form = <<<HTML

<form action="create.php" method="post">

<label for="name">Nome</label>
<input type="text" name="name" required >
<label for="email">Email</label>
<input type="email" name="email" required>
<label for="password">Senha</label>
<input type="password" name="password">

<input type="submit" value="Cadastrar">
<br>
<button onclick="location.href='/'" type="button">Voltar</button>

</form>


HTML;


require($_SERVER['DOCUMENT_ROOT'] . '/_header.php');

echo $form;

require($_SERVER['DOCUMENT_ROOT'] . '/_footer.php');
