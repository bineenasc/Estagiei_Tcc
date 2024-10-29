<?php session_start();
    
    if (!isset($_SESSION['logado'])) {
        header("Location: loginpage.php");
        exit();
    }

    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);

    include("adm/conexao.php");

    $idVaga = isset($_POST['idvaga']) ? $_POST['idvaga'] : '';
    $idEstagiario = isset($_SESSION['id']) ? $_SESSION['id'] : '';
    
    $result = mysqli_query($con, "SELECT * FROM candidatar WHERE idestagiario = '$idEstagiario' AND idvaga = '$idVaga'");
    $row = mysqli_num_rows($result);
    if($row > 0){
        	echo "<script>alert('Ja candidatado a essa vaga!');</script>";
    }
    else{
$sql = "INSERT INTO candidatar (idvaga, idestagiario) VALUES ('$idVaga', '$idEstagiario')";


    if(mysqli_query($con, $sql)){ 	//Aqui o mysqli_query está fazendo uma inserção no banco de dados
       	echo "<script>alert('Candidatado com sucesso!');</script>";//Caso a inserção seja feita com sucesso, a página será redirecionada ao index.html
        mysqli_close($con); 	//Fechando a conexão, é muito importante que ela seja fechada!!!!
    }
    else{
        print 'Não foi possível incluir os dados! Entre em contato com o administrador do sistema';
        mysqli_close($con);
    }
    }

?>