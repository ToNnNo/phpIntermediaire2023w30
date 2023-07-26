<?php

use Classes\Password\Password;

require_once '../autoload.php';

$password = new Password();

$userPasswordInBdd = '$2y$10$5ShMIEtVOF/Q3a5M2/HelOYud371CF6lB8zqjWHCtTalRpZW9HWUW';

echo $password->verify("coucou", $userPasswordInBdd) ? "Password Correct": "Password Incorrect";

/*$name = "John";
echo "<p>Bonjour $name</p>";
echo '<p>Bonjour $name</p>';*/

if(!empty($_POST)) {

    $userPassword = $_POST['_password'];

    $passwordHash = $password->hash($userPassword);
}

/**
 * Les 2 écritures sont identiques
 * 
 * echo $userPassword ?? '';
 *
 * if($userPassword) {
 *      echo $userPassword;
 *  } else {
 *      echo '';
 *  }
 */
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hash Password</title>
</head>
<body>
    <h1>Password</h1>

    <?php if(isset($passwordHash)): ?>
        <p>Password: <?php echo $passwordHash; ?></p>
    <?php endif; ?>
    
    <form method="post" action="">
        <div style="margin-bottom: 1rem">
            <label>Mot de passe:</label>
            <input type="text" name="_password" value="<?php echo $userPassword ?? '' ?>" />
        </div>

        <button>Hash Password</button>
    </form>
</body>
</html>