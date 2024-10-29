
<?php session_start();
    
    if (!isset($_SESSION['logado'])) {
        header("Location: loginpage.php");
        exit();
    }

    if ($_SESSION['perfil'] <= 1){
        echo "<script>alert('Você não possui acesso à essa página!');window.location='loginpage.php'</script>";
    }


require("adm/conexao.php");

$novoID = isset($_POST['novo-idempresa']) ? $_POST['novo-idempresa'] : '';
$novoNome = isset($_POST['novo-nome']) ? $_POST['novo-nome'] : '';
$novoNomeResp = isset($_POST['novo-nomeresp']) ? $_POST['novo-nomeresp'] : ''; 
$novoCNPJ = isset($_POST['novo-cnpj']) ? $_POST['novo-cnpj'] : ''; 
$novoEnd = isset($_POST['novo-end']) ? $_POST['novo-end'] : '';
$novoBairro = isset($_POST['novo-bairro']) ? $_POST['novo-bairro'] : '';
$novoCidade = isset($_POST['novo-cidade']) ? $_POST['novo-cidade'] : '';
$novoUF = isset($_POST['novo-uf']) ? $_POST['novo-uf'] : '';
$novoTel = isset($_POST['novo-tel']) ? $_POST['novo-tel'] : '';
$novoTelFixo = isset($_POST['novo-telfixo']) ? $_POST['novo-telfixo'] : '';
$novoEmail = isset($_POST['novo-email']) ? $_POST['novo-email'] : '';
$novoCEP = isset($_POST['novo-cep']) ? $_POST['novo-cep'] : '';
$novoNomeUser = isset($_POST['novo-nomeuser']) ? $_POST['novo-nomeuser'] : '';
$novoSenha = isset($_POST['novo-senha']) ? $_POST['novo-senha'] : '';

$cod = $_GET["cod"];

$sql_update = "UPDATE empresa SET nome = '$novoNome', nomeresp = '$novoNomeResp', cnpj = '$novoCNPJ', 
end = '$novoEnd', bairro = '$novoBairro', cidade = '$novoCidade', uf = '$novoUF', tel = '$novoTel',
telfixo = '$novoTelFixo', email = '$novoEmail', cep = '$novoCEP',
nomeuser = '$novoNomeUser', senha = '$novoSenha' WHERE idempresa = '$novoID'";

  if(mysqli_query($con, $sql_update)){

     echo "<script>alert('Sua alteração foi realizada com sucesso!');window.location='empresas_cadastradas.php';</script>";
 }else{

     echo "<script>alert('Erro ao realizar alteração.');window.location='alteraempresa.php';</script>";
 }

mysqli_close($con);

?>
