<?php
/*
| -----------------------------------------------------------------------------
| Rancher API Config Settings
| -----------------------------------------------------------------------------
|
*/
return [
    'baseUrl'	=> env('RANCHER_BASE_URL') ? env('RANCHER_BASE_URL') : 'https://localhost:8080/v1/',
    'accessKey'	=> env('RANCHER_ACCESS_KEY'),
    'secretKey' => env('RANCHER_SECRET_KEY'),
];