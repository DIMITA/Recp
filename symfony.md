### Symfony

1. Qu'est-ce que Symfony et quelle est son architecture ?
2. Explique le principe de l'architecture MVC dans Symfony.
3. Comment configurer les routes dans Symfony ? Quelles sont les différentes façons de le faire ?
4. Qu'est-ce qu'un service dans Symfony et comment l'utiliser ?
5. Comment fonctionne l'injection de dépendances dans Symfony ?
6. Explique le rôle du conteneur de services.
7. Qu'est-ce que Doctrine ? Comment l'intégrer avec Symfony ?
8. Comment créer une entité avec Doctrine ?
9. Quelles sont les différentes relations entre entités (OneToOne, OneToMany, ManyToMany) ?
10. Comment gérer les migrations de base de données dans Symfony ?
11. Comment créer et valider des formulaires dans Symfony ?
12. Comment gérer les erreurs de validation dans un formulaire ?
13. Qu'est-ce que Twig et quel est son rôle dans Symfony ?
14. Comment fonctionne la sécurité dans Symfony (authentification et autorisation) ?
15. Qu'est-ce qu'un firewall dans Symfony et comment le configurer ?
16. Comment implémenter un système de rôles et permissions ?
17. Comment utiliser les Guard Authenticators pour personnaliser l'authentification ?
18. Qu'est-ce qu'un Bundle dans Symfony et comment l'utiliser ?
19. Comment créer un Bundle personnalisé ?
20. Quelles sont les bonnes pratiques pour tester une application Symfony avec PHPUnit ?
21. Comment configurer les tests fonctionnels dans Symfony ?
22. Explique le principe du lazy loading dans Symfony.
23. Comment gérer les erreurs et exceptions dans Symfony ?
24. Comment fonctionne le système de cache dans Symfony ?
25. Qu'est-ce qu'un Event Listener et un Event Subscriber dans Symfony ?
26. Comment internationaliser une application Symfony ?
27. Qu'est-ce que le service container ? Comment l'utiliser dans Symfony ?
28. Comment fonctionne l'autowiring dans Symfony ?
29. Quelles sont les différences entre les services publics et privés dans Symfony ?
30. Comment déployer une application Symfony en production ?

### Vue.js

1. Qu'est-ce que Vue.js et pourquoi l'utiliser ?
2. Comment créer un composant dans Vue.js ?
3. Explique le cycle de vie d'un composant Vue.js.
4. Comment passer des données à un composant enfant avec les props ?
5. Qu'est-ce que le "state" dans Vue.js et comment le gérer ?
6. Comment fonctionne la gestion d'événements dans Vue.js (`$emit`) ?
7. Qu'est-ce que Vuex et à quoi sert-il ?
8. Comment est structuré le store Vuex ?
9. Qu'est-ce qu'une mutation et une action dans Vuex ?
10. Comment fonctionne le routing dans Vue.js avec Vue Router ?
11. Comment gérer les routes dynamiques et les paramètres de route ?
12. Quelles sont les directives les plus courantes en Vue.js (`v-if`, `v-for`, `v-bind`, `v-model`) ?
13. Comment fonctionne la directive `v-bind` et à quoi sert-elle ?
14. Comment interagir avec le DOM dans Vue.js ?
15. Qu'est-ce qu'un watcher dans Vue.js et quand l'utiliser ?
16. Qu'est-ce que la composition API dans Vue 3 ?
17. Quelle est la différence entre la composition API et l'options API ?
18. Comment utiliser les mixins dans Vue.js ?
19. Quelles sont les bonnes pratiques pour structurer un projet Vue.js ?
20. Comment gérer les erreurs dans une application Vue.js ?
21. Comment effectuer des requêtes HTTP avec Axios dans Vue.js ?
22. Comment fonctionne la réactivité dans Vue.js ?
23. Comment utiliser les slots dans Vue.js ?
24. Qu'est-ce que le "scoped styles" dans Vue.js ?
25. Comment utiliser les filtres dans Vue.js ?
26. Comment fonctionne l'injection de dépendances dans Vue.js ?
27. Comment faire des tests unitaires sur des composants Vue.js ?
28. Qu'est-ce que `v-model` et comment l'utiliser ?
29. Comment gérer les transitions et les animations dans Vue.js ?
30. Comment utiliser les hooks dans Vue 3 ?

### SQL

