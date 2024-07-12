
<?php
require_once('../config/config.php');?>

<?php
require_once('../controller/reviewsController.php');?>

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


<main>
    <section>
        <h1>reviews</h1>
        <?php foreach($reviews as $review){
        

            echo "<article>";

            echo "<h2>" . $review["user"] . "</h2>";

            echo "<p>" . $review["message"]."</p>";

            echo "<p>" . $review["rating"]. "</p>";
            
            echo "</article>";
        
        }?>
        </section>


<?php
require_once('../partial/footer.php');?>
<?php
require_once('../partial/lateral.php');?>