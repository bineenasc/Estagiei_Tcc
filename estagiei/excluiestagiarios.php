<?php session_start();
    
    if (!isset($_SESSION['logado'])) {
        header("Location: loginpage.php");
        exit();
    }

    if ($_SESSION['perfil'] <= 1){
        echo "<script>alert('Você não possui acesso à essa página!');window.location='loginpage.php'</script>";
    }
    
    require("adm/conexao.php");

    $cod = (isset($_GET['cod'])) ? $_GET['cod'] : "";


    $sql_delete = "DELETE FROM estagiario WHERE idEstagiario = '$cod'";

    print_r($sql_delete);


    if(mysqli_query($con,$sql_delete)){
        echo "<script>alert('Registro excluído com sucesso!');window.location='estagiarios_cadastrados.php'</script>";
    }else{
        echo "<script>alert('Erro ao excluir!');window.location='Index.php'</script>";
    }

    mysqli_close($con);
?>