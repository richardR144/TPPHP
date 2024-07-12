<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<header>
<img src="https://cfcdn.apowersoft.info/astro/picwish/_astro/scene-logo-after.310a7581.png" alt="logo">
<nav>
    <ul>
        <li><a href="http://localhost/TpPHP/view/contact.php">contact</a></li>
        <li><a href="http://localhost/TpPHP/view/article.php">article</a></li>
        <li><a href="http://localhost/TpPHP/view/categories.php">categories</a></li>
        <li><a href="http://localhost/TpPHP/view/index.php">HOME</a></li>
        <li><a href="http://localhost/TpPHP/view/reviews.php">reviews</a></li>
        
    </ul>
</nav>
</header>

<?php 

require_once('../config/config.php');
require_once('../controller/indexControler.php');


$categories = [
    [
        'id' => 1,
        'name' => 'Sport'
    ],
    [
        'id' => 2,
        'name' => 'Politique'
    ],
    [
        'id' => 3,
        'name' => 'Economie'
    ],
    [
        'id' => 4,
        'name' => 'Culture'
    ],
    [
        'id' => 5,
        'name' => 'Société'
    ]
];
?>

<main>
    <section>
    <h1>La liste des catégories : </h1>

<?php foreach($categories as $category) { ?>

    <article>
        <h2><?php echo $category['name']; ?></h2>
    </article>

<?php } ?>
    </section>
    
</main>
<?php
require_once('../partial/footer.php');?>
<?php
require_once('../partial/lateral.php');?>


