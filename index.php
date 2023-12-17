<?php
require_once("./signupControler.php");

require_once("./header.php")
?>


<div class="container">

    <h1 class="display-4">Inscription</h1>
    <?php if(!empty($fieldError)):?> 
        <small id="emailHelp" class="form-text text-danger"><?= "* " . $fieldError ?> </small>
    <?php endif;?>
    <form method="POST" action="">
        <div class="form-group">
            <label for="exampleInputName">Nom</label>
            <input name= "nom" type="text" class="form-control" id="exampleInputName"  placeholder="Name"> <div class="form-group">
            <?php if(!empty($nomError)):?> 
                <small id="emailHelp" class="form-text text-danger"><?=  $nomError ?> </small>
            <?php endif;?>
        </div>
        <div class="form-group">
            <label for="exampleInputfirstName">Prenom</label>
            <input name= "prenom" type="text" class="form-control" id="exampleInputfirstName"  placeholder="firstName"> <div class="form-group">
            <?php if(!empty($prenomError)):?> 
                <small id="emailHelp" class="form-text text-danger"><?= $prenomError ?> </small>
            <?php endif;?>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email </label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
            <?php if(!empty($emailError)):?> 
                <small id="emailHelp" class="form-text text-danger"><?= $emailError ?> </small>
            <?php endif;?>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name="motDePasse1"  type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            <?php if(!empty($mdpError)):?> 
                <small id="password2Help" class="form-text text-danger"><?= $mdpError ?> </small>
            <?php endif;?>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword2">Confirm Password</label>
            <input name="motDePasse2"  type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
            <?php if(!empty($mdpError2)):?> 
                <small id="password2Help" class="form-text text-danger"><?= $mdpError2 ?> </small>
            <?php endif;?>
        </div>
        <input class="btn btn-outline-success" type="submit" name="submit" value="Inscription">
        
    </form>
</div>

<?php
require_once("./footer.php");
?>