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
            <button class="abrirmodal" style="background:none; border:none" onclick="openModal('dv-modal')">
                <i class="fas fa-filter"></i>
                <p>Filtros</p>
            </button>
        </div>
    </div>

    <div id="dv-modal" class="modal1">
            <div class="modal-content1">
                <div class="modal-head">
                    <button class="fecharmodal" onclick="closeModal('dv-modal')" style="float:right; background:none; border:none; font-size:20px;"><i class="fas fa-times" style="float: right;"></i></button>
                    <h1>Filtra a tua pesquisa</h1>
                </div>
                <div class="modal-body">
                    <div class="cor">
                        <p style="margin-bottom: 25px;">COR</P>
                        <div style="margin-bottom: 15px;">
                            <input type="checkbox" id="scales" name="scales" >
                            <label for="scales">Azul</label>
                        </div>
                        <div style="margin-bottom: 15px;">
                            <input type="checkbox" id="scales" name="scales" >
                            <label for="scales">Amarelo</label>
                        </div>
                        <div style="margin-bottom: 15px;">
                            <input type="checkbox" id="scales" name="scales" >
                            <label for="scales">Preto</label>
                        </div>
                        <div style="margin-bottom: 15px;">
                            <input type="checkbox" id="scales" name="scales" >
                            <label for="scales">Vermelho</label>
                        </div>
                        <div style="margin-bottom: 15px;">
                            <input type="checkbox" id="scales" name="scales" >
                            <label for="scales">Branco</label>
                        </div>
                        <div style="margin-bottom: 15px;">
                            <input type="checkbox" id="scales" name="scales" >
                            <label for="scales">Castanho</label>
                        </div>
                    </div>
                    <div class="tamanho">
                        <p style="margin-bottom: 25px;">TAMANHO</P>
                        <div style="margin-bottom: 15px;">
                            <input type="checkbox" id="scales" name="scales" >
                            <label for="scales">XS</label>
                        </div>
                        <div style="margin-bottom: 15px;">
                            <input type="checkbox" id="scales" name="scales" >
                            <label for="scales">S</label>
                        </div>
                        <div style="margin-bottom: 15px;">
                            <input type="checkbox" id="scales" name="scales" >
                            <label for="scales">M</label>
                        </div>
                        <div style="margin-bottom: 15px;">
                            <input type="checkbox" id="scales" name="scales" >
                            <label for="scales">L</label>
                        </div>
                        <div style="margin-bottom: 15px;">
                            <input type="checkbox" id="scales" name="scales" >
                            <label for="scales">XL</label>
                        </div>
                        <div style="margin-bottom: 15px;">
                            <input type="checkbox" id="scales" name="scales" >
                            <label for="scales">Tamanho Único</label>
                        </div>
                    </div>
                    <div class="preco1">
                        <p style="margin-bottom: 25px;">PREÇO</P>
                        <div style="margin-bottom: 15px;">
                            <input type="checkbox" id="scales" name="scales" >
                            <label for="scales">Promoções</label>
                        </div>
                        <div style="margin-bottom: 15px;">
                            <input type="checkbox" id="scales" name="scales" >
                            <label for="scales">0€ - 10€</label>
                        </div>
                        <div style="margin-bottom: 15px;">
                            <input type="checkbox" id="scales" name="scales" >
                            <label for="scales">10€ - 20€</label>
                        </div>
                        <div style="margin-bottom: 15px;">
                            <input type="checkbox" id="scales" name="scales" >
                            <label for="scales">20€ - 30€</label>
                        </div>
                        <div style="margin-bottom: 15px;">
                            <input type="checkbox" id="scales" name="scales" >
                            <label for="scales">30€ - 40€</label>
                        </div>
                        <div style="margin-bottom: 15px;">
                            <input type="checkbox" id="scales" name="scales" >
                            <label for="scales">40€ - 50€</label>
                        </div>
                    </div>
                    <div class="preco2">
                        <p style="color:white;" style="margin-bottom: 25px;">.</p>
                        <div style="margin-bottom: 15px;">
                            <input type="checkbox" id="scales" name="scales" >
                            <label for="scales">50€ - 60€</label>
                        </div>
                        <div style="margin-bottom: 15px;">
                            <input type="checkbox" id="scales" name="scales" >
                            <label for="scales">60€ - 70€</label>
                        </div>
                        <div style="margin-bottom: 15px;">
                            <input type="checkbox" id="scales" name="scales" >
                            <label for="scales">70€ - 80€</label>
                        </div>
                        <div style="margin-bottom: 15px;">
                            <input type="checkbox" id="scales" name="scales" >
                            <label for="scales">80€ - 90€</label>
                        </div>
                        <div style="margin-bottom: 15px;">
                            <input type="checkbox" id="scales" name="scales" >
                            <label for="scales">100€ - 110€</label>
                        </div>
                       
                    </div>
                </div>
                <div class="modal-footer" style="border:none; padding: 0px;">
                    <button class="fecharmodal" onclick="closeModal('dv-modal')">Ver Resultados</button>
                </div>
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


    <script>
        function openModal(mn) {
            let modal = document.getElementById(mn);

            if (typeof modal == 'underfined' || modal === null)
                return;

                modal.style.display = 'Block';
                
        }

    function closeModal(mn) {
            let modal = document.getElementById(mn);

            if (typeof modal == 'underfined' || modal === null)
                return;

                modal.style.display = 'none';
  
        }
    </script>

</body>
</html>
