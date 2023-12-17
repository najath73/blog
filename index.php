<?php

if(!empty($_POST['email']) and !empty($_POST['motDePasse1']) and !empty($_POST['motDePasse2'])and !empty($_POST['nom']) and !empty($_POST['prenom']) )
{
    
    $strings = array('nom', 'prenom');
    foreach ($strings as $testcase) {
        if (ctype_alpha($testcase)) {
          } else {
          echo "La chaîne $testcase contient des caractères non-alphabétique.\n";
        }
      }
    if(strlen($_POST['motDePasse1'])>8){ 

        }else{
        echo "Votre mot de passe doit etre superieur à 8 ";
        }
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        
      }else{
        echo "L'adresse e-mail n'est pas valide";
      }
    if($_POST['motDePasse1']=$_POST['motDePasse2'])  {

        }else{
            echo "les mots de passe ne sont pas identiques";
        }
    
}else{
    echo "Tous les champs sont requis";
}

?>

<!doctype html>
<html lang="fr">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #01071b;">
        <a class="navbar-brand" href="#">Najath</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="#">Action 1</a>
                        <a class="dropdown-item" href="#">Action 2</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class="container">

        <h1 class="display-4">Inscription</h1>
        <form method="POST" action="">
            <div class="form-group">
                <label for="exampleInputEmail1">Email </label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input name="motDePasse1"  type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> <div class="form-group">
                
            </div>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Confirm Password</label>
                <input name="motDePasse2"  type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> <a id= "showText" class="btn btn-secondary" onclick="myFunction()">Afficher</a>
            </div>
            <div class="form-group">
                <label for="exampleInputName">Name</label>
                <input name= "nom" type="text" class="form-control" id="exampleInputName"  placeholder="Name"> <div class="form-group">
            </div>
            <div class="form-group">
                <label for="exampleInputfirstName">First Name</label>
                <input name= "prenom" type="text" class="form-control" id="exampleInputfirstName"  placeholder="firstName"> <div class="form-group">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            
        </form>
    </div>

    <script>
        function myFunction() {
            show = document.getElementById("exampleInputPassword1")
            showText= document.getElementById("showText")
            if(show.type == "password"){
                show.type = "text";
                showText.innerHTML = 'Masquer'
            }else{
                show.type = "password";
                showText.innerHTML = 'Afficher'
            }
        }
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>