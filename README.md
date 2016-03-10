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

#### Activate a Host by ID
```php
Rancher::host()->activate("1h1");
```

#### Deactivate a Host by ID
```php
Rancher::host()->deactivate("1h1");
```

#### Restore a Host by ID
```php
Rancher::host()->restore("1h1");
```

#### Remove a Host by ID
```php
Rancher::host()->remove("1h1");
```

### Container
#### Retrieving all Containers 
```php 
Rancher::container()->all();
```

#### Retrieve Container by ID
```php 
Rancher::container()->get("1i140");
```

#### Create a Container 
```php
use Benmag\Rancher\Factories\Entity\Container;

$newContainer = new Container([
    'name' => 'Hello World',
    'description' => 'New container created via Laravel Rancher',
    'imageUuid' => "docker:ubuntu:14.04.3",
]);

Rancher::container()->create($newContainer);
```

### Environment

#### Create an Environment 
```php
use Benmag\Rancher\Factories\Entity\Environment;

$newEnvironment = new Environment([
    'name' => "yseees",
    'description' => 'An example stack',
    'dockerCompose' => "odoo:\n  image: odoo\n  ports:\n    - \"8069:8069\"\n  links:\n    - db\ndb:\n  image: postgres\n  environment:\n    - POSTGRES_USER=odoo\n    - POSTGRES_PASSWORD=odoo\n",
    'rancherCompose' => ".catalog:\n  name: \"Odoo\"\n  version: \"0.1-educaas\"\n  description: \"ERP management powered by Odoo\"\n  uuid: odoo-0\n  questions:\n\nodoo:\n",
    'externalId' => "catalog://community:odoo:0",
    'startOnCreate' => true
]);

Rancher::environment()->create($newEnvironment);
```

#### Update an Environment
```php
use Benmag\Rancher\Factories\Entity\Environment;

$updatedEnvironment = new Environment([
    'name' => "stack",
    'description' => 'An updated stack/environment',
]);

Rancher::environment()->update("1e17", $updatedEnvironment);
```

#### Activate Services in an Environment
```php
Rancher::environment()->activateServices("1e17");
```

#### Deactivate Services in an Environment
```php
Rancher::environment()->deactivateServices("1e17");
```



### Project

### Service


### Handling Exceptions
The Rancher API will return errors as required. I am still looking for a nicer way to handle these exceptions... For the time being, simply wrap your call in a try/catch block.

```php
try {
    
    Rancher::host()->deactivate("1h1");
    
} catch(ClientException $e) {
    $response = $e->getResponse();
    $responseBodyAsString = $response->getBody()->getContents();
    echo $responseBodyAsString;
}
```


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

