<?php session_start();

require("adm/conexao.php");

	if(isset($_POST["email"])){
    	$email = $_POST["email"];
    	$senha = $_POST["senha"];
    }
	$sql = "SELECT * FROM estagiario WHERE Email='".$email."' AND Senha='".$senha."'";

  	$selecionado = mysqli_query($con, $sql);

  	if($dados = mysqli_fetch_assoc($selecionado)){
      
      	$perfilBanco = $dados["Perfil"];
  		if ($perfilBanco == 0){
              $_SESSION['id'] = $dados['idEstagiario'];
              $_SESSION['perfil'] = $dados['Perfil'];
              $_SESSION['logado'] = true;
  			header("Location: IndexUser.php");
          }
    	else{
  			header("Location: loginpage.php");
        }
  	}
  	else if(isset($_POST["email"])){
        $email = $_POST["email"];
    	$senha = $_POST["senha"];
  	}
      $sql = "SELECT * FROM empresa WHERE Email='".$email."' AND Senha='".$senha."'";

  	$selecionado = mysqli_query($con, $sql);

  	if($dados = mysqli_fetch_assoc($selecionado)){
      
      	$perfilBanco = $dados["Perfil"];
  		if ($perfilBanco == 1){
              $_SESSION['id'] = $dados['idEmpresa'];
              $_SESSION['perfil'] = $dados['Perfil'];
              $_SESSION['logado'] = true;
  			header("Location: vagas_empresa.php");
          }
    	else{
  			header("Location: loginpage.php");
        }
  	}
      else if(isset($_POST["email"])){
          $email = $_POST["email"];
    	$senha = $_POST["senha"];
      }
      $sql = "SELECT * FROM admin WHERE Email='".$email."' AND Senha='".$senha."'";

  	$selecionado = mysqli_query($con, $sql);

  	if($dados = mysqli_fetch_assoc($selecionado)){
      
      	$perfilBanco = $dados["Perfil"];
  		if ($perfilBanco == 2){
              $_SESSION['id'] = $dados['idAdmin'];
              $_SESSION['perfil'] = $dados['Perfil'];
              $_SESSION['logado'] = true;
  			header("Location: estagiarios_cadastrados.php");
          }
    	else{
  			header("Location: loginpage.php");
        }
  	}
      else{
          echo "<script>alert('Usuário Inválido, tente novamente!');window.location='loginpage.php'</script>";
      }


?>