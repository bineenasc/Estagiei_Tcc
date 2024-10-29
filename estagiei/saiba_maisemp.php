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
            <h1 class='my-3'>Empresas Cadastradas (Detalhamento)</h1>

            <?php 
                require("adm/conexao.php");
                $cod = (isset($_GET['cod'])) ? $_GET['cod'] : "null";
                $sql = "SELECT * FROM empresa WHERE idEmpresa = '$cod'";
                $res = mysqli_query($con, $sql);
                $num_rows = mysqli_num_rows($res);
                if($num_rows > 0){
                    while($dado = mysqli_fetch_assoc($res)){

                        echo "<div class = 'card my-5'>   
                        <div class = 'card-body'>
                                <h3>".$dado['Nome']."</h3>  
                                <h4>".$dado['NomeResp']."</h4>
                                <p> ID: ".$dado['idEmpresa']."</p>
                                <p>Endereço: ".$dado['End']."</p>
                                <p>Bairro: ".$dado['Bairro']."</p>
                                <p>Cidade: ".$dado['Cidade']."</p>
                                <p>Estado: ".$dado['UF']."</p> 
                                <p>CNPJ: ".$dado['CNPJ']."</p>
                                <p>Telefone: ".$dado['Tel']."</p>
                                <p>Telefone Fixo: ".$dado['TelFixo']."</p>
                                <p>Email: ".$dado['Email']."</p>
                                <p>CEP: ".$dado['CEP']. "</p>
                                <p>Nome de Usuário: ".$dado['NomeUser']."</p>
                                <p>Senha: ".$dado['Senha']."</p>
                                </div>
                                <div class='card-footer'>
                                <a class='btn btn-primary' href='empresas_cadastradas.php?cod=".$dado['idEstagiario']."' >Voltar</a>
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