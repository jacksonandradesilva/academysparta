<?php

require 'Config.php';

$lista= [];
$sql =$pdo->query("SELECT * FROM usuarios"); // consulta dos dados cadastrados
if($sql->rowCount() > 0) {
    $lista = $sql->fetchall(PDO::FETCH_ASSOC);
}

?> 

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="EstiloFichadoAlunos.css">
    <title>ALUNOS CADASTRADOS</title>
    <body>
    <header>ACADEMIA SPARTA</header>
  
    <nav id="fachada">
        <a  href="CadastrodeAlunos.html">CADASTRO DE ALUNOS</a>
        <a href="index.html">TELA INICIAL</a>
    </nav>


<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>CPF</th>
        <th>EMAIL</th>
        <th>TELEFONE</th>
        <th>MODALIDADE</th>
        <th>ENDEREÇO</th>
        <th>AÇÕES</th>

    </tr>
<?php foreach($lista as $usuarios):?>
    <tr>
        <td><?=$usuarios['id'];?></td> 
        <td><?=$usuarios['nome'];?></td>
        <td><?=$usuarios['cpf'];?></td>
        <td><?=$usuarios['email'];?></td>
        <td><?=$usuarios['telefone'];?></td>
        <td><?=$usuarios['modalidade'];?></td>
        <td><?=$usuarios['endereco'];?></td>
        <td>
            <a href="Editar.php?id=<?=$usuarios['id'];?>"onclick="return confirm ('Deseja Editar Cadastro?')">[Editar]</a>
            <a href="Excluir.php?id=<?=$usuarios['id'];?>"onclick="return confirm('Tem Certeza que deseja Excluir?')">[Excluir]</a>
        </td>
    </tr>


<?php endforeach;?>

</table>
</body>
<footer>
    Criado por:
    EQUIPE DE DESENVOLVIMENTO WEB
    JACKSON ANDRADE / ANTHONY PETERSON
</footer>

</html>