1. Qu'est-ce qu'une base de données relationnelle ?
2. Comment créer une table en SQL ?
3. Qu'est-ce qu'une clé primaire et une clé étrangère ?
4. Comment insérer des données dans une table SQL ?
5. Quelle est la différence entre INNER JOIN, LEFT JOIN, RIGHT JOIN et FULL JOIN ?
6. Comment effectuer une mise à jour d'enregistrements dans une table SQL ?
7. Comment supprimer des enregistrements dans une table SQL ?
8. Qu'est-ce qu'une transaction et pourquoi l'utiliser ?
9. Comment fonctionnent les index en SQL ?
10. Qu'est-ce qu'une vue en SQL et quand l'utiliser ?
11. Comment compter le nombre d'enregistrements dans une table ?
12. Comment faire une requête de recherche avec un critère spécifique ?
13. Quelles sont les fonctions d'agrégation en SQL (COUNT, SUM, AVG, etc.) ?
14. Qu'est-ce qu'une sous-requête en SQL ?
15. Comment gérer les relations entre les tables en SQL ?
16. Qu'est-ce qu'une contrainte UNIQUE et à quoi sert-elle ?
17. Comment créer un index sur une colonne en SQL ?
18. Quelle est la différence entre `GROUP BY` et `ORDER BY` ?
19. Comment faire une recherche avec des conditions multiples en SQL (`AND`, `OR`) ?
20. Qu'est-ce que le `HAVING` et quand l'utiliser ?
21. Comment utiliser les fonctions de chaîne de caractères (`SUBSTRING`, `CONCAT`, etc.) ?
22. Comment effectuer des opérations sur les dates en SQL ?
23. Qu'est-ce que le `NULL` en SQL et comment le gérer ?
24. Quelle est la différence entre les types de données `CHAR` et `VARCHAR` ?
25. Comment récupérer les 10 premiers enregistrements d'une table ?
26. Comment créer une relation plusieurs-à-plusieurs en SQL ?
27. Qu'est-ce que la normalisation en base de données ?
28. Comment optimiser les performances d'une requête SQL ?
29. Qu'est-ce qu'un trigger et comment l'utiliser ?
30. Comment gérer les transactions dans un système multi-utilisateur ?

# Réponse

### Symfony

1. **Symfony est un framework PHP open-source** basé sur le pattern MVC (Modèle-Vue-Contrôleur). Il permet de développer des applications web en structurant le code de manière modulaire.
2. **L'architecture MVC** sépare l'application en trois couches : le Modèle (données), la Vue (interface utilisateur) et le Contrôleur (logique métier).
3. **Configurer les routes** peut se faire via `config/routes.yaml`, les annotations dans les contrôleurs (`@Route`), ou des fichiers XML.
4. **Un service dans Symfony** est une classe PHP disponible via le conteneur de services, utilisée pour encapsuler la logique de l'application.
5. **L'injection de dépendances** consiste à fournir les objets nécessaires à une classe via son constructeur ou ses méthodes.
6. **Le conteneur de services** gère la création et l’injection des services dans Symfony.
7. **Doctrine est l'ORM de Symfony**, permettant de mapper les entités PHP aux tables de la base de données et de gérer les interactions avec la base de données.
8. **Créer une entité avec Doctrine** implique de définir une classe PHP annotée avec des métadonnées (ex. `@Entity`, `@Column`).
9. **Relations entre entités** : `OneToOne` lie deux entités en une relation exclusive, `OneToMany` relie une entité à plusieurs instances d'une autre, et `ManyToMany` relie deux entités de manière bidirectionnelle.
10. **Gérer les migrations** se fait en générant des fichiers de migration avec la commande `make:migration` et en les exécutant.
11. **Les formulaires sont gérés avec le composant Form**, permettant de créer des champs, valider les données et traiter les soumissions.
12. **Les erreurs de validation** sont capturées et peuvent être affichées à l'utilisateur.
13. **Twig est le moteur de templates** de Symfony, utilisé pour générer le HTML à partir de variables PHP.
14. **La sécurité en Symfony** se configure dans `security.yaml` pour l'authentification (firewalls) et l'autorisation (rôles).
15. **Un firewall est une couche de sécurité** appliquée aux requêtes HTTP. Il définit comment les requêtes doivent être authentifiées.
16. **Les rôles définissent les autorisations** des utilisateurs (`ROLE_USER`, `ROLE_ADMIN`).
17. **Les Guard Authenticators** permettent de personnaliser la logique d'authentification.
18. **Les Bundles sont des packages réutilisables**, similaires aux modules, intégrant des fonctionnalités spécifiques.
19. **Créer un Bundle personnalisé** implique de structurer le code comme une mini-application.
20. **Les tests sont gérés avec PHPUnit**, en testant les méthodes des contrôleurs et services.
21. **Les tests fonctionnels** simulent les interactions de l'utilisateur avec l'application.
22. **Le lazy loading** charge les relations d'entités à la demande.
23. **Les exceptions sont gérées dans `ExceptionListener`** pour fournir des réponses adaptées.
24. **Le cache peut être configuré avec le composant Cache** pour stocker des données.
25. **Event Listener et Subscriber** sont des mécanismes pour réagir à des événements déclenchés dans l'application.
26. **L'internationalisation permet de traduire l'application**, grâce au composant Translation.
27. **Le service container est une infrastructure** qui centralise les services.
28. **L'autowiring** permet d'injecter automatiquement les services requis dans une classe.
29. **Les services publics sont accessibles depuis n'importe où**, tandis que les privés ne sont disponibles que via le conteneur.
30. **Déployer une application Symfony** implique la gestion des dépendances, la configuration du serveur, et la sécurité.

