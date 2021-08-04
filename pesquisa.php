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

    <div class="pesquisa">

        <div class="quadrado">
            <h1><b>Pesquisa</b></h1>
            <form action="" method="POST">
                <div class="input-field">
                    <button type="button" title="pesquisar" id="enterpesquisar" onclick="alert('Pesquisa Realizada!');"><i class="fas fa-search"></i></button> 
                    <input type="text" name="procura" id="procura" placeholder="O que procuras?" required>
                    <div class="underline"></div>
                </div>
            </form>
        </div>
    </div>

    <div id="footer">
          <?php include('footer.php'); ?>
    </div>



    <script>

    document.addEventListener('keydown', function(e) {
    if(e.key == "Enter"){
      document.getElementById("enterpesquisar").click();
    }
    });
</script>

</body>
</html>

