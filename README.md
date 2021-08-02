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

publish the essential files of livewire version

```bash
php artisan vendor:publish --provider="Christyjoshy\FaqManager\LivewireFaqManagerServiceProvider"
```

publish the essential files

```bash
php artisan vendor:publish --provider="Christyjoshy\FaqManager\FaqManagerServiceProvider"
```

Frontend Routing :
```bash
Route::faq('faq');
```
Backend Routing :
```bash
Route::category('category');
Route::queries('query');
```
Api Routes

Frontend Routing :
```bash
Route::faqApi('faq');
```
Backend Routing :
```bash
Route::categoryApi('category');
Route::queriesApi('query');
```
Livewire Routes

```bash
Route::faqlivewire('livewire');
```



This is the contents of the published config file:

```php
return [
    /*
    |--------------------------------------------------------------------------
    | Question Perfix Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default prefix string for question in frontend faq page. You may change these defaults
    | as required
    |
    */

    'question_prefix' => 'Q',

    /*
    |--------------------------------------------------------------------------
    | Answer Perfix Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default prefix string for answer in frontend faq page. You may change these defaults
    | as required
    |
    */

    'answer_prefix' => 'A',

    /*
    |--------------------------------------------------------------------------
    | Category Name Display Setting
    |--------------------------------------------------------------------------
    |
    | This option controls the settings for display category title in frontend faq page. Default set to true for displaying.
    | You can change these default to false for hiding as per your needs.
    |
    */
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