### Vue.js

1. **Vue.js est un framework JavaScript progressif** utilisé pour construire des interfaces utilisateur. Il se concentre sur la vue dans un pattern MVC.
2. **Créer un composant** se fait en définissant un fichier `.vue` avec du HTML, du CSS et du JavaScript encapsulés.
3. **Le cycle de vie inclut des phases comme `created`, `mounted`, `updated`, `destroyed`**, correspondant aux états d'un composant.
4. **Les props permettent de transmettre des données** d'un composant parent à un composant enfant.
5. **Le "state" représente l'état local** d'un composant, utilisé pour stocker des données réactives.
6. **La gestion d'événements utilise `$emit`** pour envoyer des événements personnalisés aux composants parents.
7. **Vuex est une librairie de gestion d'état** pour les applications Vue.js.
8. **Le store Vuex contient l'état partagé**, les mutations, les actions, et les getters.
9. **Une mutation est une fonction qui modifie l'état**, tandis qu'une action peut être asynchrone.
10. **Vue Router est utilisé pour gérer les routes**, les paramètres et les composants associés.
11. **Les routes dynamiques sont définies avec `:param`**, permettant de passer des valeurs dans les URL.
12. **Les directives comme `v-if`, `v-for`, `v-bind`, `v-model`** sont utilisées pour lier les données à l'interface.
13. **La directive `v-bind` lie les attributs du DOM** aux données du composant.
14. **Interagir avec le DOM** peut se faire via des références (`ref`).
15. **Les watchers surveillent les changements d'état**, et exécutent une fonction lorsque l'état change.
16. **La composition API offre une façon flexible** de structurer le code en utilisant les fonctions `reactive` et `ref`.
17. **Elle permet une meilleure réutilisabilité** du code par rapport à l'options API.
18. **Les mixins encapsulent la logique réutilisable** et la partagent entre plusieurs composants.
19. **Les projets Vue.js doivent être bien structurés** pour gérer les composants, les assets et les services.
20. **Les erreurs peuvent être gérées via `errorHandler`** ou les méthodes de cycle de vie.
21. **Axios est utilisé pour faire des requêtes HTTP** et interagir avec les API.
22. **La réactivité est gérée par le système de proxy de Vue.js**.
23. **Les slots permettent d'inclure du contenu dynamique** dans les composants enfants.
24. **Les styles scoped limitent l'application** des styles à un composant spécifique.
25. **Les filtres permettent de formater les données** affichées.
26. **L'injection de dépendances peut être faite via `provide` et `inject`**.
27. **Les tests unitaires peuvent être effectués avec Jest** ou Mocha.
28. **`v-model` permet la liaison bidirectionnelle** entre les données et les champs de formulaire.
29. **Les transitions ajoutent des effets visuels** lors de l'entrée et la sortie de composants.
30. **Les hooks de composition offrent une approche fonctionnelle** pour gérer les composants dans Vue 3.

### SQL

1. **Une base de données relationnelle** organise les données en tables avec des relations entre elles.
2. **Créer une table** se fait avec la commande `CREATE TABLE`.
3. **Une clé primaire identifie de manière unique** chaque ligne, tandis qu'une clé étrangère établit des relations.
4. **Insérer des données avec `INSERT INTO`**, suivi des valeurs.
5. **Les JOINs combinent les données de plusieurs tables** selon des critères de relation.
6. **Mise à jour des enregistrements avec `UPDATE`**, suivi de `SET` pour les nouvelles valeurs.
7. **Suppression avec `DELETE FROM`** et une condition pour éviter les suppressions globales.
8. **Une transaction est un ensemble de requêtes** qui doivent réussir ou échouer ensemble.
9. **Les index améliorent les performances** des recherches.
10. **Les vues sont des requêtes enregistrées** sous forme de tables virtuelles.
11. **Compter les enregistrements avec `COUNT()`** pour obtenir le nombre d'entrées.
12. **Les critères de recherche utilisent `WHERE`**, suivi d'une condition.
13. **Les fonctions d'agrégation calculent des valeurs** comme la somme (`SUM`) ou la moyenne (`AVG`).
14. **Les sous-requêtes sont des requêtes imbriquées** dans une autre.
15. **Gérer les relations en définissant des clés étrangères** et des contraintes.
16. **Les contraintes UNIQUE empêchent les doublons** dans les colonnes.
17. **Créer un index sur une colonne avec `CREATE INDEX`**.
18. **`GROUP BY` regroupe les résultats**, alors que `ORDER BY` les trie.
19. **Conditions multiples avec `AND` et `OR`** pour des requêtes plus complexes.
20. **`HAVING` filtre les résultats agrégés**, utilisé après un `GROUP BY`.
21. **Les fonctions de chaîne manipulent les chaînes** avec `CONCAT`, `SUBSTRING`, etc.
22. **Opérations sur les dates avec des fonctions** comme `DATEADD` ou `DATEDIFF`.
23. **Gérer les valeurs `NULL` avec `IS NULL` ou `IS NOT NULL`**.
24. **`CHAR` a une taille fixe**, alors que `VARCHAR` est variable.
25. **Limiter les résultats avec `LIMIT`** pour les bases de données MySQL ou `TOP`

 pour SQL Server.
