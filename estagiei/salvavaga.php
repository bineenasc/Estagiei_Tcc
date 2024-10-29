<?php session_start();
    
    if (!isset($_SESSION['logado'])) {
        header("Location: loginpage.php");
        exit();
    }

    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);

    include("adm/conexao.php");

    $idVaga = isset($_POST['idvaga']) ? $_POST['idvaga'] : '';
    $idEmpresa = isset($_SESSION['id']) ? $_SESSION['id'] : '';
    $NomeEmpresa = isset($_POST['nomeempresa']) ? $_POST['nomeempresa'] : '';
    $Funcao = isset($_POST['funcao']) ? $_POST['funcao'] : ''; 
    $Area = isset($_POST['area']) ? $_POST['area'] : ''; 
    $Remunerado = isset($_POST['remunerado']) ? $_POST['remunerado'] : '';
    $Valor = isset($_POST['valor']) ? $_POST['valor'] : '';
    $TempoEstudo = isset($_POST['tempoestudo']) ? $_POST['tempoestudo'] : '';
    $PeriodoTrabalho = isset($_POST['periodotrabalho']) ? $_POST['periodotrabalho'] : '';
    $Site = isset($_POST['site']) ? $_POST['site'] : '';
    
    $sql = "INSERT INTO vaga (idvaga, idempresa, nomeempresa, funcao, area, remunerado, valor, 
   tempoestudo, periodotrabalho, site) VALUES ('$idVaga', $idEmpresa, '$NomeEmpresa', '$Funcao', '$Area', '$Remunerado', 
   '$Valor', '$TempoEstudo', '$PeriodoTrabalho', '$Site')";

    if(mysqli_query($con, $sql)){ 	//Aqui o mysqli_query está fazendo uma inserção no banco de dados
        header("location: vagas_empresa.php"); 	//Caso a inserção seja feita com sucesso, a página será redirecionada ao index.html
        mysqli_close($con); 	//Fechando a conexão, é muito importante que ela seja fechada!!!!
    }
    else{
        echo "<script>alert('Erro ao incluir dados!');window.location='vagas_empresa.php'</script>";
        mysqli_close($con);
    }

?>