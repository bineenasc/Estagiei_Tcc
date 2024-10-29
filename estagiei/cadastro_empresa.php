<?php
require ("HeaderIndex.php");
?>

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8 order-md-1  bg-white mt-4 p-4 rounded-3">
            <h4 class="mb-3">Formulário de Cadastro de Empresas</h4>
            <form method='post' action='salvaempresa.php'>
                <fieldset>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Informe seu nome" required>
                        <div class="invalid-feedback">
                            É obrigatório inserir um nome válido.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="nomeresp">Nome do Responsável</label>
                        <input type="text" class="form-control" name="nomeresp" id="nomeresp" placeholder="Informe o nome do responsável pela empresa" required>
                        <div class="invalid-feedback">
                            É obrigatório inserir um Nome válido.
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="end">Endereço</label>
                        <input type="text" class="form-control" name="end" id="end" placeholder="Rua Orquídea Branca, 00" value="" required>
                        <div class="invalid-feedback">
                            É obrigatório inserir um endereço válido.
                        </div>
                    </div>

                    
                        <div class="col-md-6 mb-3">
                            <label for="bairro">Bairro</label>
                            <input type="text" class="form-control" name="bairro" id="bairro" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                É obrigatório inserir um bairro válido.
                            </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="cidade">Cidade</label>
                            <input type="text" class="form-control" name="cidade" id="cidade" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                É obrigatório inserir uma cidade válida.
                            </div>
                        </div>
                        <div class="form-group col-md-2 mb-3">
                         <label for="uf">Estado (UF)</label>
                            <input type="text" class="form-control" name="uf" id="uf" placeholder="SP" value="" required>
                            <div class="invalid-feedback">
                                É obrigatório inserir um estado válida.
                            </div>
                        </div>
                        <div class="col-md-5 mb-3">
                        <label for="cnpj">CNPJ</label>
                        <input type="text" class="form-control" name="cnpj" id="cnpj" placeholder="" required>
                        <div class="invalid-feedback">
                            Por favor, insira seu CNPJ.
                        </div>
                </div>



                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="tel">Telefone</label>
                                <input type="text" class="form-control" name="tel" id="tel" placeholder="99 999999999" value="" required>
                                <div class="invalid-feedback">
                                    É obrigatório inserir um telefone válido.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="telfixo">Telefone Fixo</label>
                                <input type="text" class="form-control" name="telfixo" id="telfixo" placeholder="35628888" value="" required>
                                <div class="invalid-feedback">
                                    É obrigatório inserir um telefone válido.
                                </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="fulano@exemplo.com">
                                <div class="invalid-feedback">
                                    Por favor, insira um endereço de e-mail válido, para atualizações de entrega.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="cep">CEP</label>
                                <input type="text" class="form-control" name="cep" id="cep" placeholder="33564-000" value="" required>
                                <div class="invalid-feedback">
                                    É obrigatório inserir um CEP válido.
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="nomeuser">Nome de Usuário</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">@</span>
                                </div>
                                <input type="text" class="form-control" name="nomeuser" id="nomeuser" placeholder="Nome de Usuário" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Seu nickname é obrigatório.
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4 mb-3">
                                <label for="senha">Senha</label>
                                <input type="text" class="form-control" name="senha" id="senha" placeholder="ex: 123" value="" required>
                                <div class="invalid-feedback">
                                    Por Favor, Insira sua senha.
                                </div>
                            </div>

                        <hr class="mb-4">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input">
                            <label class="custom-control-label">Li e concordo com os Termos e Serviços.</label>
                            </div>
                        <hr class="mb-4">

                        <button class="btn btn-primary btn-lg" type="submit">Cadastrar</button>
            
            </form>
            </fieldset>
        </div>
    </div>
</div>
<?php
  require ("FooterIndex.php");
  ?>