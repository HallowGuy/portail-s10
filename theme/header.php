<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link" href="#main">Passer au contenu</a>

<header class="site-header">

  <!-- Bande institutionnelle haute -->
  <div class="header-top">
    <div class="container header-top-inner">
      <div class="header-institution">
        <span class="institution-name">
          Service Départemental d’Incendie et de Secours
        </span>
        <span class="institution-territory">
          Corse-du-Sud
        </span>
      </div>

      <nav class="header-tools" aria-label="Liens utilitaires">
        <a href="/accessibilite">Accessibilité</a>
        <a href="/contact">Contact</a>
      </nav>
    </div>
  </div>

  <!-- Bloc identité + navigation -->
  <div class="header-main">
    <div class="container header-main-inner">

      <!-- Logo + menu -->
      <div class="header-left">
        <div class="identity-main">
          <a href="/" class="identity-logo" aria-label="Retour à l’accueil">
            SP
          </a>
          <div>
            <p class="identity-title"><?php bloginfo('name'); ?></p>
            <p class="identity-tagline">Protéger · Secourir · Agir</p>
          </div>
        </div>

        <nav class="header-nav" aria-label="Navigation principale">
          <ul class="nav-main">
            <li><a href="/" aria-current="page">Accueil</a></li>
            <li><a href="/le-sdis">Le SDIS</a></li>
            <li><a href="/missions-des-services-dincendie-et-de-secours">Missions</a></li>
            <li><a href="/interventions">Interventions</a></li>
            <li><a href="/prevention">Prévention</a></li>
            <li><a href="/volontariat">Volontariat</a></li>
            <li><a href="/actualites">Actualités</a></li>
            <li><a href="/acces-professionnels">Accès professionnels</a></li>
          </ul>
        </nav>
      </div>

      <!-- Identité locale -->
      <div class="header-right">
        <div class="identity-local" aria-hidden="true">
          <svg viewBox="0 0 200 300">
            <path d="M120 10 C90 30 80 60 85 90
                     C60 120 65 160 80 190
                     C95 220 90 250 110 280
                     C140 260 145 230 135 200
                     C155 170 150 140 130 120
                     C150 90 145 50 120 10 Z"/>
          </svg>
        </div>
      </div>

    </div>
  </div>

  <!-- Ligne rouge structurante -->
  <div class="header-separator"></div>

</header>



<main id="main">
