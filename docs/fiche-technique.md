# Fiche technique : Mindly

**Équipe :** Ioana Bogos & Sarah Mhamdia
**Projet :** EMU2 – Eco-challenge

## 1. Présentation

Mindly sensibilise les jeunes adultes (18 à 30 ans, débutants dans la démarche écologique) à la surconsommation. Les utilisateurs s'informent sur les enjeux (mini-articles, vidéos, quiz), puis passent à l'action grâce à de petits défis quotidiens. Ils suivent leur progression, gagnent des points et montent des niveaux.


**Environnement :** WordPress en local (LocalWP), thème enfant de Twenty Twenty-Five, HTML / CSS / JavaScript / PHP, base de données MySQL, VS Code, GitHub.


## 2. Pages à produire

| Page | Quoi ? | Comment ? | Pourquoi ? |
|---|---|---|---|
| Accueil | Sensibilisation, explication du concept, invitation à faire un défi et à créer un compte | Page WordPress définie comme page d'accueil | Accueillir le visiteur et lui donner une vision globale du concept |
| À propos | L'équipe, pourquoi on a créé Mindly, nos missions | Page WordPress | Créer la confiance : l'utilisateur sait qui est derrière le projet |
| Comprendre | 5 thèmes : fast fashion, plastique, appareils électroniques, gaspillage alimentaire, publicité et achats impulsifs. Chaque thème propose des articles, des vidéos et des quiz | Page parente + 5 pages enfants (une par thème) | S'informer de différentes manières : lire, regarder, jouer |
| Actualités | Liste d'actualités publiées par de vrais journaux francophones | Page WordPress qui affiche des actualités venant d'une source externe | Suivre l'actualité sur la surconsommation avec des sources fiables |
| Défis | Version visiteur : 1 défi d'introduction. Version connectée : tous les défis + niveau + coach | Page WordPress dont le contenu change selon la connexion | Passer à l'action et donner envie de créer un compte |
| Connexion | Formulaire : pseudo + mot de passe | Système de comptes natif de WordPress | Accéder à ses défis et à son niveau |
| Créer un compte | Formulaire : pseudo + email + mot de passe | Système de comptes natif de WordPress (rôle « Abonné ») | Rejoindre Mindly pour débloquer tous les défis |

## 3. Sections et composants

| Composant | Quoi | Comment | Pourquoi (adaptation aux supports) |
|---|---|---|---|
| Menu de navigation | Menu simple et thématique (À propos, Comprendre, Actualité, Défis, Connexion). Le lien « Connexion » disparaît une fois connecté | Thème enfant + CSS + JS | Se repérer vite sur tous les écrans, avec une version burger sur mobile |
| Carte de défi | Titre, description, durée, points, bouton « Lancer le défi » | Bloc Gutenberg / pattern | Même présentation pour tous les défis, lisible sur petit écran |
| Grille de défis | Plusieurs colonnes sur ordinateur, une seule sur mobile | CSS (mobile first) | Rester lisible sur 375 / 1280 px |
| Quiz interactif | Questions, réponses, score | JavaScript + contenu WordPress | Apprendre de façon ludique sur n'importe quel support |
| Lecteur vidéo | Vidéos YouTube intégrées | Bloc Gutenberg (intégration) | Illustrer les enjeux, vidéo qui s'adapte à la largeur de l'écran |
| Aperçu d'article | Titre, extrait, bouton « Lire la suite » | Bloc Gutenberg (liste d'articles) | Parcourir rapidement plusieurs contenus sur mobile |
| Barre de progression et niveau | Points, niveau atteint, défis accomplis | HTML / CSS + JavaScript | Rendre l'avancée visible d'un coup d'œil |
| Formulaires | Inscription, connexion | WordPress + CSS | Champs lisibles et faciles à remplir sur smartphone |
| Chat du coach IA | Zone de dialogue avec le coach | JavaScript + thème enfant | Utilisable au pouce sur mobile |
| Pied de page | Liens utiles | Thème enfant | Navigation complémentaire |

## 4. Contenus et médias

