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