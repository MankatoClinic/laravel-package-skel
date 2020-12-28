# :package_description

[![Latest Version on Packagist](https://img.shields.io/packagist/v/:vendor_name/:package_name.svg?style=flat-square)](https://packagist.org/packages/:vendor_name/:package_name)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/:vendor_name/:package_name/run-tests?label=tests)](https://github.com/:vendor_name/:package_name/actions?query=workflow%3ATests+branch%3Amaster)
![GitHub Downloads all releases](https://img.shields.io/github/downloads/:vendor_name/:package_name/total)

**Note:** Run `./configure-Laraskel.sh` (POSIX) or `.\Configure-Laraskel.ps1` (Win) to get started

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Credits

### Mankato Clinic
Open-source MCDev software and components are developed and by the small but dedicated programming team at [Mankato Clinic](http://www.mankatoclinic.com/), a doctor-owned multi-specialty healthcare provider in southern Minnesota, USA. See more in the [CREDITS](CREDITS.md) documentation page for more information.

### Upstream Contributor Credits

MCDev software, including this package, has benefited from the work of many incredible individual and organizational open-source contributors and the open-source user community. For a list of just some of the major contributors that have empowered our work, please see the [CREDITS](CREDITS.md) documentation page.

## Installation

You can install the package via composer:

```bash
composer require :vendor_name/:package_name
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="MCDev\:package_name\ServiceProvider" --tag="migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="MCDev\:package_name\ServiceProvider" --tag="config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$example = new MCDev\Laraskel();
echo $example->shoutItOut('Hello, world!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on recent changes. We try to include both MCDev and upstream change notes.

## Contributing

Code contributions and feature ideas are welcome! Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## License

This package is published under the MIT License (MIT) and intended to be free to use in both commercial and non-commercial projects. 

Please see the [LICENSE](LICENSE.md) document for more information.
