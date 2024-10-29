<?php
require("HeaderIndex.php");
?>

<!-- Section: Design Block -->
<section>
  <div class="container px-4 py-5 px-md-5 text-center text-lg-start p-0">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0">
         <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
          The best offer <br />
          <span style="color: hsl(218, 81%, 75%)">for your business</span>
        </h1>
        <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit.
          Temporibus, expedita iusto veniam atque, magni tempora mollitia
          dolorum consequatur nulla, neque debitis eos reprehenderit quasi
          ab ipsum nisi dolorem modi. Quos?
        </p>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0 position-relative center">


        <div class="card bg-glass">
          <div class="card-body px-5 py-5 px-md-6">

            <form action="verifica.php" method="post">

              <!-- Email input -->
              <div class="form-outline mb-4" required>
               <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Entre com seu email"required />
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4" required>
              <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" class="form-control" placeholder="Entre com sua senha"required/> 
              </div>


              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-lg">Entrar</button>

              <!-- Register buttons -->
              <div class="text-center">
                <p>Não tem uma conta?<a href="cadastro.php" class="link-danger">Cadastre-se</a></p>

              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->

<?php
  require ("FooterIndex.php");
  ?>