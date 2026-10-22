# mindly

## Note d'intention

Notre projet sensibilise les utilisateurs à la surconsommation et les encourage à adopter des habitudes plus responsables. Grâce à une plateforme interactive, ils s’informent sur les enjeux et passent à l’action via des défis et objectifs simples à relever au quotidien.

## Équipe et répartition des tâches

| Personne | Rôle principal | Tâches | GitHub |
|---|---|---|---|
| Ioana Bogos | Graphiste / Développeuse web | Identité visuelle, maquettes graphiques, intégration et développement du thème | https://github.com/ioiiobo |
| Sarah Mhamdia | Cheffe de projet / Architecte de l'information | Organisation du projet, suivi de l'avancement, structure et organisation des contenus | https://github.com/sarahfosf |
| Ensemble | Conception et validation | Brainstorming, choix graphiques, tests, corrections, préparation de la présentation finale | Toute l'équipe |
| Enseignants | DFEF / DIA | Suivi pédagogique | |

## Outils

- **WordPress**, installé en local avec Local WP, thème parent Twenty Twenty-Five.
- **GitHub**, pour le dépôt, les branches, les commits, les pull requests, les issues et le tableau Projects.
- **Visual Studio Code**, pour modifier les fichiers.

## Arborescence du thème enfant

```
mindly/
├── .gitignore
├── README.md
├── index.html
├── style.css
├── theme.json
├── functions.php
└── assets/
    ├── css/style.css
    ├── js/main.js
    └── img/.gitkeep
```

## Conventions

- Ne pas travailler directement dans `main`.
- Une tâche = une issue et une branche `feature/nom-de-la-tache`.
- Noms des branches en minuscules, sans espace ni accent.
- Messages de commits explicites en français, par exemple : `Ajout de la section présentation`.
- Ouvrir une pull request vers `main`, avec une description des changements et des vérifications.
- Un autre membre de l'équipe relit et approuve avant la fusion. L'auteur ne valide pas lui-même sa PR.
- Aucun mot de passe ni clé dans le dépôt.
