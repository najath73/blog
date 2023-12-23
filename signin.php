<?php
session_start();
require_once("./db.php");
require_once("./signinControler.php");
require_once("./header.php");
?>

<div class="container">
    <?php if(!empty($error_signin)):?> 
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <small> <?= $error_signin ?></small> 
        </div>
        
        <script>
          $(".alert").alert();
        </script>
    <?php endif;?>
    <h1 class="display-4">Connexion</h1>
    <?php if(!empty($fieldError)):?> 
        <small id="emailHelp" class="form-text text-danger"><?= "* " . $fieldError ?> </small>
    <?php endif;?>
    <form method="POST" action="">
        <div class="form-group">
            <label for="exampleInputEmail1">Email </label>
            <input type="email" class="form-control" id="exampleInputEmail1" value="<?= $email ?? '' ?>" placeholder="Enter email" name="email">
            <?php if(!empty($emailError)):?> 
                <small id="emailHelp" class="form-text text-danger"><?= $emailError ?> </small>
            <?php endif;?>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword">Password</label>
            <input name="motDePasse"  type="password" value = "<?= $motDePasse ?? '' ?>" class="form-control" id="exampleInputPassword" placeholder="Password">
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