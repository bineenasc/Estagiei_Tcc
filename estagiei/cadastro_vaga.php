<?php
require("HeaderIndex.php");
?>

<div class="container">
    <div class="row d-flex justify-content-center ">
        <div class="col-md-8 order-md-1 bg-white mt-4 p-4 rounded-3">
            <h4 class="mb-3">Formulário de Vaga</h4>
            <form method='post' action='salvavaga.php'>
                <fieldset>
                    <div class="col-md-6 mb-3">
                        <label for="nomeempresa">Nome da Empresa</label>
                        <input type="text" class="form-control " name="nomeempresa" id="nomeempresa" required>
                    </div>
                    <div class="col-md-8 mb-3">
                        <label for="funcao">Função do Estagiário</label>
                        <textarea class="form-control" id="funcao" rows="3" name="funcao" id="funcao" required></textarea>
                    </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="area">Área de serviço</label>
                        <input type="text" class="form-control " name="area" id="area" required>
                    </div>

                   
                        <div class="col-md-4 mb-3">
                            <label for="remunerado">Remunerado</label>
                            <select class="form-select" name="remunerado" aria-label="Default select example" required>
                                <option selected>Selecione uma opção</option>
                                <option value="Remunerado">Remunerado</option>
                                <option value="Não Remunerado">Não Remunerado</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="ende">Valor da Remuneração</label>
                            <input type="text" class="form-control" name="valor" id="valor" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="tempoestudo">Tempo Mínimo de Estudo</label>
                            <input type="text" class="form-control" name="tempoestudo" id="tempoestudo" placeholder="" value="" required>
                        </div>
                        <div class="col-md-5 mb-3">
                            <label for="periodotrabalho">Período</label>
                            <select class="form-select" name="periodotrabalho" aria-label="Default select example" required>
                                <option selected>Selecione um Período</option>
                                <option value="Manhã">Manhã</option>
                                <option value="Tarde">Tarde</option>
                                <option value="Noite">Noite</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="site">Link do Site da Empresa</label>
                        <input type="text" class="form-control" name="site" id="site" required>
                    </div>

                    <hr class="mb-4">

                    <button class="btn btn-primary btn-lg" type="submit">Oferecer</button>
                    <a class="btn btn-danger btn-lg" href="vagas_empresa.php">Cancelar</a>
            </form>
            </fieldset>
        </div>
    </div>
</div>
<?php
require("FooterIndex.php");
?>