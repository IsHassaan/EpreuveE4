<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/veille_technologique.module.css?v=<?php echo time() ?>">
    <title>Veille technologique</title>
</head>
<body>
<?php include "navbar.php" ?>


<?php
$url = "https://www.lesnumeriques.com/rss.xml";
$feed = simplexml_load_file($url);
if ($feed) {
    $items = $feed->channel->item;
    if ($items) {
        echo "<div class='veille_tech'>";
        $count = 0;
        foreach ($items as $item) {
            if ($count >= 10) {
                break;
            }
            echo "<div class='flux'>";
            echo "<img src='".$item->image."'></img>";
            echo "<div class='flux_text'>"
            .$item->title
            .$item->description."
            </div>";
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



<?php include "contact.php" ?>
</body>
</html>