<?php session_start();
    
    if (!isset($_SESSION['logado'])) {
        header("Location: loginpage.php");
        exit();
    }
    
    require("adm/conexao.php");

    $cod = (isset($_GET['cod'])) ? $_GET['cod'] : "";


    $sql_delete = "DELETE FROM candidatar WHERE idCandidatar = '$cod'";

    print_r($sql_delete);


    if(mysqli_query($con,$sql_delete)){
        echo "<script>alert('Registro excluído com sucesso!');window.location='vagas_candidatos.php'</script>";
    }else{
        echo "<script>alert('Erro ao excluir!');window.location='IndexUser.php'</script>";
    }

    mysqli_close($con);
?>