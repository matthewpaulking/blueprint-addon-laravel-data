# Generate Laravel Data objects with Laravel Blueprint

[![Latest Version on Packagist](https://img.shields.io/packagist/v/matthewpaulking/blueprint-addon-laravel-data.svg?style=flat-square)](https://packagist.org/packages/matthewpaulking/blueprint-addon-laravel-data)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/matthewpaulking/blueprint-addon-laravel-data/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/matthewpaulking/blueprint-addon-laravel-data/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/matthewpaulking/blueprint-addon-laravel-data/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/matthewpaulking/blueprint-addon-laravel-data/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/matthewpaulking/blueprint-addon-laravel-data.svg?style=flat-square)](https://packagist.org/packages/matthewpaulking/blueprint-addon-laravel-data)

An addon for Laravel Blueprint that generates Laravel Data objects.

## Installation

You can install the package via composer:

```bash
composer require matthewpaulking/blueprint-addon-laravel-data
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="blueprint-addon-laravel-data-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="blueprint-addon-laravel-data-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="blueprint-addon-laravel-data-views"
```

## Usage

```php
$blueprintAddonLaravelData = new MPK\BlueprintAddonLaravelData();
echo $blueprintAddonLaravelData->echoPhrase('Hello, MPK!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

-   [Matthew King](https://github.com/matthewpaulking)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
