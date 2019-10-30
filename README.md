# Navigator

A very simple package to build a website navigation bar.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/marcusmyers/navigator.svg?style=flat-square)](https://packagist.org/packages/marcusmyers/navigator)
[![Total Downloads](https://img.shields.io/packagist/dt/marcusmyers/navigator.svg?style=flat-square)](https://packagist.org/packages/marcusmyers/navigator)

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what PSRs you support to avoid any confusion with users and contributors.

## Installation

You can install the package via composer:

```bash
composer require marcusmyers/navigator
php artisan vendor:publish --provider="Marcusmyers\Navigator\NavigatorServiceProvider
php artisan migrate
```

## Usage

``` php
<Navigator :nav-json="{{ ... }}"/>
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email marcusmyers@gmail.com instead of using the issue tracker.

## Credits

- [Mark Myers](https://github.com/marcusmyers)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
