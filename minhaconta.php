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

    <div class="minhaconta">
        <h1><b>A minha conta</b></h1>
    </div>

    <div class="minhacontadados">
        <ul>
            <li>
                <a href="minhaconta.php?area=dadospessoais" class="dadospessoais">
                    <span>Dados Pessoais</span>
                </a>
            </li>
            <li>
                <a href="minhaconta.php?area=dadosacesso">
                    <span>Dados de Acesso</span>
                </a>
            </li>
            <li>
                <a href="minhaconta.php?area=dadospagamento">
                    <span>Dados de Pagamento</span>
                </a>
            </li>
            <li>
                <a href="minhaconta.php?area=encomendas">
                    <span>Encomendas</span>
                </a>
            </li>
        </ul>
        <div class="underline"></div> 

        <div class="conteudo">
            <?php 

                if (!isset($_GET['area'])){ 
                    $area_a_carregar = 'dadospessoais';
                } else {
                    $area_a_carregar = $_GET['area'];
                }

                    switch($area_a_carregar){
                        case 'dadospessoais' : {include('dadospessoais.php'); } break;
                        case 'dadosacesso' : {include('dadosacesso.php'); } break;
                        case 'dadospagamento' : {include('dadospagamento.php'); } break;
                        case 'encomendas' : {include('encomendas.php'); } break;
                        case 'detalhepagamento' : {include('detalhepagamento.php'); } break;
                        case 'detalheencomenda' : {include('detalheencomenda.php'); } break;
                        case 'visa' : {include('visa.php'); } break;
                        case 'mastercard' : {include('mastercard.php'); } break;
                        

                        default : {include('paginaerro.php'); } break;
                    }
            ?>
        </div>
        </div>
    </div>
    <div id="dv-modal" class="modal2">
            <div class="modal-content2">
                <div class="modal-head">
                    <button class="fecharmodal" onclick="closeModal('dv-modal')" style="float:right; background:none; border:none; font-size:20px;"><i class="fas fa-times" style="float: right;"></i></button>
                    <h1>NOVO METODO DE PAGAMENTO</h1>
                </div>
                <div class="modal-body">
                    <div class="visa">
                        <div class="prifundo">
                            <a href="minhaconta.php?area=visa" style="text-decoration:none;">
                                <div class="fundo">
                                    <i class="fab fa-cc-visa"></i>
                                    <p>Visa</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="mastercard">
                        <div class="prifundo">
                            <a href="minhaconta.php?area=mastercard" style="text-decoration:none;">
                                <div class="fundo">
                                    <i class="fab fa-cc-mastercard"></i>
                                    <p>Mastercard</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
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
