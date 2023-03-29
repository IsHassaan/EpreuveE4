<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/epreuve.module.css?v=<?php echo time() ?>">

    <title>Epreuve E4</title>
</head>
<body>
<?php include "navbar.php" ?>

<div class="projets">
<div class="introduction">
<h2>Epreuve E4</h2>
    <p>
    L'épreuve E4 permet de présenter les différentes coméptences acquises au fil des éxpériences profesionnelles
    et de présenter le contexte de l'apprentissage de ces compétences.
    </p>
</div>

<div class="projet">
        <div class="projet_text">
        <h2>Keozia (PHP)</h2>
        <p>
           Keozia est l'entreprise en charge de cours webmaster, un site web en charge de 
           la publication d'outils d'apprentissage dans le domaine du développement.<br>
           Les fonctionnalités développées en cours de stage permettent l'authentification, 
           la réception de mails, le paiement d'abonnement, la réception de factures et 
           l'accès exclusif à des cours spécifiques. 
        </p>
        <div class="liens_e4">
            <a href="../activités/Stage 2023.doc">Documentation</a>
            <a href="https://www.cours-webmasters.fr/" target="blank">Visiter le site</a>
        </div>
        </div>
        <img src="../assets/E4-Keozia.png" alt="photo">
    </div>


    <div class="projet">
        <div class="projet_text">
        <h2>Semwee (Angular)</h2>
        <p>
        Le premier stage se déroule sous Angular, il a pour but de participer au développement
        d'une application mobile qui est basé sur l'optimisation du référencement (SEO).<br>
        L'application est reliée à une base de données MongoDB qui s'occupe entre autre de l'authentification, 
        mais aussi d'autres fonctionnalités de l'application.<br>
        Il est notamment possible d'envoyer un fichier contenant des données textuelles et de recevoir 
        une copie améliorée.
        </p>
        <div class="liens_e4">
            <a href="../activités/Stage 2022.doc">Documentation</a>
            <a href="https://semwee.app/" target="blank">Visiter le site</a>
        </div>
        </div>
        <img src="../assets/E4-Semwee.png" alt="photo">
    </div>

</div>

<?php include 'contact.php'; ?>
</body>
</html>