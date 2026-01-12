# Conventions HTML – Portail S10

## Objectif

Garantir un HTML :
- lisible
- sémantique
- homogène
- maintenable
- compréhensible par un non-développeur

## Principes généraux

- HTML5 uniquement
- Structure claire et répétable
- Aucun HTML généré dynamiquement côté client
- Aucun attribut de style inline

## Balises autorisées (principales)

- structure : header, main, footer, section, nav
- contenu : div, p, ul, ol, li
- titres : h1, h2, h3, h4
- liens : a
- médias : img, figure, figcaption
- sémantique simple : strong, em

Toute balise non listée doit être justifiée explicitement.

## Hiérarchie des titres

- h1 : un seul par page
- h2 : sections principales
- h3 : sous-sections
- h4 : usage ponctuel uniquement

Aucun saut de niveau n’est autorisé.

## Structure type d’une section

Chaque section suit strictement le modèle suivant :

<section class="s10-section s10-section--type">
  <div class="s10-container">
    <!-- contenu -->
  </div>
</section>

- `s10-section` est obligatoire
- `s10-section--type` précise le rôle fonctionnel
- `s10-container` est systématique

## Règles d’écriture

- Pas de div imbriquées inutilement
- Pas de balises vides
- Pas de duplication de structure
- Lisibilité prioritaire sur optimisation

## Interdictions explicites

- style=""
- onclick, onload, etc.
- balises purement décoratives
- HTML généré pour contourner une règle CSS
