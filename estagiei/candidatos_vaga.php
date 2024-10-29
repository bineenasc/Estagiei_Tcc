<?php session_start();
    
    if (!isset($_SESSION['logado'])) {
        header("Location: loginpage.php");
        exit();
    }

    if ($_SESSION['perfil'] < 1){
        echo "<script>alert('Você não possui acesso à essa página!');window.location='loginpage.php'</script>";
    }
    
require ("HeaderEmpresa.php");
?>

    <div class='row'>
        <div class='col-12'>
            <div class='container'>
            <h1 class='my-3'>Candidatos</h1>
            <a class='btn btn-primary' href='vagas_empresa.php?cod=".$dado['idVaga']."' >Voltar</a>

            <?php 
                require("adm/conexao.php");
                $cod = $_GET['cod'];
                $sql = "SELECT * FROM candidatar INNER JOIN estagiario ON candidatar.idEstagiario = estagiario.idEstagiario AND candidatar.idVaga = '$cod' ORDER BY idCandidatar";
                $res = mysqli_query($con, $sql);

                $num_rows = mysqli_num_rows($res);
                if($num_rows > 0){
                    while($dado = mysqli_fetch_assoc($res)){

                        echo "<div class = 'card my-5'>   
                        <div class = 'card-body'>
                                <h3>".$dado['Nome']."</h3>  
                                <h4>Email ".$dado['Email']."</h4>
                                <p>Data e Hora: ".$dado['Registro']."</p> 
                                </div>                              
                                </div>";
                    }
                }else{
                    echo "<tr class='text-center'><td colspan='3'> Não há registros cadastrados! </td></tr>";
                }
                //Fechando a tabela HTML
                echo "</tbody></table>";
                
            ?>
            </div>
        </div>
    </div>

  <?php
require ("Footer.php");
  ?>
  