26. **Relations plusieurs-à-plusieurs sont implémentées** avec une table intermédiaire.
27. **La normalisation élimine la redondance** et améliore l'intégrité des données.
28. **Optimiser les performances avec des index, des vues**, et des requêtes optimisées.
29. **Les triggers exécutent des actions automatiques** sur les modifications de données.
30. **Gérer les transactions avec `BEGIN`, `COMMIT`, et `ROLLBACK`** pour contrôler les opérations.

# Coding

### Symfony

**Créer un système de gestion des utilisateurs** :

- Implémente une application Symfony permettant de gérer des utilisateurs avec les fonctionnalités suivantes : création, édition, suppression et affichage d'une liste d'utilisateurs.
- Les utilisateurs doivent avoir des champs comme le nom, l'email et le rôle.
- Implémente la validation des formulaires et l'affichage des erreurs.

**Système d'authentification personnalisé** :

- Implémente un système d'authentification en utilisant les Guard Authenticators.
- Ajoute la possibilité de se connecter avec un nom d'utilisateur et un mot de passe, et crée une page de connexion sécurisée.
- Restreins l'accès à certaines routes en fonction du rôle de l'utilisateur (`ROLE_USER`, `ROLE_ADMIN`).

**Intégration d'une API externe** :

- Crée un service Symfony qui récupère des données d'une API externe (par exemple, des informations sur la météo ou les actualités).
- Affiche ces données sur une page web en utilisant Twig.
- Ajoute un cache pour limiter les appels à l'API.

**Création d'un système de blog avec commentaires** :

* Implémente une application Symfony permettant de gérer des articles de blog et les commentaires associés.
* Les articles doivent avoir un titre, un contenu, une date de publication, et un auteur. Les commentaires doivent être liés aux articles et avoir un auteur, du contenu, et une date de publication.
* Ajoute des fonctionnalités pour créer, éditer, supprimer des articles et des commentaires.

**Gestion d'une galerie d'images** :

* Crée une application Symfony pour gérer une galerie d'images où les utilisateurs peuvent ajouter, supprimer et visualiser des images.
* Chaque image doit être associée à une catégorie (par exemple, nature, animaux, etc.) et avoir un titre, une description, et un fichier image.
* Implémente l'upload des images et assure une validation pour le type de fichier et la taille.

**Mise en place d'un système de réservation** :

* Implémente un système de réservation pour un restaurant, où les utilisateurs peuvent réserver une table.
* Les réservations doivent inclure des informations telles que le nom du client, la date et l'heure de la réservation, et le nombre de personnes.
* Ajoute une fonctionnalité de confirmation par email à l'utilisateur pour chaque réservation effectuée.

### Vue.js

**Application de liste de tâches (To-Do List)** :

- Crée une application Vue.js qui permet à l'utilisateur d'ajouter, de modifier et de supprimer des tâches.
- Ajoute une fonctionnalité de filtrage pour afficher uniquement les tâches terminées ou non terminées.
- Utilise les composants Vue.js pour structurer l'application.

**Formulaire avec validation en temps réel** :

- Crée un formulaire de saisie d'informations utilisateur (nom, email, mot de passe) avec validation en temps réel.
- Les règles de validation doivent inclure la vérification de l'email et un mot de passe de minimum 8 caractères.
- Affiche les messages d'erreur correspondants lorsque les champs sont invalides.

**Intégration avec une API REST** :

- Implémente une interface utilisateur en Vue.js qui affiche une liste d'articles récupérés d'une API REST (par exemple, des articles de blog).
- Permet d'afficher les détails d'un article en cliquant dessus.
- Ajoute une fonctionnalité de recherche pour filtrer les articles par titre.

**Calculatrice simple** :

* Crée une application Vue.js qui fonctionne comme une calculatrice simple avec les opérations de base : addition, soustraction, multiplication, et division.
* Utilise les boutons pour les chiffres et les opérateurs, ainsi qu'un affichage pour montrer le résultat des calculs.
* Implémente les fonctionnalités pour réinitialiser la calculatrice et gérer les erreurs (par exemple, division par zéro).

**Application de notes (Note-taking app)** :

* Implémente une application Vue.js où les utilisateurs peuvent créer, modifier, et supprimer des notes.
* Ajoute une fonctionnalité pour trier les notes par date de création ou par titre.
* Permet la recherche de notes par mot-clé et affiche les résultats en temps réel.

**Système de vote en temps réel** :

* Crée une application Vue.js permettant aux utilisateurs de voter pour différentes options (par exemple, choix de films ou de plats).
* Affiche les résultats des votes en temps réel à l'aide de graphiques (par exemple, un graphique à barres).
* Ajoute une fonctionnalité pour limiter les utilisateurs à un seul vote par option.

### SQL

**Conception d'une base de données de gestion de bibliothèque** :

