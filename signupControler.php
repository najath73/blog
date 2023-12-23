<?php

if(isset($_POST['submit'])){

    $nom = $_POST['nom'];
    $prenom  = $_POST['prenom'];
    $email  = $_POST['email'];
    $motDePasse1  = $_POST['motDePasse1'];
    $motDePasse2  = $_POST['motDePasse2'];
    if(!empty($email) and !empty($motDePasse1) and !empty($motDePasse2)and !empty($nom) and !empty($prenom) ){

        $nomError = ctype_alpha($nom) ? "" : "Le nom contient des caractères non-alphabétiques.\n";
        $prenomError = ctype_alpha($prenom) ? "" : "Le prenom contient des caractères non-alphabétiques.\n";
        $mdpError = strlen($motDePasse1) > 8 ? "" : "Votre mot de passe doit avoir plus de 8 caractères";
        $mdpError2= ($motDePasse1 == $motDePasse2) ? "" : "Les mots de passe ne sont pas identiques";
        $emailError = filter_var($email, FILTER_VALIDATE_EMAIL) ? "" : "L'adresse e-mail n'est pas valide";
        if(empty($nomError) and empty($prenomError) and empty($mdpError) and empty($mdpError2) and empty($emailError)){
            $insert_user = $db->prepare("INSERT INTO users(first_name, last_name, email, password, creation_date) values(:first_name, :last_name, :email, :password, :creation_date) ");
            $resultat = $insert_user->execute([
                "first_name" => $prenom,
                "last_name" => $nom,
                "email" => $email,
                "password" => password_hash($motDePasse1, PASSWORD_BCRYPT), //sha1 obselèste pas recommandé
                "creation_date" => date("Y-m-d H:i:s")
            ]);

            if ($resultat ==1)
                header('location: signin.php');

            $error_signup = "Email existe déja";
        }
    }else{
        $fieldError =  "Tous les champs sont requis";
    }
}
