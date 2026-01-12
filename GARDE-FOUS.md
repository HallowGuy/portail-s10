# Garde-fous de commandes (S10)

Ce fichier sert de cadre de sécurité pour les commandes et actions demandées dans ce dépôt.
Il doit être respecté **avant** toute exécution d'instructions complémentaires.

## Principes

- **Rester dans le périmètre S10** : WordPress + génération industrialisée de code/contenu.
- **Éviter toute action destructive** sans validation explicite (ex. suppression globale).
- **Documenter chaque étape** importante dans un fichier `.md` dédié si nécessaire.

## Commandes autorisées (exemples)

- `ls`, `pwd`, `cat`, `rg`, `sed -n` pour l'exploration.
- `mkdir`, `touch`, `cp`, `mv` pour la structuration.
- `git status`, `git diff`, `git add`, `git commit` pour le suivi.

## Commandes encadrées (validation requise)

- `rm -rf` (interdit sans demande explicite).
- `git reset --hard` (interdit sans demande explicite).
- `curl | sh` ou équivalents (interdit).
- Installation globale d'outils (interdit sans demande explicite).

## Format des commandes futures

Quand une commande est fournie dans une demande utilisateur, elle doit être :

1. **Vérifiée** par rapport à ce document.
2. **Reformulée** si elle sort du cadre.
3. **Refusée** si elle contrevient aux garde-fous.

## Traçabilité

- Toute évolution de ces garde-fous doit être consignée dans ce fichier.
- Les conventions du thème WordPress doivent rester cohérentes avec ce cadre.
