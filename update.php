<?php
require($_SERVER['DOCUMENT_ROOT'] . '/_config.php');

$sql = "SELECT * FROM funcionarios WHERE func_id = '$_GET[id]'";

$res = $conn->query($sql);



$func = $res->fetch_assoc();

$form = <<<HTML

<form action="saveupdate.php" method="post">

<label for="name">Nome</label>
<input type="text" name="name" value="$func[func_name]" required>

<label for="Email">Email</label>
<input type="email" name="email" value="$func[func_email]" required>

<label for="Email">Senha</label>
<input type="password" name="password">

<input type="hidden" name="id" value="$func[func_id]">
<input type="submit" value="Editar">
<br>
<button onclick="location.href='/'" type="button">Voltar</button>


</form>


HTML;

require($_SERVER['DOCUMENT_ROOT'] . '/_header.php');

echo <<<HTML

<div class="form">$form</div>

HTML;

require($_SERVER['DOCUMENT_ROOT'] . './_footer.php');
