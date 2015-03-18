<?php 
//$errors = validation_errors();
$errors = "";
// Valeur du champ nom depuis $_POST (fonction form_helper)
$nom = set_value("nom");
// Valeur du champ departement depuis $_POST (fonction form_helper)
$departement = set_value("departement");
// Erreur associée au champ nom
$nomError = form_error("nom");
// Erreur associée au champ departement
$depError = form_error("departement");
if (!isset($msg)) {
  $msg = "";
}?>

<html>
  <head>
    <title>Formulaire Personne</title>
    <style>
      .error {
        color: red;
      }
    </style>
  </head>
  <body>
    <?= $errors ?>
    <form method="post">
        <label>Nom :</label>
        <input type="text" name="nom" value="<?= $nom ?>"/>
        <?= $nomError ?>
        <label>Département :</label>
        <input type = "text" name = "departement" value = "<?= $departement ?>"/>
        <?= $depError ?>
        <br/>
        <button type="submit">Soumettre</button>
    </form>
    <?= $msg ?>
  </body>
</html>

