
Installation en 2 lignes de commandes
----
##I) En console, copier/coller ou saisir:

###**composer create-project c57fr/l5 l5**

Mais sous Windows, il est conseillé d'utiliser [**Laragon** (Voir le super Tuto de BestMomo)](http://laravel.sillo.org/cours-laravel-5-3-les-bases-un-environnement-de-developpement), dont un des avantages est que votre site sera directement consultable à l'URL: http://**l5.dev**,  insérer les 4 lignes ci-dessous (N.B.: Il y a une ligne vide devant la ligne de tirets) à la fin du fichier de configuration de la rubrique: 'Créer un site web rapidement':


------------------------------------------------------

Laravel L5=composer create-project c57fr/l5 %s --prefer-dist


##II) Pour alimenter la Base de Données:
1) Créer une Base De Données nommée **l5** (*L5 en minuscule*)

   *(Psitt: Avec Laragon, elle sera même déjà créée !)*
2) Taper en console:
###**php artisan migrate:refresh --seed**

##MàJ:
 Précéder la 1ère commande de:

**composer clearcache**

pour que la commande create-projects aille bien récupérer le tout dernier dépôt de version (release) et non la verion précédente restée encore en cache dans votre système.


Cf. le [README.md du dépôt de htt://laravel.c57.fr](https://github.com/c57fr/laravel/blob/master/readme.md) pour connaître les détails d'une installation manuelle complète

**( Pour la partie membre, Login/MotDePasse = admin@l5 / pw )**
----

<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb combination of simplicity, elegance, and innovation give you tools you need to build any application with which you are tasked.

## Learning Laravel

Laravel has the most extensive and thorough documentation and video tutorial library of any modern web application framework. The [Laravel documentation](https://laravel.com/docs) is thorough, complete, and makes it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 900 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for helping fund on-going Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](http://patreon.com/taylorotwell):

- **[Vehikl](http://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Styde](https://styde.net)**
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
