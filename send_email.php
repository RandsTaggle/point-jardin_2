<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="css/materialize.min.css" type="text/css"/>
        <title>Courrier envoyé !</title>
    </head>
    <body>
        <div class="center light-green darken-1">
            <h1>E-mail envoyé !</h1>
            <?php
            echo "<p>Merci beaucoup de votre message, ".$_POST['prenom']." "
                .$_POST['nom']."!\nNous vous répondrons à l'adresse ".$_POST['email']." !</p><br>";
            echo "\n<p><h5>Sujet : ".$_POST['sujet']."</h5>\n\n Message :\n".$_POST['message']."</p>";
            //echo "<p>Nous répondrons à l'adresse \"".$_POST."\"";
            ?>
        </div>
    </body>
</html>


