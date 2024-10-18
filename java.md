
### Compétences Java Avancées

1. **Avantages des expressions lambda** : Les lambdas permettent d'écrire du code plus concis et lisible. Elles facilitent l'utilisation des API de collections, comme les streams, pour des opérations de filtrage, tri, et transformation des données.
2. **Fonctionnement des `Stream` en Java** : Les `Stream` permettent de traiter des collections d'une manière déclarative (comme les expressions SQL). Ils supportent des opérations intermédiaires (filter, map) et terminales (forEach, collect).
3. **Différences entre `HashMap`, `LinkedHashMap` et `TreeMap`** : `HashMap` ne conserve pas l'ordre d'insertion, `LinkedHashMap` le fait, et `TreeMap` trie les clés selon l'ordre naturel ou un `Comparator` fourni.
4. **Gestion de la concurrence en Java** : Utilisez des structures de données thread-safe (`ConcurrentHashMap`, `CopyOnWriteArrayList`), des verrous (`ReentrantLock`) ou des classes atomiques (`AtomicInteger`).
5. **Différence entre `Callable` et `Runnable`** : `Callable` renvoie un résultat ou lance une exception, tandis que `Runnable` ne renvoie rien.
6. **`CompletableFuture` et ses avantages** : C'est une classe qui facilite la gestion d'appels asynchrones en combinant plusieurs tâches et en gérant les erreurs.
7. **`Comparator` vs `Comparable`** : `Comparable` est utilisé pour définir l'ordre naturel d'une classe, alors que `Comparator` permet de définir un ordre personnalisé à l'extérieur de la classe.
8. **Garbage Collector et optimisation** : Le `Garbage Collector` libère la mémoire en supprimant les objets inutilisés. L'optimisation peut se faire en choisissant le bon collecteur (G1, CMS) ou en ajustant les paramètres de la JVM (taille du heap, etc.).
9. **Gestion des exceptions en Java** : Utilisez les blocs `try-catch-finally`, et les exceptions personnalisées pour des erreurs spécifiques. Ne pas attraper des exceptions génériques.
10. **Immutabilité en Java** : Les objets immuables ne peuvent pas être modifiés après leur création. Cela améliore la sécurité, réduit les erreurs de concurrence, et simplifie le raisonnement sur le code.

### Spring Framework

11. **Différence entre `@Controller` et `@RestController`** : `@RestController` combine `@Controller` et `@ResponseBody`, renvoyant directement les données au format JSON ou XML. `@Controller` renvoie une vue (template).
12. **Sécurité dans Spring avec Spring Security** : Utilisez `@EnableWebSecurity` pour activer la sécurité. Configurez les rôles et permissions via `WebSecurityConfigurerAdapter` et gérez l'authentification (formulaire, JWT, OAuth).
13. **Gestion des transactions dans Spring** : Utilisez `@Transactional` pour marquer des méthodes ou classes comme transactionnelles. Cela permet de gérer automatiquement le commit ou rollback selon les exceptions.
14. **Qu'est-ce qu'un bean Spring** : Un bean est un objet géré par le conteneur IoC de Spring, qui contrôle son cycle de vie et ses dépendances.
15. **Configuration d’un service REST avec Spring Boot** : Créez une classe annotée avec `@RestController` et mappez les endpoints HTTP avec `@GetMapping`, `@PostMapping`, etc.
16. **Injection par constructeur vs setter** : L’injection par constructeur est préférée car elle permet de définir les dépendances au moment de l'instanciation et favorise l'immuabilité. L’injection par setter permet d’injecter des dépendances optionnelles.
17. **Cache dans Spring Boot** : Utilisez l'annotation `@EnableCaching` pour activer le cache et `@Cacheable` sur les méthodes pour mettre en cache les résultats.
18. **Appels asynchrones avec Spring** : Utilisez `@Async` pour exécuter des méthodes de manière asynchrone.
19. **Spring Data JPA pour bases relationnelles** : Spring Data JPA permet de créer des repositories qui gèrent les opérations CRUD sans écrire de code SQL. Utilisez les méthodes pré-définies ou les `@Query`.
20. **Gestion des erreurs dans Spring Boot** : Utilisez `@ExceptionHandler` pour capturer et traiter les exceptions. Les exceptions spécifiques peuvent être mappées à des réponses HTTP personnalisées.

### Hibernate et ORM

