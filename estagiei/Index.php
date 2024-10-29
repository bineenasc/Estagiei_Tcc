<?php
require("HeaderIndex.php");
?>
<main>
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100 img-fluid" src="img/1.svg" alt="...">
        <div class="container">
          <div class="carousel-caption d-none d-md-block">
            <h4>Seja Estagiei</h4>
            <p>Venha para nossa aplicação.</p>
            <p><a class="btn btn-outline-light" href="cadastro.php">Faça seu Cadastro</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/2.svg" class="d-block w-100" alt="...">
        <div class="container">
          <div class="carousel-caption d-none d-md-block">
            <h4>Carreira</h4>
            <p>Aqui você pode dar seu Start.</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/3.svg" class="d-block w-100" alt="...">
        <div class="container">
          <div class="carousel-caption d-none d-md-block">
            <h4>Sucesso</h4>
            <p>Começe ainda hoje, encontre seu estágio dos sonhos.</p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container py-4">

  

    <div class="p-5 mb-4 bg-light border rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">A ESTAGIEI</h1>
        <p class="col-md-8 fs-4">A Estagiei é reconhecida em todo Brasil pela excelência na administração de estagiários. Oferecemos o melhor serviço de divulgação de vagas, 
          recrutamento, seleção dos candidatos e gestão dos programas de estágio, com o permanente acompanhamento de todos os processos.<br/><br/>
          Somos uma fábrica de realizar sonhos e desde 2022 trabalhamos para entregar a melhor solução na administração de estágios.
      </div>
    </div>

    <div class="row align-items-md-stretch">
      <div class="col-md-6">
        <div class="h-100 p-5 bg-light border rounded-3">
          <h2>Estudante, não perca tempo!</h2>
          <p>Hoje, a Estagiei conta com muitos usuários. Se você também está buscando uma oportunidade, 
            não deixe de se cadastrar no nosso portal e receber diversas vagas para sua área de atuação e para sua localidade. Muitas vagas todos os dias!</p>
          <a class="btn btn-outline-dark" href="cadastro.php">Cadastre-se</a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="h-100 p-5 bg-light border rounded-3">
          <h2>PROCESSOS SELETIVOS</h2>
          <p>A Estagiei realiza diversos processos seletivos em todo Brasil, com vagas de estágio para nível médio e superior. 
            Acesse já nossa página específica de processos e confira todos os processos em andamento.</p>
          
        </div>
      </div>
    </div>
  </div>


  <?php
  require("FooterIndex.php");
  ?>