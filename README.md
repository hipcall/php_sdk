# Hipcall PHP SDK

Official Hipcall API Wrapper written in PHP.

## Installation

```bash
composer require hipcall/hipcall_sdk
```

## Use

```php
<?php

require 'vendor/autoload.php';

use Hipcall\HipcallClient;

$token = 'API_TOKEN';
$client = new HipcallClient($token);

// Get calls
$response = $client->calls->list('limit=5&offset=0');
print_r($response);

// Get a call
$response = $client->calls->get('6c64f58d-65fc-4415-8a3e-958f0cd05504', '2024-01-01');
print_r($response);
```

If you use the different node, for example turkey, you should change the baseUri.
For global node, you don't need to change it.

```php
<?php

require 'vendor/autoload.php';

use Hipcall\HipcallClient;

$token = 'API_TOKEN';
$customBaseUri = 'https://use.hipcall.com.tr/api/v3/';
$client = new HipcallClient($token, $customBaseUri);
```

### Calls

```php
// Call list
$response = $client->calls->list('limit=5&offset=0');
print_r($response);

// Call detail
$response = $client->calls->get('6c64f58d-65fc-4415-8a3e-958f0cd05504', '2024-01-01');
print_r($response);

// Create a call card
$id = '6c64f58d-65fc-4415-8a3e-958f0cd05504';
$cardParams = [
    [
        'link' => 'https://my-crm.com',
        'text' => 'My CRM',
        'type' => 'title'
    ],
    [
        'label' => 'Account ID',
        'link' => 'https://my-crm.com/1234',
        'text' => '1234',
        'type' => 'shortText'
    ],
    [
        'label' => 'Company name',
        'text' => 'Acme Inc.',
        'type' => 'shortText'
    ],
    [
        'label' => 'Account Owner',
        'type' => 'user',
        'user_id' => 1234
    ]
];

$response = $client->calls->createCard($id, $cardParams);
print_r($response);

// Call's comment list
$response = $client->calls->listComments('1bb91cdc-6649-456c-a46b-97c302010667');
print_r($response);

// Create a call comment
$commentParams = [
  'content' => 'New comment'
];

$response = $client->calls->createComment($id, $commentParams);
print_r($response);
```

### Extensions

```php
// Extensions list
$response = $client->extensions->list('limit=5&offset=0');
print_r($response);

// Extension detail
$response = $client->extensions->get('1');
print_r($response);

// Start a call and bridge to extension
$callParams = [
  "callee_number" => "+905325320000",
  "number_id" => 327
];

$response = $client->extensions->createCall(1000, $callParams);
print_r($response);
```

### Users

```php
// Users list
$response = $client->users->list('limit=5&offset=0');
print_r($response);

// User detail
$response = $client->users->get('1');
print_r($response);

// Start a call and bridge to user
$callParams = [
  "callee_number" => "+4440333",
  "ring_user_first" => true
];

$response = $client->users->createCall(1000, $callParams);
print_r($response);
```

### Tasks

## Roadmap

- [x] Phone system - call
- [x] Phone system - extensions
- [ ] Task
- [ ] Phone system - greetings
- [ ] Phone system - numbers
- [ ] Phone system - teams
- [ ] Phone system - users
- [ ] Phone system - voicemails
- [ ] Contact centre
- [ ] Sales 
- [ ] Account

## Hipcall's Open Source Libraries

All [Hipcall](https://www.hipcall.com/en-gb/) libraries:

- [HipcallDisposableEmail](https://github.com/hipcall/hipcall_disposable_email) - Simple library checking the email's domain is disposable or not.
- [HipcallDeepgram](https://github.com/hipcall/hipcall_deepgram) - Unofficial Deepgram API Wrapper written in Elixir.
- [HipcallOpenai](https://github.com/hipcall/hipcall_openai) - Unofficial OpenAI API Wrapper written in Elixir.
- [HipcallWhichtech](https://github.com/hipcall/hipcall_whichtech) - Find out what the website is built with.

Hipcall's SDKs

- [Hipcall Elixir SDK](https://github.com/hipcall/elixir_sdk) - Official Hipcall API Wrapper written in Elixir.
- [Hipcall Python SDK](https://github.com/hipcall/python_sdk) - Official Hipcall API Wrapper written in Python.
- [Hipcall PHP SDK](https://github.com/hipcall/php_sdk) - Official Hipcall API Wrapper written in PHP.
- [Hipcall Ruby SDK](https://github.com/hipcall/ruby-sdk/) - Official Hipcall API Wrapper written in Ruby.


