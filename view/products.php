<?php require_once('../config/config.php');?>
<?php require_once('../controller/productsController.php')?>     

 

<main>
<?php require_once('../partial/header.php'); ?>
<form>

<label >Categorie : </label>
<select name="category">

    <?php foreach($productCategories as $category) { ?>
        <option value="<?php echo $category; ?>"><?php echo $category; ?></option>
    <?php } ?>

</select>

<label>Prix minimum : </label>
<input type="number" name="minPrice" min="<?php echo $productMinPrice; ?>" max="<?php echo $productMaxPrice; ?>"/>

<label>Prix maximum : </label>
<input type="number" name="maxPrice" min="<?php echo $productMinPrice; ?>" max="<?php echo $productMaxPrice; ?>" />


<label >Trier par : </label>
<select name="sort">

    <option value="">Par défaut</option>
    <option value="price">Prix</option>
    <option value="name">Nom</option> 
    <option value="date">Date</option>  
</select>

<button type="submit">Filtrer</button>

</form>
    <section>
        <h2>products</h2>
            <?php foreach($products as $product){?>


          <!-- j'utilise la classe Datetime avec le mot clé "new" et je lui passe ?
			 en parametre ma date en chaine de caractères. Datetime créé une "vraie" date
			 que l'on va pouvoir manipuler : afficher uniquement le mois, ou l'année, avec 
			 le format que l'on veut. On peut aussi comparer deux dates (connaitre la plus récente etc)
			 ou encore ajouter x secondes ou x mois à une date. -->     
               
		
            <h2><?php echo $product['name']; ?></h2>
            <p>Prix : <?php echo $product['price']; ?> </p>
            <p><?php echo $product['description']; ?> </p>
            <p>Categorie : <?php echo $product['category']; ?> </p>
            <?php $createAtDateTime = new dateTime($product['createAt']); ?>
            <p>Date de creation : <?php echo $createAtDateTime->format("d/m/y"); ?></p>
</article>
<?php
        $date = new DateTime($order['date']);
        echo "<p>" . $date->format('F d, Y') . "</p>";
            <?php } ?>
           
    </section>
    <?php require_once('../partial/lateral.php'); ?>
</main>





















<?php require_once('../partial/footer.php'); ?>