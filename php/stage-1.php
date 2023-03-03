<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/experiences.module.css?v=<?php echo time() ?>">
    <title>Stage 2021-2022</title>
</head>
<?php include 'navbar.php'; ?>
<body>
    <div class="introduction_experiences">
        <h2>Situation professionnelle</h2>
        <p>
        Dans cette partie, nous verrons le contexte et les enjeux liés 
        au stage effectué durant les semaines qui ont 
        composées<br>
        la partie pratique de la formation en BTS SIO<br>
        Il s'agit notamment de comprendre les besoins, les situations et les compétences 
        qui ont été abordées lors du passage en entreprise.
        </p>
    </div>

    <div class="stage">
        <div class="entete">
            <div class="entete_text">
            <h3>Stage 2021-2022</h3>
                        <h3>Semwee</h3>
                        <h4>Informations sur l'entreprise : </h4>
                        <p>
                        Semwee est une entreprise d'édition de logiciels applicatifs fondée en 2021
                        par Anthony Contat située à Paris.<br>
                        Le but de l'entreprise est de crée une application web qui répond à des besoins en terme
                        de SEO.<br>
                        L'application sur laquelle le stage a été effectué est basée sur le langage Angular et permet 
                        une analyse des sites clients afin de leur proposer les changements nécessaires à l'adoption 
                        d'un meilleur référencement.
                        </p>
                        <h4>Rôle dans l'entreprise :</h4>
                        <p>
                        Développeur Angular en charge de la création et de la modification 
                        de fonctions et méthodes en lien avec les interactions clients enrengistrées 
                        sur une base de données MongoDB.
                        Correction de bug et ajout de fonctionnalités qui comportent une intervention sur 
                        le front-end ainsi que le back-end de la solution logiciel.
                        </p>
            </div>
            <img src="../assets/semwee.jpg" alt="logo">
        </div>
        <h4>Compétences concernées : </h4>
        <div class="competences">
            <div class="competence">
                <img src="../assets/angular.png" alt="logo">
                <p>
                Connaissance de la syntaxe et des règles autour d'Angular
                et de la communication avec les modules qui accompagnent le projet.
                </p>
            </div>
            <div class="competence">
            <img src="../assets/htmlcss.png" alt="logo">
                <p>
                Mise en place et modification des éléments de l'interface graphique
                de l'application web.
                </p>
            </div>
            <div class="competence">
            <img src="../assets/mongodb.png" alt="logo">
                <p>
                Ajout, modification, extraction et suppression des données en lien avec l'application
                web lors des interactions de l'utilisateur.
                </p>
            </div>
            <div class="competence">
            <img src="../assets/javascript.png" alt="logo">
                <p>
                Création de fonction en lien avec la base de données afin de créer des 
                évènements lors des interactions de l'utilisateur.
                </p>
            </div>
        </div>

        <h4>Méthode de l'entreprise : </h4>
        <div class="methode">
            <p>
            Les méthodes de l'entreprise se basent sur la méthode agile dite, SCRUM.
            Chaque développeur est affecté à une tâche en fonction d'un ordre d'importance 
            et de difficulté.<br>
            Tâche dont il informe son équipe de l'avancée de manière quotidienne à travers 
            des réunions d'entreprise qui permettent de faire le point sur l'état du projet
            par rapport à la progression des individualités.<br>
            Grâce à cette méthode, chacun se voit assigner une mission propre à ses compétences ainsi
            qu'à la durée de son contrat.
            </p>
            <p>
            Afin de suivre l'avancer de chacun, les modifications apportées au projet sont 
            ajoutées à la branche du concerné sur le Github de l'application, ensuite les informations 
            sur celle-ci sont renseignées sur un Trello en fin de journée dans le but de laisser le plus
            d'information aux autres développeurs en cas de reprise de la tâche par un développeur 
            plus compétent ou ayant plus de temps pour remplir la tâche attribuée.
            </p>
        </div>
    </div>
</body>
</html>