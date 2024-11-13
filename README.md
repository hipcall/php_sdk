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

## Roadmap

- [ ] Task
- [x] Phone system - call
- [ ] Phone system - extensions
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


