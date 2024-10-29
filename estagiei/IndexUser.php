<?php session_start();

if (!isset($_SESSION['logado'])) {
  header("Location: loginpage.php");
  exit();
}

require("HeaderUser.php");
?>

<main>

  <section class="text-center" style="background-color: #5374AD;">
    <div>
      <img src="img/indexuser.svg" class="img-fluid" alt="Responsive image">

    </div>
  </section>

  <div class="album py-4 bg-light">
    <div class="container">
      <iframe name="result" style="display: none;"></iframe>

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-5">

        <?php
        require("adm/conexao.php");
        $sql = "SELECT * FROM vaga ORDER BY idVaga DESC";
        $res = mysqli_query($con, $sql);

        $num_rows = mysqli_num_rows($res);
        if ($num_rows > 0) {
          while ($dado = mysqli_fetch_assoc($res)) {

            echo "<div class = 'col'>   
                        <div class = 'card' style = 'width: 19rem; height: 25rem;'>
                        <div class = 'card-body'>
                                <h5 class = 'card-title'>" . $dado['NomeEmpresa'] . "</h3>  
                                <p class = 'card-text'>" . $dado['Funcao'] . "</p>
                                </div>
                                <ul class = 'list-group list-group-flush'>
                                <li class = 'list-group-item'> Área: " . $dado['Area'] . "</li>
                                <li class = 'list-group-item'> " . $dado['Remunerado'] . "</li>
                                <li class = 'list-group-item'>Valor: " . $dado['Valor'] . "</li>
                                <li class = 'list-group-item'> Tempo Requerido" . $dado['TempoEstudo'] . "</li>
                                <li class = 'list-group-item'>Período: " . $dado['PeriodoTrabalho'] . "</li>
                                </ul>
                            
                                <div class='card-footer'>
                                <form target='result' method='post' action='candidatar.php' >
                                <a class='btn btn-info' target='_blank' href='" . $dado['Site'] . "' >Conhecer Empresa</a>
                                <input type='number' value=" . $dado['idVaga'] . " name='idvaga' hidden>
                                <button class='btn btn-info'>Candidatar</button>
                                </form>
                    </div>   </div>                             
                                </div>";
          }
        } else {
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