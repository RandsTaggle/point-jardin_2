<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="css/materialize.min.css" type="text/css"/>
        <link rel="stylesheet" href="css/formulaire.css" type="text/css"/>
        <title>Formulaire de contact</title>
    </head>
    <body>
        <form action="send_email.php" method="post" class="green lighten-5">
            <fieldset class="container">
                <div class="row">
                    <legend class="center">Contactez-nous</legend>
                </div>
                <div class="row">
                    <div class="input-field col s12 m6 l4 light-green-text darken-1">
                        <input id="prenom" type="text" class="validate" name="prenom">
                        <label for="prenom">Prénom</label>
                    </div>
                    <div class="input-field col s12 m6 l4 light-green-text darken-1">
                        <input id="nom" type="text" class="validate" name="nom">
                        <label for="nom">Nom</label>
                    </div>
                    <div class="input-field col s12 l8 light-green-text darken-1">
                        <input id="email" type="email" class="validate" name="email">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 light-green-text darken-1">
                        <input value="[Signaler un bug]" id="sujet" type="text" class="autocomplete-subject" name="sujet">
                        <label class="active" for="sujet">Sujet</label>
                    </div>
                    <div class="input-field col s12 light-green-text darken-1">
                        <textarea id="mail-content" class="materialize-textarea" name="message"></textarea>
                        <label for="mail-content">Votre message</label>
                    </div>
                </div>
                <div class="row center">
                    <button class="btn waves-effect waves-light light-green darken-1" type="submit">
                        Envoyer ▶
                    </button>
                </div>
            </fieldset>
        </form>
        <script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
    </body>
</html>