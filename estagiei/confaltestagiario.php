
<?php session_start();
    
    if (!isset($_SESSION['logado'])) {
        header("Location: loginpage.php");
        exit();
    }

    if ($_SESSION['perfil'] <= 1){
        echo "<script>alert('Você não possui acesso à essa página!');window.location='loginpage.php'</script>";
    }


require("adm/conexao.php");

    $novoID = isset($_POST['novo-idestagiario']) ? $_POST['novo-idestagiario'] : "";
    $novoNome = isset($_POST['novo-nome']) ? $_POST['novo-nome'] : "";
    $novoSobrenome = isset($_POST['novo-sobrenome']) ? $_POST['novo-sobrenome'] : ""; 
    $novoCPF = isset($_POST['novo-cpf']) ? $_POST['novo-cpf'] : ""; 
    $novoEnde = isset($_POST['novo-ende']) ? $_POST['novo-ende'] : "";
    $novoBairro = isset($_POST['novo-bairro']) ? $_POST['novo-bairro'] : "";
    $novoCidade = isset($_POST['novo-cidade']) ? $_POST['novo-cidade'] : "";
    $novoUF = isset($_POST['novo-uf']) ? $_POST['novo-uf'] : "";
    $novoTel = isset($_POST['novo-tel']) ? $_POST['novo-tel'] : "";
    $novoEmail = isset($_POST['novo-email']) ? $_POST['novo-email'] : "";
    $novoCurso = isset($_POST['novo-curso']) ? $_POST['novo-curso'] : "";
    $novoConsid = isset($_POST['novo-consid']) ? $_POST['novo-consid'] : "";
    $novoNomeUser = isset($_POST['novo-nomeuser']) ? $_POST['novo-nomeuser'] : "";
    $novoSenha = isset($_POST['novo-senha']) ? $_POST['novo-senha'] : ""; 

$cod = $_GET["cod"];

$sql_update = "UPDATE estagiario SET nome = '$novoNome', sobrenome = '$novoSobrenome', cpf = '$novoCPF', 
ende = '$novoEnde', bairro = '$novoBairro', cidade = '$novoCidade', uf = '$novoUF', tel = '$novoTel', email = '$novoEmail', curso = '$novoCurso', 
consid = '$novoConsid', nomeuser = '$novoNomeUser', senha = '$novoSenha' WHERE idestagiario = '$novoID'";




  if(mysqli_query($con, $sql_update)){

     echo "<script>alert('Sua alteração foi realizada com sucesso!');window.location='estagiarios_cadastrados.php';</script>";
 }else{

     echo "<script>alert('Erro ao realizar alteração.');window.location='alteraestagiario.php';</script>";
 }

mysqli_close($con);

?>
