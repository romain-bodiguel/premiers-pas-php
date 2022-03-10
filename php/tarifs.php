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
      <h2 class="page__title">Tarifs</h2>
      <div class="prices__lists">

        <div class="prices__list">
          <h3 class="prices__list-title">
            A l'unité
          </h3>
          <ul>
            <li class="prices__item">
              <span class="prices__item-desc">Tarif Plein</span> <span class="prices__item-value">8,30 &euro;</span>
            </li>
            <li class="prices__item">
              <span class="prices__item-desc">Tarif Réduit</span> <span class="prices__item-value">6,80 &euro;</span>
            </li>
            <li class="prices__item">
              <span class="prices__item-desc">Tarif Enfant</span> <span class="prices__item-value">4,50 &euro;</span>
            </li>
            <li class="prices__item">
              <span class="prices__item-desc">Supplément 3D</span> <span class="prices__item-value">1,00 &euro;</span>
            </li>
          </ul>
        </div>

        <div class="prices__list">
          <h3 class="prices__list-title">
            Abonnement
          </h3>
          <ul>
            <li class="prices__item">
              <span class="prices__item-desc">5 places</span> <span class="prices__item-value">-10%</span>
            </li>
            <li class="prices__item">
              <span class="prices__item-desc">5 places -25ans </span> <span class="prices__item-value">-20%</span>
            </li>
          </ul>
        </div>
      </div>

      <div class="prices__description">
        <p class="prices__description-line">
          <strong class="prices__description-name">Tarif réduit</strong> pour les personnes de + de 60 ans et de moins de 16 ans
        </p>
        <p class="prices__description-line">
          <strong class="prices__description-name">Tarif enfant</strong> pour les - de 14 ans
        </p>
      </div>
    </section>

    <section>
      <h2 class="page__title">Tarif du capitaine</h2>

      <?php

        // étape 1
        // on créé une variable $age dont la valeur est fixée à 43
        $age = 43; // entier

        // -------------------------------------------------------------------
        // code de la correction du challenge
        // -------------------------------------------------------------------

        $tarifPlein = 8.3; // entier, donc ni guillemets simples, ni doubles
        $tarifReduit = 6.8; // entier
        $tarifEnfant = 4.5;

        // est-ce que l'âge est inférieur à 14 (inclus) ?
        if ($age <= 14) {
          // oui, l'âge est inférieur à 14 (inclus)
          $montant = $tarifEnfant;

        // sinon, si l'âge n'est pas inférieur à 14 (inclus)
        // mais qu'il est inférieur à 16 (inclus), ou supérieur à 60 (inclus) ?
        } elseif ($age <= 16 OR $age >= 60) {
          $montant = $tarifReduit;

        // sinon, tout court
        // (couvre tous les autres cas de figures)
        } else {
          $montant = $tarifPlein;
        }

        // debug
        // pour s'assurer que l'âge est le bon
        // pour s'assurer que le montant calculé soit le bon

        // var_dump($age, $montant);

      ?>

      <div class="prices__list">
        <h3 class="prices__list-title">
          <span class="prices__item-desc">Age</span> <span class="prices__item-value">Tarif unitaire</span>
        </h3>
        <ul>
          <li class="prices__item">
            <span class="prices__item-desc"><?php echo $age; ?> ans</span> <span class="prices__item-value"><?php echo $montant; ?> €</span>
          </li>
        </ul>
      </div>

    </section>

    <section>
      <h2 class="page__title">Tarif âge par âge</h2>
      
      <div class="prices">
        <div class="prices__list">
          <h3 class="prices__list-title">
            <span class="prices__item-desc">Age</span> <span class="prices__item-value">Tarif unitaire</span>
          </h3>
          <ul>

            <?php

              // étape 2
              // pour chaque âge allant de 1 à 99
              for ($age=1; $age <= 99; $age++) {

                // toujours dans la boucle
                // on ajoute nos conditions existantes
                // permettant de calculer le tarif, selon l'âge

                // -- calcul du tarif selon l'âge ---------------
                if ($age <= 14) {
                  $montant = $tarifEnfant;
                } elseif ($age <= 16 OR $age >= 60) {
                  $montant = $tarifReduit;
                } else {
                  $montant = $tarifPlein;
                }
                // -- calcul du tarif selon l'âge ---------------

                echo '<li class="prices__item">';
                echo '<span class="prices__item-desc">' . $age . ' ans</span> <span class="prices__item-value">' . $montant . ' €</span>';
                echo '</li>';
                
              }


            ?>

          </ul>
        </div>
      </div>

    </section>
    <section>
      <h2 class="page__title">Consommations</h2>
      
      <?php
        // [...]
        $extras = [
          [
            'Popcorn',
            'L',
            2.9
          ],
          [
            'Popcorn',
            'XL',
            4
          ],
          [
            'Chips',
            '50g',
            2.5
          ],
          [
            'M&M\'s',
            '100g',
            4
          ],
          [
            'Soda',
            '33cl',
            3.2
          ],
          [
            'Evian',
            '33cl',
            3
          ]
        ];        
      ?>

      <div>
        <?php
        for ($i=0 ; $i<=5 ; $i++) {
          echo '<li>Produit : '. $extras[$i][0], PHP_EOL . 'Taille : '. $extras[$i][1], PHP_EOL . 'Prix  : '. $extras[$i][2] . '€</li>'; 
        }
        ?>
      </div>

    </section>

  </main>
  <footer class="footer">
    Cinéma Rodia - 42, avenue Foch, Haut-Cloques &copy; Tous droits réservés
  </footer>
</body>
</html>
