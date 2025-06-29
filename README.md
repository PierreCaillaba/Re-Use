
# Re-Use – Thème WordPress Full Site Editing réutilisable

**Re-Use** est un thème WordPress basé sur le **Full Site Editing (FSE)**, conçu pour être léger, modulaire et facilement réutilisable de projet en projet.

Il offre une structure claire, des ressources prêtes à l’emploi (polices, compositions, fichiers JSON), et une documentation pédagogique qui accompagne aussi bien les designers que les développeurs dans la création de sites modernes avec WordPress.

---

## 💡 À propos du projet

Ce thème a été développé dans le cadre d’un **Travail de Fin d’Études** en Web Design à l’EAFC Fléron-Charlemagne.  
L’objectif est de proposer une base de travail propre, réutilisable et facile à prendre en main pour les professionnels du web ou les étudiants qui souhaitent découvrir le FSE.

---

## 📁 Structure du dépôt

```
re-use/
├── Blocs/               ← Blocs/compositions exportables et réutilisables
├── Documentations/      ← Documentations sur le FSE, les thèmes FSE et le fichier them.json
├── Polices/             ← Polices web optimisées au format `.woff2`, prêtes à l’emploi
├── json/                ← Deux versions du fichier `theme.json` (voir plus bas)
├── re-use/              ← Le thème WordPress complet (à placer dans `/wp-content/themes/`)
└── README.md            ← Ce fichier
```

---

## 🔧 À propos du fichier `theme.json`

Dans le dossier `json/`, deux versions du fichier `theme.json` sont proposées :

- `prérempli` → version où les styles sont prédéfinis, il ne reste plus qu'à s'occuper de la partie settings  
- `template` → version où tout reste à confgurer

👉 **Important** : pour que le thème fonctionne correctement, il faut **copier l’un de ces fichiers dans le dossier `re-use/`** (à la racine du thème).

---

## 📝 Documentation

Les documentations se trouvent dans le dossier `/Documentation`.  
Il contient :
- une introduction au Full Site Editing,
- une explication détaillée de la structure du thème,
- un guide approfondi sur l’utilisation et la configuration du fichier `theme.json`.

---

## 💡 Utilisation des compositions

Afin d'intégrer les compositions déjà préparées, il suffit de les télécharger et de les ajouter ensuite à votre projet dans l'interface de WordPress.

👉 **Important** : les "header" et "footer" s'ajoute eux aux dossier "parts. 

---

## 💡 Intégration du thème

Une fois le fichier theme.json ajouter à la racine du dossier du thème, pour l'intégrer à votre projet WordPress, vous avez deux solutions:
-Soit en allant dans les fichiers de votre site l'ajouter à l'endroit suivant : Nom du projet -> app -> public -> wp-content -> themes,
- Soit en zippant le dossier et en l'ajoutant via l'interface des thèmes de WordPress.

---

## ✅ Prérequis

- WordPress **6.5** ou version plus récente  
- Un environnement local ou serveur avec PHP **7.4+**  
- Le thème **Re-Use** placé dans le dossier `/wp-content/themes/`
