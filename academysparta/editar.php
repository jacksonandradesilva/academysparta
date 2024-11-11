<?php
require 'config.php';
$info = [];
$id = filter_input(INPUT_GET , 'id');
if($id){

    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if($sql->rowCount() > 0){

    $info= $sql->fetch(PDO :: FETCH_ASSOC);

  
} else {

    header("Location: ListaDados.php");
    exit;
}
}else{
    header("Location:ListaDados.php");
    exit;
}

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="EstiloCadastroAlunos.css">
    <link rel="shortcut icon" href="" type="image/x-icon"/>
    <title>Cadastro de Alunos</title>
</head>

<body>

    <header>ACADEMIA SPARTA</header>
   

    <nav id="fachada">
        <a  href="FichadoAluno.html">FICHA DO ALUNO</a>
        <a href="index.html">TELA INICIAL</a>
        <a href="ListaDados.php">ALUNOS CADASTRADOS</a>
    </nav>
   
<div id="cadastro">Cadastro dos Alunos</div>

  <nav>
    
</nav>


<form method="POST" action="editar_action.php">
    <input type="hidden"name = "id" value ="<?=$info['id'];?>"/>

        <fieldset>

            <legend><p>Cadastro dos Alunos</p></legend>
            <label>
              NOME: <br/>
              <input type="text" name="name"value ="<?=$info['nome'];?>"/>
            </label><br/><br/>

            <label>
              DATA NASCIMENTO: <br/>
              <input type="date" name="data_nascimento"value="<?=$info['data_nascimento'];?>"/>
            </label><br/><br/>

            <label>
              DATA CADASTRO: <br/>
              <input type="date" name="data_cadastramento"value="<?=$info['data_cadastramento'];?>"/>
            </label><br/><br/>

            <label>
              CPF: <br/>
              <input type="text" name="cpf"value ="<?=$info['cpf'];?>"/>
            </label><br/><br/>

            <label>
              E-MAIL: <br/>
              <input type="email" name="email" value="<?=$info['email'];?>"/>
            </label><br/><br/>

            <label>
              ENDEREÇO: <br/>
              <input type="text" name="endereco" value ="<?=$info['endereco'];?>"/>
            </label><br/><br/>

            <label>
              TELEFONE: <br/>
              <input type="text" name="telefone" value="<?=$info['telefone'];?>"/>
            </label><br/><br/>
            <label>
              MODALIDADE: <br/>
              <input type="text" name="modalidade" value="<?=$info['modalidade'];?>"/>
            </label><br/><br/>
        </fieldset>
   
    <fieldset>
    <button type="submit">Salvar Alteração </button>
    
  </fieldset>

</form> 
</body>
<footer>
    EQUIPE DE DESENVOLVIMENTO WEB:
    JACKSON ANDRADE / ANTHONY PETERSON
    <br>   
</footer>