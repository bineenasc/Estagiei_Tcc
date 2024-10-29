<?php session_start();
    
    if (!isset($_SESSION['logado'])) {
        header("Location: loginpage.php");
        exit();
    }

    if ($_SESSION['perfil'] < 1){
        echo "<script>alert('Você não possui acesso à essa página!');window.location='loginpage.php'</script>";
    }

require("HeaderAdmin.php");
?>

<?php
    require("adm/conexao.php");

        $novocod = (isset($_GET['cod'])) ? $_GET['cod'] : "null";
        $sql_retrieve = "SELECT * FROM vaga WHERE idVaga = '$novocod'";
        $res = mysqli_query($con, $sql_retrieve);
        $dado = mysqli_fetch_assoc($res);


?>
<div class="container">
    <div class="row d-flex justify-content-center ">
        <div class="col-md-8 order-md-1 bg-white mt-4 p-4 rounded-3">
            <h4 class="mb-3">Formulário de Vaga</h4>
            <form method='post' action='confaltvaga.php'>
            <input type="hidden" name="novo-idvaga" value = "<?php echo $dado['idVaga'];?>">
                <fieldset>
                    <div class="col-md-6 mb-3">
                        <label for="nomeempresa">Nome da Empresa</label>
                        <input type="text" value="<?php echo $dado['NomeEmpresa'];?>" class="form-control " name="novo-nomeempresa" id="nomeempresa">
                    </div>
                    <div class="col-md-8 mb-3">
                        <label for="funcao">Função do Estagiário</label>
                        <textarea type="text" class="form-control" value="<?php echo $dado['Funcao'];?>" id="funcao" rows="3" name="novo-funcao" id="funcao"></textarea>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="area">Área de serviço</label>
                        <input type="text" value="<?php echo $dado['Area'];?>" class="form-control " name="novo-area" id="area">
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="remunerado">Remunerado<span>(Sim/Não)</span></label>
                            <input type="text" value="<?php echo $dado['Remunerado'];?>" class="form-control" name="novo-remunerado" id="cpf">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="ende">Valor da Remuneração</label>
                            <input type="text" value="<?php echo $dado['Valor'];?>" class="form-control" name="novo-valor" id="valor">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="tempoestudo">Tempo Mínimo de Estudo</label>
                            <input type="text" value="<?php echo $dado['TempoEstudo'];?>" class="form-control" name="novo-tempoestudo" id="tempoestudo" placeholder="" value="">
                        </div>
                        <div class="col-md-5 mb-3">
                            <label for="periodotrabalho">Período<span>(Manhã/Tarde/Noite)</span></label>
                            <input type="text" value="<?php echo $dado['PeriodoTrabalho'];?>" class="form-control" name="novo-periodotrabalho" id="periodotrabalho" placeholder="" value="">
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="site">Link do Site da Empresa</label>
                        <input type="text" value="<?php echo $dado['Site'];?>" class="form-control" name="novo-site" id="site">
                    </div>

                    <hr class="mb-4">

                    
                    <button type="submit" class="btn btn-primary">Confirmar alteração</button>
                    <a href="vagas_empresa.php" class="btn btn-danger">Cancelar</a>
            </form>
            </fieldset>
        </div>
    </div>
</div>
<?php
require("Footer.php");
?>