- Crée les tables nécessaires pour gérer les livres, les auteurs et les emprunts.
- Implémente les relations adéquates entre les tables (un livre peut avoir un ou plusieurs auteurs, un emprunt est associé à un livre et à un utilisateur).
- Écris une requête pour récupérer les livres disponibles (non empruntés) et leurs auteurs.

**Requête pour analyser les ventes d'une boutique en ligne** :

- Crée une table de commandes contenant des informations sur les produits vendus (nom, prix, date de vente).
- Écris une requête qui calcule le total des ventes par mois.
- Affiche les produits les plus vendus au cours du dernier trimestre.

**Gestion des utilisateurs et permissions dans une base de données** :

- Crée une table d'utilisateurs et une table de rôles, avec une table intermédiaire pour les relations utilisateurs-rôles.
- Écris une requête pour lister tous les utilisateurs avec leurs rôles associés.
- Ajoute une fonctionnalité pour rechercher les utilisateurs ayant un rôle spécifique.

**Analyse des clients et commandes dans une base de données de commerce électronique** :

* Crée les tables `Client` et `Commande` pour gérer les informations sur les clients et les commandes, avec les relations appropriées.
* Écris une requête pour obtenir la liste des clients qui ont passé plus de 5 commandes au cours de la dernière année.
* Calcule le montant total dépensé par chaque client et affiche les clients dans l'ordre décroissant des montants dépensés.

**Gestion d'un inventaire de produits** :

* Crée une table `Produit` pour stocker les informations sur les produits d'un inventaire, incluant le nom, la quantité en stock, le prix unitaire, et la catégorie.
* Écris une requête pour trouver les produits avec une quantité en stock inférieure à un certain seuil (par exemple, 10 unités).
* Crée une vue qui affiche les produits les plus chers par catégorie.

**Base de données de gestion des employés et des départements** :

* Crée les tables `Employe` et `Departement` pour gérer les informations des employés et les départements.
* Implémente les relations entre les employés et les départements.
* Écris une requête pour lister les employés qui travaillent dans un département spécifique et calculer le salaire moyen par département.

# Réponses

Voici les solutions proposées pour les énoncés de tests de codage pour Symfony, Vue.js et SQL.

### Symfony

1. **Système de gestion des utilisateurs** :

   - **Création d'une entité Utilisateur** :

     ```php
     // src/Entity/Utilisateur.php
     namespace App\Entity;

     use Doctrine\ORM\Mapping as ORM;

     #[ORM\Entity]
     class Utilisateur
     {
         #[ORM\Id]
         #[ORM\GeneratedValue]
         #[ORM\Column(type: 'integer')]
         private $id;

         #[ORM\Column(type: 'string', length: 255)]
         private $nom;

         #[ORM\Column(type: 'string', length: 255, unique: true)]
         private $email;

         #[ORM\Column(type: 'string', length: 50)]
         private $role;

         // Getters et setters ici
     }
     ```
   - **Création d'un formulaire pour l'utilisateur** :

     ```php
     // src/Form/UtilisateurType.php
     namespace App\Form;

     use App\Entity\Utilisateur;
     use Symfony\Component\Form\AbstractType;
     use Symfony\Component\Form\Extension\Core\Type\TextType;
     use Symfony\Component\Form\FormBuilderInterface;
     use Symfony\Component\OptionsResolver\OptionsResolver;

     class UtilisateurType extends AbstractType
     {
         public function buildForm(FormBuilderInterface $builder, array $options)
         {
             $builder
                 ->add('nom', TextType::class)
                 ->add('email', TextType::class)
                 ->add('role', TextType::class);
         }

         public function configureOptions(OptionsResolver $resolver)
         {
             $resolver->setDefaults([
                 'data_class' => Utilisateur::class,
             ]);
         }
     }
     ```
2. **Système d'authentification personnalisé** :

   - **Configuration dans `security.yaml`** :
     ```yaml
     security:
         encoders:
             App\Entity\User:
                 algorithm: bcrypt

         providers:
             users_in_memory: { memory: null }

         firewalls:
             secured_area:
                 pattern: ^/admin
                 http_basic: ~
                 guard:
                     authenticators:
                         - App\Security\LoginFormAuthenticator

         access_control:
             - { path: ^/admin, roles: ROLE_ADMIN }
     ```
3. **Intégration d'une API externe** :

   - **Création d'un service pour récupérer les données** :
     ```php
     // src/Service/WeatherService.php
     namespace App\Service;

     use Symfony\Contracts\HttpClient\HttpClientInterface;

     class WeatherService
     {
         private $client;

         public function __construct(HttpClientInterface $client)
         {
             $this->client = $client;
         }

         public function getWeatherData(string $city): array
         {
             $response = $this->client->request(
                 'GET',
                 "https://api.openweathermap.org/data/2.5/weather?q={$city}&appid=your_api_key"
             );

             return $response->toArray();
         }
     }
     ```
