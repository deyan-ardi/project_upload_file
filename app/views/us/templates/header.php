<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link CSS -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
    <!-- Jquery -->
    <script src="<?= BASEURL; ?>/js/jquery-3.4.1.min.js"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/fd8370ec87.js" crossorigin="anonymous"></script>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@700&display=swap" rel="stylesheet">
    <!-- Icon -->
    <link rel="shortcut icon" href="" type="image/x-icon">
    <title>UPLOAD FILE -
        <?= $data['judul']; ?>
    </title>
</head>

<body>
    <section id="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary navbar-color">
            <div class="container">
                <a class="navbar-brand" href="<?= BASEURL ?>/us/index">MY WEBSITE</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav" id="nav">
                        <? if ($data['id'] == "1") {
                            echo '<li class="nav-item ' . $data['class'] . '">';
                        }
                        ?>
                        <a class="nav-link" href="<?= BASEURL ?>/us/index"> Upload File <span
                                class="sr-only">(current)</span></a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </section>