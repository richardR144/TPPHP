<?php
require_once('../config/config.php');
require_once('../controller/commandController.php')
?>


// Première fonction pour reformater la date
<?php function adaptDateFormat($date) {
    $dateTime = DateTime::createWithFormat('dd-mm-yy', $date);
    return $dateTime->format('yy/mm/dd');
}

// Deuxième partie de la fonction pour permettre de reformater la date de caque commande (maybe présentes et à venir?)

foreach ($orders as &$order) {
    $order['date'] = adaptDateFormat($order['date']);
}

// Inclure la vue pour afficher les commandes 

// /!/ ATTENTION : vérifier que le chemin est correct car pas prise en compte de l'architecture dossier avec un propre fichier views
include 'view.php';
?>
   