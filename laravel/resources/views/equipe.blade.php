<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
        crossorigin="anonymous"
    />
    <link href="../../public/css/styleCbootstrap.css" rel="stylesheet" type="text/css" />
    <link href="../../public/css/style-menu.css" rel="stylesheet" type="text/css" />
    <link
        rel="stylesheet"
        href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap"
        rel="stylesheet"
    />
    <title>Equipe</title>
</head>
<body>
<header class="main-header">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-expand-md navbar-expand-sm navbar-dark shadow bg-dark rounded">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a
                        href="index.html"
                        title="Accueil"
                        class="nav-link"
                        aria-current="page"
                    >Accueil</a
                    >
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link dropdown-toggle active"
                        href="#"
                        id="navbarDropdown"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                        title="Equipe"
                    >Equipe</a
                    >
                    <ul
                        class="dropdown-menu shadow bg-dark rounded"
                        aria-labelledby="navbarDropdown"
                    >
                        <li>
                            <a class="dropdown-item" href="equipe.html">Equipe</a>
                        </li>
                        <li><hr class="dropdown-divider" /></li>
                        <li>
                            <a class="dropdown-item" href="cv-baptiste.html">Baptiste</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="cv-camelia.html">Camelia</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="cv-nathalie.html">Nathalie</a>
                        </li>
                    </ul>
                </li>
                <a href="index.html" class="p-2 text-light"
                ><i class="fas fa-camera"></i
                    ></a>
                <li class="nav-item">
                    <a
                        class="nav-link dropdown-toggle"
                        id="navbarDropdown2"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                        href="#"
                        title="Catalogue"
                    >Catalogue</a
                    >
                    <ul class="dropdown-menu shadow bg-dark rounded" aria-labelledby="navbarDropdown2">
                        <li>
                            <a class="dropdown-item" href="catalogue.html">Tout</a>
                        </li>
                        <li><hr class="dropdown-divider" /></li>
                        <li>
                            <a class="dropdown-item" href="culinaire.html">Mariage</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="culinaire.html">Baptème</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="culinaire.html">Scolaire</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="culinaire.html">Paysage</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="culinaire.html">Culinaire</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="culinaire.html">Autres</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html" title="Contact"
                    >Contact</a
                    >
                </li>
            </ul>
        </nav>
    </div>

</header>
<div class="container">

    <div class="photographe">
        <h2>L'équipe de photographes</h2>
        <div class="row justify-content-between">
            <div class="col-10 col-lg-8">
                <p style="color: white">
                    Spécialiste en photographies inanimées, nature ou culinaire,
                    Baptiste vous accueillera et vous conseillera dans la réalisation
                    de votre projet.
                </p>
            </div>
            <div class="col-2">
                <a href="cv-baptiste.html">
                    <img
                        class="img-fluid"
                        src="img/Baptiste.jpg"
                        alt="photo"
                        title="Baptiste"
                    /></a>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-10 col-lg-8">
                <p style="color: white">
                    Spécialiste en photographies familles et scolaires, Camelia vous
                    accueillera et vous conseillera dans la réalisation de votre
                    projet.
                </p>
            </div>
            <div class="col-2">
                <a href="cv-camelia.html">
                    <img
                        class="img-fluid"
                        src="img/Camelia.jpg"
                        alt="photo"
                        title="Camelia"
                    /></a>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-10 col-lg-8">
                <p style="color: white">
                    Spécialiste en photographies mariages et baptêmes, Nathalie vous
                    accueillera et vous conseillera dans la réalisation de votre
                    projet.
                </p>
            </div>
            <div class="col-2">
                <a href="cv-nathalie.html">
                    <img
                        class="img-fluid"
                        src="img/Nath.jpg"
                        alt="photo"
                        title="Nathalie"
                    /></a>
            </div>
        </div>
    </div>
</div>
<footer class="border-top border-dark">
    <div class="container">
        <div class="row mx-auto text-center">
            <div class="col col-4">
                <a href="https://facebook.com" class="text-dark fs-3"
                ><i class="fab fa-facebook-square"></i
                    ></a>
                <a href="https://instagram.com" class="text-dark fs-3"
                ><i class="fab fa-instagram"></i
                    ></a>
            </div>
            <div class="col col-4 my-2 py-2">
                <a class="text-decoration-none text-dark" href="#">Mentions légales</a>
            </div>
            <div class="col col-4 my-2 py-2">
                <a class="text-decoration-none text-dark" href="contact.html">Contact</a>
            </div>
        </div>
    </div>
</footer>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"
></script>

</body>
</html>
