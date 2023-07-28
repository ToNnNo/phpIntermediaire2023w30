<?php 
require_once "../autoload.php";
$controller = new Controller\IndexController();
['user' => $user] = $controller->index();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <header>
            <h1>Accueil</h1>
        </header>

        <main>
            <p>Bonjour <?php echo $user->getName(); ?></p>

            <a href="logout.php" class="btn btn-sm btn-outline-dark">
                Se Déconnecter
            </a>
        </main>
    </div>
</body>
</html>