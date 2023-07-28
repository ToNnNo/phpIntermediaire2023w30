<?php
require_once "../autoload.php";
$connection = new Controller\ConnectionController();
['form_errors' =>$form_errors, 'username' => $username] = $connection->login();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid" style="min-height: 100vh">
        <main class="row align-items-center">
            <div class="offset-4 col-4">
                <h1>Connexion</h1>

                <?php if(array_key_exists('authenticate', $form_errors)): ?>
                    <?php foreach($form_errors['authenticate'] as $error): ?>
                        <p class="text-danger"><?php echo $error; ?></p>
                    <?php endforeach; ?>
                <?php endif; ?>

                <form method="post" action="">
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" name="_username" value="<?php echo $username ?>" />
                        <?php if(array_key_exists('_username', $form_errors)): ?>
                            <?php foreach($form_errors['_username'] as $error): ?>
                                <p class="text-danger"><?php echo $error; ?></p>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="_password" value="" />
                        <?php if(array_key_exists('_password', $form_errors)): ?>
                            <?php foreach($form_errors['_password'] as $error): ?>
                                <p class="text-danger"><?php echo $error; ?></p>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <button class="btn btn-outline-dark">Se connecter</button>
                </form>
            </div>
        </main>
    </div>
</body>
</html>