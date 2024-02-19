# Projet de restauration 0 Cnamo 

Ce projet est un site web pour la formation DevWeb du CNAM.

## Prérequis 

- Apache 2.4.54
- 10.10.2-MariaDB
- PHP 8.0.26 
- Composer 2.6.5
- NodeJS et npm TODO
## Installation 

### version dev 

il faut d'abord cloner l'application en local :

``` 
git clone https://github.com/bea59/ocnamo-site.git
```

Ensuite il faut créer une BDD puis configurer les accés dan le fichier `.env`

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=mon_application
DB_USERNAME=mon_application
DB_PASSWORD=123
```

Pour créer les tables et injecter des données de test, vous pouvez utiliser un script bash :

```
./mkdb.sh
```

Vous pouvez donner un nom à l'application dans le fichier `.env`:

```
APP_NAME = "mon_application"
```

### version prod 

TODO

## Utilisation 

Dans le terminal : 

```
php artisan serve
```

Aller sur la page [http://127.0.0.1:8000](http://127.0.0.1:8000)

## Requêtes SQL utiles

```
-- Liste des catégories et de leurs plats
SELECT * 
FROM categories 
INNER JOIN plats ON categories.id = plats.categories_id
ORDER BY categories.id, plats.nom
```
```
SELECT * 
FROM plats 
INNER JOIN etiquettes_plats ON etiquettes_plats.plats_id = plats.id 
INNER JOIN etiquettes ON etiquettes_plats.etiquettes_id = etiquettes.id 
ORDER BY plats.nom, etiquettes.nom
```

## Recommandations 

### Images d'ambiance

la taille recommandée est : 

- Largeur : 1024px
- Hauteur : 768px

Il vaut mieux utiliser des fichiers JPEG car ils sont plus légers 

## Mentions légales

### Licence du projet

TODO

### Droits d'auteur 

Toutes les photos du site ont été réalisées par Unsplash. 