21. **Différence entre `lazy` et `eager` fetching** : `Lazy` charge les relations uniquement lorsqu'elles sont accédées, `Eager` les charge immédiatement. Le lazy loading est préférable pour les performances.
22. **Gestion des transactions dans Hibernate** : Utilisez une `Session` Hibernate pour gérer les transactions. Commencez une transaction, effectuez les opérations, puis faites un commit ou rollback.
23. **Gestion des relations en Hibernate** : Utilisez des annotations comme `@OneToOne`, `@OneToMany`, `@ManyToMany` pour définir les relations entre entités.
24. **Second Level Cache dans Hibernate** : Un cache qui stocke les entités entre plusieurs sessions, améliorant les performances de l'accès aux données. Activez-le dans la configuration d'Hibernate.
25. **Différence entre `merge` et `persist`** : `Persist` ajoute une nouvelle entité dans la base de données, `merge` synchronise les modifications d'une entité détachée avec la base de données.
26. **Gestion des exceptions dans Hibernate** : Utilisez `HibernateException` et ses sous-classes pour capturer les erreurs liées à la base de données et à la configuration.
27. **Amélioration des performances des requêtes Hibernate** : Utilisez des projections, le cache, et optimisez le nombre de requêtes en réduisant les `N+1` selects.
28. **`Session` dans Hibernate** : `Session` est l'interface principale pour interagir avec la base de données. Elle gère les opérations CRUD et le cycle de vie des objets.
29. **Pagination avec Hibernate** : Utilisez `Query.setFirstResult()` et `Query.setMaxResults()` pour limiter les résultats d'une requête et implémenter la pagination.
30. **Validation des entités** : Utilisez l'annotation `@Valid` en combinaison avec des contraintes de validation comme `@NotNull`, `@Size`, `@Email` pour valider les données avant de les persister.

### Architectures Microservices

31. **Architecture microservices et avantages** : Elle consiste à diviser une application en petits services indépendants qui peuvent être déployés et mis à jour individuellement. Avantages : scalabilité, indépendance des équipes, meilleure résilience.
32. **Communication entre microservices** : Utilisez REST pour des communications simples, gRPC pour des besoins de performance, ou des systèmes de messagerie (Kafka, RabbitMQ) pour de l'asynchronisme.
33. **Circuit Breaker** : Un pattern pour éviter la surcharge des services en cas de panne. Implémenté avec des outils comme Hystrix ou Resilience4j.
34. **Surveillance des microservices** : Utilisez des outils comme Prometheus, Grafana, ELK Stack pour monitorer les logs, métriques, et alertes.
35. **Gestion de l'authentification et autorisation** : Utilisez OAuth2 et JWT pour gérer l'authentification des utilisateurs à travers les microservices.
36. **Cohérence des données dans une architecture microservices** : Utilisez des transactions distribuées avec `SAGA pattern` ou `eventual consistency` pour garantir la cohérence des données.
37. **Différence entre monolithique et microservices** : Un monolithe est une application unique, tandis que les microservices décomposent l’application en services autonomes. Les microservices favorisent la scalabilité, mais augmentent la complexité.
38. **Service Discovery** : Un processus permettant aux microservices de se découvrir les uns les autres dynamiquement via un annuaire (e.g., Eureka).
39. **Gestion de la scalabilité** : Utilisez des clusters de containers (Docker) orchestrés par Kubernetes pour assurer une montée en charge automatique.
40. **Bonnes pratiques pour les microservices** : Séparez les bases de données, mettez en place un monitoring centralisé, utilisez des APIs bien définies, et adoptez l'automatisation du déploiement (CI/CD).

### Cloud et DevOps

41. **Déploiement Java dans le Cloud** : Utilisez AWS (EC2 pour héberger l’application, S3 pour le stockage de fichiers) ou Azure. Automatisez le déploiement via des pipelines CI/CD.
42. **Services AWS utilisés** : EC2 pour les instances, S3 pour le stockage d'objets, Lambda pour des fonctions serverless.
43. **Pipeline CI/CD avec Jenkins** : Configurez Jenkins pour automatiser le build, les tests et le déploiement du code à chaque commit via des jobs et des pipelines.
44. **Fonction Lambda AWS** : Service serverless qui permet d'exécuter du code sans gérer l'infrastructure, idéal pour des tâches ponctuelles.
45. **Containers vs machines virtuelles** : Les containers (Docker) sont plus légers et partagent le noyau du système hôte, tandis que les machines virtuelles exécutent un OS complet, mais avec plus de ressources.
46. **Surveillance et logging dans le Cloud^** : Utilisez CloudWatch (AWS) ou Application Insights (Azure) pour collecter et visualiser les logs et métriques.
    47. **Gestion des secrets** : Utilisez des services comme AWS Secrets Manager ou HashiCorp Vault pour sécuriser les clés d’API, mots de passe et autres informations sensibles.
    48. **Infrastructure as Code** : Terraform permet de décrire et provisionner des infrastructures Cloud de manière déclarative (e.g., réseaux, VMs, services).
    49. **Surveillance des performances Cloud** : Utilisez des solutions comme Prometheus, CloudWatch, ou Azure Monitor pour visualiser et suivre les métriques d'utilisation des services Cloud.
    50. **Gestion des configurations multi-environnements** : Utilisez des fichiers de configuration séparés ou des services comme AWS Parameter Store pour stocker et gérer les configurations spécifiques à chaque environnement.

