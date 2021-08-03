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

    <div class="login">
            <h1><b>Iniciar Sessão / Registo</b></h1>
            <form action="" method="POST">
                <div class="input-field">
                    <input type="email" name="email" id="email" placeholder="Email *" required>
                    <div class="underline"> </div>
                </div>
                <div class="input-field">
                    <input type="password" name="password" id="password" placeholder="Palavra-chave *" required>
                    <div class="olho"><i class="fas fa-eye-slash"></i></div>
                    <div class="underline"></div>
                </div>

               <button type="submit" class="btn btn-primary">
                    Iniciar Sessão
               </button>

               <button type="submit" class="btn btn-primary">
                    Novo Registo
               </button>

               
       </form>
    </div>

    <div id="footer">
          <?php include('footer.php'); ?>
    </div>

</body>
</html>

