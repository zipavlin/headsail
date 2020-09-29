# Headsail

[![Latest Version on Packagist](https://img.shields.io/packagist/v/zipavlin/headsail.svg?style=flat-square)](https://packagist.org/packages/zipavlin/headsail)
[![Build Status](https://img.shields.io/travis/zipavlin/headsail/master.svg?style=flat-square)](https://travis-ci.org/zipavlin/headsail)
[![Quality Score](https://img.shields.io/scrutinizer/g/zipavlin/headsail.svg?style=flat-square)](https://scrutinizer-ci.com/g/zipavlin/headsail)
[![Total Downloads](https://img.shields.io/packagist/dt/zipavlin/headsail.svg?style=flat-square)](https://packagist.org/packages/zipavlin/headsail)

Headsail is [Tailwindcss](https://tailwindcss.com/) parser and composer. It's main purpose is to split join class variants to singular one and selectively replace utilities.

## Installation

You can install the package via composer:

```bash
composer require zipavlin/headsail
```

## Usage

``` php
(string) new Headsail('m-3 mx-4 mr-12'); // mt-3 mr-12 mb-3 ml-4
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
