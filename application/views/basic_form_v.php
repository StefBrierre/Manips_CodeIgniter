<?php
//$errors = validation_errors();
$errors = "";
// Valeur du champ id depuis $_POST (fonction form_helper)
$id = set_value("id");
// Erreur associée au champ id
$idError = form_error("id");
if (!isset($msg)) {
  $msg = "";
}
?>
<html>
  <head>
    <title>Basic Form</title>
    <style>
      .error {
        color: red;
      }
    </style>
  </head>
  <body>
    <?= $errors ?>
    <form method="post">
    Id :
    <input type="text" name="id" value="<?= $id ?>" size="50" />
    <?= $idError ?>
    <br/>
    <button type="submit">Soumettre</button>
  </form>
  <?= $msg ?>
</body>
</html>