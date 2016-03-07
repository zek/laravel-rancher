# Laravel Rancher

Rancher API wrapper for Laravel. This package provides a simple interface to Rancher's (awesome) API. Orchestrate your private container service with expressive, clean PHP.


## Installation
Laravel Rancher uses compose to make installation a breeze.


**Install via composer** 
``` bash
composer require benmag/laravel-rancher
```


**Register service provider**
Add the Laravel Rancher service provider to your `config/app.php` file in the providers key
```php
'providers' => [
    // ... other providers
    Benmag\Rancher\RancherServiceProvider::class,
]
```


**Rancher facade alias**
Then add the `Rancher` facade to your `aliases` key: `'Rancher' => Benmag\Rancher\Facades\Rancher::class`.  



## Configuration
Configuration can be done via your `.env` file.
```
RANCHER_BASE_URL=http://localhost:8080/v1
RANCHER_ACCESS_KEY=xxxxxxx
RANCHER_SECRET_KEY=xxxxxxx
```

>You may also publish the config file to `config/rancher.php` for editing:
`php artisan vendor:publish --provider="Benmag\Rancher\RancherServiceProvider"`
 


## Usage
Laravel Rancher is incredibly intuitive to use. 

### Introduction
Already configured everything and just want to see it in action? Take a look at the example code below.
```php
<?php

namespace App\Http\Controllers;

use Rancher;
use App\Http\Controllers\Controller;

class HostController extends Controller
{
    public function index()
    {
        dd(Rancher::host()->all());
    }
}
```

### Host
#### Retrieving all Hosts
``` php
Rancher::host()->all();
```

#### Retrieve Host by ID
```php
Rancher::host()->get("1h1");
```


### Container
#### Retrieving all Containers 
```php 
Rancher::container()->all();
```


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

