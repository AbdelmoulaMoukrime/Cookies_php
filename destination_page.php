<?php

$message = '';

if (isset($_POST['textes']) && $_POST['textes'] == "ok") {
   
    setcookie("couleurFond", "", time() - 3600);
    setcookie("couleurTexte", "", time() - 3600);

    header('Location: index.php');
    exit(); 
}

if (!isset($_COOKIE['couleurFond']) && !isset($_COOKIE['couleurTexte'])) {
    $fond = isset($_POST['selectFond']) ? htmlspecialchars($_POST['selectFond']) : '#ffffff';
    $texte = isset($_POST['selectTexte']) ? htmlspecialchars($_POST['selectTexte']) : '#000000';
    $expir = time() + 2 * 30 * 24 * 3600;
    setcookie("couleurFond", $fond, $expir);
    setcookie("couleurTexte", $texte, $expir);
    $message = "Les couleurs ont été créées.";
} else {
    $fond = htmlspecialchars($_COOKIE['couleurFond']);
    $texte = htmlspecialchars($_COOKIE['couleurTexte']);
    $message = "Les couleurs n'ont pas été créées.";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Couleurs avec cookie</title>
    <style type="text/css">
          
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5; 
            color: #333; 
            margin: 20px;
        }

        form {
            width: 50%; 
            margin: auto; 
        }

        fieldset {
            border: 2px solid #ddd; 
            border-radius: 5px; 
            padding: 10px; 
            margin-bottom: 20px; 
        }

        legend {
            font-weight: bold;
            font-family: cursive;
            color: #008080;
        }

        label {
            font-weight: bold;
            font-style: italic;
            color: #333; 
        }

        input[type="color"] {
            margin-left: 10px; 
        }

        input[type="submit"] {
            background-color: #008080; 
            color: #fff;
            padding: 10px 15px;
            border: none; 
            border-radius: 5px; 
            cursor: pointer; 
        }

        input[type="submit"]:hover {
            background-color: #006666; 
        }
        body {
            background-color: <?php echo $fond; ?>;
            color: <?php echo $texte; ?>;
        }

        legend {
            font-weight: bold;
            font-family: cursive;
        }

        label {
            font-weight: bold;
            font-style: italic;
        }
    </style>
</head>

<body>
    
    <h1>Page de destination</h1>
    <p><?php echo $message; ?></p>

    <form method="post" action="#">
        <fieldset>
            <legend>Choisissez vos couleurs</legend>
            <label>Couleur de fond: <?php echo $fond; ?></label><br />
            <label>Couleur de texte: <?php echo $texte; ?></label><br />
            <input type="submit" value="Effacer les couleurs" onclick="return confirm('Êtes-vous sûr de vouloir effacer les couleurs?');" />
            <input type="hidden" name="textes" value="ok" />
        </fieldset>
    </form>
</body>

</html>
