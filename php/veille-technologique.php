<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/veille-technologique.module.css?v=<?php echo time() ?>">
    <title>Veille Technologique</title>
</head>
<body>
<?php include "navbar.php" ?>

<div class="vj_intro">
    <h2>Veille technologique</h2>
    <p>
    La veille technologique a pour but de se renseigner et de se tenir informer sur
    des innovation technologiques à travers un travail de recherche et de centralisation des informations
    pertinentes sur un sujet donné.<br>
    Dans notre cas, la veille technologique nous permet de suivre les avancées et les enjeux 
    liés au domaine de l'informatique et du développement de services informatiques dans 
    le contexte actuelle. 
    </p>
</div>

<div class="vj_sujet">
    <h3>Sujet d'étude</h3>
    <p>
    Notre veille juridique va porter sur les objets connectés (IoT) au service
    des organisations.<br>
    C'est dans un contexte de progrès technique et technologique que nous avons pu
    assister à l'amélioration des outils liés à l'informatique et notamment à ce que 
    l'on appel les IoT qui au fil du temps se sont parfait avec des formes de plus en plus
    avancées et recherché jusqu'au point où ces derniers se sont vus implémentés dans une majorité
    des secteurs de notre société.<br>
    Ces outils embarquent des technologies liées à celles présentes sur nos ordinateurs et c'est en ce 
    sens qu'ils s'en trouvent étroitement liés avec le domaine du développement informatique.
    </p>
</div>

<div class="vj_enjeux">
    <h3>Les enjeux des IoT (internet of things)</h3>
    <p>
    Le développement des objets connectés est la conséquence d'une innovation conséquente au niveau de la mobilité, de la durabilité et de la capacité des matériaux que nous possédons aujourd'hui.
    L'implémentation de système informatique dans les objets ouvre ces derniers à de nombreuses possibilités, les objets peuvent à présent collecter des données afin de mieux comprendre les besoins
    des utilisateurs et de s'améliorer en prenant en compte les utilisations les plus importantes.<br>
    Il s'agit également de rendre les objets "intelligents" en apportant des fonctionnalités 
    qui peuvent à présent être améliorées en fonction de la mise à jour apportée par les développeurs.<br>
    L'exemple le plus frappant reste le smartphone qui dépend de moins en moins du matériel qu'il transporte, mais surtout des programmes qui y sont liés.<br>
    Cet apport profite à de nombreuses industries dont la médecine, la sécurité publique ou même le sport, le travail des algorithmes permet de surveiller,
    d'accompagner et de comprendre les situations auxquelles les objets peuvent être confrontés afin de laisser une plus grande liberté à son propriétaire.<br><br>

    Les programmes sont aujourd'hui une nécessité dans la plupart des objets industriels, cette démocratisation comporte de nouveaux débats et enjeux qui sont assez 
    récents pour remettre en cause les économies et la sécurité des industries qui en font l'usage.<br>
    Plus qu'un outil de modernisation, les IoT font l'objet de nombreuses convoitises tant les programmes auxquels ils sont liés peuvent être complexes.<br>
    L'arrivée des technologies dans le milieu industriel pose donc des problèmes de cybersécurité qui, à présent, représentent une 
    grande partie de la productivité et de la recherche des entreprises.<br><br>

    Comme la plupart des innovations, les IoT sont alors la cible de nombreux enjeux
    encore à résoudre et doivent être surveillés afin d'en préserver la sécurité et le potentiel.<br>
    Il est de ce fait évident que les États et entreprises seront tentés d'investir dans ce qu'on 
    pourrait appeler une course à l'innovation dans le but de poursuivre leur croissance et préserver leur intégrité dans un monde en mouvement. 
    </p>
</div>

<div class="vj_rss">
<h2>Sources d'étude<br>
(Newsletter)</h2>
<?php
$url = "https://www.silicon.fr/actualites/cloud/iot/feed";
$feed = simplexml_load_file($url);
if ($feed) {
    $items = $feed->channel->item;
    if ($items) {
        echo "<div class='veille_tech'>";
        $count = 0;
        foreach ($items as $item) {
            if ($count >= 3) {
                break;
            }
            echo "<div class='flux'>";
            echo "<div class='flux_text'>";
                echo "<h4>{$item->title}</h4>";
                echo "<p>{$item->description}</p>";
            echo "</div>";
            echo "<a href='{$item->link}' target='blank'>visiter</a>";
            echo "</div>";
            $count++;
        }
        
        echo "</div>";
    } else {
        echo "Erreur de lecture";
    }
} else {
    echo "Flux RSS invalid";
}

$url = "https://www.usinenouvelle.com/rss/club-inno/iot/";
$feed = simplexml_load_file($url);
if ($feed) {
    $items = $feed->channel->item;
    if ($items) {
        echo "<div class='veille_tech'>";
        $count = 0;
        foreach ($items as $item) {
            if ($count >= 3) {
                break;
            }
            echo "<div class='flux'>";
            echo "<div class='flux_text'>";
                echo "<h4>{$item->title}</h4>";
                echo "<p>{$item->description}</p>";
            echo "</div>";
            echo "<a href='{$item->link}' target='blank'>visiter</a>";
            echo "</div>";
            $count++;
        }
        
        echo "</div>";
    } else {
        echo "Erreur de lecture";
    }
} else {
    echo "Flux RSS invalid";
}



$url = "https://www.usine-digitale.fr/iot/rss";
$feed = simplexml_load_file($url);
if ($feed) {
    $items = $feed->channel->item;
    if ($items) {
        echo "<div class='veille_tech'>";
        $count = 0;
        foreach ($items as $item) {
            if ($count >= 3) {
                break;
            }
            echo "<div class='flux'>";
            echo "<div class='flux_text'>";
                echo "<h4>{$item->title}</h4>";
                echo "<p>{$item->description}</p>";
            echo "</div>";
            echo "<a href='{$item->link}' target='blank'>visiter</a>";
            echo "</div>";
            $count++;
        }
        
        echo "</div>";
    } else {
        echo "Erreur de lecture";
    }
} else {
    echo "Flux RSS invalid";
}

?>


</div>
<?php include "contact.php" ?>
</body>
</html>