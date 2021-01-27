# laravel-moneybird

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE)
[![Total Downloads][ico-downloads]][link-downloads]

This Laravel package is a wrapper for [picqer/moneybird-php-client](https://github.com/picqer/moneybird-php-client).

This is an updated and maintained fork of [casdr/laravel-moneybird](https://github.com/casdr/laravel-moneybird).

## Install

Via Composer

``` bash
$ composer require lemmotresto/laravel-moneybird
```

Laravel uses Package Auto-Discovery, so doesn't require you to manually add the ServiceProvider.

### Laravel without auto-discovery:

If you don't use auto-discovery, add the ServiceProvider and the Facade to your `config/app.php`:

```php
'providers' => [
  ...
  LemmoTresto\Moneybird\MoneybirdServiceProvider::class,
],
'aliases' => [
  ...
  'Moneybird' => LemmoTresto\Moneybird\MoneybirdFacade::class,
]
```

Then run the following command to publish the config to your config/ directory.

```bash
$ php artisan vendor:publish --tag=config
```

You then need to generate an application in the Moneybird interface and set the configuration in `config/moneybird.php`

## Usage

``` php
$contact = Moneybird::contact();

$contact->company_name = 'BlaLabs';
$contact->firstname = 'Cas';
$contact->lastname = 'de Reuver';
$contact->save();
```
There is additional documentation on the MoneybirdFacade class using phpdoc annotations.
For more usage information, see [picqer/moneybird-php-client](https://github.com/picqer/moneybird-php-client)

## Credits

- [Max Berkelmans][link-author] <maxberkelmans@live.nl>
- [Cas de Reuver](https://github.com/casdr) <cdreuver@blalabs.com>

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.

[ico-version]: https://img.shields.io/packagist/v/lemmotresto/laravel-moneybird.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/lemmotresto/laravel-moneybird.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/lemmotresto/laravel-moneybird
[link-downloads]: https://packagist.org/packages/lemmotresto/laravel-moneybird/stats
[link-author]: https://github.com/lemmotresto
