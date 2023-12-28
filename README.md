# A framework for adding self-contained Livewire-powered widgets to your application.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/bernskioldmedia/laravel-livewire-widgets.svg?style=flat-square)](https://packagist.org/packages/bernskioldmedia/laravel-livewire-widgets)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/bernskioldmedia/laravel-livewire-widgets/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/bernskioldmedia/laravel-livewire-widgets/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/bernskioldmedia/laravel-livewire-widgets/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/bernskioldmedia/laravel-livewire-widgets/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/bernskioldmedia/laravel-livewire-widgets.svg?style=flat-square)](https://packagist.org/packages/bernskioldmedia/laravel-livewire-widgets)

## Installation

You can install the package via composer:

```bash
composer require bernskioldmedia/laravel-livewire-widgets
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-livewire-widgets-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-livewire-widgets-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-livewire-widgets-views"
```

## Usage


## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Bernskiold Media](https://github.com/bernskioldmedia)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
