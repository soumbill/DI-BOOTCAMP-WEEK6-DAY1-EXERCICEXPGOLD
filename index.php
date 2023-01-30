<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice1 : Length Of The String </h1>
    <?php 
        $phrase = "Bonjour l'équipe ATOS";
        echo 'La phrase contient ' . strlen($phrase) . ' Caracteres';
    ?>
    <hr>

    <h1>Exercice2 : Count The Words In The String</h1>
    <?php 
        $nbre_mot = "Je suis un étudiant de DI";

        echo 'La phrase contient '.str_word_count($nbre_mot). ' mots'
    ?>
    <hr>

    <h1>Exercice3 : Convert To Uppercase</h1>
    <?php 
        $majuscule = "Je suis un bel homme";

        echo strtoupper($majuscule);
    ?>
</body>
</html>