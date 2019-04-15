<html>
<head>
    <title>Westerkwartier</title>
    <?php // Fonts ?>

    <?php // Fontawesome ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <?php // Load Bootstrap ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <?php //AOS ?>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <?php // Own CSS ?>
    <link rel="stylesheet" type="text/css" href="../style/style.css">

    <?php // Responsive ?>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <?php //jQuery ?>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

</head>
<body>
<script>
    AOS.init();
</script>
<nav class="navbar navbar-expand-xl navbar-light bg-light fixed-top">
    <div class="container">
        <div class="col-12 col-md-4">
            <a class="navbar-brand" href="#">Parels in het westerkwartier</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="col-12 col-md-8">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../page-fietsroutes.php">Fietsroutes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../page-wandelroutes.php">Wandelroutes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../page-kinderroutes.php">Kinderroutes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../page-hoe-werkt-het.php">Hoe werkt het?</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>