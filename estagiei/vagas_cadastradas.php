<?php session_start();
    
    if (!isset($_SESSION['logado'])) {
        header("Location: loginpage.php");
        exit();
    }

    if ($_SESSION['perfil'] < 1){
        echo "<script>alert('Você não possui acesso à essa página!');window.location='loginpage.php'</script>";
    }
    
require ("HeaderAdmin.php");
?>

    <div class='row'>
        <div class='col-12'>
            <div class='container'>
            <h1 class='my-3'>Vagas Cadastradas</h1>
            <a href="logout.php" class="btn btn-danger">Sair</a>

            <?php 
                require("adm/conexao.php");
                $sql = "SELECT * FROM vaga ORDER BY idVaga DESC";
                $res = mysqli_query($con, $sql);

                $num_rows = mysqli_num_rows($res);
                if($num_rows > 0){
                    while($dado = mysqli_fetch_assoc($res)){

                        echo "<div class = 'card my-5'>   
                        <div class = 'card-body'>
                                <h3>".$dado['NomeEmpresa']."</h3>  
                                <h4>".$dado['Funcao']."</h4>
                                <p>Area: ".$dado['Area']."</p>
                                <p>Remunerado(Sim/Não): ".$dado['Remunerado']."</p> 
                                </div>
                                <div class='card-footer'> 
                                <a class='btn btn-success' href='saiba_maisvaga.php?cod=".$dado['idVaga']."' >Detalhar Infos</a>
                                <a class='btn btn-warning' href='alteravaga.php?cod=".$dado['idVaga']."' >Editar</a>
                                <a class='btn btn-danger' href='excluivaga.php?cod=".$dado['idVaga']."' >Excluir</a>
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
  