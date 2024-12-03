<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">


    <title>ENT</title>
</head>
<body>
    <h1>ENT</h1>
    <nav class="navbar navbar-expand-sm bg-light">
        <div class="container">
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">A propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container d-sm-xs-flex flex-column mb-5">
        <main>
            <div class="row">
                <div class="col-xs col-sm mx-5">
                    <h2>Emploi du temps du jour</h2>
                    <?php include "edt.php"
                    ?>
                </div>
                <div class="col-xs col-sm mx-5">
                    <h2>Derniers cours visités</h2>
                    <!-- Card à rajouter -->
                </div>
                <div class="col-xs col-sm mx-5">
                    <h2>Dernières notes</h2>
                    <!-- Card à rajouter -->
                </div>
            </div>
        </main>


    </div>
</body>
</html>