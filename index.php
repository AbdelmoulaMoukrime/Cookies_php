

<!DOCTYPE html>
<html>

<head>
    <title>Couleurs avec cookie</title>
    <style type="text/css">
  
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5; /* Set a background color for the entire page */
            color: #333; /* Set the default text color */
            margin: 20px; /* Add some margin to the body */
        }

        form {
            width: 50%; /* Set the form width */
            margin: auto; /* Center the form on the page */
        }

        fieldset {
            border: 2px solid #ddd; /* Add a border around the fieldset */
            border-radius: 5px; /* Add some border-radius for a rounded appearance */
            padding: 10px; /* Add padding to the fieldset */
            margin-bottom: 20px; /* Add some space between fieldsets */
        }

        legend {
            font-weight: bold;
            font-family: cursive;
            color: #008080; /* Set the legend text color */
        }

        label {
            font-weight: bold;
            font-style: italic;
            color: #333; /* Set the label text color */
        }

        input[type="color"] {
            margin-left: 10px; /* Add some space between the color input and the label */
        }

        input[type="submit"] {
            background-color: #008080; /* Set the submit button background color */
            color: #fff; /* Set the submit button text color */
            padding: 10px 15px; /* Add padding to the submit button */
            border: none; /* Remove the button border */
            border-radius: 5px; /* Add some border-radius for a rounded appearance */
            cursor: pointer; /* Add a pointer cursor to the button */
        }

        input[type="submit"]:hover {
            background-color: #006666; /* Change the background color on hover */
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

    <form method="post" action="destination_page.php">
        <fieldset>
            <legend>Choisissez vos couleurs</legend>
            <label>Couleur de fond
                <input type="color" name="selectFond" value="<?php echo $fond; ?>">
            </label><br /><br />
            <label>Couleur de texte
                <input type="color" name="selectTexte" value="<?php echo $texte; ?>">
                <input type="hidden" name="textes" id="textes" />
            </label><br /><br /><br />
            <input type="submit" value="Changer les couleurs" />
        </fieldset>
    </form>
</body>

</html>