4. **Système de blog avec commentaires** :

   - **Entités pour les articles et les commentaires** :
     ```php
     // src/Entity/Article.php
     namespace App\Entity;

     use Doctrine\ORM\Mapping as ORM;

     #[ORM\Entity]
     class Article
     {
         #[ORM\Id]
         #[ORM\GeneratedValue]
         #[ORM\Column(type: 'integer')]
         private $id;

         #[ORM\Column(type: 'string', length: 255)]
         private $titre;

         #[ORM\Column(type: 'text')]
         private $contenu;

         #[ORM\Column(type: 'datetime')]
         private $datePublication;

         // Getters et setters ici
     }

     // src/Entity/Commentaire.php
     namespace App\Entity;

     #[ORM\Entity]
     class Commentaire
     {
         #[ORM\Id]
         #[ORM\GeneratedValue]
         #[ORM\Column(type: 'integer')]
         private $id;

         #[ORM\Column(type: 'text')]
         private $contenu;

         #[ORM\Column(type: 'string', length: 255)]
         private $auteur;

         #[ORM\Column(type: 'datetime')]
         private $datePublication;

         #[ORM\ManyToOne(targetEntity: Article::class)]
         private $article;

         // Getters et setters ici
     }
     ```
5. **Galerie d'images** :

   - **Entité pour les images** :

     ```php
     // src/Entity/Image.php
     namespace App\Entity;

     #[ORM\Entity]
     class Image
     {
         #[ORM\Id]
         #[ORM\GeneratedValue]
         #[ORM\Column(type: 'integer')]
         private $id;

         #[ORM\Column(type: 'string', length: 255)]
         private $titre;

         #[ORM\Column(type: 'text')]
         private $description;

         #[ORM\Column(type: 'string', length: 255)]
         private $fichier;

         #[ORM\Column(type: 'string', length: 255)]
         private $categorie;

         // Getters et setters ici
     }
     ```
   - **Téléchargement des images** :

     - Utiliser un service d'upload de fichiers, et ajouter la validation dans le formulaire pour les types et tailles des fichiers.
6. **Système de réservation** :

   - **Entité pour les réservations** :

     ```php
     // src/Entity/Reservation.php
     namespace App\Entity;

     #[ORM\Entity]
     class Reservation
     {
         #[ORM\Id]
         #[ORM\GeneratedValue]
         #[ORM\Column(type: 'integer')]
         private $id;

         #[ORM\Column(type: 'string', length: 255)]
         private $nomClient;

         #[ORM\Column(type: 'datetime')]
         private $dateReservation;

         #[ORM\Column(type: 'integer')]
         private $nombrePersonnes;

         #[ORM\Column(type: 'boolean')]
         private $confirmationEnvoyee;

         // Getters et setters ici
     }
     ```
   - **Envoi de l'email de confirmation** :

     - Utiliser le composant `Mailer` de Symfony pour envoyer un email de confirmation au client lors de l'enregistrement de la réservation.

### Vue.js


* **Application de liste de tâches (To-Do List)** :
  - **Structure de base du composant ToDoList.vue** :
    ```vue
    <template>
        <div>
            <input v-model="newTask" placeholder="Nouvelle tâche">
            <button @click="addTask">Ajouter</button>

            <ul>
                <li v-for="(task, index) in tasks" :key="index">
                    <span :class="{ done: task.completed }">{{ task.text }}</span>
                    <button @click="toggleTask(index)">Terminé</button>
                    <button @click="deleteTask(index)">Supprimer</button>
                </li>
            </ul>
        </div>
    </template>

    <script>
    export default {
        data() {
            return {
                newTask: '',
                tasks: []
            };
        },
        methods: {
            addTask() {
                if (this.newTask) {
                    this.tasks.push({ text: this.newTask, completed: false });
                    this.newTask = '';
                }
            },
            toggleTask(index) {
                this.tasks[index].completed = !this.tasks[index].completed;
            },
            deleteTask(index) {
                this.tasks.splice(index, 1);
            }
        }
    };
    </script>

    <style scoped>
    .done {
        text-decoration: line-through;
    }
    </style>
    ```
* **Formulaire avec validation en temps réel** :
  - **Composant de formulaire avec validation** :
    ```vue
    <template>
        <form @submit.prevent="submitForm">
            <div>
                <input v-model="formData.email" @input="validateEmail" placeholder="Email">
                <span v-if="emailError">{{ emailError }}</span>
            </div>
            <div>
                <input v-model="formData.password" type="password" @input="validatePassword" placeholder="Mot de passe">
                <span v-if="passwordError">{{ passwordError }}</span>
            </div>
            <button type="submit" :disabled="!formIsValid">Envoyer</button>
        </form>
    </template>

    <script>
    export default {
        data() {
            return {
                formData: {
                    email: '',
                    password: ''
                },
                emailError: '',
                passwordError: '',
            };
        },
        computed: {
            formIsValid() {
                return !this.emailError && !this.passwordError;
            }
        },
        methods: {
            validateEmail() {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                this.emailError = emailRegex.test(this.formData.email) ? '' : 'Email invalide';
            },
            validatePassword() {
                this.passwordError = this.formData.password.length >= 8 ? '' : 'Mot de passe trop court';
            },
            submitForm() {
                alert('Formulaire soumis avec succès');
            }
        }
    };
    </script>
    ```
