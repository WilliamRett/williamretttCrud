
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Cadastro de Usuario</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/form-validation.css')}}" rel="stylesheet">
  </head>

  <body class="bg-light">

    <div class="container">
      <div class="py-4 text-center">
        <h2>Cadastro de Usuario</h2>
      </div>
      <div class="row">    
        <div class="col-md-12 order-md-1" style="padding:15px;">
          <h4 class="mb-3">Dados Usuario</h4>
          <form class="needs-validation" novalidate name="cadastro">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid Nome is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="document">CPF|CNPJ</label>
                <input type="text" class="form-control" id="document" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid cpf/cnpj is required.
                </div>
              </div>
            </div>
            <div class="mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="password" required>
                <div class="invalid-feedback">
                  Please enter a valid email address for shipping updates.
                </div>
              </div>
            <div class="mb-3">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com" required>
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="mb-3">
                <label for="latitude">Latitude</label>
                <input type="text" class="form-control" id="latitude" placeholder="22º 55´S" required>
                <div class="invalid-feedback">
                  P Please enter a valid latitude.
                </div>
              </div>

              <div class="mb-3">
                <label for="logitude">Longitude</label>
                <input type="text" class="form-control" id="logitude" placeholder="34º 53´W" required>
                <div class="invalid-feedback">
                    Please enter a valid logitude.
                </div>
              </div>
              <hr class="mb-4">
              <button class="btn btn-primary btn-lg btn-block" type="submit">Adicionar Usuario</button>
            </form>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2019 William Rett</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
    </div>
    <script>
      (function() {'use strict'; window.addEventListener('load', function() {
          var forms = document.getElementsByClassName('needs-validation');
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();

      $(function(){
        $('form[name="cadastro"]').submit(function(event){
            event.preventDefault();
                $.ajax({
                    url:"127.0.0.1:8000/user",
                    type:"post",
                    data:$(this).serialize(),
                    dataType:'json',
                    success:function(response){
                        console.log(response);
                    },
            }); 
        });
      });

    </script>
  </body>
</html>