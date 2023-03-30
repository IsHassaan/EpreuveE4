<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/projets.module.css?v=<?php echo time() ?>">

    <title>Projets</title>
</head>
<body>
<?php include "navbar.php" ?>

<div class="projets">
<div class="introduction">
<h2>Projets</h2>
    <p>
    La page de projets permet de présentés les différents projets suivis en cours.<br>
    Ces projets comprennent des compétences qui regroupent les attentes du cursus par rapport 
    à la mise en place et au développement d'une application complète et fonctionnelle.
    </p>
</div>

    <div class="projet">
        <h2>Présentation</h2>
        <p>
            MediatekFormation est une application développée en symfony, elle regroupe des formations en rapport 
            avec le développement informatique et permet de se former aux compétences qui y sont liés.<br>
            L'application comprend de nombreuses possibilités lors de l'authentification à cette dernière, 
            de nouvelles formations peuvent être crée, des formations existantes peuvent êtres supprimée ou même
            modifiée.
        </p>
        <div class="projet_text">
            <img src="../assets/mediatekformation.png" alt="image">
            <div class="projet_liens">
                <h3>Liens</h3>
                <div class="projet_lien">
                    <a href="https://github.com/IsHassaan/mediatekformation" target="blank">GitHub</a>
                    <a href="http://symfonyapp.go.yj.fr/mediatekformation/public/" target="blank">Site</a>
                    <a href="../projet/compteRendu.pdf">Compte rendu</a>
                    <a href="../projet/cahier_des_charges.pdf">Cahier des charges</a>
                    <a href="../projet/dossier_documentaire.pdf">Documentation technique</a>
                    <a href="../projet/contratDeveloppement.pdf">Contrat de développement</a>
                </div>
            </div>
    </div>
</div>
<div class="projet_video">
    <h3>Demonstration vidéo</h3>
    <p>
    La vidéo de demonstration de la plateforme mediatekformation met en avant les possibilités 
    offertes par l'application et les moyens d'y accèder à travers l'interface de l'application.
    </p>
    <video width="80%" height="80%" controls>
        <source src="../projet/mediatekformation.mov" type="video/mp4">
    </video> 
</div>

</div>

<?php include 'contact.php'; ?>
</body>
</html>