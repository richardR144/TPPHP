<?php require_once('../config/config.php');


// fonction pour créer des emails
function checkIfFormIsValid($request) {
    if ( 
        isset($request['lastname']) &&
        !empty($request['lastname']) && 
        !empty($request['email']) && 
        !empty($request['message']) &&

        pregmatch("/^[a-zA-Z0-9.%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $request['email'])

     ) {
        return true;
     } else {
        return false;
     }
} ?>

