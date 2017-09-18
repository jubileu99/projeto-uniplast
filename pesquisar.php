<?php
    include 'conexao.php';
    $valor = $_GET['pesquisar'];
    $query = mysql_query("select * from produtos where ds_produto like '%$valor%' limit 9");
?>
<DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Uniplast</title>
      <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
      <!-- Bootstrap -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <link rel="stylesheet" href="css/owl.carousel.css">
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="css/responsive.css">
  </head>
  <body>

    <!-- /////////////////////////////////////////////////////// -->
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="index.php">Uni<span>Plast</span></a></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Inicio</a></li>

                    </ul>
                    <form class="navbar-form navbar-right" role="search" method="GET" action="pesquisar.php">
                      <div class="form-group">
                        <input type="text" class="form-control" name="pesquisar" id="pesquisar" placeholder="Campo para pesquisa">
                      </div>
                      <button type="submit" class="btn btn-primary"><span>Pesquisar</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top:50px;">

    <div class="row">
      <div class="col-sm-12">
        <?php
            /* inicio da exibição da pesquisa */
            if (mysql_num_rows($query) == 0) {
                echo "<script>alert('Nenhum resultado encontrado :( ')</script>";
                echo "<script>window.location='index.php';</script>";
            }

            while($resultado = mysql_fetch_array($query)){
                $ds_produto = $resultado['ds_produto'];
                $ds_descricao = $resultado['ds_detalhes'];
                $imagem = $resultado['imagem'];
                $codigo = $resultado['cd_produto'];
            ?>

                    <div class="col-sm-4">
                        <div class="thumbnail">
                          <img src="fotos/<?php echo $imagem ?>"/>
                              <div class="caption">
                                <h3 style="text-align:center;"><a href="single-product.php?id=<?php echo $codigo; ?>"> <?php echo $ds_produto ?></a></h3>
                                <p style="max-width: 150ch;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;"><?php echo $ds_descricao ?></p>
                              </div>
                        </div>
                    </div>

            <?php
            /* fim da exibição da pesquisa */
            }
            ?>
        </div>
      </div>

    </div>

    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                  <div class="copyright">
                      <span></span>
                      <br>
                      <br>
                      <p>&copy; 2017 Uniplast.</p>
                      <p>Telefone: (47) 3461-8200 | Fax: (47) 3461-8249 </p>
                      <p>Email: UniplastContato@gmail.com </p>
                      <p>Instagram: Uniplast@ </p>
                      <p>Twitter: @Uniplast </p>
                      <p>Facebook: fb.uniplast.com </p>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="copyright">
                      <p>Mapa:</p>
                  </div>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3578.427682140106!2d-48.878337484486416!3d-
                  26.247779483418338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94deaf7e81cc497b%3A0x6e79a452842573be!2sR.+Dona+Francisca%2C+7650+-+
                  Zona+Industrial+Norte%2C+Joinville+-+SC%2C+80892-210!5e0!3m2!1spt-BR!2sbr!4v1495409039923" width="400" height="200" frameborder="0"
                  style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.easing.1.3.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