### Gestion de Projet et Leadership

51. **Gérer une équipe avec différentes expertises** : Adoptez une approche collaborative, répartissez les tâches en fonction des forces de chacun et organisez des sessions de partage de connaissances.
52. **Priorisation dans un projet Agile** : Utilisez des outils comme Jira pour gérer le backlog et travaillez avec le Product Owner pour définir les priorités en fonction de la valeur métier.
53. **Gestion des conflits d’équipe** : Soyez à l’écoute, facilitez la communication et encouragez une résolution collective des problèmes. Appliquez la médiation si nécessaire.
54. **Assurer la qualité du code** : Mettez en place des revues de code systématiques, adoptez des outils de qualité (SonarQube) et appliquez les tests unitaires et d'intégration.
55. **Feedbacks constructifs** : Soyez précis dans les retours, soulignez les points positifs, proposez des améliorations concrètes, et encouragez la discussion ouverte.
56. **Prise de décision technique** : Analysez les impacts à long terme, écoutez les suggestions de l’équipe, et basez vos décisions sur des critères techniques et business.
57. **Gestion des crises projet** : Priorisez les problèmes, communiquez clairement avec l’équipe, et découpez la résolution en tâches gérables. Assurez-vous que les parties prenantes sont bien informées.
58. **Mesurer la productivité tout en assurant la qualité** : Suivez les métriques clés (vélocité, taux de bugs) et veillez à ce que l’équipe respecte les standards de qualité du code.
59. **Exemple de leadership technique** : Donnez un exemple concret où vous avez guidé une équipe vers la résolution d’un problème technique complexe tout en respectant les délais.
60. **Montée en compétences des développeurs juniors** : Organisez des sessions de formation, attribuez des tâches progressives, et encouragez la pair programming pour l’apprentissage.

### Java Avancé et Concurrence

1. **Nouveautés majeures de Java 11 ou Java 17 :**

   - Java 11 : `var` dans les lambda, améliorations de l’API HTTP Client, nouvelles méthodes de chaînes (`strip`, `isBlank`), suppression de Java EE et CORBA.
   - Java 17 : pattern matching pour `instanceof`, sealed classes, nouveaux garbage collectors (`ZGC`, `Shenandoah`), Java est passé au modèle de release LTS (Long Term Support).
2. **Différence entre une classe abstraite et une interface :**

   - Une classe abstraite peut contenir des méthodes avec des implémentations et des membres de données. Une interface ne contient que des déclarations de méthodes (jusqu’à Java 7) et ne peut contenir que des méthodes par défaut ou statiques depuis Java 8.
3. **Diamond operator (`<>`) :** Il permet d'éviter la répétition du type générique lors de l'instanciation d’une collection ou d’une classe générique, e.g., `List<String> list = new ArrayList<>();`.
4. **Gestion des threads avec `java.util.concurrent` :** Le package fournit des outils comme `ExecutorService` pour la gestion des threads, `CountDownLatch`, `CyclicBarrier` et d'autres utilitaires pour la synchronisation et la gestion des tâches concurrentes.
5. **Inversion de contrôle (IoC) :** Il s’agit d’un principe où l’infrastructure du framework (ex : Spring) gère l’instanciation des objets et leur cycle de vie, permettant une meilleure modularité.
6. **Différence entre `ExecutorService` et `ForkJoinPool` :**

   - `ExecutorService` est utilisé pour gérer les threads en pool.
   - `ForkJoinPool` est conçu pour des tâches parallèles où les tâches sont divisées en sous-tâches (fork) puis réunies après (join).
7. **`ThreadLocal` en Java :** Il permet de stocker des variables locales à chaque thread, indépendantes des autres threads, utile pour maintenir un état spécifique pour chaque thread.
8. **Différence entre méthode `synchronized` et bloc `synchronized` :**

   - Une méthode `synchronized` verrouille l'objet ou la classe entière.
   - Un bloc `synchronized` permet de verrouiller une partie du code avec un verrou spécifique, ce qui est plus flexible.
