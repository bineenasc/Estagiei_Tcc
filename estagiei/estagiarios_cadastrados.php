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
            <h1 class='my-3'>Estagiarios Cadastrados</h1>
            <a href="logout.php" class="btn btn-danger">Sair</a>

            <?php 
                require("adm/conexao.php");
                $sql = "SELECT * FROM estagiario ORDER BY idEstagiario DESC";
                $res = mysqli_query($con, $sql);

                $num_rows = mysqli_num_rows($res);
                if($num_rows > 0){
                    while($dado = mysqli_fetch_assoc($res)){

                        echo "<div class = 'card my-5'>   
                        <div class = 'card-body'>
                                <h3>".$dado['Nome']."</h3>  
                                <h4>".$dado['Sobrenome']."</h4>
                                <p>Cidade: ".$dado['Cidade']."</p>
                                <p>Estado: ".$dado['UF']."</p> 
                                <p>Curso: ".$dado['Curso']. "</p>
                                </div>
                                <div class='card-footer'>
                                <a class='btn btn-success' href='saiba_maisestagiario.php?cod=".$dado['idEstagiario']."' >Detalhar Infos</a>
                                <a class='btn btn-warning' href='alteraestagiario.php?cod=".$dado['idEstagiario']."' >Editar</a>
                                <a class='btn btn-danger' href='excluiestagiarios.php?cod=".$dado['idEstagiario']."' >Excluir</a>
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
  