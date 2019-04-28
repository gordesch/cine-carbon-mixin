[![Build Status](https://travis-ci.com/gordesch/cine-carbon-mixin.svg?branch=master)](https://travis-ci.com/gordesch/cine-carbon-mixin)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
[![Packagist](https://img.shields.io/packagist/v/gordesch/cine-carbon-mixin.svg)](https://packagist.org/packages/gordesch/cine-carbon-mixin)

# Cine-Carbon-Mixin

A mixin for [Carbon](https://github.com/briannesbitt/carbon) to provide a french movie week locale (it starts on wednesdays).

## Installation

```bash
$ composer require gordesch/cine-carbon-mixin
```

## Usage

```php
Carbon::mixin(new Gordesch\CineCarbonMixin());
Carbon::now()->cine()->startOfWeek()->dayOfWeek;     // 3 (Wednesday)
```

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.