9. **Éviter les "deadlocks" :** En respectant un ordre constant d'acquisition des verrous, en utilisant des timeouts ou en évitant les sections critiques imbriquées.
10. **Classe `CountDownLatch` :** Elle permet à un ou plusieurs threads d'attendre qu'un ensemble d'opérations soit terminé par d'autres threads, e.g., attendre que plusieurs services démarrent avant de lancer une application.

### Tests et Qualité de Code

11. **Tests unitaires avec JUnit :** Utilisation de l'annotation `@Test` pour définir des méthodes de tests, assertion de conditions avec `assertEquals`, `assertTrue`, etc.
12. **Mockito et tests de mocks :** Mockito permet de simuler des dépendances dans les tests en créant des objets mocks. Par exemple, `when(mock.method()).thenReturn(value)`.
13. **Tests d'intégration vs tests unitaires :**

- Tests unitaires : testent des composants isolés (méthodes, classes).
- Tests d'intégration : vérifient l'interaction entre plusieurs composants.

14. **Test Driven Development (TDD) :** Écrire les tests avant le code. Avantages : code mieux conçu, réduction des bugs, meilleure couverture de tests.
15. **Assurer la couverture de code :** Utilisation d'outils comme JaCoCo pour mesurer la couverture de tests, viser une couverture minimale (généralement 80 %), mais aussi s'assurer que les tests sont significatifs.
16. **Bonnes pratiques pour écrire des tests efficaces :** Garder les tests simples, éviter les dépendances inutiles, se concentrer sur un cas à la fois, rendre les tests rapides.
17. **Behavior Driven Development (BDD) :** Le BDD implique d'écrire des tests basés sur des comportements attendus, souvent avec des outils comme Cucumber. Il est plus centré sur les utilisateurs que le TDD.
18. **Jacoco pour la couverture des tests :** JaCoCo génère des rapports sur la couverture de code (ligne, méthode, branche), permet d'identifier les parties non testées du code.
19. **Exception contrôlée vs non contrôlée :**

- Exception contrôlée : doit être capturée ou déclarée (`IOException`, `SQLException`).
- Exception non contrôlée : erreurs de programmation (`NullPointerException`, `ArrayIndexOutOfBoundsException`).

20. **Bonnes pratiques pour écrire du code propre :** Utilisation de noms explicites pour les variables et méthodes, réduire la complexité cyclomatique, éviter les répétitions (DRY), diviser le code en petites méthodes.

### Conception et Architecture

21. **Pattern Singleton :** Garantit qu'une classe n'ait qu'une seule instance. Utilisation : gestion de ressources partagées (loggers, caches).
22. **Pattern Factory :** Crée des objets sans exposer la logique d'instanciation, utile pour créer des objets dont les classes concrètes peuvent changer à l'exécution.
23. **Observer vs Mediator :**

- `Observer` : permet à un objet d'avertir plusieurs observateurs de ses changements.
- `Mediator` : centralise la communication entre plusieurs objets pour réduire les dépendances directes.

24. **Principe SOLID :** Série de cinq principes pour écrire du code modulaire et maintenable :

- Single Responsibility, Open/Closed, Liskov Substitution, Interface Segregation, Dependency Inversion.

25. **DTO (Data Transfer Object) :** Objet utilisé pour transférer des données entre couches, surtout dans les architectures distribuées pour éviter d'exposer des objets métier.
26. **Architecture en couches vs hexagonale :**

- En couches : organisation traditionnelle avec présentation, logique métier, et accès aux données.
- Hexagonale : sépare les dépendances externes du noyau de l'application, facilite les tests et l'évolution.

27. **Gestion des dépendances dans une architecture modulaire :** Utilisation de modules bien définis, `dependency injection`, respect de l'encapsulation.
28. **Architecture orientée événements :** Utilisation d'événements asynchrones pour dé-coupler les composants, permettant une plus grande scalabilité.
29. **Pattern CQRS :** Séparation des commandes (écriture) et des requêtes (lecture), permet d'optimiser chaque partie indépendamment.
30. **Injection de dépendance dans Spring :** Spring utilise l'injection de dépendance pour instancier et injecter les objets requis à l'aide d’annotations (`@Autowired`, `@Component`, `@Service`).

### Spring Framework

31. **Spring MVC vs Spring WebFlux :**

- Spring MVC : approche traditionnelle et bloquante.
- Spring WebFlux : programmation réactive, non-bloquante.

