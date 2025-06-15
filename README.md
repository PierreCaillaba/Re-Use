Re-Use – Thème WordPress Full Site Editing réutilisable

Re-Use est un thème WordPress basé sur le Full Site Editing (FSE), conçu pour être léger, modulaire et facilement réutilisable de projet en projet.

Il offre une structure claire, des ressources prêtes à l’emploi (polices, compositions, fichiers JSON), et une documentation pédagogique qui accompagne aussi bien les designers que les développeurs dans la création de sites modernes avec WordPress.
📁 Structure du dépôt

re-use/
├── re-use/              ← Le thème WordPress complet (à placer dans `/wp-content/themes/`)
├── Polices/             ← Polices web optimisées au format `.woff2`, prêtes à l’emploi
├── Compositions/        ← Blocs/compositions exportables et réutilisables
├── json/                ← Deux versions du fichier `theme.json` (voir plus bas)
├── Documentation/       ← Documentation complète du projet et du fonctionnement du thème
└── README.md            ← Ce fichier

🔧 À propos du fichier theme.json

Dans le dossier json/, deux versions du fichier theme.json sont proposées :

    prerempli → version complète avec des réglages et styles prêts à l’emploi

    template → version épurée à compléter selon les besoins du projet

👉 Important : pour que le thème fonctionne correctement, il faut copier l’un de ces fichiers dans le dossier re-use/ (à la racine du thème), puis le renommer en theme.json.
📝 Documentation

La documentation complète se trouve dans le dossier /Documentation.
Elle contient :

    une introduction au Full Site Editing,

    une explication détaillée de la structure du thème,

    un guide approfondi sur l’utilisation et la configuration du fichier theme.json.

✅ Prérequis

    WordPress 6.5 ou version plus récente

    Un environnement local ou serveur avec PHP 7.4+

    Le thème Re-Use placé dans le dossier /wp-content/themes/

💡 À propos du projet

Ce thème a été développé dans le cadre d’un Travail de Fin d’Études en Web Design à l’EAFC Fléron-Charlemagne.
L’objectif est de proposer une base de travail propre, réutilisable et facile à prendre en main pour les professionnels du web ou les étudiants qui souhaitent découvrir le FSE.