* **Intégration avec une API REST** :
  - **Composant pour récupérer et afficher les articles** :
    ```vue
    <template>
        <div>
            <input v-model="search" placeholder="Rechercher un article">
            <ul>
                <li v-for="article in filteredArticles" :key="article.id">
                    {{ article.title }}
                </li>
            </ul>
        </div>
    </template>

    <script>
    import axios from 'axios';

    export default {
        data() {
            return {
                articles: [],
                search: ''
            };
        },
        computed: {
            filteredArticles() {
                return this.articles.filter(article => 
                    article.title.toLowerCase().includes(this.search.toLowerCase())
                );
            }
        },
        mounted() {
            axios.get('https://jsonplaceholder.typicode.com/posts')
                .then(response => {
                    this.articles = response.data;
                });
        }
    };
    </script>
    ```


1. **Calculatrice simple** :

   - **Composant Vue pour la calculatrice** :
     ```vue
     <template>
         <div>
             <input v-model="input" disabled>
             <div>
                 <button @click="clear">C</button>
                 <button @click="append('.')">.</button>
                 <button @click="append('/')">/</button>
                 <button @click="append('*')">*</button>
                 <button v-for="n in [7, 8, 9, 4, 5, 6, 1, 2, 3, 0]" :key="n" @click="append(n)">{{ n }}</button>
                 <button @click="append('-')">-</button>
                 <button @click="append('+')">+</button>
                 <button @click="calculate">=</button>
             </div>
         </div>
     </template>

     <script>
     export default {
         data() {
             return {
                 input: ''
             };
         },
         methods: {
             append(character) {
                 this.input += character;
             },
             clear() {
                 this.input = '';
             },
             calculate() {
                 try {
                     this.input = eval(this.input);
                 } catch {
                     this.input = 'Erreur';
                 }
             }
         }
     };
     </script>
     ```
2. **Application de notes** :

   - **Composant Vue pour les notes** :
     ```vue
     <template>
         <div>
             <input v-model="newNote" placeholder="Nouvelle note">
             <button @click="addNote">Ajouter</button>

             <input v-model="searchQuery" placeholder="Rechercher une note">

             <ul>
                 <li v-for="note in filteredNotes" :key="note.id">
                     {{ note.text }}
                     <button @click="deleteNote(note.id)">Supprimer</button>
                 </li>
             </ul>
         </div>
     </template>

     <script>
     export default {
         data() {
             return {
                 notes: [],
                 newNote: '',
                 searchQuery: ''
             };
         },
         computed: {
             filteredNotes() {
                 return this.notes.filter(note => 
                     note.text.toLowerCase().includes(this.searchQuery.toLowerCase())
                 );
             }
         },
         methods: {
             addNote() {
                 if (this.newNote) {
                     this.notes.push({ id: Date.now(), text: this.newNote });
                     this.newNote = '';
                 }
             },
             deleteNote(id) {
                 this.notes = this.notes.filter(note => note.id !== id);
             }
         }
     };
     </script>
     ```
3. **Système de vote en temps réel** :

   - **Composant Vue pour le système de vote** :
     ```vue
     <template>
         <div>
             <div v-for="option in options" :key="option.name">
                 <span>{{ option.name }} : {{ option.votes }} votes</span>
                 <button @click="vote(option.name)">Vote</button>
             </div>

             <h3>Résultats</h3>
             <ul>
                 <li v-for="option in options" :key="option.name">
                     {{ option.name }} : {{ option.votes }} votes
                 </li>
             </ul>
         </div>
     </template>

     <script>
     export default {
         data() {
             return {
                 options: [
                     { name: 'Option 1', votes: 0 },
                     { name: 'Option 2', votes: 0 },
                     { name: 'Option 3', votes: 0 }
                 ]
             };
         },
         methods: {
             vote(optionName) {
                 const option = this.options.find(opt => opt.name === optionName);
                 if (option) option.votes++;
             }
         }
     };
     </script>
     ```


### SQL

1. **Conception d'une base de données de gestion de bibliothèque** :

   ```sql
   CREATE TABLE Auteur (
       id INT PRIMARY KEY AUTO_INCREMENT,
       nom VARCHAR(255) NOT NULL
   );

   CREATE TABLE Livre (
       id INT PRIMARY KEY AUTO_INCREMENT,
       titre VARCHAR(255) NOT NULL,
       auteur_id INT,
       FOREIGN KEY (auteur_id) REFERENCES Auteur(id)
   );

   CREATE TABLE Emprunt (
       id INT PRIMARY KEY AUTO_INCREMENT,
       livre_id INT,
       utilisateur_id INT,
       date_emprunt DATE NOT NULL,
       FOREIGN KEY (livre_id) REFERENCES Livre(id)
   );

   SELECT Livre.titre, Auteur.nom
   FROM Livre
   INNER JOIN Auteur ON Livre.auteur_id = Auteur.id
   WHERE Livre.id NOT IN (SELECT livre_id FROM Emprunt);
   ```
