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

        <div class="quadrado">
            <h1><b>Iniciar Sessão / Registo</b></h1>
            <form action="" method="POST">
                <div class="input-field">
                    <input type="email" name="email" id="email" placeholder="Email *" required>
                    <div class="underline"> </div>
                </div>
                <div class="input-field">
                    <input type="password" name="senha" id="senha" placeholder="Palavra-chave *" required>
                    <button type="button" title="Ver ou ocultar senha" onclick="viewSenha()"><i class="fas fa-eye"></i></button> 
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
    </div>

    <div id="footer">
          <?php include('footer.php'); ?>
    </div>

<script>
    function viewSenha(){
            var tipo = document.getElementById("senha")
            if (tipo.type == "password") {
                tipo.type = "text";
            } else{
                tipo.type = "password";
            }
        }

</script>

</body>
</html>