| Élément | Quoi ? | Comment ? | Pourquoi ? (interactions attendues) |
|---|---|---|---|
| Couleurs | Vert lime `#cdfc8a`, aubergine `#3c183c`, crème `#fdf9f2` | Palette déclarée dans `theme.json` | Le client choisit les couleurs dans Gutenberg sans code ; le vert lime attire l'œil sur les éléments cliquables |
| Polices | Anton (titres), Roboto (texte) | Déclarées dans `theme.json`, fichiers dans `assets/fonts/` | Anton donne du caractère aux titres, Roboto reste lisible pour les textes longs ; 2 familles = respect de la contrainte |
| Espacements | Marges et espaces entre les sections | Échelle d'espacements dans `theme.json` | Des espaces cohérents partout, qui s'adaptent à la taille de l'écran |
| Images | Beaucoup d'images pour une ambiance storytelling | Médiathèque WordPress, images compressées en WebP, texte alternatif sur chaque image | Créer une ambiance unique qui raconte une histoire, sans alourdir le site |
| Effets | Survol des boutons, focus visible, apparition des sections | CSS dans le thème enfant | L'utilisateur voit ce qui est cliquable, l'expérience devient vivante |

**Ambiance :** unique, storytelling, avec beaucoup d'images.

**Règles d'usage :**
- Texte aubergine sur fond crème ou vert lime : bon contraste.
- Jamais de texte vert lime sur fond crème : contraste insuffisant.
- Anton uniquement pour les titres, jamais pour les paragraphes.

## 5. Gestion d'états

| État | Quoi | Comment | Pourquoi (informations à transmettre) |
|---|---|---|---|
| Menu | Ouvert / fermé (mobile) | JavaScript (classe `.ouvert`) | Accéder à la navigation sans encombrer l'écran |
| Utilisateur | Connecté / non connecté | PHP (WordPress) + JavaScript | Afficher les bons liens et le bon parcours (progression ou premier défi) |
| Défi | Disponible / en cours (temps imparti) / validé / expiré | JavaScript, validation côté serveur | Indiquer le temps restant et confirmer la réussite et les points gagnés |
| Quiz | Question en cours, bonne ou mauvaise réponse, score final | JavaScript | Donner un retour immédiat pour apprendre |
| Formulaires | Champ invalide, envoi réussi, erreur | JavaScript + PHP | Dire clairement à l'utilisateur ce qui ne va pas ou que c'est bon |
| Coach IA | Chargement, réponse, erreur | JavaScript | Ne jamais laisser l'écran vide si le coach met du temps ou ne répond pas |

## 6. Données dynamiques

| Quoi | Comment | Pourquoi (valeur pour l'éco-challenge) |
|---|---|---|
| Liste des défis (titre, durée, points, statut) | Base MySQL via WordPress, exposée en JSON par l'API `/wp-json/` | Les administrateurs ajoutent de nouveaux défis sans toucher au code |
| Progression (défis accomplis, points, niveau) | Données du compte utilisateur, base MySQL | Rendre l'action ludique et encourager à continuer |
| Résultats des quiz | Base MySQL | Mesurer ce que les utilisateurs apprennent |
| Vidéos YouTube | Service externe (intégration) | Illustrer les enjeux de façon vivante |


## 7. Fonction « intelligente »

| Fonction | Quoi ? | Comment ? | Pourquoi ? (ce qu'elle apporte vraiment) |
|---|---|---|---|
| Coach personnel | Message qui félicite ou encourage l'utilisateur après un défi réussi ou abandonné, donne des astuces pour bien réaliser les défis, affiché dans la page Défis à côté du bloc niveau | IA appelée via le serveur (jamais depuis le navigateur), qui reçoit uniquement le défi réalisé, son résultat et le niveau. La clé d'API reste hors du dépôt GitHub | Un message personnalisé motive à continuer, même après un échec, et répond à la « lassitude des utilisateurs » identifiée dans notre SWOT |

## 8. Contraintes

**Contraintes du projet (cahier des charges)**
- **Temps :** informations et défis rapides à consulter et à réaliser
- **Simplicité :** contenu compréhensible par des débutants
- **Accessibilité :** navigation intuitive, informations faciles à trouver
- **Motivation :** défis réalistes, variés et simples

**Contraintes techniques**
- Site responsive (ordinateur, smartphone), testé en 375 / 1280 px, sans défilement horizontal
- Contenus éditables par l'administrateur depuis WordPress
- HTML valide, titres sans saut de niveau
- Référencement : balises title et meta description, textes alternatifs pertinents
- Performance : images optimisées, peu de fichiers CSS et JSckés de façon sécurisée, droits administrateur limités, aucune clé ni mot de passe dans le dépôt


