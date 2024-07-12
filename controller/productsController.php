<?php require_once('../config/config.php');?>
<?php require_once('../view/products.php')?>

<?php

$products = [
    [
        'name' => 'Aspirateur',
        'price' => 100,
        'category' => 'electro-menager',
        'description' => 'Description du produit 1',
        'createAt' => "22-03-2024"
    ],
    [
        'name' => 'Frigo',
        'price' => 200,
        'category' => 'electro-menager',
        'description' => 'Description du produit 2',
        'createAt' => "17-05-2024"
    ],
    [
        'name' => 'Four',
        'price' => 300,
        'category' => 'electro-menager',
        'description' => 'Description du produit 3',
        'createAt' => "01-10-2024"
    ],
    [
        'name' => 'Télévision',
        'price' => 400,
        'category' => 'electro-menager',
        'description' => 'Description du produit 4',
        'createAt' => "22-03-2024"
    ],
    [
        'name' => 'Ordinateur',
        'price' => 500,
        'category' => 'informatique',
        'description' => 'Description du produit 5',
        'createAt' => "01-07-2024"
    ],
    [
        'name' => 'Tablette',
        'price' => 600,
        'category' => 'informatique',
        'description' => 'Description du produit 6',
        'createAt' => "28-02-2024"
    ],
    [
        'name' => 'Smartphone',
        'price' => 700,
        'category' => 'informatique',
        'description' => 'Description du produit 7',
        'createAt' => "12-12-2024"
    ],
    [
        'name' => 'Appareil photo',
        'price' => 800,
        'category' => 'informatique',
        'description' => 'Description du produit 8',
        'createAt' => "20-09-2024"
    ],
    [
        'name' => 'Vélo',
        'price' => 900,
        'category' => 'sport',
        'description' => 'Description du produit 9',
        'createAt' => "22-03-2022"
    ],
    [
        'name' => 'Tapis de course',
        'price' => 1000,
        'category' => 'sport',
        'description' => 'Description du produit 10',
        'createAt' => "22-03-2014"
    ],
    [
        'name' => 'Haltères',
        'price' => 1100,
        'category' => 'sport',
        'description' => 'Description du produit 11',
        'createAt' => "22-11-2023"
    ],
    [
        'name' => 'Ballon de foot',
        'price' => 1200,
        'category' => 'sport',
        'description' => 'Description du produit 12',
        'createAt' => "10-03-2024"
    ]
];


if (!empty($_GET['category'])) {
	// filtrer les produits, pour récupérer que ceux qui ont la catégorie de l'url

	// j'utilise array filter qui permet de faire une boucle sur tous les produits
	// et de ne récupérer que ceux qui valident ma fonction de callback
	$products = array_filter($products, function($product) {
		// pour chaque tour de boucle (pour chaque produit) je regarde si la catégorie du produit est la même que celle dans l'url (parametre GET)
		return $product['category'] === $_GET['category'];
	});
}

if (!empty($_GET['price'])) {
    $products = array_filter($products, function($product) {
        return $product['price'] <= (int)$_GET['price'];
    });
}
// on veut afficher les prix mini idem pour les max
if (!empty($_GET['minprice'])) {
    $products = array_filter($products, function($product) {
        return $product['price'] <= (int)$_GET['minprice'];
    });
}
if (!empty($_GET['maxprice'])) {
    $products = array_filter($products, function($product) {
        return $product['price'] >= (int)$_GET['maxprice'];
    });
}



$productCategories = [];

foreach($products as $product) {

	if (!in_array($product['category'], $productCategories)) {
		$productCategories[] = $product['category'];
	}

}

$productMinPrice = $products[0]['price'];

foreach($products as $product) {
	if ($product['price'] < $productMinPrice) {
		$productMinPrice = $product['price'];
	}
}


$productMaxPrice = $products[0]['price'];

foreach($products as $product) {
	if ($product['price'] > $productMaxPrice) {
		$productMaxPrice = $product['price'];
	}
}


// si j'ai un parametre GET "sort" et qu'il est égal à "price" alors j'utilise la fonction PHP usort qui permet de trier un tableau
if (isset($_GET['sort']) && $_GET['sort'] === 'price') {

	
	// je trie en fonction du prix usort ne retourne pas de nouveau tableau, mais modifie le tableau original ($products)
	usort($products, function ($a, $b) {
		return $a['price'] <=> $b['price'];
	});
}



// usort usort trie le tableau $array en utilisant la fonction de comparaison $callback.
// Les éléments du tableau sont réarrangés selon l’ordre déterminé par la fonction de comparaison.
// Si deux éléments se comparent comme égaux, ils maintiennent leur ordre original.
// Paramètres :
// $array : Le tableau d’entrée que tu souhaites trier.
// $callback : La fonction de comparaison qui doit retourner un entier inférieur à, égal à, ou supérieur à 0 pour comparer les éléments.
// je trie en fonction du prix usort ne retourne pas de nouveau tableau, mais modifie le tableau original ($products)
if (isset($_GET['sort']) && $_GET['sort'] === 'name') {
	usort($products, function ($a, $b) {
		return $a['name'] <=> $b['name'];
	});
}
// sort=Trier
// Comparaison pour trier par date
if (isset($_GET['sort']) && $_GET['sort'] === 'date') {
	usort($products, function ($currentProduct, $nextProduct) {
        $currentProductCreatedAt = new DateTime($currentProduct['createAt']);
        $nextProductCreatedAt = new DateTime($nextProduct['createAt']);
        return $currentProductCreatedAt <=> $nextProductCreatedAt;
	});
}

    


   




    require_once('../partial/lateral.php');
    require_once('../partial/footer.php'); 
?>