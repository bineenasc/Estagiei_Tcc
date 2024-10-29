<?php 
    session_start();
    
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
            <h1 class='my-3'>Empresas Cadastradas</h1>
            <a href="logout.php" class="btn btn-danger">Sair</a>

            <?php 
                require("adm/conexao.php");
                $sql = "SELECT * FROM empresa ORDER BY idEmpresa DESC";
                $res = mysqli_query($con, $sql);

                $num_rows = mysqli_num_rows($res);
                if($num_rows > 0){
                    while($dado = mysqli_fetch_assoc($res)){

                        echo "<div class = 'card my-5'>   
                        <div class = 'card-body'>
                                <h3>".$dado['Nome']."</h3>  
                                <h4>".$dado['NomeResp']."</h4>
                                <p>Cidade: ".$dado['Cidade']."</p>
                                <p>Estado: ".$dado['UF']."</p> 
                                <p>CNPJ: ".$dado['CNPJ']. "</p>
                                </div>
                                <div class='card-footer'> 
                                <a class='btn btn-success' href='saiba_maisemp.php?cod=".$dado['idEmpresa']."' >Detalhar Infos</a>
                                <a class='btn btn-warning' href='alteraempresa.php?cod=".$dado['idEmpresa']."' >Editar</a>
                                <a class='btn btn-danger' href='excluiempresa.php?cod=".$dado['idEmpresa']."' >Excluir</a>
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
  