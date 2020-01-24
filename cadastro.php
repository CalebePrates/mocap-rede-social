<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Cadastro</title>
  </head>
  <body>
    <div>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand text-uppercase" href="index.html">Logo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Plataforma</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Suporte</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Configuração</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>

    <div class="container container-fluid p-5">

      <div class="row">
        <div class="col-sm d-inline-block">
          <h3 class="text-primary display-4">Cadastro</h3>
          <form>
            <div class="form-group">
              <label for="cad_nome">Nome</label>
              <input type="text" class="form-control" id="cad_nome" aria-describedby="nomeHelp" placeholder="Digite seu nome">
              <small id="nomeHelp" class="form-text text-muted">Seu nome na plataforma</small>
            </div>
            <div class="form-group">
              <label for="cad_email">E-mail</label>
              <input type="email" class="form-control" id="cad_email" placeholder="Digite seu e-mail">
            </div>
            <div class="form-group">
              <label for="cad_senha">Senha</label>
              <input type="password" class="form-control" id="cad_senha" placeholder="Digite sua senha">
            </div>
            <div class="form-group">
              <label for="cad_confirm">Senha</label>
              <input type="password" class="form-control" id="cad_confirm" placeholder="Confirme sua senha">
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="cad_concordar">
              <label class="form-check-label" for="cad_concordar">Concordo com os termos</label>
            </div>
            <button type="submit" class="btn btn-outline-primary">Cadastrar</button>
          </form>
        </div>

        <div class="col-sm d-inline-block">
          
        </div>

        <div class="col-sm d-inline-block">
          <h3 class="text-primary display-4">Login</h3>
          <form>
            <div class="form-group">
              <label for="login_email">E-mail</label>
              <input type="email" class="form-control" id="login_email" placeholder="Entre com seu e-mail">
            </div>
            <div class="form-group">
              <label for="login_senha">Senha</label>
              <input type="password" class="form-control" id="login_senha" placeholder="Entre com sua senha">
            </div>
            <button type="submit" class="btn btn-outline-primary">Entrar</button>
          </form>
        </div>
      </div>
    </div> 





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>