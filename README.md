SlimAPI-2 est une mini-application permettant de créer des Interface de programmation (ou API).
Il est basé sur SlimFramework, un micro-framework PHP qui en est maintenant à sa version 2.
SlimAPI-2 n'est la la 3eme version de SlimAPI, il utilise juste la version 2 de SlimFramework.

## Installation

il est recommendé d'utiliser [Composer](https://getcomposer.org/) pour installer SlimAPI-2 dans son ensemble.

```bash
$ composer update
```

Cela installera Slim, SlimPDO (pour la gestion avec une BDD MySQL), et toutes les dépendances requises.
Pour l'utilisation de Slim et SlimPDO, je peux vous conseiller la lecture des liens suivants :
- [Documentation Slim Packagist](https://packagist.org/packages/slim/slim).
- [Documentation SlimPDO Packagist](https://packagist.org/packages/slim/pdo).

Slim demande l'utilisation de PHP à partir de la version 5.3.0.

## Usage

Tout est fait pour que l'outil marche tout seul à l'installation.
Pour plus d'information sur le fait de configurer votre serveur Web, allez voir la [Documentation](http://www.slimframework.com/docs/start/web-servers.html).

il existe des URLS d'exemple pour cette mini-application.
Vous les trouverez dans le dossier "routers", et plus spécifiquement dans le fichier "exemple.router.php".
Ce fichier de routing fait appel à un modèle "Exemple.php" grâce à la ligne PHP suivante :

```php
use models\Exemple;
```

J'utilise le terme "modèle" par rapport au Design Pattern MVC (Modèle-Vue-Contrôleur).
Le fichier "Exemple.php" se retrouve dans le dossier "models". Il comprend deux fonctions, "getAllData()" & "getData($slug)"

Il y a une BDD d'exemple pour l'affichage de certains exemples, voyez [atomes.sql](atomes.sql)

## Contributing

Pour contribuer à SlimFramework, aller voir [CONTRIBUTING](CONTRIBUTING.md) pour plus de détails.
Sinon, pour contribuer à SlimAPI-2, n'hésitez pas à me faire des propositions.

## En apprendre plus sur Slim Framework

Liens important sur Slim Framework :

- [Website](http://www.slimframework.com)
- [Documentation v2](http://docs.slimframework.com/)
- [Support Forum](http://help.slimframework.com)
- [Twitter](https://twitter.com/slimphp)
- [Resources](https://github.com/xssc/awesome-slim)

## Credits

- [Guillaume RICHARD](https://github.com/Guillaume-RICHARD)

## License

Slim Framework est licencié sous la licence MIT. J'utilise la même licence pour SlimAPI-2.
Voir [License File](LICENSE.md) pour plus d'information.

