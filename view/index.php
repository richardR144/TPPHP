
<header>
<img src="https://cfcdn.apowersoft.info/astro/picwish/_astro/scene-logo-after.310a7581.png" alt="logo">
<nav>
    <ul>
        <li><a href="http://localhost/TpPHP/view/contact.php">contact</a></li>
        <li><a href="http://localhost/TpPHP/view/article.php">article</a></li>
        <li><a href="http://localhost/TpPHP/view/categories.php">categories</a></li>
        <li><a href="http://localhost/TpPHP/view/index.php">index</a></li>
        <li><a href="http://localhost/TpPHP/view/reviews.php">reviews</a></li>
        
    </ul>
</nav>
</header>



<?php
require_once('../config/config.php');
require_once('../controller/indexControler.php');



// Déclaration d'une variable
//  $message = "Bonjour la piscine";

// echo $message;

// $name = "Richard";
// echo $name;
// $isDev = false;

// if ($isname){
//     echo $name;
// }else {
//     echo "";
// }
                // Boucle 
// for ($i = 0; $i < 10; $i++){
// //  comparaison strict ===  // 
// if ($i === 4) {
//     echo $message;
// }
// }

// $technos = ['html', 'css', 'php'];

// // echo $technos[0];
// foreach ($technos as $techno) {
//  echo "<h1>".$techno." </h1>";

//  mes texte et mes images


echo '<head><link rel="stylesheet" type="text/css" href="style.css"></head>';


// echo "<body>";

// require_once('../partial/header.php');




// foreach ($articles as $article) {
//     if ($article['isPublished'] && $article ['author'] === 'David Trezeguet') {
//         echo "<h2>".$article['title']."</h2>";
//         // echo "<p>".$article['content']."</p>";
//         if ( strlen($article['content']) > 20 ) {
//             echo "...";
//         } else {
//             echo "p" . $article["content"] . "</p";
//         }

//         echo "<img src=".$article['img']." />";

//     } 
// }

// echo "</body>";
// je créé une fonction nommée "isStringTooLong"
// cette fonction prend en parametre la chaine de caractères à vérifier
// nommée $stringToCheck

// cette fonction retourne un booléen : mb_strlen retourne un booléen
// ce qui veut dire que quand j'appelle cette fonction
// je récupère un booléen





// echo "<body>";

// 	echo "<main>";

// 		foreach($articles as $article) {

// 			if ($article['isPublished']) {

// 				echo "<article>";

// 					echo "<h2>" . $article["title"] . "</h2>";

// 					echo "<img src=".$article["img"]." />";


// 					if (isStringTooLong($article['content'])) {
// 						echo "<p>" . shortenString($article['content']) . "...</p>";
// 					} else {
// 						echo "<p>" . $article["content"] . "</p>";
// 					}

// 				echo "</article>";

// 			} else {
// 				echo "<h2>" . $article['title'] . ": n'est pas publié</h2>";
// 			}
// 		}

// 	echo "</main>";

// echo "</body>";

<h1>Liste des commandes</h1>
<table border="1">
	<tr>
		<th>Client</th>
		<th>Amount</th>
		<th>Products</th>
		<th>Date</th>
	</tr>
	<?php foreach ($orders as $order): ?>
	<tr>
		<td><?php echo $order['customer'];?></td>
		<td><?php echo $order['amount'];?></td>
		<td><?php echo implode(" , ", $order['products']);?></td>
		<td><?php echo $order['date'];?></td>
	</tr>
	<?php endforeach; ?>
</table>
<?php
require_once('../partial/lateral.php');
require_once('../partial/footer.php');?> 