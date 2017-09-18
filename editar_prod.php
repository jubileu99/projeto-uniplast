<html>
    <head>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="css/estilo.css" rel="stylesheet">
        <!-- Fonts by googleApi's -->
        <link href="https://fonts.googleapis.com/css?family=Rubik+Mono+One" rel="stylesheet">
        <meta charset="utf-8">
    </head>
      <?php
        include 'conexao.php';
        include 'navbar.html';
        $cd_produto = $_GET['id'];
        $pesquisar = mysql_query("select * from produtos where cd_produto=$cd_produto");
        if ($resultado = mysql_fetch_array($pesquisar)) {
          $cd_produto       = $resultado["cd_produto"];
  				$ds_produto       = $resultado["ds_produto"];
  				$ds_linha         = $resultado["ds_linha"];
  				$ds_cor           = $resultado["ds_cor"];
  				$ds_material      = $resultado["ds_material"];
  				$ds_aplic_produto = $resultado["ds_aplic_produto"];
  				$ds_detalhes      = $resultado["ds_detalhes"];
  				$ds_imagem        = $resultado["imagem"];
        }
      ?>
    <body>
        <div class="container">
            <div class="_main" >
                <div class="col-sm-12 _title">
                    <p>Formulário</p>
                    <hr>
                </div>
                <div class="col-sm-12">
                    <form name="cad_produtos" method="post" action="alterar_prod.php" enctype="multipart/form-data" class="form-horizontal">
                        <!-- input cod_produto -->
                        <div class="form-group">
                            <div class="col-sm-9">
                                <input type="hidden" name="cod_prod" id="cod_prod" class="form-control" maxlength="10" value="<?php echo $cd_produto ?>" required placeholder="Insira o codigo do produto">
                            </div>
                        </div>
                        <!-- fim input cod_produto -->
                        <!-- input ds_produto -->
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="nome">Nome:</label>
                            <div class="col-sm-9">
                                <input type="text" name="ds_produto" id="ds_produto" class="form-control" maxlength="40" value="<?php echo $ds_produto ?>" required placeholder="Insira o nome do produto">
                            </div>
                        </div>
                        <!-- fim input ds_produto -->
                        <!-- input ds_linha -->
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="linha">Linha:</label>
                            <div class="col-sm-9">
                                <input type="text" name="ds_linha" id="ds_linha" class="form-control" maxlength="20" value="<?php echo $ds_linha ?>" required placeholder="Insira a linha do produto">
                            </div>
                        </div>
                        <!-- fim input ds_linha -->
                        <!-- input ds_cor -->
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="cor">Cor:</label>
                            <div class="col-sm-9">
                                <input type="text" name="ds_cor" id="ds_cor" class="form-control" maxlength="20" value="<?php echo $ds_cor ?>" placeholder="Insira a cor do produto" required>
                            </div>
                        </div>
                        <!-- fim input ds_cor -->
                        <!-- input ds_material -->
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="material">Material:</label>
                            <div class="col-sm-9">
                                <input type="text" name="ds_material" id="ds_material" class="form-control" value="<?php echo $ds_material ?>" placeholder="Insira o material" maxlength="15" required>
                            </div>
                        </div>
                        <!-- fim input ds_material -->
                        <!-- input ds_aplicação do produto -->
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="aplicacao">Aplicação:</label>
                            <div class="col-sm-9">
                                <input type="text" name="ds_aplic_produto" id="ds_aplic_produto" class="form-control" value="<?php echo $ds_aplic_produto ?>" placeholder="Insira a aplicação do produto" maxlength="40" required>
                            </div>
                        </div>
                        <!-- fim input ds_aplicação do produto -->
                        <!-- input ds_detalhes  -->
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="detalhes">Detalhes:</label>
                            <div class="col-sm-9">
                                <textarea type="text" name="ds_detalhes" id="ds_detalhes" class="form-control" rows="5" maxlength="200" required><?php echo $ds_detalhes ?></textarea>
                            </div>
                        </div>
                        <!-- fim input ds_detalhes -->
                        <!-- input para receber imagens -->
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="detalhes">Imagens:</label>
                            <div class="col-sm-9">
                                <input type="file" name="img" id="img" class="form-control" maxlength="200" value="<?php echo $ds_imagem;?>">
                            </div>
                        </div>
                        <!-- Fim do input para receber o arquivo -->
                        <!-- Incio dos botoes -->
                        <div class="form-group col-sm-12">
                            <div class="btn-group" style="margin-left:150px">
                                <button class="btn btn-primary" type="submit">Enviar</button>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-danger" type="reset">Limpar campos</button>
                            </div>
                        </div>
                        <!-- fim dos botoes -->
                    </form>
                </div>
            </div>
        </div>
    </body>
        <link href="js/bootstrap.js">
</html>
