<?php

require "config.php";

$stmt = $con->query("SELECT * FROM livros");
$livros = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<link rel="stylesheet" href="style.css">

<table>

<tr>
    <td>ID</td>
    <td>Autor</td>
    <td>Descrição</td>
    <td>Ano de Publicação</td>
</tr>

<?php

for ($i = 0; $i < count($livros); $i++) {

?>

<tr>
    <td><?php echo $livros[$i]["id"]; ?></td>
    <td><?php echo $livros[$i]["autoLivro"]; ?></td>
    <td><?php echo $livros[$i]["descricaoLivro"]; ?></td>
    <td><?php echo $livros[$i]["anoPublicacao"]; ?></td>
</tr>

<?php
}
?>

</table>