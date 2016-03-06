# Laravel Rancher

Rancher API wrapper for Laravel

## Installation
Install via composer
``` bash
$ composer require benmag/laravel-rancher
```

Register the Rancher service provider in `config/app.php` by adding `Benmag\Rancher\RancherServiceProvider::class` to the providers key

Then add the `Rancher` facade to your `aliases` key: `'Rancher' => Benmag\Rancher\Facades\Rancher::class`


## Configuration
Configuration can be done via your `.env` file.
```
RANCHER_BASE_URL=http://localhost:8080/v1
RANCHER_ACCESS_KEY=xxxxxxx
RANCHER_SECRET_KEY=xxxxxxx
```

Note: You could also run `php artisan config:publish` which will publish the config file into `config/rancher.php` for you to edit.


## Usage
``` php
use Rancher;
Rancher::container();
```


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

