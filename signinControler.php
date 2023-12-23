<?php

if(isset($_POST['submit'])){

    
    $email  = $_POST['email'];
    $motDePasse  = $_POST['motDePasse'];

    if(!empty($email) and !empty($motDePasse) ) {
        $mdpError = strlen($motDePasse) > 8 ? "" : "Votre mot de passe doit avoir plus de 8 caractères";   
        $emailError = filter_var($email, FILTER_VALIDATE_EMAIL) ? "" : "L'adresse e-mail n'est pas valide";


        if (empty($mdpError) and(empty($emailError))){
            $select_user = $db->prepare("SELECT * FROM users WHERE  email=:email ");
            $select_user->execute([
                "email" => $email
            ]);
            $select_user = $select_user->fetch(PDO::FETCH_ASSOC);
            if (password_verify($motDePasse, $select_user['password'])) {
                $_SESSION["user_id"] = $select_user['id'];
                header('location: index.php');
            } else {
                $error_signin = "Adresse mail ou mot de passe incorect";
            }
        }
        
           
    }else{
        $fieldError =  "Tous les champs sont requis";
    }
}