2. **Requête pour analyser les ventes d'une boutique en ligne** :

   ```sql
   CREATE TABLE Commande (
       id INT PRIMARY KEY AUTO_INCREMENT,
       produit VARCHAR(255) NOT NULL,
       prix DECIMAL(10, 2) NOT NULL,
       date_vente DATE NOT NULL
   );

   SELECT YEAR(date_vente) AS Annee, MONTH(date_vente) AS Mois, SUM(prix) AS TotalVentes
   FROM Commande
   GROUP BY Annee, Mois;

   SELECT produit, COUNT(*) AS Ventes
   FROM Commande
   WHERE date_vente >= DATE_SUB(CURDATE(), INTERVAL 3 MONTH)
   GROUP BY produit
   ORDER BY Ventes DESC;
   ```
3. **Gestion des utilisateurs et permissions dans une base de données** :

   ```sql
   CREATE TABLE Utilisateur (
       id INT PRIMARY KEY AUTO_INCREMENT,
       nom VARCHAR(255) NOT NULL
   );

   CREATE TABLE Role (
       id INT PRIMARY KEY AUTO_INCREMENT,
       nom VARCHAR(255) NOT NULL
   );

   CREATE TABLE Utilisateur_Role (
       utilisateur_id INT,
       role_id INT,
       PRIMARY KEY (utilisateur_id, role_id),
       FOREIGN KEY (utilisateur_id) REFERENCES Utilisateur(id),
       FOREIGN KEY (role_id) REFERENCES Role(id)
   );

   SELECT Utilisateur.nom AS Utilisateur, Role.nom AS Role
   FROM Utilisateur
   INNER JOIN Utilisateur_Role ON Utilisateur.id = Utilisateur_Role.utilisateur_id
   INNER JOIN Role ON Utilisateur_Role.role_id = Role.id;

   SELECT Utilisateur.nom
   FROM Utilisateur
   INNER JOIN Utilisateur_Role ON Utilisateur.id = Utilisateur_Role.utilisateur_id
      INNER JOIN Role ON Utilisateur_Role.role_id = Role.id
      WHERE Role.nom = 'Admin';

   ```

* **Analyse des clients et commandes** :
  ```sql
  CREATE TABLE Client (
      id INT PRIMARY KEY AUTO_INCREMENT,
      nom VARCHAR(255) NOT NULL
  );

  CREATE TABLE Commande (
      id INT PRIMARY KEY AUTO_INCREMENT,
      client_id INT,
      montant DECIMAL(10, 2),
      date_commande DATE,
      FOREIGN KEY (client_id) REFERENCES Client(id)
  );

  SELECT Client.nom, COUNT(Commande.id) AS NombreCommandes
  FROM Client
  INNER JOIN Commande ON Client.id = Commande.client_id
  WHERE Commande.date_commande >= DATE_SUB(CURDATE(), INTERVAL 1 YEAR)
  GROUP BY Client.nom
  HAVING NombreCommandes > 5;

  SELECT Client.nom, SUM(Commande.montant) AS TotalDepense
  FROM Client
  INNER JOIN Commande ON Client.id = Commande.client_id
  GROUP BY Client.nom
  ORDER BY TotalDepense DESC;
  ```
* **Gestion d'un inventaire de produits** :
  ```sql
  CREATE TABLE Produit (
      id INT PRIMARY KEY AUTO_INCREMENT,
      nom VARCHAR(255) NOT NULL,
      quantite INT NOT NULL,
      prix DECIMAL(10, 2) NOT NULL,
      categorie VARCHAR(255) NOT NULL
  );

  SELECT * FROM Produit
  WHERE quantite < 10;

  CREATE VIEW ProduitsLesPlusChersParCategorie AS
  SELECT categorie, nom, prix
  FROM Produit
  WHERE prix = (SELECT MAX(prix) FROM Produit AS p WHERE p.categorie = Produit.categorie);
  ```
* **Gestion des employés et des départements** :
  ```sql
  CREATE TABLE Departement (
      id INT PRIMARY KEY AUTO_INCREMENT,
      nom VARCHAR(255) NOT NULL
  );

  CREATE TABLE Employe (
      id INT PRIMARY KEY AUTO_INCREMENT,
      nom VARCHAR(255) NOT NULL,
      salaire DECIMAL(10, 2) NOT NULL,
      departement_id INT,
      FOREIGN KEY (departement_id) REFERENCES Departement(id)
  );

  SELECT Employe.nom, Departement.nom AS Departement
  FROM Employe
  INNER JOIN Departement ON Employe.departement_id = Departement.id
  WHERE Departement.nom = 'Informatique';

  SELECT Departement.nom, AVG(Employe.salaire) AS SalaireMoyen
     FROM Employe
     INNER JOIN Departement ON Employe.departement_id = Departement.id
     GROUP BY Departement.nom;

  ```
