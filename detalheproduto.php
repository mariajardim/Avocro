<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avó Cró</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div id="header">
      <?php include('header.php'); ?>
    </div>

    <div class="branco">
    </div>

    <div class="detalheproduto">
        <div class="produto">
            <div class="tresimagens">
                <div class="primeiraimagem">
                </div>
                <div class="segundaimagem">
                </div>
                <div class="terceiraimagem">
                </div>
            </div>
            <div class="umaimagem">
            </div>
            <div class="prod">
                <h1><b>Produto X</b></h1>
            </div>
        </div>
        <div class="infoproduto">
            <div class="descricao">
                <h2><b>Descrição</b></h2>
                <p>Vestido de Croché Curto feito à mão em Portugal.</p>
            </div>
            <div class="composicao">
                <h2><b>Composição</b></h2>
                <p>Vestido de Croché Curto feito à mão em Portugal.</p>
            </div>
            <div class="cuidados">
                <h2><b>Cuidados</b></h2>
                <p>- Lavar à mão </br>
                    - Não passar a ferro </br>
                    - Não usar máquina de secar roupa</p>
            </div>
        </div>
        <div class="semelhanteproduto">
            <div class="titulo">
                <h2><b>Produtos Semelhantes</b></h2>
            </div>
            <div class="produtos">
                <ul>
                    <li>
                        <a href="detalheproduto.php">
                            <div class="imagem">
                                    <div class="opacidade"></div>
                            </div>
                            <div class="imagemdescricao">
                                <div class="produtodescricao"> 
                                    <p>Produto <br>
                                    Preço</p>
                                    <i class="far fa-circle"></i>
                                    <i class="far fa-circle"></i>
                                    <i class="far fa-circle"></i>
                                </div>
                                <div class="coracao"> 
                                    <i class="far fa-heart"></i>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li>
                        <div class="imagem"> 
                            <div class="opacidade"></div>
                        </div>
                        <div class="imagemdescricao">
                            <div class="produtodescricao"> 
                                <p>Produto <br>
                                Preço</p>
                                <i class="far fa-circle"></i>
                                <i class="far fa-circle"></i>
                                <i class="far fa-circle"></i>
                            </div>
                            <div class="coracao"> 
                                <i class="far fa-heart"></i>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="imagem">
                            <div class="opacidade"></div>
                        </div>
                        <div class="imagemdescricao">
                            <div class="produtodescricao"> 
                                <p>Produto <br>
                                Preço</p>
                                <i class="far fa-circle"></i>
                                <i class="far fa-circle"></i>
                                <i class="far fa-circle"></i>
                            </div>
                            <div class="coracao"> 
                                <i class="far fa-heart"></i>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="imagem">
                            <div class="opacidade"></div>
                        </div>
                        <div class="imagemdescricao">
                            <div class="produtodescricao"> 
                                <p>Produto <br>
                                Preço</p>
                                <i class="far fa-circle"></i>
                                <i class="far fa-circle"></i>
                                <i class="far fa-circle"></i>
                            </div>
                            <div class="coracao"> 
                                <i class="far fa-heart"></i>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div id="footer">
          <?php include('footer.php'); ?>
    </div>

</body>
</html>
