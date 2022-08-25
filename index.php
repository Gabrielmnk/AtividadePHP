<?php
require($_SERVER['DOCUMENT_ROOT'] . '/_config.php');

$sql = "SELECT * FROM funcionarios WHERE func_status = 'on'";

$res = $conn->query($sql);

$table = "";

if ($res->num_rows > 0) :
    $numrows = "Total de " . $res->num_rows . " Funcionários";
    $table = <<<HTML

<table>
    <tr>
        <td>ID</td>
        <td>Nome</td>
        <td>Email</td>
        <td>Opções</td>
    </tr>
HTML;

    while ($func = $res->fetch_assoc()) :
        $table .= <<<HTML
    <tr>
        <td>$func[func_id]</td>
        <td>$func[func_name]</td>
        <td>$func[func_email]</td>
        <td><a href="update.php?id=$func[func_id]">Editar</a> <a href="delete.php?id=$func[func_id]">Apagar</a></td>
    </tr>
HTML;

    endwhile;

    $table .= "</table>";

else :
    $numrows = "Nenhum funcionário Cadastrado";
endif;


require($_SERVER['DOCUMENT_ROOT'] . '/_header.php');

echo <<<HTML
<br>
{$table}
<br>
<div class="numrows">{$numrows}</div>

HTML;


require($_SERVER['DOCUMENT_ROOT'] . './_footer.php');
