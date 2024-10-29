
<?php session_start();

if (!isset($_SESSION['logado'])) {
    header("Location: loginpage.php");
    exit();
}

if ($_SESSION['perfil'] < 1) {
    echo "<script>alert('Você não possui acesso à essa página!');window.location='loginpage.php'</script>";
}


require("adm/conexao.php");

$novoID = isset($_POST['novo-idvaga']) ? $_POST['novo-idvaga'] : '';
$novoNomeEmpresa = isset($_POST['novo-nomeempresa']) ? $_POST['novo-nomeempresa'] : '';
$novoFuncao = isset($_POST['novo-funcao']) ? $_POST['novo-funcao'] : '';
$novoArea = isset($_POST['novo-area']) ? $_POST['novo-area'] : '';
$novoRemunerado = isset($_POST['novo-remunerado']) ? $_POST['novo-remunerado'] : '';
$novoValor = isset($_POST['novo-valor']) ? $_POST['novo-valor'] : '';
$novoTempoEstudo = isset($_POST['novo-tempoestudo']) ? $_POST['novo-tempoestudo'] : '';
$novoPeriodoTrabalho = isset($_POST['novo-periodotrabalho']) ? $_POST['novo-periodotrabalho'] : '';
$novoSite = isset($_POST['novo-site']) ? $_POST['novo-site'] : '';


$sql_update = "UPDATE vaga SET nomeempresa = '$novoNomeEmpresa', funcao = '$novoFuncao', area = '$novoArea', 
remunerado = '$novoRemunerado', valor = '$novoValor', tempoestudo = '$novoTempoEstudo', periodotrabalho = '$novoPeriodoTrabalho', site = '$novoSite'
WHERE idvaga = '$novoID'";

echo ("$sql_update");


  if(mysqli_query($con, $sql_update)){

     echo "<script>alert('Sua alteração foi realizada com sucesso! Se identifique novamente.');window.location='Index.php';</script>";
 }else{

     echo "<script>alert('Erro ao realizar alteração, Se identifique novamente.');window.location='loginpage.php';</script>";
 }

mysqli_close($con);

?>
