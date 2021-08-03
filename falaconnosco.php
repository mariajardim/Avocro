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
                        <textarea row="6" style="margin-bottom: 25px;" id="detalhe" name="detalhe" placeholder="Detalhe da situação *" required></textarea>
                    </div>
                </div>

               <button type="submit" class="btn btn-primary">
                    Submeter
               </button>
       </form>
    </div>


    <div class="dadosdaempresa">
        <div id="map"></div>
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

    <script>
            function initMap()   {
                var location = {lat:38.758610, lng:-9.166220} 
                var map = new google.maps.Map(document.getElementById('map'), 
                    {
                    zoom: 4,
                    center: location
                    });
                }
        </script>

        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBzJmQB1RwHY8h5B4HvXNrqbgEt1eXl7rU&callback=initMap"></script>

</body>
</html>

