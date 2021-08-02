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
       <div> <h1><b>Fala Connosco!</b></h1> </div>
       <form action="" method="POST">
               <div>
                   <label>Nome Completo</label>
                   <input type="text" name="nome" id="nome" required>
               </div>

               <div>
                   <label>Email</label>
                   <input type="email" name="email" id="email" required>
               </div>
            
               <div>
                   <label>Em que podemos ajudar?</label>
                   <select id="problema" required> 
                        <option selected disabled value="">Em que podemos ajudar?</option>
                        <option>Reportar um problema</option>
                        <option>Apresentar reclamação</option>
                        <option>Apresentar sugestão de melhoria</option>
                        <option>Outra situação</option>
                   </select> 
               </div>

               <div>
                   <label>Detalhe da situação</label>
                   <textarea row="6" style="width: 26em" id="detalhe" name="detalhe" required> </textarea>
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

