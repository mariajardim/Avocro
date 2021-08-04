<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avó Cró</title>
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

    <div class="falaconnosco">
            <h1><b>Fala Connosco!</b></h1>
            <form action="" method="POST">
                <div class="input-field">
                    <input type="text" name="nome" id="nome" placeholder="Insere o Nome Completo *" required>
                    <div class="underline"> </div>
                </div>
                <div class="input-field">
                    <input type="email" name="email" id="email" placeholder="Insere o Email *" required>
                    <div class="underline"> </div>
                </div>
                <div class="input-field">
                    <select id="problema" required> 
                            <option selected disabled value="">Em que podemos ajudar? *</option>
                            <option>Reportar um problema</option>
                            <option>Apresentar reclamação</option>
                            <option>Apresentar sugestão de melhoria</option>
                            <option>Outra situação</option>
                    </select> 
                    <div class="underline"> </div>
                </div>

               <div>
                    <div class="input-field">
                        <textarea row="6" style="margin-bottom: 25px; margin-top: 0px; height: 90px;" id="detalhe" name="detalhe" placeholder="Detalhe da situação *" required></textarea>
                    </div>
                </div>

               <button type="submit" class="btn btn-primary">
                    Submeter
               </button>
       </form>
    </div>


    <div class="dadosdaempresa">
        <div id="map">
                <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d99579.84795914986!2d-9.230244008336204!3d38.74373959659252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd19331a61e4f33b%3A0x400ebbde49036d0!2sLisboa%2C%20Portugal!5e0!3m2!1spt-PT!2sch!4v1628078358721!5m2!1spt-PT!2sch"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="email">
            <ul>
                <li><i class="fas fa-envelope-open-text" style="margin-right: 15px;"></i></li>    
                <li>empresa@gmail.com</li>
            </ul>
        </div>
        <div class="telemovel">
                <li><i class="fas fa-phone-alt" style="margin-right: 15px;"></i></li>    
                <li>+351 219 999 999</li>
        </div>
    </div>
    
    <div id="footer">
          <?php include('footer.php'); ?>
    </div>

</body>
</html>

