<?php session_start();
    
    if (!isset($_SESSION['logado'])) {
        header("Location: loginpage.php");
        exit();
    }

    if ($_SESSION['perfil'] < 1){
        echo "<script>alert('Você não possui acesso à essa página!');window.location='alteraestagiario.php'</script>";
    }

require("HeaderAdmin.php");
?>

<?php
    require("adm/conexao.php");

        $novocod = (isset($_GET['cod'])) ? $_GET['cod'] : "null";
        $sql_retrieve = "SELECT * FROM estagiario WHERE idEstagiario = '$novocod'";
        $res = mysqli_query($con, $sql_retrieve);
        $dado = mysqli_fetch_assoc($res);


?>
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8 order-md-1 bg-white mt-4 p-4 rounded-3">
            <form method='post' action='confaltestagiario.php'>
            <input type="hidden" name="novo-idestagiario" value = "<?php echo $dado['idEstagiario'];?>">
                <fieldset>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="nome">Nome</label>
                        <input type="text" value="<?php echo $dado['Nome'];?>" class="form-control" name="novo-nome" id="nome" placeholder="Informe o nome" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="sobrenome">Sobrenome</label>
                        <input type="text" value="<?php echo $dado['Sobrenome'];?>" class="form-control" name="novo-sobrenome" id="sobrenome" placeholder="Informe o sobrenome" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="cpf">CPF</label>
                        <input type="text" value="<?php echo $dado['CPF']; ?>" class="form-control" name="novo-cpf" id="cpf" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="ende">Endereço</label>
                        <input type="text" value="<?php echo $dado['Ende']; ?>" class="form-control" name="novo-ende" id="ende" placeholder="Rua Orquídea Branca, 00" value="" required>
                    </div>

                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="bairro">Bairro</label>
                            <input type="text" value="<?php echo $dado['Bairro']; ?>" class="form-control" name="novo-bairro" id="bairro" placeholder="" value="" required>
                        </div>
                        <div class="col-md-5 mb-3">
                            <label for="cidade">Cidade</label>
                            <input type="text" value="<?php echo $dado['Cidade']; ?>" class="form-control" name="novo-cidade" id="cidade" placeholder="" value="" required>
                        </div>
                        <div class="form-group col-md-2 mb-3">
                         <label for="uf">Estado (UF)</label>
                            <input type="text" value="<?php echo $dado['UF']; ?>" class="form-control" name="novo-uf" id="uf" placeholder="SP" value="" required>
                        </div>
                    </div>
                    </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="tel">Telefone</label>
                                <input type="text" value="<?php echo $dado['Tel']; ?>" class="form-control" name="novo-tel" id="tel" placeholder="99 999999999" value="" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email">Email</label>
                                <input type="email" value="<?php echo $dado['Email']; ?>" class="form-control" name="novo-email" id="email" placeholder="fulano@exemplo.com">
                            </div>
                        </div>

                        <div class="row">
                        <div class="col-md-8 mb-3">
                                <label for="consid">Considerações<span class="text-muted">(Opcional)</span></label>
                                <textarea class="form-control" value="<?php echo $dado['Consid']; ?>" id="consid" rows="3" name="novo-consid"></textarea>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="curso">Curso em Andamento</label>
                                <input type="text" class="form-control" value="<?php echo $dado['Curso']; ?>" name="novo-curso" id="curso" placeholder="ex: Biologia" value="" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="nomeuser">Nome de Usuário</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">@</span>
                                </div>
                                <input type="text" class="form-control" value="<?php echo $dado['NomeUser']; ?>" name="novo-nomeuser" id="nomeuser" placeholder="Nome de Usuário" required>
                        </div>
                        
                        <div class="col-md-4 mb-3">
                                <label for="senha">Senha</label>
                                <input type="text" value="<?php echo $dado['Senha']; ?>" class="form-control" name="novo-senha" id="senha" placeholder="ex: 123" value="" required>
                            </div>

                        <button type="submit" class="btn btn-primary">Confirmar alteração</button>
                    <a href="estagiarios_cadastrados.php" class="btn btn-danger">Cancelar</a>
            
            </form>
            </fieldset>
        </div>
    </div>
</div>
<?php
require("Footer.php");
?>