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

<div class="vj_rss">
<h2>Sources d'étude</h2>
<?php
$url = "https://lejournal.cnrs.fr/rss/392";
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
            echo "<h3>{$item->title}</h3>";
            echo "<p>{$item->description}</p>";
            echo "<a href='{$item->link}' target='blank'>Voir plus</a>";
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

<?php
$url = "https://www.zdnet.fr/feeds/rss/cybersécurité";
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
            echo "<h3>".utf8_decode($item->title)."</h3>";
            echo "<p>".utf8_decode($item->description)."</p>";
            echo "<a href='{$item->link}' target='blank'>Voir plus</a>";
            echo "</div>";
            $count++;
        }
        
        echo "</div>";
    } else {
        echo "Erreur de lecture";
    }
} else {
    echo "Flux RSS invalide";
}
?>


</div>
<?php include "contact.php" ?>
</body>
</html>