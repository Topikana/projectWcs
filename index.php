<?php
$page = (isset($_GET['page']) ? $_GET['page'] : "index");
$file = $page . '.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="/img/mafavicon.png"/>
    <link rel="stylesheet" href="css/main.css">
    <title>
        <?php
        switch ($page) {
            case 'index' :
                echo 'Accueil';
                break;
            case 'restaurant' :
                echo 'Nos Restaurants';
                break;
            case 'devenir':
                echo 'Devenir Franchisé';
                break;
        }
        ?>
    </title>
</head>
<body>
<header>
    <?php include "inc/header.php"; ?>
</header>
<main>
    <?php include "page/$file"; ?>
</main>
<footer>
    <?php include "inc/footer.php"; ?>
</footer>

<script
        src="http://code.jquery.com/jquery-3.1.1.js"
        integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>
</html>
