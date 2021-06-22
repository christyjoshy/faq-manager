# This is a FAQ manager package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/christyjoshy/faq-manager.svg?style=flat-square)](https://packagist.org/packages/christyjoshy/faq-manager)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/christyjoshy/faq-manager/run-tests?label=tests)](https://github.com/christyjoshy/faq-manager/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/christyjoshy/faq-manager/Check%20&%20fix%20styling?label=code%20style)](https://github.com/christyjoshy/faq-manager/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/christyjoshy/faq-manager.svg?style=flat-square)](https://packagist.org/packages/christyjoshy/faq-manager)

## Installation

You can install the package via composer:

```bash
composer require christyjoshy/faq-manager
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Christyjoshy\FaqManager\FaqManagerServiceProvider" --tag="faq-manager-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Christyjoshy\FaqManager\FaqManagerServiceProvider" --tag="faq-manager-config"
```

You can publish the view file with:
```bash
php artisan vendor:publish --provider="Christyjoshy\FaqManager\FaqManagerServiceProvider" --tag="faq-manager-views"
```

You can publish the asset file with:
```bash
php artisan vendor:publish --provider="Christyjoshy\FaqManager\FaqManagerServiceProvider" --tag="faq-manager-assets"
```

Frontend Routing :
```bash
Route::faq('your-url');
```
Backend Routing :
```bash
Route::category('your-url');
Route::queries('your-url');
```

This is the contents of the published config file:

```php
return [
    'question_prefix' => 'Q',
    'answer_prefix' => 'A',
    'category_title_show' => true
];
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [christy](https://github.com/christyjoshy)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