32. **Spring Boot Actuator :** Outil permettant de monitorer les métriques, la santé des applications, et d’obtenir des informations détaillées sur le runtime.
33. **Sécurisation avec OAuth2 :** Utilisation de `Spring Security` avec OAuth2 pour gérer l'authentification et l'autorisation via des tokens.
34. **Spring Cloud :** Ensemble de projets pour la gestion des microservices, incluant la découverte de services, la résilience, et la gestion des configurations distribuées.
35. **Communication entre microservices avec Eureka et Zuul :**

- Eureka : service de découverte permettant aux microservices de se trouver.
- Zuul : API Gateway qui gère le routage et la sécurité entre les microservices.

36. **Spring Boot DevTools :** Module pour le rechargement automatique des classes et configurations lors du développement pour accélérer les cycles de développement.
37. **Spring Batch :** Framework pour traiter des lots de données, utilisé pour l’automatisation des traitements batch (exécution de tâches récurrentes sur de grandes quantités de données).
38. **Authentification JWT avec Spring Security :** Utilisation de `Bearer Tokens` pour authentifier et sécuriser les requêtes HTTP en injectant le token JWT dans les en-têtes.
39. **Spring Retry :** Bibliothèque pour gérer la reprise automatique après des échecs temporaires (ex : timeout de services externes).
40. **Résilience d'une application avec Spring Boot :** Utilisation de mécanismes comme `Retry` pour les échecs transitoires et `Circuit Breaker` pour empêcher la surcharge des services en cas de panne.

### Hibernate et ORM

41. **Entité "detached" en Hibernate :** Une entité est "detached" lorsqu'elle est en dehors du contexte de persistance (`Session`) d'Hibernate. Elle peut être ré-attachée pour être persistée à nouveau.
42. **`@OneToMany` avec `@JoinColumn` vs `@JoinTable` :**

- `@JoinColumn` : utilise une clé étrangère.
- `@JoinTable` : crée une table d'association.

43. **Héritage d’entités avec `@Inheritance` :** Hibernate permet de mapper des classes héritées en utilisant différentes stratégies (`SINGLE_TABLE`, `JOINED`, `TABLE_PER_CLASS`).
44. **Requête HQL :

** Langage de requête propre à Hibernate, plus orienté objet que SQL, utilisé pour effectuer des requêtes sur des entités Java.

45. **Requête native en Hibernate :** Utilisation de requêtes SQL dans Hibernate en cas de besoin de requêtes spécifiques non couvertes par HQL.
46. **Cascade des opérations en Hibernate :** Détermine si les opérations sur une entité principale doivent être propagées à ses entités associées (`CascadeType.PERSIST`, `REMOVE`, etc.).
47. **Interceptor en Hibernate :** Mécanisme permettant d’intercepter les événements liés aux entités (sauvegarde, mise à jour, suppression) pour appliquer des comportements supplémentaires.
48. **First Level Cache vs Second Level Cache :**

- First Level Cache : cache au niveau de la session, activé par défaut.
- Second Level Cache : cache au niveau de l'application, partagé entre sessions.

49. **Entités immuables en Hibernate :** Utilisation de l'annotation `@Immutable` pour les entités qui ne doivent pas être modifiées après leur création.
50. **Optimistic locking vs Pessimistic locking :**

- Optimistic locking : suppose que les conflits sont rares et utilise des versions pour détecter les conflits.
- Pessimistic locking : verrouille les lignes de la base de données pour empêcher les conflits.

### Microservices et Scalabilité

51. **Service Mesh :** Infrastructure dédiée à la gestion des communications entre microservices, ajoutant des fonctionnalités comme la découverte, la sécurité, le routage, sans modifier le code.
52. **Pattern de Saga :** Utilisé pour gérer les transactions distribuées en orchestrant une série d'événements locaux entre plusieurs services tout en garantissant la cohérence.
53. **Horizontal scaling vs vertical scaling :**

- Horizontal : ajouter plus de serveurs.
- Vertical : augmenter la capacité d'un serveur unique (CPU, RAM).

54. **Containerization avec Docker :** Docker permet d’encapsuler une application et ses dépendances dans un conteneur portable, facilitant le déploiement dans différents environnements.
55. **Migration de bases de données dans microservices :** Utilisation de scripts versionnés (`Liquibase`, `Flyway`) pour appliquer les modifications sur les schémas de base de données dans chaque microservice.
56. **Tâches planifiées dans une architecture microservices :** Utilisation de mécanismes comme `cron`, `@Scheduled` de Spring, ou des services spécifiques (e.g. AWS Lambda pour des tâches ponctuelles).
57. **API Gateway dans microservices :** Composant central qui gère le routage des requêtes entre clients et microservices, applique la sécurité, et implémente des politiques comme le throttling.
58. **Service registry dans microservices :** Un annuaire central (e.g. Eureka) qui permet aux services de s’enregistrer dynamiquement et de se découvrir pour communiquer entre eux.
59. **Blue-green deployment :** Stratégie de déploiement qui consiste à avoir deux environnements identiques (Blue et Green). Le nouveau code est déployé sur l'un (Green) et, après validation, basculé en production.
60. **Résilience dans les systèmes distribués :** Utilisation de mécanismes comme des files d'attente (`RabbitMQ`), des outils de gestion des erreurs transitoires (ex : Circuit Breaker, Retry), pour assurer la disponibilité et la tolérance aux pannes.


