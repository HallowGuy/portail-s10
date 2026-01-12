# Conventions CSS – Portail S10

## Objectif

Assurer une identité visuelle :
- cohérente
- sobre
- reproductible
- maintenable dans le temps

## Organisation des styles

- Un point d’entrée principal (style.css ou équivalent)
- Découpage logique par sections si nécessaire
- Aucune dépendance à un framework CSS externe

## Nommage des classes

Convention stricte :

- préfixe systématique : s10-
- notation kebab-case
- pas de classes génériques ambiguës

Exemples :
- s10-section
- s10-section--hero
- s10-title
- s10-text
- s10-button

## Variables CSS

Les variables sont définies à la racine :

:root {
  --s10-color-primary
  --s10-color-secondary
  --s10-color-text
  --s10-spacing-sm
  --s10-spacing-md
  --s10-spacing-lg
}

Toute couleur ou espacement doit passer par une variable.

## Principes de stylisation

- Priorité à la lisibilité
- Contrastes suffisants
- Espaces réguliers
- Typographie simple et institutionnelle

Les effets visuels (ombres, animations, transitions)
sont limités au strict nécessaire.

## Interdictions explicites

- CSS inline
- !important
- Classes utilitaires non documentées
- Duplication de règles existantes
- Styles dépendants d’un contexte fragile
