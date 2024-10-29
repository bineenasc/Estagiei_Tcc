<?php

    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);

    include("adm/conexao.php");

    $idEmpresa = isset($_POST['idempresa']) ? $_POST['idempresa'] : '';
    $Nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    $NomeResp = isset($_POST['nomeresp']) ? $_POST['nomeresp'] : ''; 
    $CNPJ = isset($_POST['cnpj']) ? $_POST['cnpj'] : ''; 
    $End = isset($_POST['end']) ? $_POST['end'] : '';
    $Bairro = isset($_POST['bairro']) ? $_POST['bairro'] : '';
    $Cidade = isset($_POST['cidade']) ? $_POST['cidade'] : '';
    $UF = isset($_POST['uf']) ? $_POST['uf'] : '';
    $Tel = isset($_POST['tel']) ? $_POST['tel'] : '';
    $TelFixo = isset($_POST['telfixo']) ? $_POST['telfixo'] : '';
    $Email = isset($_POST['email']) ? $_POST['email'] : '';
    $CEP = isset($_POST['cep']) ? $_POST['cep'] : '';
    $NomeUser = isset($_POST['nomeuser']) ? $_POST['nomeuser'] : '';
    $Senha = isset($_POST['senha']) ? $_POST['senha'] : '';
    
    $sql = "INSERT INTO empresa (idempresa, nome, nomeresp, cnpj, end, bairro, cidade, uf, tel, telfixo, email, cep, nomeuser, senha) VALUES ('$idEmpresa', '$Nome', '$NomeResp', '$CNPJ', '$End', '$Bairro', '$Cidade', '$UF', '$Tel', '$TelFixo','$Email', '$CEP', '$NomeUser', '$Senha')";

    if(mysqli_query($con, $sql)){ 	//Aqui o mysqli_query está fazendo uma inserção no banco de dados
        header("location: Index.php"); 	//Caso a inserção seja feita com sucesso, a página será redirecionada ao index.html
        mysqli_close($con); 	//Fechando a conexão, é muito importante que ela seja fechada!!!!
    }
    else{
        print 'Não foi possível incluir os dados! Entre em contato com o administrador do sistema';
        mysqli_close($con);
    }

?>