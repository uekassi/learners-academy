<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, shrink-to-fit=no'>
    <title>Inscrivez vous</title>
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">-->
    <link rel="stylesheet" type="text/css" href="../public/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../public/fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/register.css">
</head>

<body>
    <div class="">
        <div class="height-100vh center">
            <div class=" parent-height hasForm center">
                <div class="form-container container">
                    <form method="post" action="../controller/controller.php" class="center">
                        <div>
                            <h1>Formulaire d'inscription</h1>
                            <div>
                                <legend>Informations Préléminaires</legend>
                                <input type="text" name="name" placeholder="Nom"><br>
                                <input type="text" name="surname" placeholder="Prénom"><br>
                                <select name="student_type">
                                    <option value="eleve">Elève</option>
                                    <option value="etudiant">Etudiant</option>
                                </select><br>
                                <input type="text" name="ecole" placeholder="Ecole"> <br />
                                <input type="text" name="filiere" placeholder="Filière">
                            </div>
                            <hr>
                            <div>
                                <legend>Contacts</legend>
                                <input type="email" name="email" placeholder="Email"><br>
                                <input type="tel" name="tel" placeholder="Numéro de téléphone"><br>
                            </div>
                            <hr>
                            <div>
                                <legend>Lieu de résidence</legend>
                                <input type="text" name="ville" placeholder="Ville"><br>
                                <input type="text" name="quartier" placeholder="Quartier"><br>
                            </div>
                            <hr>
                            <div>
                                <legend>Informations connexes</legend>
                                <label>Date de naissance</label><br>
                                <input type="date" name="date_of_birth"><br>
                                <input type="text" name="place_of_birth" placeholder="Lieu de naissance">
                            </div>
                            <hr>
                            <button type="submit" name="register_btn" class="button color-white background-color-orange">Créer le compte</button>
                        </div>
                    </form>
                    <div class="parentHasHiddenElement center">
                        <button class="color-black button">Nous contacter <span class="fa fa-question"></span></button>
                        <ul class="visibleOnParentHover">
                            <li><a href="mailto: ulrichekassi2001@gmail.com">Envoyer un message</a></li>
                            <li><a href="tel: +237 655 85 06 52">Appeler</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>