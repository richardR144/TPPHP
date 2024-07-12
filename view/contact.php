<?php require_once('../config/config.php'); ?>
<!-- appeller les require_once pour intégrer du html -->
 
<? require_once('../controller/contactController.php'); ?>


<!-- formulaire -->

<body>

<header>
<img src="https://cfcdn.apowersoft.info/astro/picwish/_astro/scene-logo-after.310a7581.png" alt="logo">
<nav>
    <ul>
        <li><a href="http://localhost/TpPHP/view/contact.php">contact</a></li>
        <li><a href="http://localhost/TpPHP/view/article.php">article</a></li>
        <li><a href="http://localhost/TpPHP/view/categories.php">categories</a></li>
        <li><a href="http://localhost/TpPHP/view/index.php">index</a></li>
        <li><a href="http://localhost/TpPHP/view/reviews.php">reviews</a></li>
       <li><a href="http://localhost/TpPHP/view/controller/productsController.php">Product</a></li> 
    </ul>
</nav>
</header>

<? require_once('../partial/header.php'); ?>

    <main>
        <form method="post">
            <label>
                <input type ="text" placeholder ="Entrez votre name" name="lastname"/>
                <input type = "email" placeholder="Entrez votre mail" name="mail"/>
                <input type = "text" placeholder="Entrez votre message" name="message"/>
                <input type = "submit" placeholder="" name="submit"/>
            </label>
        </form>


        <?php if (isset($_REQUEST['lastname'])) { ?>

            <?php if (checkIfFormIsValid($_REQUEST)) { ?>

                <p>Merci <?php echo $_REQUEST['lastname'] ?> de votre message. Notre équipe répondra dans les plus brefs délais</p>

            <?php } else { ?>

                <p>les données sont bien enregistrées</p>

            <?php } ?> 

        <?php } ?> 

</main>

<? require_once('../partial/lateral.php'); ?>

<?php require_once('../partial/footer.php'); ?>

    </main>
</body>