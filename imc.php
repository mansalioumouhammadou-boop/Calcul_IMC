<?php
$imc=null;
$interpretation="";
if ($_SERVER["REQUEST_METHOD"]=="POST" ) {
    $poids=$_POST['poids'];
    $taille=$_POST['taille'];

    if ($taille > 0) {
        $imc=$poids / ($taille*$taille);

        if ($imc < 18.5) {
            $interpretation="Insuffisance pondérable";

        }elseif ($imc < 25) {
            $interpretation="Corpulance normale";
        }elseif ($imc < 30) {
            $interpretation="Surpoids";
        }else {
            $interpretation="Obésité";
        }
    
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="imc.css"> </link>
    <title>Calcul_IMC</title>
</head>
<body>
    <h2>Calcul de l'IMC</h2>
    <div class="contenair">
    <form method="POST" action="">
        <label>Poids (en kg)</label><br>
        <input type="number" name="poids" step="0.01" required><br>
        <label>Taille (en m)</label><br>
        <input type="number" name="taille" step="0.01"  required><br><br>
        <button type="submit"
        name="calculer">Calculer</button>
    </form>
    <?php 
    if ($imc!==null) ?>
    
    <div class="resultat">
    <h3>Résultat</h3>
    <p>IMC: <strong><?= number_format($imc,2) ?></strong></p>
    <p>Interpretation: <strong><?= $interpretation ?></strong></p>
    <?php   ?>
    </div>

    </div>
   
</body>
</html>