### Questions de base

1. **Qu'est-ce que SQL et à quoi sert-il ?**

   - SQL (Structured Query Language) est un langage standard utilisé pour interagir avec les bases de données relationnelles. Il permet de créer, modifier et interroger des bases de données.
2. **Quelle est la différence entre une base de données relationnelle et une base de données non relationnelle ?**

   - Une base de données relationnelle stocke les données sous forme de tables avec des relations définies entre elles (utilise SQL). Une base de données non relationnelle (NoSQL) stocke les données sous d'autres formes (documents, clés-valeurs, graphes) et n'utilise pas de schéma fixe.
3. **Que signifie le terme "SGBD" ?**

   - SGBD (Système de Gestion de Base de Données) est un logiciel qui permet de créer, gérer et manipuler des bases de données.
4. **Qu'est-ce qu'une table dans une base de données ?**

   - Une table est une structure de données dans une base de données relationnelle qui organise les données en lignes et en colonnes.
5. **Quelle est la différence entre une ligne et une colonne dans une table ?**

   - Une ligne représente un enregistrement ou une instance de données, tandis qu'une colonne représente un attribut ou un champ de données.
6. **Qu'est-ce qu'une clé primaire ?**

   - Une clé primaire est un champ (ou un groupe de champs) qui identifie de manière unique chaque enregistrement dans une table.
7. **Qu'est-ce qu'une clé étrangère ?**

   - Une clé étrangère est un champ dans une table qui établit une relation avec une clé primaire dans une autre table.
8. **Qu'est-ce qu'un index et pourquoi est-il utilisé ?**

   - Un index est une structure de données qui améliore la vitesse des opérations de recherche dans une table en permettant un accès plus rapide aux données.
