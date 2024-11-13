# Hipcall PHP SDK

```php
require 'vendor/autoload.php';

use Hipcall\HipcallClient;

$token = 'g2gDbQAAACRmZjM3ZDYyZi00N';
$client = new HipcallClient($token);

$response = $client->getEndpoint('calls?limit=5&offset=0');
print_r($response);
```

```php
$data = [
    'callee_number' => '+905326202911',
    'number_id' => 1,
];

$response = $client->postEndpoint('extensions/1234/call', $data);
print_r($response);
```
