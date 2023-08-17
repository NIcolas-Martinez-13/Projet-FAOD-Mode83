<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Formation</title>
</head>

<body>
    <header>
        <?php include('header.html'); ?>
    </header>
    <main>
        <div>
            <!-- Fil d'Ariane -->
            <?php include('fil_ariane.html'); ?>
            <!-- Filtre de recherche -->
            <?php include('filtre.html'); ?>
            <!-- Catalogue -->
            <?php include('catalogue.html'); ?>
            <!-- back to top btn -->
            <?php include('backtotop_btn.html'); ?>
        </div>

    </main>
    <footer>
        <?php include('footer.html'); ?>
    </footer>
</body>

</html>