<?php require_once('../config/config.php'); ?>
<?php require_once('../controller/adminCreateArticleController.php');?>
<?php require_once('../view/article.txt')?>

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

<main>
    <!-- créer un formulaire -->
    <h2>title</h2>
    <h2>content</h2>
    <h2><img type="text"></h2>

    <form method="post">
    
        <label>title</label>
        <input type="text" name="title"/>
    
        <label>content</label>
        <input type="text" name="content"/>     

        <label>image</label>
        <input type="text" name="image"/>

        <input type="submit" value="créer"/>
    </form>

 <!-- savoir si la requete est de type post-->
<!-- permet d'afficher du html -->

<?php if (isRequestPost()) { ?>
    <p>Votre titre est :<?php echo $_POST['title']?></p>
    <p>Votre content est :<?php echo $_POST['content']?></p>
    <p>Votre img est :<?php echo $_POST['image']?></p>
<?php } ?>


<?php if (isRequestPost()) { ?>
<!-- si le getFormErrors est vide alors c'est qu'il n'y a pas d'erreurs -->
<?php if (empty(getFormErrors())) { ?>
    

    <p>L'article a bien été enregistré</p>

<?php } else { ?>
<!-- pour chaque erreur afficher erreur -->
    <?php foreach(getFormErrors() as $error) { ?>

        <p><?php echo $error; ?></p>

    <?php }  ?>

<?php } ?>
        
 <?php } ?>    
</main>

<?php
    require_once('../partial/lateral.php');
    require_once('../partial/footer.php'); 
?>