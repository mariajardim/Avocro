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

    <div class="falaconnosco">
            <h1><b>Fala Connosco!</b></h1>
            <form action="" method="POST">
                <div class="input-field">
                    <input type="text" name="nome" id="nome" placeholder="Insere o Nome Completo" required>
                    <div class="underline"> </div>
                </div>
                <div class="input-field">
                    <input type="email" name="email" id="email" placeholder="Insere o Email" required>
                    <div class="underline"> </div>
                </div>
                <div class="input-field">
                    <select id="problema" required> 
                            <option selected disabled value="">Em que podemos ajudar?</option>
                            <option>Reportar um problema</option>
                            <option>Apresentar reclamação</option>
                            <option>Apresentar sugestão de melhoria</option>
                            <option>Outra situação</option>
                    </select> 
                    <div class="underline"> </div>
                </div>

               <div>
                    <div class="input-field">
                        <textarea row="6" id="detalhe" name="detalhe" placeholder="Escrever mensagem..." required></textarea>
                    </div>
                </div>

               <button type="submit" class="btn btn-primary">
                    Submeter
               </button>
       </form>
    </div>


    <div class="dadosdaempresa">
        <div class="localização"></div>
        <div class="email"></div>
        <div class="telemovel"></div>
    </div>
    
    <div id="footer">
          <?php include('footer.php'); ?>
    </div>

</body>
</html>

