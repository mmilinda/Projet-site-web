# Flex Living - Projet Site Web

Flex Living est une plateforme web développée avec Laravel permettant de rechercher, réserver et gérer des propriétés immobilières flexibles (appartements meublés, coliving, etc.). Le projet dispose d'une interface client moderne (responsive mobile) et d'un espace d'administration.

## 🚀 Prérequis

Avant de commencer, assurez-vous d'avoir installé sur votre machine :
- **PHP** >= 8.1
- **Composer** (Gestionnaire de dépendances PHP)
- **Node.js & npm** (Pour la compilation des assets)
- **MySQL** ou tout autre SGBD compatible

## 🛠️ Installation & Configuration

Suivez ces étapes pour déployer le projet en local :

1. **Cloner ou récupérer le dépôt :**
   Placez-vous dans le répertoire du projet.

2. **Installer les dépendances PHP (Laravel) :**
   ```bash
   composer install
   ```

3. **Installer les dépendances Frontend (Node) :**
   ```bash
   npm install
   npm run build
   ```

4. **Configurer l'environnement :**
   Dupliquez le fichier `.env.example` et renommez-le en `.env` :
   ```bash
   cp .env.example .env
   ```
   Ouvrez le fichier `.env` et configurez vos accès à la base de données :
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nom_de_votre_base
   DB_USERNAME=votre_utilisateur
   DB_PASSWORD=votre_mot_de_passe
   ```

5. **Générer la clé d'application Laravel :**
   ```bash
   php artisan key:generate
   ```

6. **Exécuter les migrations (Création de la base de données) :**
   ```bash
   php artisan migrate
   ```
   *(Si des seeders sont configurés, exécutez : `php artisan migrate --seed`)*

7. **Lancer le serveur de développement :**
   ```bash
   php artisan serve
   ```
   Le site sera accessible à l'adresse : `http://127.0.0.1:8000`

---

## 🔐 Accès (Identifiants par défaut)

Voici les accès recommandés pour tester les différentes interfaces du site après la migration/seeding. 
*(Note : Si vous êtes en production, assurez-vous de changer ces mots de passe !)*

### Espace Administrateur
Permet de gérer les annonces, de valider les réservations, de publier des articles de blog, etc.
- **Email :** `admin@flexliving.com` *(à configurer dans votre BDD si non présent)*
- **Mot de passe :** `password` ou `admin123`

### Espace Utilisateur (Guest / Locataire)
Permet de réserver un espace, consulter ses détails de voyage, etc.
- **Email :** `user@flexliving.com`
- **Mot de passe :** `password` ou `user123`

> **Astuce :** Si la base de données est vide après l'installation, vous pouvez créer un compte utilisateur directement depuis la page d'inscription (`/register`) du site, puis modifier la colonne `type_user` ou `role` en `admin` dans votre base de données MySQL (via PhpMyAdmin par exemple) pour obtenir les droits d'administration.

---

## 💻 Technologies Utilisées
- **Backend :** Laravel (PHP)
- **Frontend :** HTML, CSS natif, JavaScript (Swiper.js pour les carrousels)
- **Design :** Interface 100% Responsive, approche Mobile-First, micro-animations.

## 🎨 Résumé des dernières mises à jour
- Optimisation globale de la responsivité Mobile (anti-débordement).
- Remplacement du placement absolu par des boîtes flexibles pour s'adapter à toutes les résolutions.
- Ajout d'animations "hover" premiums sur les boutons (Start Booking, Search).
