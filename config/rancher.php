<?php
/*
| -----------------------------------------------------------------------------
| Rancher API Config Settings
| -----------------------------------------------------------------------------
|
*/
return [
    'baseUrl'	=> env('RANCHER_BASE_URL') ? env('RANCHER_BASE_URL') : 'https://localhost:8080/v1/',
    'apiKey'	=> env('RANCHER_API_KEY')
];