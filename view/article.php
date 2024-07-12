<?php require_once('../config/config.php'); ?>

<header>
<img src="https://cfcdn.apowersoft.info/astro/picwish/_astro/scene-logo-after.310a7581.png" alt="logo">
<nav>
    <ul>
        <li><a href="http://localhost/TpPHP/view/contact.php">contact</a></li>
        <li><a href="http://localhost/TpPHP/view/article.php">article</a></li>
        <li><a href="http://localhost/TpPHP/view/categories.php">categories</a></li>
        <li><a href="http://localhost/TpPHP/view/index.php">index</a></li>
        <li><a href="http://localhost/TpPHP/view/reviews.php">reviews</a></li>
        <li><a href="http://localhost/TpPHP/view/products.php">produits</a></li>
    </ul>
</nav>
</header>

<?php

    // Lire le contenu du fichier dans une chaîne
    $data = file_get_contents('data.txt');

    if ($data === false) {
        echo "Impossible de lire le fichier";
    } else {
        echo $data;
    };

   
?> 

<?php

    require_once('../partial/lateral.php');
    require_once('../partial/footer.php'); 

?>