9. **Qu'est-ce qu'une contrainte d'unicité ?**

   - Une contrainte d'unicité garantit que les valeurs d'une colonne (ou d'un groupe de colonnes) sont uniques dans la table, empêchant les doublons.
10. **Qu'est-ce qu'une vue dans SQL ?**

    - Une vue est une table virtuelle qui résulte d'une requête SQL. Elle permet de simplifier l'accès aux données et de sécuriser l'accès à certaines informations.

### Requêtes de sélection

11. **Comment récupérer toutes les colonnes d'une table ?**

    ```sql
    SELECT * FROM table_name;
    ```
12. **Comment récupérer des colonnes spécifiques d'une table ?**

    ```sql
    SELECT column1, column2 FROM table_name;
    ```
13. **Qu'est-ce que la clause `WHERE` et comment l'utiliser ?**

    - La clause `WHERE` est utilisée pour filtrer les enregistrements en spécifiant une condition.

    ```sql
    SELECT * FROM table_name WHERE condition;
    ```
14. **Comment trier les résultats d'une requête avec `ORDER BY` ?**

    ```sql
    SELECT * FROM table_name ORDER BY column_name ASC|DESC;
    ```
15. **Comment limiter le nombre de résultats retournés par une requête ?**

    ```sql
    SELECT * FROM table_name LIMIT number;
    ```
16. **Comment utiliser la clause `DISTINCT` ?**

    ```sql
    SELECT DISTINCT column_name FROM table_name;
    ```
17. **Qu'est-ce qu'un alias et comment l'utiliser ?**

    - Un alias est un nom temporaire donné à une table ou une colonne pour simplifier les requêtes.

    ```sql
    SELECT column_name AS alias_name FROM table_name;
    ```
18. **Comment utiliser la fonction `COUNT()` ?**

    ```sql
    SELECT COUNT(*) FROM table_name WHERE condition;
    ```
19. **Comment utiliser la fonction `SUM()` ?**

    ```sql
    SELECT SUM(column_name) FROM table_name WHERE condition;
    ```
20. **Qu'est-ce que la clause `GROUP BY` ?**

    - La clause `GROUP BY` est utilisée pour regrouper les résultats par une ou plusieurs colonnes.

    ```sql
    SELECT column_name, COUNT(*) FROM table_name GROUP BY column_name;
    ```

### Requêtes avancées

21. **Qu'est-ce qu'une jointure ? Quels types de jointures connaissez-vous ?**

    - Une jointure est une opération qui combine des lignes de deux ou plusieurs tables basées sur une condition commune. Types : `INNER JOIN`, `LEFT JOIN`, `RIGHT JOIN`, `FULL OUTER JOIN`, `CROSS JOIN`.
22. **Comment effectuer une jointure interne (`INNER JOIN`) ?**

    ```sql
    SELECT a.column_name, b.column_name
    FROM table_a a
    INNER JOIN table_b b ON a.common_field = b.common_field;
    ```
23. **Comment effectuer une jointure externe (`LEFT JOIN`) ?**

    ```sql
    SELECT a.column_name, b.column_name
    FROM table_a a
    LEFT JOIN table_b b ON a.common_field = b.common_field;
    ```
24. **Quelle est la différence entre `INNER JOIN` et `OUTER JOIN` ?**

    - `INNER JOIN` retourne uniquement les enregistrements qui ont des correspondances dans les deux tables. `OUTER JOIN` (incluant `LEFT`, `RIGHT`, `FULL`) retourne tous les enregistrements d'une table, même s'il n'y a pas de correspondance dans l'autre.
25. **Qu'est-ce qu'une jointure croisée (`CROSS JOIN`) ?**

    - Une jointure croisée produit un produit cartésien entre deux tables, combinant chaque ligne de la première table avec chaque ligne de la seconde table.
26. **Qu'est-ce qu'une sous-requête ?**

    - Une sous-requête est une requête imbriquée à l'intérieur d'une autre requête, utilisée pour fournir des résultats à la requête externe.
27. **Comment utiliser une sous-requête dans la clause `WHERE` ?**

    ```sql
    SELECT column_name FROM table_name WHERE column_name IN (SELECT column_name FROM another_table);
    ```
28. **Qu'est-ce qu'une requête corrélée ?**

    - Une requête corrélée est une sous-requête qui dépend des valeurs de la requête externe.
29. **Comment utiliser des agrégats avec `HAVING` ?**

    ```sql
    SELECT column_name, COUNT(*) FROM table_name GROUP BY column_name HAVING COUNT(*) > value;
    ```
30. **Comment utiliser la clause `UNION` ?**

    ```sql
    SELECT column_name FROM table_a
    UNION
    SELECT column_name FROM table_b;
    ```

### Manipulation des données

31. **Comment insérer une nouvelle ligne dans une table ?**

    ```sql
    INSERT INTO table_name (column1, column2) VALUES (value1, value2);
    ```
32. **Comment mettre à jour des données existantes dans une table ?**

    ```sql
    UPDATE table_name SET column_name = value WHERE condition;
    ```
33. **Comment supprimer des données d'une table ?**

    ```sql
    DELETE FROM table_name WHERE condition;
    ```
34. **Quelle est la différence entre `DELETE` et `TRUNCATE` ?**

    - `DELETE` supprime des enregistrements ligne par ligne et peut être utilisé avec une clause `WHERE`. `TRUNCATE` supprime tous les enregistrements d'une table sans journaliser chaque suppression et ne peut pas être utilisé avec `WHERE`.
35. **Comment gérer les transactions en SQL ?**

    - Les transactions sont gérées avec les commandes `BEGIN`, `COMMIT`, et `ROLLBACK`.

    ```sql
    BEGIN;
    -- opérations SQL
    COMMIT; -- ou ROLLBACK;
    ```
36. **Qu'est-ce que le SQL dynamique et comment l'utiliser ?**

    - Le SQL dynamique permet de construire des requêtes SQL à la volée en utilisant des chaînes de caractères, souvent via des procédures stockées.
37. **Comment créer une table ?**

    ```sql
    CREATE TABLE table_name (
        column1 datatype,
        column2 datatype,
        ...
    );
    ```
38. **Comment modifier la structure d'une table existante ?**

    ```sql
    ALTER TABLE table_name ADD column_name datatype;
    -- ou pour modifier une colonne
    ALTER TABLE table_name MODIFY column_name new_datatype;
    ```
39. **Comment supprimer une table ?**

    ```sql
    DROP TABLE table_name;
    ```
40. **Qu'est-ce qu'une procédure stockée ?**

    - Une procédure stockée est un ensemble de commandes SQL précompilées qui peuvent être exécutées sur demande, permettant de réutiliser des requêtes complexes.

### Concepts avancés

41. **Qu'est-ce que le normalisation des bases de données ?**

    - La normalisation est le processus d'organisation des données dans une base de données pour réduire la redondance et améliorer l'intégrité des données.
42. **Quelles sont les différentes formes normales ?**

    - 1NF (Première forme normale), 2NF (Deuxième forme normale), 3NF (Troisième forme normale), BCNF (forme normale de Boyce-Codd), et d'autres.
43. **Qu'est-ce qu'un trigger ?**

    - Un trigger est une procédure qui s'exécute automatiquement en réponse à certains événements sur une table (INSERT, UPDATE, DELETE).
44. **Comment utiliser un

 trigger dans une base de données ?**
    ``sql     CREATE TRIGGER trigger_name     BEFORE|AFTER INSERT|UPDATE|DELETE ON table_name     FOR EACH ROW     BEGIN         -- actions à exécuter     END;     ``

45. **Quelle est la différence entre un trigger `BEFORE` et un trigger `AFTER` ?**

    - Un trigger `BEFORE` s'exécute avant l'opération de modification de la table, tandis qu'un trigger `AFTER` s'exécute après l'opération.
46. **Qu'est-ce qu'un curseur et comment l'utiliser ?**

    - Un curseur est un pointeur qui permet de parcourir les résultats d'une requête ligne par ligne.

    ```sql
    DECLARE cursor_name CURSOR FOR SELECT column_name FROM table_name;
    OPEN cursor_name;
    FETCH NEXT FROM cursor_name;
    ```
47. **Qu'est-ce qu'un schéma dans une base de données ?**

    - Un schéma est une organisation logique de la base de données, incluant des tables, des vues, des procédures, etc.
48. **Comment utiliser des transactions pour assurer la cohérence des données ?**

    - En utilisant `BEGIN`, `COMMIT`, et `ROLLBACK` pour regrouper plusieurs opérations dans une transaction afin de garantir que toutes réussissent ou échouent ensemble.
49. **Qu'est-ce qu'une clé composite ?**

    - Une clé composite est une clé primaire qui utilise deux ou plusieurs colonnes pour identifier de manière unique un enregistrement.
50. **Qu'est-ce qu'un champ auto-incrémenté ?**

    - Un champ auto-incrémenté est une colonne, généralement une clé primaire, dont la valeur est automatiquement incrémentée par le SGBD à chaque nouvel enregistrement.

### Performance et sécurité

51. **Comment optimiser une requête SQL ?**

    - En utilisant des index, en évitant les sous-requêtes inutiles, en sélectionnant uniquement les colonnes nécessaires, et en analysant le plan d'exécution.
52. **Qu'est-ce qu'un plan d'exécution ?**

    - Un plan d'exécution est une représentation des étapes que le SGBD suivra pour exécuter une requête, utile pour diagnostiquer les performances.
53. **Comment utiliser des index pour améliorer les performances ?**

    - En créant des index sur les colonnes fréquemment utilisées dans les clauses `WHERE`, `JOIN`, et `ORDER BY`.
54. **Qu'est-ce que la fragmentation des données et comment y remédier ?**

    - La fragmentation se produit lorsque les données sont dispersées sur le disque, ce qui peut ralentir les requêtes. On peut y remédier en reconstruisant les index ou en réorganisant les tables.
55. **Quelles sont les meilleures pratiques pour la sécurité des bases de données ?**

    - Utiliser des rôles et des permissions, éviter les comptes d'utilisateur avec des privilèges élevés, chiffrer les données sensibles, et valider les entrées pour prévenir les injections SQL.
56. **Qu'est-ce qu'une injection SQL et comment l'éviter ?**

    - Une injection SQL est une technique d'attaque où un attaquant insère du code SQL malveillant dans une requête. Pour l'éviter, utilisez des requêtes préparées ou des ORM, et validez les entrées.
57. **Comment utiliser des rôles et des permissions dans une base de données ?**

    - En créant des rôles avec des permissions spécifiques et en les assignant à des utilisateurs ou des groupes.

    ```sql
    CREATE ROLE role_name;
    GRANT SELECT, INSERT ON table_name TO role_name;
    ```
58. **Qu'est-ce que le chiffrement des données en SQL ?**

    - Le chiffrement des données consiste à convertir des données sensibles en un format illisible afin de protéger leur confidentialité.
59. **Comment effectuer une sauvegarde et une restauration des données ?**

    - En utilisant des commandes spécifiques du SGBD pour créer des sauvegardes (comme `BACKUP DATABASE`) et les restaurer (comme `RESTORE DATABASE`).
60. **Qu'est-ce qu'un système de gestion de base de données distribué ?**

    - Un système de gestion de base de données distribué est un système qui gère des bases de données qui sont stockées sur plusieurs sites ou serveurs, permettant un accès et une gestion centralisés.
