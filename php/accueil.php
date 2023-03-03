<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/accueil.module.css?v=<?php echo time() ?>">
    <title>Accueil</title>
</head>
<body>

<?php include "navbar.php"; ?>

<div class="presentation">
    <div class="apropos">
        <h3>A propos de moi :</h3>
        <p>
        Étudiant en BTS SIO option SLAM, j'ai pris la décision de rejoindre cette formation
        dans le but de me former au développement informatique à travers un cursus professionnalisant.<br>
        En effet, le cursus proposé me permet d'apprendre le métier de développeur web,
        mais aussi de le vivre à travers un stage obligatoire d'une durée de 5 semaines par an.<br><br>
        Cette méthode me permet d'en savoir plus sur mes compétences et sur les manières de m'améliorer
        de façon à m'intégrer dans le milieu professionnel une fois le cursus finalisé.<br>
        C'est pour toutes ces raisons que mon choix s'est porté sur ce cursus qui allie théorie
        et pratique autour d'un sujet commun qu'est le développement informatique.
        </p>
        <a href="../assets/CV2023.pdf" target="blank">Voir le C.V</a>
    </div>

    <div class="formation">
        <h3>La formation</h3>
        <p>
        La formation se déroule sur deux années dont pour chacune
        un stage obligatoire de quelques semaines qui permet d'appliquer
        ses cours au métier.<br>
        Les compétences acquises durant cette formation
        sont orientées vers le développement de solutions informatiques et de support,
        mais aussi vers des compétences plus générales dont les mathématiques et la
        culture générale.
        </p>
        <p>
        Durant cette formation, les élèves sont soumis à des exercices et examens qui
        leurs demandes de prouver la bonne acquisition des compétences apprises.<br>
        Cela passe notamment par la création de projets en lien avec les cours du cursus, mais aussi
        par la rédaction d'une veille technologique ainsi que d'une veille informatique, toutes
        les deux liées au domaine d'apprentissage.
        </p>
       <div class="formation_liens">
       <a href="">Veille technologique</a>
       <a href="">Veille juridique</a>

       </div>
    </div>
</div>


<?php include "contact.php" ?>
</body>
</html>