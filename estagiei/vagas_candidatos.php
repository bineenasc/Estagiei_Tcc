<?php session_start();
    
    if (!isset($_SESSION['logado'])) {
        header("Location: loginpage.php");
        exit();
    }
    
require ("HeaderUser.php");
?>

    <div class='row'>
        <div class='col-12'>
            <div class='container'>
            <h1 class='my-3'>Minhas Candidaturas</h1>
            <a class='btn btn-primary' href='IndexUser.php?cod=".$dado['idVaga']."' >Voltar</a>

            <?php 
                require("adm/conexao.php");
                $idestagiario = $_SESSION['id'];
                $sql = "SELECT * FROM candidatar INNER JOIN vaga ON candidatar.idVaga = vaga.idVaga AND candidatar.idEstagiario = $idestagiario ORDER BY idCandidatar DESC";
                $res = mysqli_query($con, $sql);

                $num_rows = mysqli_num_rows($res);
                if($num_rows > 0){
                    while($dado = mysqli_fetch_assoc($res)){

                        echo "<div class = 'card my-5'>   
                        <div class = 'card-body'>
                                <h3>".$dado['NomeEmpresa']."</h3>  
                                <h4>Função: ".$dado['Funcao']."</h4>
                                <p>Data e Hora: ".$dado['Registro']."</p> 
                                <a class='btn btn-info' target='_blank' href='".$dado['Site']."' >Conhecer Empresa</a>
                                </div>
                                <div class='card-footer'> 
                                <a class='btn btn-danger' href='excluicandidatura.php?cod=".$dado['idCandidatar']."' >Remover Candidatura</a>

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
  