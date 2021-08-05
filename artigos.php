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

    <div class="categoriaartigos">
        <select>
                <option value="Roupa"> Roupa </option>
                <option value="Casacos">Casacos</option>
                <option value="Tops">Tops</option>
                <option value="Vestidos">Vestidos</option>
                <option value="Acessórios">Acessórios</option>
                <option value="Malas">Malas</option>
                <option value="Chapeus">Chapeus</option>
                <option value="Carteiras">Carteiras</option>
                <option value="Amigurumis">Amigurumis</option>
                <option value="Animais">Animais</option>
                <option value="Pessoas">Pessoas</option>
                <option value="Alimentos">Alimentos</option>
            </select>
    </div>

    <div class="filtrosordenacao">
        <div class="ord">
            <i class="fas fa-sort-amount-down-alt"></i>
            <select>
                <option value=""> Ordenar por </option>
                <option value="Preço mais baixo"> Preço mais baixo </option>
                <option value="Preço mais elevado">Preço mais elevado</option>
                <option value="Mais vendidos">Mais vendidos</option>
            </select>
        </div>
        <div class="fil">
            <i class="fas fa-filter"></i>
            <p>Filtros</p>
        </div>
    </div>

    <div class="produtos_filtros">
        <ul>
            <li>
                <a href="#">
                    <span>Filtro A</span>
                    <i class="fas fa-times"></i>
                </a>
            </li>
            <li>
                <a href="#">
                <span>Filtro B</span>
                <i class="fas fa-times"></i>
                </a>
            </li>
            <li>
                <a href="#">
                <span>Filtro C</span>
                <i class="fas fa-times"></i>
                </a>
            </li>
            <li>
                <a href="#">
                <span>Filtro D</span>
                <i class="fas fa-times"></i>
                </a>
            </li>
            <li>
                <a href="#">
                <span>Filtro E</span>
                <i class="fas fa-times"></i>
                </a>
            </li>
            <li>
                <a href="#">
                <span>Filtro F</span>
                <i class="fas fa-times"></i>
                </a>
            </li>
        </ul>

        <ul>
            <li>
                <a href="#">
                    <span>Filtro A</span>
                    <i class="fas fa-times"></i>
                </a>
            </li>
            <li>
                <a href="#">
                <span>Filtro B</span>
                <i class="fas fa-times"></i>
                </a>
            </li>
            <li>
                <a href="#">
                <span>Filtro C</span>
                <i class="fas fa-times"></i>
                </a>
            </li>
            <li>
                <a href="#">
                <span>Filtro D</span>
                <i class="fas fa-times"></i>
                </a>
            </li>
            <li>
                <a href="#">
                <span>Filtro E</span>
                <i class="fas fa-times"></i>
                </a>
            </li>
            <li>
                <a href="#">
                <span>Filtro F</span>
                <i class="fas fa-times"></i>
                </a>
            </li>
        </ul>
        <div class="removerfiltro">
            <a href="#">Remover todos os filtros</a>
        </div>
            <div class="underline"></div> 
    </div>


    <div class="artigos"> 
        <ul>
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


    <div id="footer">
          <?php include('footer.php'); ?>
    </div>




</body>
</html>
