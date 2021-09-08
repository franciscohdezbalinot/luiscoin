<div class="login">
    <div class="text-center subLogin">
      
      <form class="form-signin" method="post">
        
        <img class="mb-4" src="<?php echo $urlFront; ?>content/img/identidad/logo.png" alt="">
        
        <h1 class="h3 mb-3 font-weight-normal">Acceder al sistema</h1>
        
        <label for="inputEmail" class="sr-only">Correo electrónico</label>
        
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus>
        
        <label for="inputPassword" class="sr-only">Contraseña</label>
        
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pass" required>
        
        <div class="checkbox mb-3">

          <label>

            <input type="checkbox" value="remember-me"> Recuerdame
          
          </label>

        </div>
         <?php
            if (isset($_POST["email"])) {
              
              ctrLogin();
              
            }
              
          ?>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar sesión</button>
        
        <p class="mt-5 mb-3 text-muted">&copy; Luis Frutos Augé 2021</p>
      
      </form>

    </div>
  </div>