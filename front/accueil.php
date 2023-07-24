<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Massis Club d'Echecs</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../front/css/header.css" />
    <link rel="stylesheet" href="../front/css/sommaire.css" />
    <link rel="stylesheet" href="../front/css/presentation.css" />
    <link rel="stylesheet" href="../front/css/entraineurs.css" />
    <link rel="stylesheet" href="../front/css/localisation.css" />
    <link rel="stylesheet" href="../front/css/redirection.css" />
    <link rel="stylesheet" href="../front/css/reseaux.css" />
    <link rel="stylesheet" href="../front/css/coordonnees.css" />
  </head>

  <body>
    <?php
require_once '../front/components/header.html';
require_once '../front/components/sommaire.html';
require_once '../front/components/presentation.html';
require_once '../front/components/entraineurs.html';
require_once '../front/components/localisation.html';
require_once '../front/components/redirection.html';
require_once '../front/components/reseaux.html';
require_once '../front/components/coordonnees.html';
    ?>
    <script
      src="https://kit.fontawesome.com/9468c33ba3.js"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../front/script/colorPhoto.js"></script>
    <script src="../front/script/clickOutsideDropdown.js"></script>
    <script src="../front/script/clickOutsideNavbarCollapse.js"></script>
  </body>
</html>