<?php

    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);

    include("adm/conexao.php");

    $idEstagiario = isset($_POST['idestagiario']) ? $_POST['idestagiario'] : '';
    $Nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    $Sobrenome = isset($_POST['sobrenome']) ? $_POST['sobrenome'] : ''; 
    $CPF = isset($_POST['cpf']) ? $_POST['cpf'] : ''; 
    $Ende = isset($_POST['ende']) ? $_POST['ende'] : '';
    $Bairro = isset($_POST['bairro']) ? $_POST['bairro'] : '';
    $Cidade = isset($_POST['cidade']) ? $_POST['cidade'] : '';
    $UF = isset($_POST['uf']) ? $_POST['uf'] : '';
    $Tel = isset($_POST['tel']) ? $_POST['tel'] : '';
    $Email = isset($_POST['email']) ? $_POST['email'] : '';
    $Curso = isset($_POST['curso']) ? $_POST['curso'] : '';
    $Consid = isset($_POST['consid']) ? $_POST['consid'] : '';
    $NomeUser = isset($_POST['nomeuser']) ? $_POST['nomeuser'] : '';
    $Senha = isset($_POST['senha']) ? $_POST['senha'] : '';
    
    $sql = "INSERT INTO estagiario (idestagiario, nome, sobrenome, cpf, ende, bairro, cidade, uf, tel, email,  curso, consid, nomeuser, senha) VALUES ('$idEstagiario', '$Nome', '$Sobrenome', '$CPF', '$Ende', '$Bairro', '$Cidade', '$UF', '$Tel', '$Email', '$Curso', '$Consid', '$NomeUser', '$Senha')";

    if(mysqli_query($con, $sql)){ 	//Aqui o mysqli_query está fazendo uma inserção no banco de dados
        header("location: Index.php"); 	//Caso a inserção seja feita com sucesso, a página será redirecionada ao index.html
        mysqli_close($con); 	//Fechando a conexão, é muito importante que ela seja fechada!!!!
    }
    else{
        print 'Não foi possível incluir os dados! Entre em contato com o administrador do sistema';
        mysqli_close($con);
    }

?>