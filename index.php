<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <!--my Css-->
        <link rel="stylesheet" href="style.css">
        <!--Bootstrap css-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!--Google Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    </head>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="index.html" class="navbar-brand">Yohan Zbinden</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-togler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a href="index.html" class="nav-link disabled">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a href="./plus/" class="nav-link">En Savoir Plus</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="mesProjets" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Mes Projets
                    </a>
                    <div class="dropdown-menu" aria-labelledby="mesProjets">
                        <a href="./projets/pathFinding/" class="dropdown-item">path finding</a>
                        <a href="./projets/image-Parser/" class="dropdown-item">Trieur d'image</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <h1>test ssh</h1>
    <form method="post">
        <input type="submit" value="test ssh"/>
        <input type="hidden" name="start" value="true">
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD'] == "post")
        {
            $connection = ssh2_connect("188.155.5.184");
            ssh2_auth_password($connection, 'ubuntu', 'lsavYoZbi2019#');
            $stream = ssh2_exec($connection, "ls /data/");
            var_dump($stream);
        }
    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</html>
