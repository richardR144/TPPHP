<?php 
// Lien (contre les errors)
require_once('../config/config.php');?>

<?php  session_start();


// je fais une fonction qui vérifie que la variable super-globale $_SERVER est sur la méthode request POST
function isRequestPost() {
    return $_SERVER["REQUEST_METHOD"]==="POST";
};


        // Vérifiez si les champs "title", "content" et "image" sont présents dans le formulaire
        // je fais la fonction isFormValid et si la variable globale contient titre, content et image,  je retourne true
    // function isFormDataValid() {
    //     return (isset($_POST['title'])) && (isset($_POST['content'])) && (isset($_POST['image']));
        
// }
        
        // Vérifier si les données sont valides
        // Si/if notre fonction est vrai alors j' affiche "title, content, img" sinon/else elle renvoie à "title, content et img"
        // if (isFormDataValid()) {
        //     // Afficher le message
        //     echo  $_POST['title'];
        //     echo  $_POST['content'];
        //     echo  $_POST['image'];
        // } 


            // Dans ma fonction je lui demande si il contient plus ou moins de ma chaîne de caractère title, content et image. si c'est le cas, ça retourne true
        function isFormDataValid() {
            return (mb_strlen($_POST['title'])>2) && 
            (mb_strlen($_POST['content'])> 10) && 
            (mb_strlen($_POST['image'])<5);
        }
// je créer ma fonction getFormErrors qui retourne un tableau 
function getFormErrors(){
    $errors = [];
    // si le titre ne comporte pas plus de 2 chaines de caractères alors ça ajoute dans le tableau une message
    if(mb_strlen($_POST['title']) <2){
        $errors[] = "Le titre doit faire plus de 2 caractères";
    }
        if (mb_strlen($_POST['content']) < 5) {
            $errors[] = "Le content doit faire plus de 5 caractères";
    }
        if (mb_strlen($_POST['content']) < 6) {
        $errors[] = "Le image doit contenir plus de 6 caractères";
    }

    // je retourne le tableau avec les message d'erreurs
        return $errors;
   
    
}
    // je récupère les données du formulaire et je les enregistre dans un fichier qui devrait apparaitre dans le "article.txt

    if (isRequestPost() && empty(getFormErrors())) {

        // je récupère la valeur des champs de formulaire envoyé
        // grâce à $_POST, avec en clé le nom du champs à récupérer
        $title = $_POST['title'];
        $content = $_POST['content'];
        $image = $_POST['image'];
        // permet de créer une date automatiquement
        $createdAt = new DateTime();
        $handle = fopen("../articles.txt", 'a');
        $formattedDate = $createdAt->format('d/m/y');
        $formattedDate = $createdAt->format('d/m/y');
        $article = "Le titre est : " .$title. ", le contenu est : " .$content." et l'image est : ".$image . "Le" . $formattedDate. "\n";
    
        if ($handle) {
            fwrite($handle, $article);
            fclose($handle);
        } 
    
    }
         if ($_Session['username'] != "richard") {
        header("location: http://localhost/TpPHP/view/connexion.php");?>

     <?php } ?>