<?php

if(isset($_POST['submit'])){

    
    $email  = $_POST['email'];
    $motDePasse1  = $_POST['motDePasse1'];

    if(!empty($email) and !empty($motDePasse1) ) {
        $mdpError = strlen($motDePasse1) > 8 ? "" : "Votre mot de passe doit avoir plus de 8 caractères";   
        $emailError = filter_var($email, FILTER_VALIDATE_EMAIL) ? "" : "L'adresse e-mail n'est pas valide";
            if (empty($mdpError) and(empty($emailError))){
                $select_user = $db->prepare("SELECT * FROM users WHERE ( email=$email and password_hash($motDePasse1, PASSWORD_BCRYPT)=$motDePasse1");
                if($select_user->num_rows > 0) { 
                    echo "Connection réusssi";
                }else{echo"Utilisateur inexistant, Veuillez vous inscrire";}


              
            }
        
           
    }else{$fieldError =  "Tous les champs sont requis";

    }
}