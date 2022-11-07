<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário Cliente</title>

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-3.6.1.min.js"></script>
  <script src="js/js.cookie.min.js"></script>
  <script src="js/jquery.mask.min.js"></script>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="card rounded-0 border-secondary my-5 p-0 shadow">
        <div class="row">
          <div class="row align-middle border-secondary col-md-6"><img src="img/chuteira-bg-form_dmot5u.avif" class="img-fluid rounded-0 d-none d-none d-md-block" alt="Mãos segurando um par de chuteira vermelha e preta"></div>
          <div class="col-md-6">
            <div class="card-body mt-4 p-4">
              <h5 class="text-uppercase mb-3 lh-1"><em><strong>CADASTRE-SE PARA RECEBER NOSSAS PROMOÇÕES</strong></em></h5>
              <form class="row g-3" name="formCadastro" action="register.php" method="post">
                <div class="col-12 col-md-12 form-floating">
                  <input type="text" class="form-control rounded-0" id="nome" name="nome" placeholder="fulano" required="">
                  <label for="nome" class="ms-1">Nome*</label>
                </div>

                <div class="col-12 col-md-12 form-floating">
                  <input type="email" class="form-control rounded-0" id="email" name="email" placeholder="meu@email.com" required="">
                  <label for="email" class="ms-1">E-mail*</label>
                </div>
                <div class="col-12 col-md-6 form-floating">
                  <input type="text" class="form-control rounded-0" id="telefone" name="telefone" placeholder="(00) (00000-0000)" required>
                  <label for="telefone" class="ms-1">Telefone*</label>
                </div>
                <div class="col-12 col-md-6 form-floating">
                  <input type="text" class="form-control rounded-0" id="cep" name="cep" placeholder="CEP" required>
                  <label for="cep" class="ms-1">CEP*</label>
                </div>

                <div class="col-12 col-md-12 form-floating">
                  <input type="text" class="form-control endereco rounded-0" id="logradouro" name="logradouro" placeholder="Logradouro" required>
                  <label for="name" class="ms-1">Logradouro*</label>
                </div>


                <div class="col-12 col-md-6 form-floating">
                  <input type="text" class="form-control endereco rounded-0" id="numero" placeholder="Número" required>
                  <label for="numero" class="ms-1">Número*</label>
                </div>
                <div class="col-12 col-md-6 form-floating">
                  <input type="text" class="form-control endereco rounded-0" id="bairro" name="bairro" placeholder="Bairro" required>
                  <label for="bairro" class="ms-1">Bairro*</label>
                </div>

                <div class="col-12 col-md-6 form-floating">
                  <input type="text" class="form-control endereco rounded-0" id="cidade" name="cidade" placeholder="Cidade" required>
                  <label for="cidade" class="ms-1">Cidade*</label>
                </div>
                <div class="col-12 col-md-6 form-floating">
                  <input type="text" class="form-control endereco rounded-0" id="uf" name="uf" placeholder="UF" required>
                  <label for="uf" class="ms-1">UF*</label>
                </div>

                <div class="col-12">
                  <button class="btn btn-dark rounded-0 border-dark col-12 col-sm-6" type="submit">Criar Cadastro</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
<script src="js/index.js"></script>