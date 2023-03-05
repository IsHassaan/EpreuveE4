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
    <h2 class="projet_intro">Projets épreuve E4</h2>
    <div class="projet">
        <div class="projet_text">
        <h2>Projet PHP/SQL</h2>
        <p>
        Le premier projet est un projet d'article en ligne basé sur PHP accompagné d'une base
        de données MySQL.<br>
        Le site prend en charge de nombreuses actions dont la création, la modification et la suppression
        des articles postés ainsi que la création et la modification d'un compte utilisateur.<br>
        Les comptes créés peuvent interagir à travers un système de commentaire et d'appréciation qui ont un 
        impact sur la visibilité de leur contenu respectif.
        </p>
        <a href="">Voir le projet</a>
        </div>
        <img src="../assets/projet1.png" alt="photo">
    </div>

    <div class="projet">
        <div class="projet_text">
        <h2>Projet C#</h2>
        <p>It was a concerning development that he couldn't get out of his mind. He'd had
        many friends throughout his early years and had fond memories of playing with them,
        but he couldn't understand how it had all stopped. There was some point as he grew
        up that he played with each of his friends for the very last time, and he had no
        idea that it would be the last.</p>
        <a href="">Voir le projet</a>
        </div>
        <img src="../assets/projet2.png" alt="photo">
    </div>

</div>

<?php include 'contact.php'; ?>
</body>
</html>