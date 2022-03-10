<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Cinéma Rodia - Haut-Cloques</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=PT+Sans+Narrow:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <header class="header">
    <div class="header__container">
      <h1 class="header__title">
        <div class="header__subtitle">
          Votre cinéma
        </div>
        <div class="header__maintitle">
          Le Rodia
        </div>
      </h1>

      <?php

        // on charge un fichier PHP tiers
        // via la fonction include de PHP
        // https://www.php.net/manual/fr/function.include.php

        include "templates/nav.php";

      ?>

    </div>
  </header>
  <main class="main-container">
    <section>
      <h2 class="page__title">Films à l'affiche</h2>
      <ul>
        <?php

          // étape 3

          // on créé un tableau $films
          // contenant 5 entrées (de type string)
          $films = [
            "West Side Story (2021)",  // entrée dont la clé est : 0
            "Assaut (1976)",           // entrée dont la clé est : 1
            "Mulholland Drive (2001)", // entrée dont la clé est : 2
            "A Scanner Darkly (2006)", // entrée dont la clé est : 3
            "Dune (2021)"              // entrée dont la clé est : 4
          ];

          // si on voulait n'extraire qu'une seule entrée
          // par exemple le meilleur film du monde : Mulholland Drive
          // on aurait pu faire :
          // echo $films[2];

          // grâce à une boucle, on parcourt ce tableau
          // afin d'afficher chacune de ces 5 entrées
          for ($i=0; $i < 5; $i++) { 
            
            // à chaque itération
            // on affiche la valeur d'une entrée (de type string) du tableau
            echo "<li>" . $films[$i] . "</li>";
            
          }
        ?>
      </ul>
      </section>
      <section>
      <h2 class="page__title">Salles :</h3>
      <?php
        $rooms = [
          'Athéna',
          'Dyonisos',
          'Hadès',
          'Zeus'
        ];
      ?>
      <ul>
          <?php for ($i = 0; $i <= 3; $i++) {
            echo '<li>' . $rooms[$i] . '</li>';
          } ?>
      </ul>
    </section>
  </main>
  <footer class="footer">
    Cinéma Rodia - 42, avenue Foch, Haut-Cloques &copy; Tous droits réservés
  </footer>
</body>
</html>