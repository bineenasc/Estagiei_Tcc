<?php session_start();
    
    if (!isset($_SESSION['logado'])) {
        header("Location: loginpage.php");
        exit();
    }

    if ($_SESSION['perfil'] <= 1){
        echo "<script>alert('Você não possui acesso à essa página!');window.location='loginpage.php'</script>";
    }
    
require ("HeaderAdmin.php");
?>

    <div class='row'>
        <div class='col-12'>
            <div class='container'>
            <h1 class='my-3'>Vagas Cadastradas (Detalhamento)</h1>

            <?php 
                require("adm/conexao.php");
                $cod = (isset($_GET['cod'])) ? $_GET['cod'] : "null";
                $sql = "SELECT * FROM vaga WHERE idVaga = '$cod'";
                $res = mysqli_query($con, $sql);
                $num_rows = mysqli_num_rows($res);
                if($num_rows > 0){
                    while($dado = mysqli_fetch_assoc($res)){

                        echo "<div class = 'card my-5'>   
                        <div class = 'card-body'>
                                <h3>".$dado['NomeEmpresa']."</h3>  
                                <h4>".$dado['Funcao']."</h4>
                                <p> ID: ".$dado['idVaga']."</p>
                                <p>Area: ".$dado['Area']."</p>
                                <p>Remunerado(Sim/Não): ".$dado['Remunerado']."</p>
                                <p>Valor da Remuneração: ".$dado['Valor']."</p>
                                <p>Tempo de Estudo: ".$dado['TempoEstudo']."</p>
                                <p>Período: ".$dado['PeriodoTrabalho']."</p> 
                                <a class='btn btn-info' target='_blank' href='".$dado['Site']."' >Site da Empresa</a>
                                </div>
                                <div class='card-footer'>
                                <a class='btn btn-primary' href='vagas_cadastradas.php?cod=".$dado['idVaga']."' >Voltar</a>
                                <a class='btn btn-outline-dark' href='candidatos_vagaadm.php?cod=".$dado['idVaga']."' >Candidatos</a>
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
require("Footer.php");
  ?>