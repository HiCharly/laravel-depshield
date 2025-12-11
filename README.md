**THIS PACKAGE IS IN DEVELOPMENT, DO NOT USE (YET)**

# A visual security audit dashboard for Composer and Bun dependencies in Laravel.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/hicharly/laravel-depshield.svg?style=flat-square)](https://packagist.org/packages/hicharly/laravel-depshield)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/hicharly/laravel-depshield/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/hicharly/laravel-depshield/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/hicharly/laravel-depshield/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/hicharly/laravel-depshield/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/hicharly/laravel-depshield.svg?style=flat-square)](https://packagist.org/packages/hicharly/laravel-depshield)

DepShield is a web dashboard that allows developers to easily review installed dependencies. It highlights outdated dependencies and security advisories.

## Installation

You can install the package via composer:

```bash
composer require hicharly/laravel-depshield
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-depshield-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-depshield-views"
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [HiCharly](https://github.com/hicharly)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
