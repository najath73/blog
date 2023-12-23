<?php
require_once("./db.php");
require_once("./signinControler.php");
require_once("./header.php");
?>

<div class="container">

    <h1 class="display-4">Connexion</h1>
    <?php if(!empty($fieldError)):?> 
        <small id="emailHelp" class="form-text text-danger"><?= "* " . $fieldError ?> </small>
    <?php endif;?>
    <form method="POST" action="">
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
        <input class="btn btn-outline-success" type="submit" name="submit" value="Inscription">
        
    </form>
</div>
<?php
require_once("./footer.php");
?>